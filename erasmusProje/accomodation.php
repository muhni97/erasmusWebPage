<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0366f96474.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div id="AllPage" class="container-fluid mrg-auto bg-light">
        <?php include "header.php"; ?>
        <div class="row justify-content-center p-3 m-2">
            <div class="col-5">
                <h3 class="text-center mb-4">
                    Bendrabučio nuomos įkainiai studentams
                </h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Paslaugos pavadinimas</th>
                            <th scope="col">Kaina su PVM</th>
                        </tr>
                    </thead>
                    <tr>
                        <td colspan="2" class="text-center font-weight-bold">Nuolatinių studijų studentams:</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-info">Triviečiame renovuotame kambaryje</td>
                    </tr>
                    <tr>
                        <td>vienam asmeniui už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td>visas kambarys už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-info">Dviviečiame renovuotame kambaryje</td>
                    </tr>
                    <tr>
                        <td>vienam asmeniui už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td>visas kambarys už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-info">Triviečiame nerenovuotame kambaryje</td>
                    </tr>
                    <tr>
                        <td>vienam asmeniui už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td>visas kambarys už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-info">Dviviečiame renovuotame kambaryje</td>
                    </tr>
                    <tr>
                        <td>vienam asmeniui už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td>visas kambarys už mėnesį</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-lightGray">Našlaičiams bei netekusiems vieno iš maitintojų nuomos mokestis gali būti mažinamas 50 proc. nuo mažiausio patvirtinto bendrabučio kambario vienam asmeniui nustatyto nuomos įkainio.</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center font-weight-bold">Ištęstinių studijų studentams:</td>
                    </tr>
                    <tr>
                        <td>Už 1 parą</td>
                        <td>€</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="">Kai gyvenama ilgiau nei 60 parų, taikoma nuolatinių studijų studentams taikomi bendrabučio nuomos įkainiai.</td>
                    </tr>
                </table>

                <button type="button" class="btn btn-primary btn-lg btn-block mt-5"> <i class="fas fa-file-pdf fa-2x"> </i> Bendrabučio nuomos įkainiai</button>

            </div>
            <div class="col-5">
                <h3 class="text-center mb-4">
                    Komercinis pasiūlymas
                </h3>
                <img class="img-fluid img-thumbnail" src="img/dorm.jpg" alt="">
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>
</body>