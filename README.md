# PHP Recursive Array Processing Bug

This repository demonstrates a common error encountered when recursively processing arrays in PHP.  Improper handling of references within recursive functions can lead to infinite loops or unexpected data modifications.

The `bug.php` file contains the buggy code. The `bugSolution.php` demonstrates the corrected version.

## Issue

The original code incorrectly modifies the array in place, leading to the recursion running forever or unexpected behavior. 

## Solution

The solution uses value copying to ensure the recursive calls operate on independent data, preventing infinite recursion.