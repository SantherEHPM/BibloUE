<?php
require_once('../../../back/classes/user.php');

$juan = new User(array('first_name','carnet'),'GET');

echo $juan->getFirstName();
?>