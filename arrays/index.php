<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mary Nyamor
 * Date: 3/13/16
 * Time: 1:54 AM
 */

/**
 * Arrays - allow you to store multiple values within a variable
 * Each value is automatically assigned a key. But by default, each value has a numeric key.
 */
define("TITLE", "Arrays");
$groceries = array("eggs", "milk", "grapes", "bananas");

echo("<h3> ARRAYS </h3>");
echo($groceries[0]);  //will display eggs
echo('<br/>');
echo($groceries[1]);  //will display milk
echo('<br/>');
echo($groceries[2]);  //will display grapes
echo('<br/>');
echo($groceries[3]);  //will display banana
echo('<br/>');