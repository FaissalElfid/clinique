<?php
include_once '_config.inc.php';
session_start();
session_destroy();
header('Location: index.php');
