<?php


function getTextByUserLang(PDO $db, string $userLang) : array | string {

    $userLang === "en" ? 
        $lang = "jq_text_en" :
        $lang = "jq_text_fr";
    
        $sql = "SELECT `jq_text_element` AS `elem`, 
                $lang AS `theText`, 
                `jq_text_type` AS theType,
                `jq_text_lock` AS locked 
                FROM `jq_text`";
    
    try{
    $query = $db->query($sql);
    if ($query->rowCount() === 0) {
    $errorMessage = "Something went wrong getting site text";
    return $errorMessage; 
    }else {
    $result = $query->fetchAll();
    $query->closeCursor();
    return $result;
    } 
    
    }catch(Exception $e) {
    return $e->getMessage();
    }
    
    }

    function getAllTexts(PDO $db) : array | bool | string {
        $sql = "SELECT `jq_text_element` AS `elem`, 
                        `jq_text_en` AS `enText`, 
                        `jq_text_fr` AS `frText`,
                        `jq_text_type` AS theType,
                        `jq_text_id` AS `id`,
                        `jq_text_lock` AS locked   
                FROM `jq_text`";
        try {
            $query = $db->query($sql);
            if ($query->rowCount() === 0) {
                $errorMessage = "There is no text yet";
                return $errorMessage; 
            }else {
                $result = $query->fetchAll();
                $query->closeCursor();
                return $result;
            }
        }catch(Exception $e) {
            return $e->getMessage();
        }
        
    }
