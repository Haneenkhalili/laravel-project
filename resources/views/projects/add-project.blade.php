
@extends('layouts.app')

@section('content')

    <!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Validate form</title>
    <!-- library bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Project</h4>
                </div>
                <div class="card-body">

                    <form action="{{route('projects.store',['student_id'=>$students, 'course_id'=>$courses])}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">project Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Project</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
@endsection
