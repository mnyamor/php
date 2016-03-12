<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mary Nyamor
 * Date: 3/13/16
 * Time: 1:13 AM
 */

/**
 *  --- VARIABLES ---
 * We have: Strings, Boolean, Floating points, integers ..
 */

$my_favcolor = 'red';
$my_name = 'Mary';
$my_birthyear = 1990;

/**
 *  When using the date method, PHP has to know the timezone where the server resides
 * in order to ouput the correct hour and date for the geo location
 * The date_default_timezone_set takes a string that locates the server
 * List of supported timezones can be found at php.net manual / timezones.php
 */

date_default_timezone_set('Finland/Helsinki');

$date_today = date('F ,j,Y');
$this_year = date('Y');

//calculate current age
$my_age = ($this_year -  $my_birthyear);

print("My name is $my_name! <br/> 1'm $my_age years old and like the color $my_favcolor");

/**
 * Example of Booleans
 */
$logged_in = true;

/**
 * Example of floating points -fractional number with a decimal point
 */

$car_speed = 100.34;
