<?php
$my_name = htmlspecialchars($_POST['my_name'],ENT_QUOTES);
$item = htmlspecialchars($_POST['item'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);
print "お名前は、" . $my_name . "<br>";
print "ご希望商品は、" . $item . "<br>";
print "ご注文数は、" . $number;
