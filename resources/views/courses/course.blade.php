
@extends('layouts.app')

@section('content')

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>ALl Courses</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
    .bton{
        display: flex;
        justify-content: end;
    }
    .bton a{
        margin-top: -40px;
    }
    .coll{
        display: table;
    }
</style>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12 coll">
            <div class="card">
                <div class="card-header">
                    <h4>All courses</h4>
                    <div class="bton"><a href="{{route('courses.create')}}" type="button" class="btn btn-success">Add Course</a>
                    </div>
                </div>
                <div class="card-body">


          <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th> Course Name</th>
                            <th>prof Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->prof_name }}</td>

                                <td>
                                    <a href="{{ route('courses.edit',$course->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action='{{route('courses.destroy',$course->id)}}' method="post" >
                                        @csrf
                                        <input type='hidden' value="delete" name='_method' >
                                        <button type="submit"  class="btn btn-danger">Delete</button>
                                    </form>                                  </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>
@endsection

