<?php 
$string = "<aaa";
// $pattern = "</?[a-zA-Z][a-zA-Z0-9]*[^>]*(>|$)/";
$pattern = "/<[a-zA-Z0-9]+>/";
if (preg_match( $pattern, $string )) {
    print('Это HTML тэг');
} else {
    print('Это не HTML тэг');
}
