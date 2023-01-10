<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/design.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Student | Edit</title>
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
                    <a href="index.html" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <span class="nav_logo-name">BBBootstrap
                        </span>
                    </a>
                    <div class="nav_list">
                        <a href="index.html" class="nav_link">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a data-bs-toggle="collapse" href="#classroom" role="button" aria-expanded="false"
                            aria-controls="classroom" class="nav_link">
                            <i class='bx bxs-school nav_icon'></i>
                            <span class="nav_name">Classrooms</span>
                        </a>
                        <div class="collapse" id="classroom">
                            <a href="classroom.html" class="nav_link">Show Classrooms</a>
                            <a href="addClassroom.html" class="nav_link">Add Classrooms</a>
                            <a href="addSubjectToClassroom.html" class="nav_link" title="Add Subjects To Classrooms">Add Subjects To Classrooms</a>
                            <a href="addStudentToClassroom.html" class="nav_link" title="Add Students To Classrooms">Add Students To Classrooms</a>
                        </div>
                        <a data-bs-toggle="collapse" href="#Students" role="button" aria-expanded="false"
                            aria-controls="Students" class="nav_link active">
                            <i class='bx bxs-graduation nav_icon'></i>
                            <span class="nav_name">Students</span>
                        </a>
                        <div class="collapse" id="Students">
                            <a href="{{ route('showStudent')}}" class="nav_link">Show Students</a>
                            <a href="addStudent.html" class="nav_link">Add Students</a>
                        </div>
                        <a data-bs-toggle="collapse" href="#teacher" role="button" aria-expanded="false"
                            aria-controls="teacher" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Teachers</span>
                        </a>
                        <div class="collapse" id="teacher">
                            <a href="{{ route('showTeacher')}}" class="nav_link">Show Teachers</a>
                            <a href="addTeacher.html" class="nav_link">Add Teachers</a>
                        </div>
                        <a data-bs-toggle="collapse" href="#subject" role="button" aria-expanded="false"
                            aria-controls="subject" class="nav_link">
                            <i class='bx bx-book-bookmark nav_icon'></i>
                            <span class="nav_name">Subjects</span>
                        </a>
                        <div class="collapse" id="subject">
                            <a href="subject.html" class="nav_link">Show Subjects</a>
                            <a href="addSubject.html" class="nav_link">Add Subjects</a>
                        </div>
                    </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                        class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="bg-white p-5">
            <h4 class="text-center mb-5">Edit Teacher</h4>
            <div class="d-flex justify-content-center align-items-center">
                <form method="post" action="{{route('updateTeacher')}}" class="w-25">
                    @csrf
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" value="{{$teachers->firstname}}">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="{{$teachers->lastname}}">
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirthday" class="form-label">Date Of Birthday</label>
                        <input type="date" name="dateOfBirthday" id="dateOfBirthday" class="form-control" value="{{$teachers->date_of_birthday}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$teachers->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" name="phone" id="phone" class="form-control" value="{{$teachers->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{$teachers->address}}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control" value="{{$teachers->gender}}">
                    </div>
                    <div class="mb-3">
                        <label for="registered" class="form-label">Registered</label>
                        <input type="datetime" name="registered" id="registered" class="form-control" value="{{$teachers->registered}}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!--Container Main end-->


    <script src="{{ asset('build/assets/app-7757a2cf.js')}}"></script>
    <script src="{{ asset('js/sidebar.js')}}"></script>
</body>
</html>