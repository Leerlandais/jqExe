
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
        <div class="container-fluid d-flex flex-column align-items-center">
        <div class="text-center text-danger fs-4 mt-5">
        <?php if (isset($errorMessage)) echo $errorMessage,"<br>";?>
        </div>
        <form method="POST" class="d-flex flex-row">
            <button class="btn langButton langEN" value="en" type="submit" name="user_lang"></button>
            <button class="btn langButton langFR" value="fr" type="submit" name="user_lang"></button>
        </form>
           
            <?php // par defaut les animations sont activer
                if ($_SESSION["headerAnimate"] === "true")  {
                    include ("inc/header.public.php"); 
                ?>
                    <form method="POST">
                        <button class="btn" type="submit" name="headerSetting" value="false" id="stopHeaderAnimation"></button>
                    </form>
            <?php // si l'utilisateur ne veut plus voir l'animation
                }else {
                    include ("inc/header.public-static.php");
                ?>
                    <form method="POST">
                        <button class="btn" type="submit" name="headerSetting" value="true" id="startHeaderAnimation"></button>
                    </form>
            <?php
                }
            ?>     

            
            <div class="container pt-5 codeWindowHolder d-flex flex-column justify-content-center align-items-center">
                <div class="row text-center">
                    <p class="h5" id="exe0heading"></p>
                    <p class="h6 fst-italic" id="exeCodeSnip0"></p>
            </div>
                    <div class="mt-1 mb-2 p-5 border rounded-3 w-50 text-center">
                        <span class="codeDescSpan" id="codeDescSpan0"></span>
                    </div>
                        <div class="mt-3">
                    <button class="btn btn-secondary text-white activateCodeButton" id="activateCodeButton0"></button>
                    <button class="btn btn-primary resetWindowButton" id="resetWindowButton0"></button>
                        </div>
                </div>
                    </div>
                </div>
            

        
        
        
        <?php include ("inc/footer.public.php"); ?>
        </div>        
    <?php include ("../view/cdn/jsBS.php") ?>
    <script src="js/script.js"></script>
    <script src="js/funstuff.js"></script>
</body>
</html>
