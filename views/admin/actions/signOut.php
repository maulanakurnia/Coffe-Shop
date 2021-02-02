<?php
session_start();
session_destroy();
header("location:../../client/Homepage.php?msg=SUCCESS");