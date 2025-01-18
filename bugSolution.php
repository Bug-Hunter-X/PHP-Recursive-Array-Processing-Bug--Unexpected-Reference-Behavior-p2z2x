```php
function processData(array $data): array {
  $newData = []; // Create a new array to store results
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call on a copy
    } else {
      // ... process individual values ...
      $newData[$key] = $value; // add values to the new array
    }
  }
  return $newData; // Return the new processed array
}

$data = [1, 2, [3, 4, [5, 6]]];
$result = processData($data);
print_r($result); // Correct output, now avoids infinite recursion
```