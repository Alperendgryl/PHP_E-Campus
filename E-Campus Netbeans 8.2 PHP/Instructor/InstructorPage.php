<?php include '../LoginDB.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <title>E-Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!-- Customized Bootstrap Stylesheet -->
                <link href="../css/bootstrap.min.css" rel="stylesheet">
                    </head>
                    <!--Top Bar START-->
                    <body class="bg-white">
                    <div class="navbar p-0">
                        <div class="col py-2 pl-5">
                            <a href="InstructorPage.php" style="text-decoration: none;">
                                <img class="ml-5 p-0 my-0" src="https://w7.pngwing.com/pngs/751/3/png-transparent-logo-php-html-others-text-trademark-logo-thumbnail.png" style="height: 55px;">
                            </a>
                        </div>
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mr-5">
                            <li><a class="nav-link text-success border-right"><i class="fa fa-circle mr-1"></i>Available</a></li>
                            <li><a class="nav-link text-gray border-right"><i class="fa fa-phone"></i></a></li>
                            <li><a class="nav-link text-gray border-right"><i class="fa fa-envelope"></i></a></li>
                            <li><a class="nav-link text-gray border-right"><i class="fas fa-user-alt pr-2"></i> <?php echo $_SESSION['iname'] ?> </a></li>
                            <a href="../index.php">
                                <button class="btn " style="height: 40px; width: 100px;">LOGOUT</button>
                            </a>
                        </ul>
                    </div>
                    <div class="container-fluid bg-blue mb-4" style="height: 60px">
                        <div class="container pt-1">
                            <nav class="navbar p-0">
                                <div class="col px-0">
                                    <a href="InstructorPage.php" style="text-decoration: none;">
                                        <button class="btn btn-blue btn-block mb-0" style="height: 50px;">Home</button>
                                    </a>
                                </div>
                                <div class="col px-0">
                                    <a href="" style="text-decoration: none;">
                                        <button class="btn btn-blue btn-block mb-0" style="height: 50px;">Academic Calendar</button>
                                    </a>
                                </div>
                                <div class="col px-0">
                                    <a href="" style="text-decoration: none;">
                                        <button class="btn btn-blue btn-block mb-0" style="height: 50px;">Course Schedule</button>
                                    </a>
                                </div>
                                <div class="col px-0">
                                    <a href="" style="text-decoration: none;">
                                        <button class="btn btn-blue btn-block mb-0" style="height: 50px;">Course Archive</button>
                                    </a>
                                </div>
                                <div class="col px-0">
                                    <a href="" style="text-decoration: none;">
                                        <button class="btn btn-blue btn-block mb-0" style="height: 50px;">Registration Help</button>
                                    </a>
                                </div>
                                <div class="col px-0">
                                    <a href="" style="text-decoration: none;">
                                        <button class="btn btn-blue btn-block mb-0" style="height: 50px;">User Guides</button>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!--Top Bar START--> 

                    <div class="container mb-5" style="min-height: 50vh; min-width: 100vw">
                        <div class="row">
                            <div class="col-6 bg-white">
                                <div class="card">
                                    <div class="card-header bg-blue text-white">
                                        <h4 class="text-light" style="height: 8px; font-family: Arial; font-size:18px">Overview</h4>
                                    </div>
                                    <h6 class="text-dark my-3 mx-3" style="font-family: Arial; font-size:14px">Hello, <?php echo $_SESSION['iname']; ?>. Welcome to e-Campus. You may follow the links below. Please do not forget to log out when you finish.</h6>
                                    <ul class="list-group list-group-flush ">

                                        <li class="list-group-item border px-3 pb-1 pt-3">
                                            <div class="card">
                                                <div class="card-header bg-gray" style="height: 40px">
                                                    <a class="text-lightblue " href="CoursesTeaching.php" >Courses</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Courses you are teaching.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 py-1">
                                            <div class="card">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="StudentsOfCourses.php" >Students of Courses</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">You can see the students of a course.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card ">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="ProjectsLeading.php" >Projects (Leading)</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Projects you are leading.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="ProjectsWorkingOn.php" >Projects (Working On)</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Project you are working on.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card ">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="WeeklySchedule.php" >Weekly Schedule</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Your weekly schedule.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="StudentsAdvising.php" >Advising</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Students information that you are advising.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card ">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="StudentsSupervising.php" >Supervising</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Graduate Students information that you are supervising.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="FreeHours.php" >Free Hours report</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">You can see the free hours of the courses you are teaching.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="AddExam.php" >Add Exam </a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Add exam to your courses.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="list-group-item border px-3 p-1">
                                            <div class="card">
                                                <div class="card-header bg-gray text-white" style="height: 40px">
                                                    <a class="text-lightblue " href="DisplayExams.php" >Display Exams</a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <p1 class="text-dark" style="font-family: Arial; font-size:13px">Display your exams.</p1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 bg-white pr-5">
                                <li class="list-group-item p-0">
                                    <div class="card">
                                        <div class="card-header bg-blue text-white">
                                            <h4 class="text-light" style="height: 8px; font-family: Arial; font-size:18px">Weekly Schedule</h4>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <table border="1" cellspacing="2" cellpadding="10" class="table-striped" style="min-height: 30vh; min-width: 40vw">
                                                    <thead>
                                                        <tr class="" style="text-align: center; font-size:11px ">
                                                            <th></th>
                                                            <th>1<br>(08:30-09:20)</th>
                                                            <th>2<br>(09:30-10:20)</th>
                                                            <th>3<br>(10:30-11:20)</th>
                                                            <th>4<br>(11:30-12:20)</th>
                                                            <th>5<br>(12:30-13:20)</th>
                                                            <th>6<br>(13:30-14:20)</th>
                                                            <th>7<br>(14:30-15:20)</th>
                                                            <th>8<br>(15:30-16:20)</th>
                                                            <th>9<br>(16:30-17:20)</th>
                                                            <th>10<br>(17:30-18:20)</th>
                                                            <th>11<br>(18:30-19:20)</th>
                                                            <th>12<br>(19:30-20:20)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="" style="text-align: center; font-size:11px">
                                                        <tr>
                                                            <td>M</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>T</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>W</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>TH</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>F</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="list-group-item p-0 mt-3">
                                    <div class="card">
                                        <div class="card-header bg-blue text-white">
                                            <h4 class="text-light" style="height: 8px; font-family: Arial; font-size:18px">Announcements</h4>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <h6 class="text-dark" style="height: 14px; font-family: Arial; font-size:14px">There are no announcements.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="list-group-item p-0 mt-2">
                                    <div class="card">
                                        <div class="card-header bg-blue text-white">
                                            <h4 class="text-light" style="height: 8px; font-family: Arial; font-size:18px">Holds & Warnings</h4>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <h6 class="text-dark" style="height: 14px; font-family: Arial; font-size:14px">There are no holds or warnings.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </div>
                        </div>
                        </body>
                        </html>

