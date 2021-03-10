<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Gestió Usuari - Mallorca Rustic</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/Bootstrap/dist/css/bootstrap.css">
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
    <h3>Configuració d'usuari</h3>
    <form>
        <div class="row">
            <div class="col-md-4 col-sm-6 offset-md-2">
                <div class="form-group" id="error">

                    <label for="oldPasswd">Contrasenya actual</label>


                    <div class="input-group text-center">
                        <input type="password" class="form-control" name="oldPasswd" id="oldPasswd" required>

                        <div class="input-group-prepend">
                            <div class="input-group-text" id="contra1"><i id="ull" class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="form-group">

                    <label for="newPasswd">Contrasenya nova</label>

                    <div class="input-group text-center">

                        <input type="password" class="form-control" name="newPasswd" id="newPasswd" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text" id="contra2"><i id="ull2" class="fas fa-eye"></i></div>
                        </div>

                    </div>


                </div>
            </div>
        </div>


        <button type="submit" id="bEntrar" class="btn btn-primary col-lg-3 col-md-4 offset-lg-7 offset-md-6">Actualitzar</button>
    </form>
    <div id="modal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titol" id="exampleModalLabel">Constrasenya Modificada</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    La constrasenya s'ha modificat correctament.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>

                </div>
            </div>
        </div>
    </div>

</div>
<script>
    <?php include "php/control.php";?>

    $("#contra1").click(function(){
        var x = $("#oldPasswd");


        if (x.attr('type') === "password") {
            x.attr('type','text');


            $("#ull").attr('class', "fa fa-eye-slash");


        } else {

            x.attr('type','password');

            $("#ull").attr('class', "fas fa-eye");


        }

    });

    $("#contra2").click(function(){
        var x = $("#newPasswd");


        if (x.attr('type') === "password") {
            x.attr('type','text');


            $("#ull2").attr('class', "fa fa-eye-slash");


        } else {

            x.attr('type','password');

            $("#ull2").attr('class', "fas fa-eye");


        }

    });



    $('form').on('submit', function (e) {

        var vella = $("#oldPasswd").val();
        var nova = $("#newPasswd").val();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                var info = JSON.parse(this.responseText);

                if (info == "OK") {

                    $(".errorStyle").remove();

                    $("#modal").modal('show');

                } else {

                    $("#error").after("<p class='errorStyle'><i class='fas fa-exclamation-triangle'> </i> La constrasenya no és correcte. <p>");

                }

            }

        };

        xhttp.open("POST", "https://api.mallorcarustic.me/usuari/change-pass", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("oldPasswd=" + vella + "&newPasswd=" + nova);


        e.preventDefault();

    });

</script>

</body>

</html>