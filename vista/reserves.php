<!DOCTYPE html>
<html lang="es">
<head>
    <title>Reserves - Mallorca Rustic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="../style/Bootstrap/dist/css/bootstrap.css">




    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.bootstrap4.min.css"/>

    <link rel="stylesheet" href="../style/css/_general.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Bungee" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- js -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/_general.css"/>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">

          <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">


</head>

<body>

<?php
include('header.php');
?>

<div class="container" id="c">

    <div style="background-color:white;padding:4% 8% 8% 8%;">
        <div class="row">
            <div class="col-10">
                <h2 class="titol" style="margin-bottom: 5%"> Reserves</h2>
            </div>
            <div class="col-2">

                <a href="/reserves/grafics" class="btn btn-outline-primary ml-auto">Veure gràfics</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <input type="text" name="nom" id="nomCasa" class="form-control" placeholder="Tria una casa">
            </div>
            <div class="col-lg-2 col-md-4">
                <select class="custom-select mr-sm-2" id="mes">
                    <option value="0" selected>Tria un mes</option>
                    <option value="1"> Gener</option>
                    <option value="2"> Febrer</option>
                    <option value="3"> Març</option>
                    <option value="4"> Abril</option>
                    <option value="5"> Maig</option>
                    <option value="6"> Juny</option>
                    <option value="7"> Juliol</option>
                    <option value="8"> Agost</option>
                    <option value="9"> Setembre</option>
                    <option value="10"> Octubre</option>
                    <option value="11"> Novembre</option>
                    <option value="12"> Desembre</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-4">
                <input type="text" name="any" id="any" class="form-control" placeholder="Tria un any">
            </div>
            <div class="col-lg-1 col-md-2">
                <button id="filtrar" class="btn btn-primary"> Filtrar</button>
            </div>

            <div class="col-lg-2 col-md-2">
                <button id="borrar" class="btn btn-outline-primary"> Borrar Filtres</button>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <div class="row">
            <div id="buttonsZone"></div>
        </div>
        <div class="row">
            <div class="col">
                <table id="taula" class="table table-striped table-bordered table-hover table-responsive-md">
                    <thead class="table">
                    <tr>
                        <th></th>
                        <th>Casa</th>
                        <th>Data Entrada</th>
                        <th>Data Sortida</th>
                        <th>Client</th>
                        <th>Preu</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    <?php include "php/control.php";?>

    function format(d) {

        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
            '<tr>' +
            '<td><b>Nom complet:</b></td>' +
            '<td>' + d.nomUsuari + ' ' + d.llinatge1 + ' ' + d.llinatge2 + '</td>' +
            '<td><b>Població:</b></td>' +
            '<td>' + d.nomPoblacio + '</td>' +
            '<td><b>Data reserva:</b></td>' +
            '<td>' + d.data_reserva + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td><b>DNI:</b></td>' +
            '<td>' + d.DNI + '</td>' +
            '<td><b>Telèfon:</b></td>' +
            '<td>' + d.telefon + '</td>' +
            '<td><b>E-mail:</b></td>' +
            '<td>' + d.email + '</td>' +
            '</tr>' +
            '</table>';
    }

    var t;

    function carregarDataTable() {
        t = $('#taula').DataTable({

            responsive: true,
            ajax: {
                url: 'https://api.mallorcarustic.me/reserves',
                dataSrc: '',
                type: "POST"
            },
            columns: [
                {
                    "className": 'details-control dt-body-center',
                    "data": null,
                    "defaultContent": '',
                    "render": function () {
                        return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                    },
                    width: "15px"
                },
                {data: 'traduccioNom'},
                {data: 'data_inici'},
                {data: 'data_fi'},
                {data: 'nomUsuari'},
                {data: 'preu_final'}
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
            },
            dom: 'Brtip',
            buttons: {
                dom: {
                    button: {
                        className: ''
                    }
                },
                buttons: [
                    {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                    {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                    {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                    {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                    {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                ]

            }
        });
    }

    $(document).ready(function () {

        carregarDataTable();

        $('#taula tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.find("i.fa");
            var row = t.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown').css({"background-color": ''});
                tdi.first().removeClass('fa-minus-square');
                tdi.first().addClass('fa-plus-square');
                tdi.css("color", "forestgreen").css("cursor", "pointer");

            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown').css("background-color", "rgba(150,122,220,0.7)");
                tdi.first().removeClass('fa-plus-square');
                tdi.first().addClass('fa-minus-square');
                tdi.first().css("color", "red").css("cursor", "pointer");
            }
        });


        $("#filtrar").click(function () {

            var nomCasa = $("#nomCasa").val();
            var mes = $("#mes").val();
            console.log(mes);
            var any = $("#any").val();
            console.log(any);
            console.log(nomCasa);


            if (nomCasa != "" & mes == 0 & any == "") {
                t.search(nomCasa).draw();
            }
            if (mes != 0 && any != "" && nomCasa == "") {

                t.destroy();


                t = $('#taula').DataTable({
                    responsive: true,
                    ajax: {
                        url: 'https://api.mallorcarustic.me/reserves/filtrar',
                        dataSrc: '',
                        type: "POST",
                        data: {
                            "mes": mes,
                            "any": any
                        }
                    },
                    columns: [
                        {
                            "className": 'details-control dt-body-center',
                            "data": null,
                            "defaultContent": '',
                            "render": function () {
                                return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                            },
                            width: "15px"
                        },
                        {data: 'traduccioNom'},
                        {data: 'data_inici'},
                        {data: 'data_fi'},
                        {data: 'nomUsuari'},
                        {data: 'preu_final'}
                    ],
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
                    },
                    dom: 'Brtip',
                    buttons: {
                        dom: {
                            button: {
                                className: ''
                            }
                        },
                        buttons: [
                            {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                            {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                            {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                            {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                            {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                        ]

                    }


                });

            }

            if (mes != 0 && any == "" && nomCasa == "") {
                t.destroy();

                t = $('#taula').DataTable({
                    responsive: true,
                    ajax: {
                        url: 'https://api.mallorcarustic.me/reserves/filtrar',
                        dataSrc: '',
                        type: "POST",
                        data: {
                            "mes": mes,

                        }
                    },
                    columns: [
                        {
                            "className": 'details-control dt-body-center',
                            "data": null,
                            "defaultContent": '',
                            "render": function () {
                                return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                            },
                            width: "15px"
                        },
                        {data: 'traduccioNom'},
                        {data: 'data_inici'},
                        {data: 'data_fi'},
                        {data: 'nomUsuari'},
                        {data: 'preu_final'}
                    ],
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
                    },
                    dom: 'Brtip',
                    buttons: {
                        dom: {
                            button: {
                                className: ''
                            }
                        },
                        buttons: [
                            {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                            {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                            {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                            {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                            {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                        ]

                    }
                });

            }

            if (mes == 0 && any != "" && nomCasa == "") {
                t.destroy();

                t = $('#taula').DataTable({
                    responsive: true,
                    ajax: {
                        url: 'https://api.mallorcarustic.me/reserves/filtrar',
                        dataSrc: '',
                        type: "POST",
                        data: {
                            "any": any
                        }
                    },
                    columns: [
                        {
                            "className": 'details-control dt-body-center',
                            "data": null,
                            "defaultContent": '',
                            "render": function () {
                                return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                            },
                            width: "15px"
                        },
                        {data: 'traduccioNom'},
                        {data: 'data_inici'},
                        {data: 'data_fi'},
                        {data: 'nomUsuari'},
                        {data: 'preu_final'}
                    ],
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
                    },
                    dom: 'Brtip',
                    buttons: {
                        dom: {
                            button: {
                                className: ''
                            }
                        },
                        buttons: [
                            {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                            {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                            {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                            {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                            {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                        ]

                    }

                });
            }
            if (mes != 0 && any != "" && nomCasa != "") {
                t.destroy();

                t = $('#taula').DataTable({
                    responsive: true,
                    ajax: {
                        url: 'https://api.mallorcarustic.me/reserves/filtrar',
                        dataSrc: '',
                        type: "POST",
                        data: {
                            "mes": mes,
                            "any": any,
                            "nom": nomCasa
                        }
                    },
                    columns: [
                        {
                            "className": 'details-control dt-body-center',
                            "data": null,
                            "defaultContent": '',
                            "render": function () {
                                return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                            },
                            width: "15px"
                        },
                        {data: 'traduccioNom'},
                        {data: 'data_inici'},
                        {data: 'data_fi'},
                        {data: 'nomUsuari'},
                        {data: 'preu_final'}
                    ],
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
                    },
                    dom: 'Brtip',
                    buttons: {
                        dom: {
                            button: {
                                className: ''
                            }
                        },
                        buttons: [
                            {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                            {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                            {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                            {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                            {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                        ]

                    }
                });

            }
            if (mes == 0 && any != "" && nomCasa != "") {
                t.destroy();

                t = $('#taula').DataTable({
                    responsive: true,
                    ajax: {
                        url: 'https://api.mallorcarustic.me/reserves/filtrar',
                        dataSrc: '',
                        type: "POST",
                        data: {
                            "any": any,
                            "nom": nomCasa
                        }
                    },
                    columns: [
                        {
                            "className": 'details-control dt-body-center',
                            "data": null,
                            "defaultContent": '',
                            "render": function () {
                                return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                            },
                            width: "15px"
                        },
                        {data: 'traduccioNom'},
                        {data: 'data_inici'},
                        {data: 'data_fi'},
                        {data: 'nomUsuari'},
                        {data: 'preu_final'}
                    ],
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
                    },
                    dom: 'Brtip',
                    buttons: {
                        dom: {
                            button: {
                                className: ''
                            }
                        },
                        buttons: [
                            {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                            {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                            {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                            {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                            {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                        ]

                    }
                });

            }
            if (mes != 0 && any == "" && nomCasa != "") {
                t.destroy();

                t = $('#taula').DataTable({
                    responsive: true,
                    ajax: {
                        url: 'https://api.mallorcarustic.me/reserves/filtrar',
                        dataSrc: '',
                        type: "POST",
                        data: {
                            "mes": mes,
                            "nom": nomCasa
                        }
                    },
                    columns: [
                        {
                            "className": 'details-control dt-body-center',
                            "data": null,
                            "defaultContent": '',
                            "render": function () {
                                return '<div style="text-align: center"><i class="fa fa-plus-square" style="color:forestgreen" aria-hidden="true"></i></div>';
                            },
                            width: "15px"
                        },
                        {data: 'traduccioNom'},
                        {data: 'data_inici'},
                        {data: 'data_fi'},
                        {data: 'nomUsuari'},
                        {data: 'preu_final'}
                    ],
                    language: {
                        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
                    },
                    dom: 'Brtip',
                    buttons: {
                        dom: {
                            button: {
                                className: ''
                            }
                        },
                        buttons: [
                            {"extend": 'copy', "className": 'btn btn-primary', "text": '<i class="fas fa-copy"></i>'},
                            {"extend": 'pdf', "className": 'btn btn-primary', "text": '<i class="fas fa-file-pdf"></i>'},
                            {"extend": 'excel', "className": 'btn btn-primary', "text": '<i class="fas fa-file-excel"></i>'},
                            {"extend": 'csv', "className": 'btn btn-primary', "text": '<i class="fas fa-file-csv"></i>'},
                            {"extend": 'print', "className": 'btn btn-primary', "text": '<i class="fas fa-print"></i>'}

                        ]

                    }


                });

            }

        });

        $("#borrar").click(function() {
            t.destroy();

            $("#nomCasa").val("");
            $("#mes").val(0);
            $("#any").val("");
            carregarDataTable();



        });


    })
    ;

</script>
</body>
</html>
