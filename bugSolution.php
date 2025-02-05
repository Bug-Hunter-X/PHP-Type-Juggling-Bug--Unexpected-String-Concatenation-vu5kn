```php
<?php
function doubleIt($num) {
  if (is_numeric($num)) {
    return $num * 2;
  } else {
    return "Error: Input must be a number";
  }
}

$result = doubleIt('5');
var_dump($result);
$result2 = doubleIt(5);
var_dump($result2);
?>
```