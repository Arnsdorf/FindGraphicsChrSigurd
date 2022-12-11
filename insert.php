
<?php

require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["mmdKundeProfilPic"]["tmp_name"])){
        move_uploaded_file($file["mmdKundeProfilPic"]["tmp_name"], "uploads/" . basename($file["mmdKundeProfilPic"]["name"]));
    }

    if (!empty($file["mmdKundeBevis"]["tmp_name"])){
        move_uploaded_file($file["mmdKundeBevis"]["tmp_name"], "uploads/" . basename($file["mmdKundeBevis"]["name"]));
    }

    if (!empty($file["mmdKundeVideo"]["tmp_name"])){
        move_uploaded_file($file["mmdKundeVideo"]["tmp_name"], "uploads/" . basename($file["mmdKundeVideo"]["name"]));
    }



    $sql = "INSERT INTO mmdkunde (mmdKundeNavn, mmdKundeEfternavn, mmdKundeEmail, mmdKundePassword, mmdKundeCVR, mmdKundeTitel, mmdKundeTLF, mmdKundeBevis, mmdKundeProfilPic, mmdKundeVideo, mmdKundeTag1, mmdKundeTag2, mmdKundeTag3, mmdKundeBio) VALUES (:mmdKundeNavn, :mmdKundeEfternavn, :mmdKundeEmail, :mmdKundePassword, :mmdKundeCVR, :mmdKundeTitel, :mmdKundeTLF, :mmdKundeBevis, :mmdKundeProfilPic, :mmdKundeVideo, :mmdKundeTag1, :mmdKundeTag2, :mmdKundeTag3, :mmdKundeBio)";
    $bind = [
        ":mmdKundeNavn" => $data["mmdKundeNavn"],
        ":mmdKundeEfternavn" => $data["mmdKundeEfternavn"],
        ":mmdKundeEmail" => $data["mmdKundeEmail"],
        ":mmdKundePassword" => $data["mmdKundePassword"],
        ":mmdKundeCVR" => $data["mmdKundeCVR"],
        ":mmdKundeTitel" => $data["mmdKundeTitel"],
        ":mmdKundeTLF" => $data["mmdKundeTLF"],
        ":mmdKundeBevis" => (!empty($file["mmdKundeBevis"]["tmp_name"])) ? $file["mmdKundeBevis"]["name"] : NULL,
        ":mmdKundeProfilPic" => (!empty($file["mmdKundeProfilPic"]["tmp_name"])) ? $file["mmdKundeProfilPic"]["name"] : NULL,
        ":mmdKundeVideo" => (!empty($file["mmdKundeVideo"]["tmp_name"])) ? $file["mmdKundeVideo"]["name"] : NULL,
        ":mmdKundeTag1" => $data["mmdKundeTag1"],
        ":mmdKundeTag2" => $data["mmdKundeTag2"],
        ":mmdKundeTag3" => $data["mmdKundeTag3"],
        ":mmdKundeBio" => $data["mmdKundeBio"]];

    $db->sql($sql, $bind, false);


    echo "<body style='font-size: 2rem; background-color: #FBAB7E; background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);'></body> 
        <h1 style='color: white; font-family: Poppins; display: flex; justify-content: center; padding: 50px;' id='echo_besked'>Godt svaret, skipper.🚢</h1> 
        <a style='text-decoration: none; color: black; font-family: Poppins; display: flex; justify-content: center;' href='insert.php'>Kom med endnu et svar!</a>
        ";

    exit;


}
?>



<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>OPRET DIN PROFIL</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/ykt2zah.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>


<body style="background-color: #353758">

<header class="header bg-black text-white shadow">
    <div class="d-flex justify-content-between align-items-center mx-4 ">
        <div class="logo pt-4 align-items-center pb-4">
            <a href="index.html" class="text-decoration-none text-white">
                <p>Find Graphic</p>
            </a>
        </div>
        <div class="col-3 d-md-none menu-btn d-flex justify-content-end">
            <div class="menu-btn_burger toggle"></div>
        </div>
        <div class="nav-items d-none d-md-block">
            <a class="p-2 text-decoration-none text-white" href="#">NYHEDER</a>
            <a class="p-2 text-decoration-none text-white" href="insert.php">LOGIN</a>
        </div>
    </div>

    <div class="col-12 d-md-none">
        <div class="row text-center mx-auto nav nav-items">
            <a class="col-12 p-5 text-white text-decoration-none" href="#" class="">NYHEDER</a>
            <a class="col-12 pb-5 text-white text-decoration-none" href="#" class="">LOGIN</a>
        </div>
    </div>
</header>


<div class="container text-white">
    <h1 class="text-center m-5">OPRET DIN PROFIL</h1>
    <p class="text-center pb-5">Opret dig som selvstændig Multimediedesigner
        og bliv en del af et større fællesskab
        der respektere din virksomhed</p>
</div>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row text-white m-md-5">

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeNavn">Dit fulde navn</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeNavn]" id="mmdKundeNavn" placeholder="Indtast dit fulde navn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeEfternavn">Efternavn</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeEfternavn]" id="mmdKundeEfternavn" placeholder="Indtast dit efternavn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeEmail">Email</label>
                <input class="form-control shadow" type="email" name="data[mmdKundeEmail]" id="mmdKundeEmail" placeholder="Indtast en passende email" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundePassword">Adgangskode</label>
                <input class="form-control shadow" type="password" name="data[mmdKundePassword]" id="mmdKundePassword" placeholder="Indtast en adgangskode" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeCVR">CVR</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeCVR]" id="mmdKundeCVR" placeholder="Indtast dit CVR Nummer" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeTitel">Titel</label>
                <input class="form-control shadow" type="text" name="data[mmdKundeTitel]" id="mmdKundeTitel" placeholder="Indtast din titel f.eks. animator." value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeTLF">Telefonnummer</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTLF]" id="mmdKundeTLF" placeholder="Indtast dit arbejdes nummer" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <label class="form-label" for="mmdKundeBevis">Indsæt uddannelsebevis her</label>
            <input type="file" class="form-control shadow" id="mmdKundeBevis" name="mmdKundeBevis">
        </div>

        <div class="col-12 col-md-6 p-5">
            <label class="form-label " for="mmdKundeProfilPic">Indsæt profilbillede her</label>
            <input type="file" class="form-control shadow" id="mmdKundeProfilPic" name="mmdKundeProfilPic">
        </div>

        <div class="col-12 col-md-6 p-5">
            <label class="form-label " for="mmdKundeVideo">Indsæt video her</label>
            <input type="file" class="form-control shadow" id="mmdKundeVideo" name="mmdKundeVideo">
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeTag1">1.tag</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTag1]" id="mmdKundeTag1" placeholder="Indtast relevant kategori/tag" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeTag2">2.tag</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTag2]" id="mmdKundeTag2" placeholder="Indtast relevant kategori/tag" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeTag3">3.tag</label>
                <input class="form-control shadow" type="tel" name="data[mmdKundeTag3]" id="mmdKundeTag3" placeholder="Indtast relevant kategori/tag" value="">
            </div>
        </div>

        <div class="col-12 p-5">
            <div class="form-group">
                <label class="" for="mmdKundeBio">Fortæl verdenen hvem du er</label>
                <textarea class="form-control" name="data[mmdKundeBio]" id="mmdKundeBio" placeholder="Beskriv dig og dine kompetancer"></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 offset-md-3 pb-3 p-5">
            <button class="form-control submit_knap p-3 shadow" type="submit" id="btnSubmit">Opret bruger</button>
        </div>

    </div>

</form>

<script>
    tinymce.init({
        selector: '#mmdKundeBio',
    });
</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
