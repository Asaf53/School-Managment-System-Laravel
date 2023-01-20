<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Subject TO Classroom | Add</title>
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
        <h4 class="text-center mb-5">Add Subject TO Classroom</h4>
        <div class="d-flex justify-content-center align-items-center">
            {{-- <form method="post" action="{{ route('storeSubjectClassroom') }}" class="w-25">
                @csrf
                <div class="mb-3">
                    <label for="subjectClassroom" class="form-label">ClassRoom</label>
                    <select name="subjectClassroom" id="subjectClassroom" class="form-select 
                        @error('classroom')
                            is-invalid
                        @enderror">
                        <option selected>Select Class Room</option>
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->grade }}</option>
                        @endforeach
                    </select>
                    @error('classroom')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject Name</label>
                    <select name="subject" id="subject" class="form-select 
                        @error('subject')
                            is-invalid
                        @enderror">
                        <option selected>Select Subject Name</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                    @error('subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form> --}}
            <form action="{{ route('storeSubjectClassroom') }}" method="POST">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Classroom</th>
                </tr>
                <tr>
                    <td>
                        <select name="subjectClassroom" id="subjectClassroom" class="form-select">
                        <option selected>Select Class Room</option>
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->grade }}</option>
                        @endforeach
                    </select>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered" id="dynamicAddRemove">
                <tr>
                    <th colspan="2">Subject</th>
                </tr>
                <tr>
                    <td>
                    <select name="addMoreInputFields[0]" id="subject" class="form-select">
                        <option selected>Select Subject Name</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                    </td>
                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                </tr>
            </table>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Save</button>
            </div>
        </form>
        </div>
    </div>
    <!--Container Main end-->
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append('<tr>'+
                '<td>'+
                    '<select name="addMoreInputFields['+i+']" class=" form-select"'+
                    '<option value=""></option>'+
                    '@foreach ($subjects as $subject)'+
                    '<option value="{{ $subject->id }}">{{ $subject->name }}</option>'+
                    '@endforeach'+
                    '</select>'+
                '</td>'+
                    '<td>'+
                        '<button type="button" class="btn btn-outline-danger remove-input-field">Delete</button>'+
                    '</td>'+
                '</tr>'
                );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
    <script src="{{ asset('build/assets/app-7757a2cf.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
