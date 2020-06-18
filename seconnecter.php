<?php
include_once '_config.inc.php';
require_once('connexion.inc.php');
session_start();
$tpl->display('seconnecter.html');