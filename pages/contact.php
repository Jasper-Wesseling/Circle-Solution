<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle-Solution</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/contact.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link rel="stylesheet" href="../css/headContact.css" type="text/css">
</head>

<?php include('../header.php'); ?>  

<body>
    <section class="contact">
        <div class="contactLeft">
            <h2 class="contactLeftTitle">Laten we samen de punten verbinden</h2>
                <lu class="info">
                    <li class="infoListItem">
                        <img src="../svg/EnvelopeFill.svg" alt="emailSVG"/>
                        <a href="mailto:Voorbeeld@voorbeeld.nl">Voorbeeld@voorbeeld.nl</a>
                    </li>
                    <li class="infoListItem">
                        <img src="../svg/telephone.svg" alt="telephoneSVG"/>
                        <a href="tel:123456789">+123456789</a>
                    </li>
                    <li class="infoListItem">
                        <img src="../svg/pin.svg" alt="pinSVG"/>
                        <a href="https://maps.app.goo.gl/iSLbz94wwd9JqAM37" target="_blank">Van Schaikweg 94, 7811 KL Emmen</a>
                    </li>
                </lu>
            <div class="socials">
                <div class="imgContainer">
                    <img src="../svg/facebookLogoWithOutBorder.svg" alt="facebook"/>
                </div>
                <div class="imgContainer">
                    <img src="../svg/Instagram.svg" alt="instagram"/>
                </div>
                <div class="imgContainer">
                    <img src="../svg/xLogo.svg" alt="x"/>
                </div>
            </div>
        </div>
        <div class="contactRight">
            <p class="contactRightText">Ik ben geïnteresseerd in...</p>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="FormIntrestContainer">
                    <input class="checkboxIntrest" type="radio" id="app-management" name="interest" value="App management">
                    <label for="app-management" class="checkboxIntrestLable">App management</label>

                    <input class="checkboxIntrest" type="radio" id="communication" name="interest" value="Communication">
                    <label for="communication" class="checkboxIntrestLable">Communication</label>

                    <input class="checkboxIntrest" type="radio" id="information" name="interest" value="Information">
                    <label for="information" class="checkboxIntrestLable">Information</label>

                    <input class="checkboxIntrest" type="radio" id="document-management" name="interest" value="Document management">
                    <label for="document-management" class="checkboxIntrestLable">Document management</label>
                </div> 
                <input class="contactInputField" type="text" required placeholder="Voornaam" name="voornaam" id="vnaam">
                <input class="contactInputField" type="text" required placeholder="Achternaam" name="achternaam" id="anaam">
                <input class="contactInputField" type="text" required placeholder="Email" name="email" id="email">
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $intrest = filter_input(INPUT_POST, "interest");
                        if ($intrest  === null) {
                            $intrest = "algemeen";
                        }
                        $firstName = filter_input(INPUT_POST, "voornaam");
                        $lastName = filter_input(INPUT_POST, "achternaam");
                        $email = filter_input(INPUT_POST, "email");
                        echo("<p class='contactFieldResponse'>Bedankt voor u bericht ".$firstName." ".$lastName."! Wij sturen u een email over de geselecteerde interesse: ".$intrest." naar dit email adres: ".$email."</p>");
                    }
                ?>
                <button class="submit" id="submit" type="submit">
                    <img class="submitIcon" src="../svg/verstuur.svg" alt="emailSVG"/>
                    Verstuur bericht
                </button>
            </form>
        </div>
    </section>

    <div class="gridContainer">
        <div class="footerTop">
            <ul class="footerMenu">
                <li class="footerMenuItem">
                    <a href="../index.php">Home</a>    
                <li class="footerMenuItem">
                    <a href="../pages/aboutUs.php">Over ons</a>
                <li class="footerMenuItem">
                    <a href="../index.php">Tarieven</a>
                <li class="footerMenuItem">
                    <a href="../pages/faq.php">FAQ</a>    
                <li class="footerMenuItem">
                    <a href="../pages/contact.php">Contacten</a>
                </li>
            </ul>    
            <div class="FooterKfoto">
                <div class="kleineFoto"><img class="Image" src="../svg/facebookLogoWithOutBorderBlack.svg" alt=""></div>
                <div  class="kleineFoto"><img class="Image" src="../svg/InstagramBlack.svg" alt=""></div>
                <div  class="kleineFoto"><img class="Image" src="../svg/X_logo_2023_original.svg" alt=""></div>
            </div>
        </div>
        <div><hr></div>

        <div class="footerBottom">
            <div class="tekstC"><p> &#9426 2024. All rights reserved</p></div>
            <div class="bigBoy"><img class="Image" src="../svg/CS-logo-dark (1).svg" alt=""></div>
            <div class="tekstD">
                <p>Terms of service</p>
            <div class="tekstD">
                <p>Privacy Policy</p>
            </div>  
        </div> 
    </div>
</body>
</html>