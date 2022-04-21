@extends('layouts.app')

@section('content')


    <!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Student table</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<style>
    .sname{
        /*border-bottom:solid red;*/
        /*width: 300px;*/
        color: #b21f2d;
        text-align: center;
        margin-right: 10px;
        margin-top: -40px;

    }
    .nn{
        /*display: inline-flex;*/

    }
    .icons{
        color: black;
        font-size: 30px;
    }
    table{
        text-align: center;
    }
    .btonn{
        margin-right: 10px;
    }


</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header nn">
                    <div class="btonn"><a href="{{route('students.index')}}" type="button" class="btn btn-warning"><ion-icon name="arrow-back-outline"></ion-icon>Back</a></div>

                    <h4 class="sname"> {{ $students->name }} Table </h4>


                    </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>CourseName</th>
                            <th>Project Name</th>
                            <th>Tasks</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students->Courses as $course)

                            <tr>
                                <td>
                                        {{$course->name}}

                                </td>
{{--                                <td>--}}
{{--                                    {{$course->Project()->where('student_id',$students->id)->first()->name??null}}--}}

{{--                                    <a href="{{route('projects.create',['student_id'=>$students->id, 'course_id'=>$course->id])}}"><ion-icon  class="icons" name="add-outline"></ion-icon></a>--}}
{{--                                </td>--}}

                                <td>
                                    {{$course->Project()->where('student_id',$students->id)->first()->name??null}}
                                    @if(!$course->Project()->where('student_id',$students->id)->first())
                                        <a href="{{(!$course->Project()->where('student_id',$students->id)->first()? route('projects.create',['student_id'=>$students->id,'course_id'=>$course->id]):'#')}}" ><ion-icon  class="icons" name="add-outline"></ion-icon></a>
                                    @endif
                                </td>
{{--                                <a href="{{($course->Project()->where('student_id',$students->id)->first()? route('Task.index',$course->Project()->where('student_id',$students->id)->first()->id):'#')}}" class="btn link-success">Show Tasks</a>--}}

                                <td>
                                    <a href="{{($course->Project()->where('student_id',$students->id)->first()? route('tasks.create',$course->Project()->where('student_id',$students->id)->first()->id):'#')}}"><ion-icon  class="icons" name="add-outline"></ion-icon></a>
                                </td>

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
