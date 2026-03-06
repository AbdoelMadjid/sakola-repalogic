<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoDataController extends Controller
{
    public function datatableDefault(Request $request): JsonResponse
    {
        $rows = $this->baseRows();
        $query = $request->input('query', []);

        if (!empty($query['generalSearch'])) {
            $keyword = mb_strtolower((string) $query['generalSearch']);
            $rows = array_values(array_filter($rows, function (array $row) use ($keyword): bool {
                $haystacks = [
                    $row['OrderID'],
                    $row['CompanyName'],
                    $row['CompanyAgent'],
                    $row['Country'],
                    $row['ShipCountry'],
                    $row['CompanyEmail'],
                ];

                foreach ($haystacks as $value) {
                    if (str_contains(mb_strtolower((string) $value), $keyword)) {
                        return true;
                    }
                }

                return false;
            }));
        }

        if (!empty($query['Status'])) {
            $status = (int) $query['Status'];
            $rows = array_values(array_filter($rows, static fn(array $row): bool => (int) $row['Status'] === $status));
        }

        if (!empty($query['Type'])) {
            $type = (int) $query['Type'];
            $rows = array_values(array_filter($rows, static fn(array $row): bool => (int) $row['Type'] === $type));
        }

        $field = (string) $request->input('sort.field', 'RecordID');
        $dir = strtolower((string) $request->input('sort.sort', 'asc')) === 'desc' ? 'desc' : 'asc';

        usort($rows, function (array $a, array $b) use ($field, $dir): int {
            $left = $a[$field] ?? null;
            $right = $b[$field] ?? null;
            $cmp = $left <=> $right;

            return $dir === 'desc' ? -$cmp : $cmp;
        });

        $page = max(1, (int) $request->input('pagination.page', 1));
        $perPage = max(1, (int) $request->input('pagination.perpage', 10));
        $total = count($rows);
        $pages = max(1, (int) ceil($total / $perPage));
        $offset = ($page - 1) * $perPage;
        $data = array_slice($rows, $offset, $perPage);

        return response()->json([
            'meta' => [
                'page' => $page,
                'pages' => $pages,
                'perpage' => $perPage,
                'total' => $total,
                'sort' => $dir,
                'field' => $field,
            ],
            'data' => $data,
        ]);
    }

    public function jsonFile(Request $request): JsonResponse
    {
        $file = (string) $request->query('file', '');

        if ($file !== 'datatables/datasource/default.json') {
            abort(404);
        }

        return response()->json($this->baseRows());
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function baseRows(): array
    {
        $countries = [
            ['United States', 'US'],
            ['Indonesia', 'ID'],
            ['Japan', 'JP'],
            ['Germany', 'DE'],
            ['Australia', 'AU'],
            ['Canada', 'CA'],
            ['Brazil', 'BR'],
            ['Singapore', 'SG'],
        ];
        $departments = ['Books', 'Education', 'Science', 'History', 'Literature', 'Technology'];

        $rows = [];
        for ($i = 1; $i <= 120; $i++) {
            $country = $countries[$i % count($countries)];
            $month = (($i % 12) + 1);
            $day = (($i % 28) + 1);
            $shipDate = sprintf('%02d/%02d/2025', $month, $day);

            $rows[] = [
                'RecordID' => $i,
                'OrderID' => sprintf('ORD-%04d', $i),
                'Country' => $country[0],
                'ShipCountry' => $country[1],
                'ShipCity' => 'City ' . (($i % 20) + 1),
                'ShipName' => 'Shipment ' . $i,
                'ShipAddress' => 'Address ' . $i,
                'CompanyEmail' => 'user' . $i . '@example.com',
                'CompanyAgent' => 'Agent ' . $i,
                'CompanyName' => 'Book Company ' . $i,
                'Currency' => 'USD',
                'Notes' => 'Sample notes ' . $i,
                'Department' => $departments[$i % count($departments)],
                'Website' => 'example.com',
                'Latitude' => 0,
                'Longitude' => 0,
                'ShipDate' => $shipDate,
                'IssueDate' => $shipDate,
                'PaymentDate' => '2025-01-01 00:00:00',
                'TimeZone' => 'UTC',
                'TotalPayment' => '$' . number_format(1000 + ($i * 37), 2),
                'Status' => (($i % 6) + 1),
                'Type' => (($i % 3) + 1),
                'Actions' => null,
            ];
        }

        return $rows;
    }
}

