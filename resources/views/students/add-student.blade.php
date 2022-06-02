
@extends('layouts.app')

@section('content')

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Add Student</title>
    <!-- library bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- library js validate -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- selec2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<style>
    .bton{
        display: flex;
        justify-content: end;
        margin-top: -40px;
    }
</style>
<body>
@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4>
                    <div class="bton"><a href="{{route('students.index')}}" type="button" class="btn btn-warning"><ion-icon name="arrow-back-outline"></ion-icon>Back</a>
                    </div>

                </div>
                <div class="card-body">

                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="select2Multiple">Select Courses</label>
                            <select class="select2-multiple form-control" name="tags[]" multiple="multiple"
                                    id="select2Multiple">
                                <option value="">Please Select</option>
                                @foreach($course as $c)

{{--                                    <option value="{{ $course->id }}">{{ $course->name}} </option>--}}
                                    <option value="{!! $c->id !!}">{!! $c->name !!}</option>


                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true,
            minimumInputLength: 2 // only start searching when the user has input 3 or more characters

        });

    });

</script>

</body>
</html>
@endsection
