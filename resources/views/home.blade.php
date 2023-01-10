<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->

    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Student | Show</title>
</head>

<body id="body-pd" class="bg-white">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('home') }}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">BBBootstrap
                    </span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('home') }}" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a data-bs-toggle="collapse" href="#classroom" role="button" aria-expanded="false"
                        aria-controls="classroom" class="nav_link">
                        <i class='bx bxs-school nav_icon'></i>
                        <span class="nav_name">Classrooms</span>
                    </a>
                    <div class="collapse" id="classroom">
                        <a href="{{ route('showClassroom') }}" class="nav_link">Show Classrooms</a>
                        <a href="{{ route('addClassroom') }}" class="nav_link">Add Classrooms</a>
                        <a href="{{ route('addSubjectClassroom') }}" class="nav_link"
                            title="Add Subjects To Classrooms">Add Subjects To Classrooms</a>
                        <a href="{{ route('addStudentClassroom') }}" class="nav_link"
                            title="Add Students To Classrooms">Add Students To Classrooms</a>
                    </div>
                    <a data-bs-toggle="collapse" href="#Students" role="button" aria-expanded="false"
                        aria-controls="Students" class="nav_link">
                        <i class='bx bxs-graduation nav_icon'></i>
                        <span class="nav_name">Students</span>
                    </a>
                    <div class="collapse" id="Students">
                        <a href="{{ route('showStudent') }}" class="nav_link">Show Students</a>
                        <a href="{{ route('addStudent') }}" class="nav_link">Add Students</a>
                    </div>
                    <a data-bs-toggle="collapse" href="#teacher" role="button" aria-expanded="false"
                        aria-controls="teacher" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Teachers</span>
                    </a>
                    <div class="collapse" id="teacher">
                        <a href="{{ route('showTeacher') }}" class="nav_link">Show Teachers</a>
                        <a href="{{ route('addTeacher') }}" class="nav_link">Add Teachers</a>
                    </div>
                    <a data-bs-toggle="collapse" href="#subject" role="button" aria-expanded="false"
                        aria-controls="subject" class="nav_link">
                        <i class='bx bx-book-bookmark nav_icon'></i>
                        <span class="nav_name">Subjects</span>
                    </a>
                    <div class="collapse" id="subject">
                        <a href="{{ route('showSubject') }}" class="nav_link">Show Subjects</a>
                        <a href="{{ route('addSubject') }}" class="nav_link">Add Subjects</a>
                    </div>
                </div>
            </div> 
            <a href="{{ route('logout') }}" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">Log Out</span> 
            </a>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="bg-white p-5">
        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('image/finish.png') }}" class="card-img" alt="...">
                        <div
                            class="card-img-overlay text-white d-flex justify-content-between align-items-center mb-5">
                            <i class='bx bxs-graduation nav_icon h1 mt-3'></i>
                            <div class="d-block">
                                <h5 class="card-title fw-bold text-end mb-0">{{ $student }}</h5>
                                <h3 class="card-text fw-light text-end">Students</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('image/finish2.png') }}" class="card-img" alt="...">
                        <div
                            class="card-img-overlay text-white d-flex justify-content-between align-items-center mb-5">
                            <i class='bx bxs-user nav_icon h1 mt-3'></i>
                            <div class="d-block">
                                <h5 class="card-title fw-bold text-end mb-0">{{ $teacher }}</h5>
                                <h3 class="card-text fw-light text-end">Teachers</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('image/finish3.png') }}" class="card-img" alt="...">
                        <div
                            class="card-img-overlay text-white d-flex justify-content-between align-items-center mb-5">
                            <i class='bx bxs-school nav_icon h1 mt-3'></i>
                            <div class="d-block">
                                <h5 class="card-title fw-bold text-end mb-0">{{ $classroom }}</h5>
                                <h3 class="card-text fw-light text-end">Classrooms</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('image/finish4.png') }}" class="card-img" alt="...">
                        <div
                            class="card-img-overlay text-white d-flex justify-content-between align-items-center mb-5">
                            <i class='bx bxs-book-bookmark nav_icon h1 mt-3'></i>
                            <div class="d-block">
                                <h5 class="card-title fw-bold text-end mb-0">{{ $subject }}</h5>
                                <h3 class="card-text fw-light text-end">Subjects</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('build/assets/app-7757a2cf.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
