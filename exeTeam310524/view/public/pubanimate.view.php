
<!DOCTYPE html>

<html lang="<?=$_SESSION["jq_user_lang"]?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include ("../view/cdn/cssBS.php"); ?>
        <link rel="stylesheet" href="css/colours.css">
        <link rel="stylesheet" href="css/style.css">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="text-center text-danger fs-4 mt-5">
            <?php // ceci affiche au cas d'erreur dans le BackEnd
                if (isset($errorMessage)) echo $errorMessage,"<br>";
            ?>
        </div>

            <div class="container d-flex justify-content-end">
                <form method="POST" class="d-flex flex-row">
                    <button class="btn langButton langEN" value="en" type="submit" name="user_lang"></button>
                    <button class="btn langButton langFR" value="fr" type="submit" name="user_lang"></button>
                </form>
            </div>
            <div class="container d-flex justify-content-end">
            <?php // par defaut les animations sont activer
                if ($_SESSION["headerAnimate"] === "true")  { ?>
                <form method="POST">
                        <button class="btn text-secondary" type="submit" name="headerSetting" value="false" id="stopHeaderAnimation"></button>
                    </form>                    
                    <?php
                }else { ?>
                    <form method="POST">
                        <button class="btn text-secondary" type="submit" name="headerSetting" value="true" id="startHeaderAnimation"></button>
                    </form>
                    <?php } ?>
            </div>
                <?php // par defaut les animations sont activer
                if ($_SESSION["headerAnimate"] === "true")  {
                    include ("inc/header.public.php"); 
                    ?>
                    <?php // si l'utilisateur ne veut plus voir l'animation
                }else {
                    include ("inc/header.public-static.php");
                    ?>
                    <?php
                }     
                ?>             
        <?php include("inc/navbar.public.php"); ?>


<?php include ("inc/footer.public.php"); ?>
</div>        
<?php include ("../view/cdn/jsBS.php") ?>
<script src="js/script.js"></script>
<script src="js/funstuff.js"></script>
</body>

</html>