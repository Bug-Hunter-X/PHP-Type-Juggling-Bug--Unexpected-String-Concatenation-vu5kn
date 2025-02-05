# PHP Type Juggling Bug

This example demonstrates a common issue in PHP: type juggling.  The `doubleIt` function intends to double a numeric input, but when a string is provided, PHP's loose typing leads to string concatenation rather than numerical multiplication.

The `bug.php` file contains the buggy code, while `bugSolution.php` offers a corrected version that explicitly handles type checking and prevents this unexpected behavior.

This issue highlights the importance of strict type handling in PHP to avoid subtle errors and maintain code predictability.