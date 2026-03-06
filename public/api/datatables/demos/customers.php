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

for ($i = 1; $i <= 120; $i++) {
    $rows[] = [
        'RecordID' => $i,
        'FirstName' => 'Customer' . $i,
        'LastName' => 'Demo',
        'Company' => 'Company ' . $i,
        'Email' => 'customer' . $i . '@example.com',
        'Phone' => '+1-303-555-' . str_pad((string) (1000 + $i), 4, '0', STR_PAD_LEFT),
        'Status' => $statuses[$i % count($statuses)],
        'Type' => $types[$i % count($types)],
    ];
}

$query = $_GET['query'] ?? [];
$search = strtolower(trim((string) ($query['generalSearch'] ?? '')));
$statusFilter = (string) ($query['Status'] ?? '');
$typeFilter = (string) ($query['Type'] ?? '');

$filtered = array_values(array_filter($rows, static function (array $row) use ($search, $statusFilter, $typeFilter): bool {
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
