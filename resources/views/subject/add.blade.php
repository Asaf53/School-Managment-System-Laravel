<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Subject | Add</title>
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
                        aria-controls="classroom" class="nav_link">
                        <i class='bx bxs-school nav_icon'></i>
                        <span class="nav_name">Classrooms</span>
                    </a>
                    <div class="collapse" id="classroom">
                        <a href="{{ route('showClassroom') }}" class="nav_link">Show Classrooms</a>
                        <a href="{{ route('addClassroom') }}" class="nav_link">Add Classrooms</a>
                        <a href="{{ route('addSubjectClassroom') }}" class="nav_link"
                            title="Add Subjects To Classrooms">Add Subjects To Classrooms</a>
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
                        aria-controls="subject" class="nav_link active">
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
        <h4 class="text-center mb-5">Add Subject</h4>
        <div class="d-flex justify-content-center align-items-center">
            <form method="post" action="{{ route('storeSubject') }}" class="w-25">
                @csrf
                <div class="mb-3">
                    <label for="subjectName" class="form-label">Subject Name</label>
                    <input type="text" name="subjectName" id="subjectName"
                        class="form-control @error('subjectName')
                            is-invalid
                        @enderror">
                    @error('subjectName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="teacher" class="form-label">Teacher</label>
                    <select name="teacher" id="teacher" class="form-select 
                        @error('teacher')
                            is-invalid
                        @enderror">
                        <option selected>Select Teacher</option>
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->fullname }}</option>
                        @endforeach
                    </select>
                    @error('teacher')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" id="description"
                        class="form-control @error('description')
                            is-invalid
                        @enderror">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!--Container Main end-->


    <script src="{{ asset('build/assets/app-7757a2cf.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
