<?php
$pattern = "/^[0-9]{16}$/";
$card="jjj";
if (preg_match($pattern,$card)) {
    print('Это номер карты');
} else {
    print('Это не номер карты!!!');
}