<?php
// GET THE TEXT
if (isset($_POST["user_lang"])) {
    $_SESSION["jq_user_lang"] = $_POST["user_lang"];
}

$allText = getTextByUserLang($db, $_SESSION["jq_user_lang"]);



if (isset($_POST["headerSetting"])){
    $setting = standardClean($_POST["headerSetting"]);
    $headerSetting = changeHeaderSetting($setting);
    $headerSetting === true ? null : $errorMessage = "Please reset that value";
}





    // Appel du page d'accueil public





    