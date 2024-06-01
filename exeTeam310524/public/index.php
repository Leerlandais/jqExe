<?php
session_start();    
if(!isset($_SESSION["jq_user_lang"])) $_SESSION["jq_user_lang"] = "en";
if(!isset($_SESSION["headerAnimate"])) $_SESSION["headerAnimate"] = "true"; 

require_once("../config.php");
require_once("../controller/dbConnectController.php");
require_once("../model/laundryModel.php");
require_once("../model/textModel.php");
require_once("../model/settingsModel.php");
require_once("../controller/jsonController.php");
require_once("../controller/publicController.php");
require_once("../controller/routeController.php");

$db = null;