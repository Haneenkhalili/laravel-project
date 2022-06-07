

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
                <td ><input type="text" class="form-control" name="name" placeholder="Enter Task " required></td>

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
