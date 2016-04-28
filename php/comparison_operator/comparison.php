<?php
/**
 * Purpose of this short tutorial is to show some interesting topics from PHP which we should take care of
 * Please refer to code comments because this way might be helpful for some people as they will be able to read
 * what they are following in the code.
 *
 * When I have written this quick tutorial I assumed that there is already a basic understanding of programming in
 * general and PHP programming.
 *
 * For every tutorial, to make the output work, we may use PHP CLI
 * Usage:
 *
 *   [shell]$> php php-good-to-know/comparison_operator/comparison.php
 * or
 *   [shell]$> cd php-good-to-know/comparison_operator
 *   [shell]$> php comparison.php
 *
 * If you wish to cd in the main directory.
 *
 * To run it, my recommendation is a Linux os or a Linux virtual machine, will also work on Windows but is better
 * to overcome any compatibility issue by using Linux from start to end.
 * In other sections, there will certainly be some tutorials where users will need to run Linux, Windows, Mac
 * but this one is compatible with every OS.
 *
 * Note that we use var_dump instead of print or echo just because this function will also show us the type of variable
 * that we output.
 *
 * @author Mihai Enescu <mihai.enescu@whocodeit.com>
 * @see https://whymihu.com/articles/
 * @uses PHP <= 5.6
 *
 */

/**
 * a is unquoted, so those means is an integer type.
 */
$a = 2;
/**
 * b is single quoted, which means is a string type.
 */
$b = '2';

echo "Print current variables as they are at the moment with type: \n";

var_dump($a);
var_dump($b);

/**
 * Now we define the variables.
 */
$result = ($a == $b);
$resultTwo = ($a === $b);

echo "Again, we will print the variables with their type: \n";

var_dump($result); // this will evaluate to TRUE, because both variables hold same value (meaningful)
var_dump($resultTwo); // this will evaluate to FALSE, holds same variable content but they are not same type

/**
 * In this example below the $resultTwo should hold the boolean result, and it will be false.
 * Because they are not the same type. The reason for this article is that the best practice is to stick and compare the variable by casting type and use the identity operator.
 * Imagine that if we have a variable named $a = 0, which is auto-evaluated to false only if is 0 but if it returns -1 then the value will be true.
 * So, instead of $a == 0, it's better to use the following way:
 */

$normalResult = ($a == $b); // will auto-cast the type
// OR
$manualCastResult = ($a === (int) $b); // obviously, this is more Java practice, and we should know the type of $b in many cases.

echo "Printing both variables to see what value/type they hold: \n";

var_dump($normalResult);
var_dump($manualCastResult);

