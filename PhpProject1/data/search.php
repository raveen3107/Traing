<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */
$get = $_POST['key'];
//echo $temp;
//$input = preg_quote($temp, '~'); // don't forget to quote input string!
$data = array('orange', 'blue', 'green', 'red', 'pink', 'brown', 'black');

$result = preg_grep('~' . $get. '~', $data);
print_r($result);
?>
