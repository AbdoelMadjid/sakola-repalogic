<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

function normalize_int($value, int $fallback): int
{
    return is_numeric($value) ? max(1, (int) $value) : $fallback;
}

function build_meta(int $page, int $perPage, int $total, string $sortDir, string $field): array
{
    return [
        'page' => $page,
        'pages' => (int) max(1, ceil($total / $perPage)),
        'perpage' => $perPage,
        'total' => $total,
        'sort' => $sortDir,
        'field' => $field,
    ];
}

$rows = [];
$statuses = [1, 2, 3, 4, 5, 6, 7];
$types = [1, 2, 3];
$countries = ['US', 'DE', 'FR', 'JP', 'CN', 'BR', 'IN', 'ID', 'AU', 'GB'];

for ($i = 1; $i <= 240; $i++) {
    $rows[] = [
        'RecordID' => $i,
        'CustomerID' => (($i - 1) % 120) + 1,
        'OrderID' => 'ORD-' . (20000 + $i),
        'ShipCountry' => $countries[$i % count($countries)],
        'ShipAddress' => (500 + $i) . ' Broad Street',
        'ShipName' => 'Order Shipment ' . $i,
        'TotalPayment' => number_format(75 + ($i * 5.25), 2, '.', ''),
        'Status' => $statuses[$i % count($statuses)],
        'Type' => $types[$i % count($types)],
    ];
}

$query = $_GET['query'] ?? [];
$search = strtolower(trim((string) ($query['generalSearch'] ?? '')));
$customerId = (int) ($query['CustomerID'] ?? 0);
$statusFilter = (string) ($query['Status'] ?? '');
$typeFilter = (string) ($query['Type'] ?? '');

$filtered = array_values(array_filter($rows, static function (array $row) use ($search, $customerId, $statusFilter, $typeFilter): bool {
    if ($customerId > 0 && $row['CustomerID'] !== $customerId) {
        return false;
    }
    if ($statusFilter !== '' && (string) $row['Status'] !== $statusFilter) {
        return false;
    }
    if ($typeFilter !== '' && (string) $row['Type'] !== $typeFilter) {
        return false;
    }
    if ($search === '') {
        return true;
    }

    foreach ($row as $value) {
        if (stripos((string) $value, $search) !== false) {
            return true;
        }
    }

    return false;
}));

$sort = $_GET['sort'] ?? [];
$sortField = (string) ($sort['field'] ?? 'RecordID');
$sortDir = strtolower((string) ($sort['sort'] ?? 'asc')) === 'desc' ? 'desc' : 'asc';

usort($filtered, static function (array $a, array $b) use ($sortField, $sortDir): int {
    $aVal = $a[$sortField] ?? '';
    $bVal = $b[$sortField] ?? '';
    $cmp = $aVal <=> $bVal;
    return $sortDir === 'desc' ? -$cmp : $cmp;
});

$pagination = $_GET['pagination'] ?? [];
$page = normalize_int($pagination['page'] ?? 1, 1);
$perPage = normalize_int($pagination['perpage'] ?? 10, 10);
$total = count($filtered);
$offset = ($page - 1) * $perPage;
$data = array_slice($filtered, $offset, $perPage);

echo json_encode([
    'meta' => build_meta($page, $perPage, $total, $sortDir, $sortField),
    'data' => $data,
], JSON_UNESCAPED_SLASHES);
