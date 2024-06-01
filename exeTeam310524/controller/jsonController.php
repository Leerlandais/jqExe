<?php


if (isset($_GET['json'])) {
    $datas = getTextByUserLang($db, $_SESSION["jq_user_lang"]);
    if (!is_string($datas)) {
        echo json_encode($datas);
    }
    exit();
}



