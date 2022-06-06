@extends('layouts.app')

@section('content')


<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>ALl Students</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
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
        <div class="col-md-12 coll ">
            <div class="card">
                <div class="card-header">
                    <div><h4>All Students</h4></div>
                    <div class="bton"><a href="{{route('students.create')}}" type="button" class="btn btn-success">
</span>Add Student</a>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Course Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address }}</td>

                                <td>
                                    @foreach($item->courses as $course)
                                        <li>{{$course->name}}</li>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('students.edit',$item->id) }}" class="btn btn-primary b">Edit</a>
                                </td>
                                <td>
                                    <form action='{{route('students.destroy',$item->id)}}' method="post" >
                                        @csrf
                                        <input type='hidden' value="delete" name='_method' >
                                        <button type="submit"  class="btn btn-danger"> Delete</button>
                                    </form>
                                </td>
                                <td><a href="{{route('projects.index',$item->id)}}" type="button" class="btn btn-secondary">View Table</a>

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
