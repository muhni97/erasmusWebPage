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
    <script src="script.js"></script>
</head>

<body class="bg-dark">
    <div id="AllPage" class="container-fluid mrg-auto bg-light">
        <?php include "header.php"; ?>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/subjects/Accounting.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/subjects/Business-English-and-Communication.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/subjects/International Business Management and English.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <div class="container m-2 p-3">
                <h2 class="mb-3">Erasmus+ studies and internships</h2>
                <div class="font-weight-light">
                    Marijampole College implements Erasmus + program KA1 activities by organizing student and staff mobility.<br><br>
                    The Erasmus + program supports and encourages mobility of students and graduates, teachers and administrative staff, and multilateral cooperation between higher education institutions and between businesses and other organizations.<br><br>
                    Erasmus + student mobility for studies and placements and staff mobility for teaching and training purposes take place in those higher education institutions with which the University has signed Erasmus + contracts. Student internships and staff training visits may also take place to organizations with which the University has no cooperation agreements, but the host institution is eligible for Erasmus + participation and agrees to host the University students or staff.
                </div>

                <div class="m-5 p-4 border-l bcolor-blue shadow">
                    <h4 class="mb-3 mt-3">Erasmus Higher Education Charter of Marijampolė College</h4>
                    <div class="font-weight-light">
                        The Erasmus Charter for Higher Education (ECHE) ensures quality implementation of Erasmus + activities in education and training institutions. The award of ECHE confirms that the objectives of the Erasmus + program are also part of the institution's own strategy for modernization and internationalization and that the institution commits itself to all the requirements for the implementation of the Erasmus + program and to the principles of European cooperation.
                    </div>
                </div>

            </div>
            <nav>
                <div class="nav nav-tabs m-2" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                        For Students
                    </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                        For Staff
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col">
                            <a href="student-info.php">
                                <div class="card box-shd-hv" style="width: 18rem;">
                                    <img class="card-img-top" src="img/student-info.png" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <p class="card-text">Information on Erasmus+ studies</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="practice-info.php">
                                <div class="card box-shd-hv" style="width: 18rem;">
                                    <img class="card-img-top" src="img/students-info-2.png" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <p class="card-text">Information on Erasmus+ Practice</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="docs/prasymo-form.pdf" target="_blank">
                                <div class="card box-shd-hv" style="width: 18rem;">
                                    <img class="card-img-top" src="img/aplication.png" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <p class="card-text">Application Form</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row mt-4 hover-scale">
                            <div class="col-11 border-l bcolor-blue shadow p-4">
                                <span>
                                    <h3 class="mb-4">Before leaving</h3>
                                    Before leaving, Marijampolė College and the host institution or company must formally agree on a mobility program;
                                    <ul>
                                        <li><span class="font-weight-bold">While Studying - Learning Agreement for studies</span>, which specifies the compulsory study program approved by the student, the sending and host institutions</li>
                                        <li><span class="font-weight-bold">During the internship - Learning Agreement for Traineeship</span>, which specifies a compulsory internship program approved by the student, the sending institution and the host company</li>
                                    </ul>
                                    These agreements define the intended learning outcomes of the period of study abroad and provide for formal recognition, as well as the place of the period of study and / or traineeship. The sending institution and the student should also agree on the level of language proficiency (main language of instruction or workplace) that the student must have achieved before the start of the study (placement) period. If necessary, the sending institution and the student agree on the most appropriate linguistic support to be provided to enable the student to reach the agreed level.
                                </span>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                        <div class="row mt-4 hover-scale">
                            <div class="col-1">

                            </div>
                            <div class="col-11 border-r bcolor-orange shadow p-4">
                                <span class="font-weight-bold">The student signs a financial agreement with the sending institution </span>which provides for the period of study / practice, the amount of the scholarship awarded and the planned settlements.
                                <br><br>
                                Before leaving, the student must familiarize himself / herself with the Erasmus + Student Charter, which sets out the student's rights and obligations in relation to his / her period of study or traineeship abroad and explains the various steps to be taken before, during and after the mobility period.
                                <h5 class="mt-4">Language tests and language support</h5>
                                All selected own students (except those whose mother tongue is study or practice abroad) <span class="font-weight-bold">must sign an online test before signing a study / internship contract</span>, which will assess their knowledge of their main language in which they will study or train abroad.
                                <br><br>
                                This will allow Marijampolė College to identify students who need an online language course. When students are assigned to online language courses, they take responsibility for attending such a course.
                                <br><br>
                                At the end of the mobility period, students will take a second test to assess their progress in learning a major foreign language.
                            </div>
                        </div>
                        <div class="row mt-4 hover-scale">
                            <div class="col-11 border-l bcolor-green shadow p-4">
                                <h4 class="mt-2 mb-4">At the end of the mobility</h4>
                                At the end of the study / internship period abroad, the host institution must provide the student and Marijampolė College with a certificate confirming the mobility period (duration), completion of the agreed program and issuing an academic certificate confirming the study results.
                                <br><br>
                                Marijampolė College must fully recognize the activities performed satisfactorily during the Erasmus + mobility period, provided for in the study / internship agreement. Learning outcomes are recognized on the basis of the European Credit Transfer and Accumulation System (ECTS).
                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="img/student-info.png" alt="Card image cap">
                                <div class="card-body text-center">
                                    <p class="card-text">Information on teaching visits</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="img/students-info-2.png" alt="Card image cap">
                                <div class="card-body text-center">
                                    <p class="card-text">Information on study visits</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="img/aplication.png" alt="Card image cap">
                                <div class="card-body text-center">
                                    <p class="card-text">Application form</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-3 p-2">
                        <div class="row mt-4 hover-scale">
                            <div class="col-11 border-l bcolor-orange shadow p-4">
                                <span>
                                    <h3 class="mb-4">Before leaving</h3>
                                   Before leaving, Marijampolė College and the host institution or company must formally agree on a mobility program:
                                    <ul>
                                        <li><span class="font-weight-bold">During Teaching - Marijampolė College and the host institutions approve the teaching program</span>, which must specify the pre-agreed program of lectures to be given by the lecturer, meetings with other lecturers, etc.</li>
                                        <li><span class="font-weight-bold">During the Trainings - Marijampolė College and the host institutions approve the training program</span>, which must specify the objectives and tasks of the visit, the expected results of the planned activities and the program of the training period.</li>
                                    </ul>
                                    The employee signs a grant agreement with Marijampolė, which provides for the period of the visit, the amount of the grant and the planned settlements.
                                </span>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                        <div class="row mt-4 hover-scale">
                            <div class="col-1">

                            </div>
                            <div class="col-11 border-r bcolor-green shadow p-4">
                                <h3 class="mb-4">After the visit</h3>
                                At the end of the period of visit abroad, the host institution<span class="font-weight-bold"> must submit a certificate to the employee and Marijampolė College</span> confirming the period (duration) of the visit and the implementation of the agreed program.
                                <br><br>
                               Employees must complete and <span class="font-weight-bold"> submit a final electronic report.</span>
                                <br><br>
                                At the end of the mobility
                                <br><br>
                                Document forms
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>
</body>

</html>