```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    }
    // ... some processing ...
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result); // Expected output: [1, 2, [3, 4, [5, 6]]] (or processed data)
```