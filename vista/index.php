


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Autenticació</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/css/_autenticacio.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">


</head>

<body>


<section id="cover" class="min-vh-100">
    <img src="../imatges/logo_final.png">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
                    <h1 class=" py-4 text-truncate text-center">Autenticació</h1>
                    <div class="px-2">
                        <form>
                            <div class="form-group row">
                                <label for="username" class="col-4 mt-1">USUARI</label>
                                <input type="text" class="form-control col-6" name="username" id="username"
                                       placeholder="USUARI" required>
                            </div>
                            <div class="form-group row">
                                <label for="passwd" class="col-4 mt-1">CONTRASENYA</label>
                                <input type="password" class="form-control col-6" name="passwd" id="passwd"
                                       placeholder="CONTRASENYA" required>
                                <div class=" text-white col-1 col-md-1 col-sm-1 mt-2">
                                    <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn col-md-3 ml-auto">Entra</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" tabindex="-1" role="dialog" id="error">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error d'Autenticació</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>L'usuari o la contrasenya no són correctes.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
            </div>
        </div>
    </div>
</div>
<script>

    $('form').on('submit', function (e){

        var usuari = $("#username").val();
        var password = $("#passwd").val();


        $.ajax({
            url: "http://api.mallorcarustic.me/usuari/check-pass",
            method: "POST",
            xhrFields: {
                withCredentials: true
            },
            data: {
                u: usuari,
                p: password,
            },
            async: true,
            success: function (response) {

                var r = JSON.parse(response);
                if (r['success']) {
                    localStorage.setItem('sessio',r['session_id']);
                    console.log(localStorage.getItem('sessio'));
                    location.href = "http://admin.mallorcarustic.me/cases";
                }else{
                    $("#error").modal();
                    $("#username").val("");
                    $("#passwd").val("");
                }
            }
        });

        e.preventDefault();
    });

    function show() {
        var p = document.getElementById('passwd');
        p.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('passwd');
        p.setAttribute('type', 'password');
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


</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>