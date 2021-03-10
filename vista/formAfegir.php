<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/Bootstrap/dist/css/bootstrap.css">
    <title>Afegir Casa - Mallorca Rustic</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/_general.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body>

<?php include('header.php') ?>
<div class="container" id="c">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dades-tab" data-toggle="tab" href="#dades" role="tab" aria-controls="dades"
               aria-selected="true">Dades Generals</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="caract-tab" data-toggle="tab" href="#caract" role="tab" aria-controls="caract"
               aria-selected="false">Característiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ubi-tab" data-toggle="tab" href="#ubi" role="tab" aria-controls="ubi"
               aria-selected="false">Ubicació</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tarifa-tab" data-toggle="tab" href="#tarifa" role="tab" aria-controls="tarifa"
               aria-selected="false">Tarifes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="imatge-tab" data-toggle="tab" href="#imatges" role="tab" aria-controls="imatges"
               aria-selected="false">Imatges</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="dades" role="tabpanel" aria-labelledby="dades-tab">
            <div class="container">
                <div class="form-row" style="margin-top: 2%;">
                    <div class="form-group col-md-6">
                        <label class="control-label">Nom</label>

                        <input type="text" name="nomCasa" id="nomCasa" class="form-control col-10" required>


                    </div>

                    <div class="form-group col-md-6">
                        <label class="control-label">Name</label>

                        <input type="text" name="nomAngles" id="nomCasaAngles" class="form-control col-10" required>


                    </div>
                </div>
                <br/>
                <div class="form-row">
                    <div class="form-group col-md-6">

                        <label class="control-label" for="desc1">Descripció</label>

                        <textarea class="form-control col-10" id="descripcio" rows="5" required></textarea>
                    </div>
                    <div class="form-group col-md-6">

                        <label class="control-label" for="inlineFormCustomSelect">Description</label>

                        <textarea class="form-control col-10" id="descripcioAngles" rows="5" required></textarea>
                    </div>


                </div>
                <br/>
                <div class="d-flex">
                    <button class="btn btn-primary col-lg-2 col-md-3 ml-auto" id="continuar">Continuar</button>
                </div>
            </div>


        </div>


        <div class="tab-pane fade" id="caract" role="tabpanel" aria-labelledby="caract-tab">
            <div class="container con">
                <fieldset style="margin-top: 2%;">
                    <legend id="leg1">Distribució</legend>
                    <div class="row">

                        <label class="control-label col-md-2 col-sm-3 offset-md-1" for="inlineFormCustomSelect">Num
                            Habitacions</label>
                        <div class="col-xl-2 col-md-2 col-sm-1">
                            <select class="custom-select" id="hab">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        </div>


                        <label class="control-label col-md-2 col-sm-2 offset-md-2" for="inlineFormCustomSelect">Num
                            Banys</label>
                        <div class="col-xl-2 col-md-2 col-sm-1">
                            <select class="custom-select" id="banys">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        </div>
                    </div>


                </fieldset>

                <fieldset>
                    <legend id="leg2">Serveis</legend>
                    <div class="row">

                        <div class="form-group col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="piscina">
                                <label class="form-check-label" for="defaultCheck1">
                                    Piscina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" id="aire">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aire Acondicionat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="calefaccio">
                                <label class="form-check-label" for="defaultCheck1">
                                    Calefacció
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" id="parking">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aparcament
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="5" id="tv">
                                <label class="form-check-label" for="defaultCheck1">
                                    TV Satèl.lit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="6" id="wifi">
                                <label class="form-check-label" for="defaultCheck1">
                                    WI-FI
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="7" id="caixa">
                                <label class="form-check-label" for="defaultCheck1">
                                    Caixa fort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="8" id="bressol">
                                <label class="form-check-label" for="defaultCheck1">
                                    Bressol
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="9" id="xemeneia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Xemeneia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="10" id="bbq">
                                <label class="form-check-label" for="defaultCheck1">
                                    Barbacoes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="11" id="jardi">
                                <label class="form-check-label" for="defaultCheck1">
                                    Jardí o terrassa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="12" id="animals">
                                <label class="form-check-label" for="defaultCheck1">
                                    Admet animals de companyia
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
            <br/>
            <div class="d-flex">
                <button class="btn btn-primary col-lg-2 col-md-3 ml-auto" id="continuar2">Continuar</button>
            </div>

        </div>

        <div class="tab-pane fade" id="ubi" role="tabpanel" aria-labelledby="ubi-tab">
            <div class="container">
                <div class="row">

                    <div id="googleMap" style="width:100%;height:400px;margin:10px;align-content: center"></div>

                </div>
                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-4">
                        <label class="control-label" for="x">Longitud</label>
                        <input type="text" class="form-control" id="x">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="y">Latitud</label>
                        <input type="text" class="form-control" id="y">
                    </div>
                    <div class="col-md-4">

                        <label class="control-label" for="pob">Població</label>
                        <input type="text" class="form-control" id="pob">
                    </div>
                </div>
                <br/>

                <br/>
                <div class="d-flex">
                    <button class="btn btn-primary col-lg-2 col-md-3 ml-auto" id="continuar3">Continuar</button>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="tarifa" role="tabpanel" aria-labelledby="imatges-tab">
            <div class="container">

                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-5">
                        <label class="control-label" for="preuDefecte">Preu
                            Defecte</label>
                        <input type="text" class="form-control" id="preuDefecte">
                    </div>
                </div>


                <br/>
                <div class="row">
                    <div class="ml-auto">
                        <div class="col ml-auto">

                            <button type="submit" class="btn btn-primary " id="continuar4">Insertar</button>

                            <button class="btn btn-outline-primary" id="continuar5">Afegir imatges</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="tab-pane fade" id="imatges" role="tabpanel" aria-labelledby="imatges-tab">
            <div class="container">
                <form method="post" id="myForm" action="https://api.mallorcarustic.me/casa/crear-imatges"
                      enctype="multipart/form-data">

                    <div class="row" style="margin-top: 2%;">
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-target="file-uploader" id="file"
                                       name="file">
                                <label class="custom-file-label" for="customFile">Imatge principal</label>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-target="file-uploader" id="f2"
                                       name="f2">
                                <label class="custom-file-label" for="customFile">Imatge 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-target="file-uploader" id="f3"
                                       name="f3">
                                <label class="custom-file-label" for="customFile">Imatge 3</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-target="file-uploader" id="f4"
                                       name="f4">
                                <label class="custom-file-label" for="customFile">Imatge 4</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-target="file-uploader" id="f5"
                                       name="f5">
                                <label class="custom-file-label" for="customFile">Imatge 5</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary col-lg-2 col-md-3 ml-auto" id="insertar">Insertar</button>
                    </div>
                </form>
            </div>
            <br/>

        </div>

    </div>
    <div id="modal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titol" id="exampleModalLabel">Casa Afegida</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    La casa s'ha afegit correctament.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>

                </div>
            </div>
        </div>
        <div id="modalError" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title titol" id="exampleModalLabel">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        La casa no s'ha pogut afegir, revisi els camps obligatòris.
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

    function myMap() {

        var marker;

        var mapOptions = {
            center: new google.maps.LatLng(39.60017583077754, 2.9943578633572976),
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

        };


        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        google.maps.event.addListener(map, 'click', function (event) {
            placeMarker(event.latLng);


        });

        function placeMarker(location) {

            if (!marker || !marker.setPosition) {
                marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    icon: '../imatges/icon.png',
                });

                document.getElementById("x").value = location.lng();
                document.getElementById("y").value = location.lat();
            } else {
                marker.setPosition(location);
                document.getElementById("x").value = location.lng();
                document.getElementById("y").value = location.lat();
            }

        }
    }

    $(document).ready(function () {


        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $("#continuar").click(function () {
            $("#myTab li:eq(1) a").tab("show");
        });

        $("#continuar2").click(function () {
            $("#myTab li:eq(2) a").tab("show");
        });

        $("#continuar3").click(function () {
            $("#myTab li:eq(3) a").tab("show");
        });
        $("#continuar4").click(function () {


            var nom1 = $("#nomCasa").val();
            var nom2 = $("#nomCasaAngles").val();
            var desc1 = $("#descripcio").val();
            var desc2 = $("#descripcioAngles").val();
            var hab = $("#hab").val();
            var banys = $("#banys").val();


            var caract = [];

            $("input[type=checkbox]:checked").each(function () {
                caract.push($(this).val());
            });


            var x = $("#x").val();
            var y = $("#y").val();
            var pob = $("#pob").val();


            var preu = $("#preuDefecte").val();

            $(".errorStyle").remove();

            if (nom1 == "" || nom2 == "" || desc1 == "" || desc2 == "" || x == "" || y == "" || pob == "" || preu == "") {
                $("#myTab li:eq(0) a").tab("show");
                if (nom1 == "") {
                    $("#nomCasa").after("<p class='errorStyle col-10'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (nom2 == "") {
                    $("#nomCasaAngles").after("<p class='errorStyle col-10'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (desc1 == "") {
                    $("#descripcio").after("<p class='errorStyle col-10'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (desc2 == "") {
                    $("#descripcioAngles").after("<p class='errorStyle col-10'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (x == "") {
                    $("#x").after("<p class='errorStyle col'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (y == "") {
                    $("#y").after("<p class='errorStyle col'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (pob == "") {
                    $("#pob").after("<p class='errorStyle col'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
                if (preu == "") {
                    $("#preuDefecte").after("<p class='errorStyle col'> <i class='fas fa-exclamation-triangle'> </i> Aquest camp és obligatori. </p>");
                }
            } else {

                var arrayC = JSON.stringify(caract);


                var xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var info = JSON.parse(this.responseText);

                        if(info.success){
                            $("#modal").modal('show');
                        }else{
                            $("#modalError").modal('show');
                        }


                    }


                };

                xhttp.open("POST", "https://api.mallorcarustic.me/casa/crear", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("pob=" + pob + "&banys=" + banys + "&hab=" + hab + "&x=" + x + "&y=" + y + "&preu=" + preu + "&nom1=" + nom1 + "&nom2=" + nom2 + "&desc1=" + desc1 + "&desc2=" + desc2 + "&caract=" + arrayC);


            }


        });

        $("#continuar5").click(function () {
            $("#myTab li:eq(4) a").tab("show");
        });
        $("#insertar").click(function () {


            var formData = new FormData();
            var f1 = $('#file')[0].files[0];
            var f2 = $("#f2")[0].files[1]
            var f3 = $("#f3")[0].files[2]
            var f4 = $("#f4")[0].files[3]
            var f5 = $("#f5")[0].files[4]

            formData.append('file' + "1", f1);
            formData.append('file' + "2", f2);
            formData.append('file' + "3", f3);
            formData.append('file' + "4", f4);
            formData.append('file' + "5", f5);


            $.post($("#myForm").attr("action"), formData, function (data) {
                alert(data);
                location.href = "/cases";
            });


        });


    });


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=myMap"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>