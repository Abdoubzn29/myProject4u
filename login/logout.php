<?php

session_start();

session_destroy();

header("Location: SL.php");
exit;