<?php

require('_skrainn_notendur.php');

setcookie($domain_code.'_uid', '');
setcookie($domain_code.'_cid', '');

header("LOCATION: index.php");

?>