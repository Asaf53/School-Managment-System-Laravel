<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Subject TO Classroom | Show</title>
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
                    <a href="{{ route('home') }}" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a data-bs-toggle="collapse" href="#classroom" role="button" aria-expanded="false"
                        aria-controls="classroom" class="nav_link active">
                        <i class='bx bxs-school nav_icon'></i>
                        <span class="nav_name">Classrooms</span>
                    </a>
                    <div class="collapse" id="classroom">
                        <a href="{{ route('showClassroom') }}" class="nav_link">Show Classrooms</a>
                        <a href="{{ route('addClassroom') }}" class="nav_link">Add Classrooms</a>
                        <a href="{{ route('addSubjectClassroom') }}" class="nav_link">Add Subjects To Classrooms</a>
                        <a href="{{ route('showSubjectClassroom') }}" class="nav_link">Show Subject Classroom</a>
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
            </div> <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="bg-white p-5">
        @if ($msg = Session::get('alert'))
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <i class="bx bx-check h5"></i>
                <strong>{{ $msg }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h4 class="text-center mb-5">Add Subject TO Classroom</h4>
        <div class="container">
            <div class="row">
                @foreach ($classrooms as $class)
                    <div class="col-3">
                        {{-- <table class="table table-bordered">
                            <tr>
                                <th class="text-center h3">{{ $class->grade }}</th>
                            </tr>
                            <tr>
                                <th class="text-center">Subject</th>
                            </tr>
                            @foreach ($class->subjects as $subject)
                                <tr>
                                    <td >{{ $subject->name }}</td>
                                </tr>
                            @endforeach
                        </table> --}}
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h3 class="text-end"><a href="{{ route('deleteSubjectClassroom', $class->id) }}"><i class="bx bx-trash text-danger"></i></a></h3>
                                <h3 class="card-title text-center"><strong>{{ $class->grade }}</strong></h3>
                                <ul class="list-group list-group-flush">
                                    <?php $count=1?>
                                    @foreach ($class->subjects as $subject)
                                        <li class="list-group-item"><span>{{$count++ . ". "}}</span>{{ $subject->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Container Main end-->


    <script src="{{ asset('build/assets/app-7757a2cf.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
