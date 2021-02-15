<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Gestió Usuari</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/_general.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">


</head>

<body>
<?php include('header.php'); ?>
<div class="container auth align-self-center">
    <h1>CANVIA LA CONTRASENYA</h1>
    <form class="col">
        <div class="form-row">
            <div class="form-group col-6">
                <label for="oldPasswd">CONTRASENYA ACTUAL</label>
                <input type="password" class="form-control" name="oldPasswd" id="oldPasswd" placeholder="CONTRASENYA" required>
            </div>

            <div class="form-group col-5">
                <label for="newPasswd">NOVA CONTRASENYA</label>
                <input type="password" class="form-control" name="newPasswd" id="newPasswd" placeholder="CONTRASENYA" required>
            </div>
            <div class=" text-white col-1 mt-3 pt-3">
                <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
            </div>
        </div>
        <button type="submit" id="bEntrar" class="btn btn-lg col-3 offset-9">ACTUALITZA</button>
    </form>

</div>
<script>
    <?php include "php/control.php";?>

    function show() {
        var p = document.getElementById('oldPasswd');
        p.setAttribute('type', 'text');
        var p1 = document.getElementById('newPasswd');
        p1.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('oldPasswd');
        p.setAttribute('type', 'password');
        var p1 = document.getElementById('newPasswd');
        p1.setAttribute('type', 'password');
    }

    var pwShown = 0;


    document.getElementById("eye").addEventListener("click", function () {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);


    $('form').on('submit', function (e) {

        var vella = $("#oldPasswd").val();
        var nova = $("#newPasswd").val();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                var info = JSON.parse(this.responseText);

                if (info == "OK") {
                    location.href = "http://admin.mallorcarustic.me/cases";
                } else {
                    alert("Contrasenya incorrecta");
                    location.href = "http://admin.mallorcarustic.me";
                }

            }

        };

        xhttp.open("POST", "http://api.mallorcarustic.me/usuari/change-pass", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("oldPasswd=" + vella + "&newPasswd=" + nova);


        e.preventDefault();

    });

</script>

</body>

</html>