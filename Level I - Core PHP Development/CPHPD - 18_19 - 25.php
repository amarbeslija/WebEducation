<?php

#UserStatus

$userStatus = 6;

$status = ($userStatus === 1 || $userStatus === 2 || $userStatus === 3) ? "Welcome User!" : "Unkown User!";
echo $status;
?>