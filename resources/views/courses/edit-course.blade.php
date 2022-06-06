

@extends('layouts.app')

@section('content')

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Edit Courses</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Course
                        <a href="" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{route('courses.update',$course->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Course Name</label>
                            <input type="text" name="name" value="{{$course->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">prof Name</label>
                            <input type="text" name="prof_name" value="{{$course->prof_name}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Course</button>
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
