<?php
require_once 'contact.php';


$res = Contact::delete("5");
echo $res;
?>