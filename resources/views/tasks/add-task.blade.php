{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Laravel 8 Add/Remove Multiple Input Fields Example</title>--}}
{{--    <!-- CSS -->--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <style>--}}
{{--        /*.container {*/--}}
{{--        /*    max-width: 600px;*/--}}
{{--        /*}*/--}}
{{--    </style>--}}
{{--</head>--}}

{{--<body>--}}
{{--<div class="container">--}}
{{--    <form action="{{route('tasks.store',['project_id'=>$projects])}}" method="POST">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}

{{--    @if ($errors->any())--}}
{{--            <div class="alert alert-danger" role="alert">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if (Session::has('success'))--}}
{{--            <div class="alert alert-success text-center">--}}
{{--                <p>{{ Session::get('success') }}</p>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <table class="table table-bordered" id="dynamicAddRemove">--}}
{{--            <tr>--}}
{{--                <th>Subject</th>--}}
{{--                <th>Action</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td><input type="text" name="addMoreInputFields[0][name]" placeholder="Enter subject" class="form-control" />--}}
{{--                </td>--}}
{{--                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--        <button type="submit" class="btn btn-outline-success btn-block">Save</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}

{{--<!-- JavaScript -->--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--    var i = 0;--}}
{{--    $("#dynamic-ar").click(function () {--}}
{{--        ++i;--}}
{{--        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +--}}
{{--            '][name]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'--}}
{{--        );--}}
{{--    });--}}
{{--    $(document).on('click', '.remove-input-field', function () {--}}
{{--        $(this).parents('tr').remove();--}}
{{--    });--}}
{{--</script>--}}
{{--</html>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')

    <!DOCTYPE html>

<html>
<head>

    <meta name="viewport" content="width=device-width" />
    <title>Add Task </title>
    <!-- library bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- library js validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/validate.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<style>
    .error {
        color: red;
        border-color: red;

    }
    .bton{
        display: flex;
        justify-content: end;
        margin-top: -40px;
    }
</style>
<div class="container">
    <br><br>
    <h3>Add Tasks</h3>

        <div class="bton"><a href="{{route('tasks.showDatatable',$projects)}}" type="button" class="btn btn-warning"><ion-icon name="arrow-back-outline"></ion-icon>Show tasks</a>
    </div>
    <span id="message_error"></span>
    <hr><br>
    <form   method="POST"  action="{{ route('tasks.store',$projects) }}">
        @csrf
        @method('PUT')

        <table id="dynamicAddRemove" class="table table-bordered border-primary">
            <thead class="table-dark">
            <tr>
                <th>Task </th>
{{--                <th>Prof Name</th>--}}
            </tr>
            </thead>
            <tbody>
            <tr>
                <td ><input type="text" class="form-control" name=" name" placeholder="Enter Task " required></td>
{{--                <td ><input type="text" class="form-control" name="prof_name[0]" placeholder="Enter prof name" required></td>--}}
            </tr>
            </tbody>
        </table>
        <table>
            <br>
            <tr>
                <td><button type="submit" class="btn btn-sm btn-success">Save</button></td>
            </tr>
        </table>
    </form>
</div>


</body>
</html>
@endsection
