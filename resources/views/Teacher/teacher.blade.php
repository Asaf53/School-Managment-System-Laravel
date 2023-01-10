<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->

    <link rel="stylesheet" href="{{ asset('css/design.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css')}}">  
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
                <a href="{{ route('home')}}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">BBBootstrap
                    </span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('home')}}" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a data-bs-toggle="collapse" href="#classroom" role="button" aria-expanded="false"
                        aria-controls="classroom" class="nav_link">
                        <i class='bx bxs-school nav_icon'></i>
                        <span class="nav_name">Classrooms</span>
                    </a>
                    <div class="collapse" id="classroom">
                        <a href="{{ route('showClassroom')}}" class="nav_link">Show Classrooms</a>
                        <a href="{{ route('addClassroom')}}" class="nav_link">Add Classrooms</a>
                        <a href="{{ route('addSubjectClassroom')}}" class="nav_link" title="Add Subjects To Classrooms">Add Subjects To Classrooms</a>
                        <a href="{{ route('addStudentClassroom')}}" class="nav_link" title="Add Students To Classrooms">Add Students To Classrooms</a>
                    </div>
                    <a data-bs-toggle="collapse" href="#Students" role="button" aria-expanded="false"
                        aria-controls="Students" class="nav_link">
                        <i class='bx bxs-graduation nav_icon'></i>
                        <span class="nav_name">Students</span>
                    </a>
                    <div class="collapse" id="Students">
                        <a href="{{ route('showStudent')}}" class="nav_link">Show Students</a>
                        <a href="{{ route('addStudent')}}" class="nav_link">Add Students</a>
                    </div>
                    <a data-bs-toggle="collapse" href="#teacher" role="button" aria-expanded="false"
                        aria-controls="teacher" class="nav_link active">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Teachers</span>
                    </a>
                    <div class="collapse" id="teacher">
                        <a href="{{ route('showTeacher')}}" class="nav_link">Show Teachers</a>
                        <a href="{{ route('addTeacher')}}" class="nav_link">Add Teachers</a>
                    </div>
                    <a data-bs-toggle="collapse" href="#subject" role="button" aria-expanded="false"
                        aria-controls="subject" class="nav_link">
                        <i class='bx bx-book-bookmark nav_icon'></i>
                        <span class="nav_name">Subjects</span>
                    </a>
                    <div class="collapse" id="subject">
                        <a href="{{ route('showSubject')}}" class="nav_link">Show Subjects</a>
                        <a href="{{ route('addSubject')}}" class="nav_link">Add Subjects</a>
                    </div>
                </div>
            </div> <a href="{{ route('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="bg-white mt-5 p-5">
        <h4 class="text-center">Show Teacher</h4>
        <div class="d-flex justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Registered</th>
                        <th scope="col">Edit/Delete</th>
                    </tr>
                </thead>

                @foreach ($teachers as $teacher)
                    <tbody>
                        <tr>
                            <th scope="row">{{$teacher->id}}</th>
                            <td>{{$teacher->firstname}}</td>
                            <td>{{$teacher->lastname}}</td>
                            <td>{{$teacher->date_of_birthday}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>{{$teacher->gender}}</td>
                            <td>{{$teacher->registered}}</td>
                            <td>
                                <a href="{{ route('editTeacher',$teacher->id) }}" class="text-warning"><i class="bx bx-edit h4"></i></a>
                                <a href="" class="text-danger"><i class="bx bx-trash h4"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <!--Container Main end-->

    
    <script src="{{ asset('js/sidebar.js')}}"></script>
    <script src="{{ asset('build/assets/app-7757a2cf.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
