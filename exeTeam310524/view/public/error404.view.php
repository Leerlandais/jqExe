<?php
if(isset($_SESSION['log'])) $_SESSION['log'][] = $_SERVER['REMOTE_ADDR']. " | ". date("Y-m-d H:i:s") . " | ". __FILE__."\n";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?=$title?></title>
    </head>
    <body>
        <div class="container mt-2 h-50">
        <?php
            include("inc/header.public-static.php")
        ?>
            <div class="row">
                <div class="col text-center">
                    <p class="h1 mt-5">Page Introuvable</p>
                    <p class="h3">Soit vous avez modifié l'URL, soit je n'ai tout simplement pas encore terminé cette page. &lpar;Ce dont je doute fortement&rpar;</p>
                </div>
            </div>
        </div>
        <?php
            include("inc/footer.public.php");
        ?>
</body>
</html>