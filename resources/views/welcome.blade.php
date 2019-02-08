<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DIV Soft</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <h1 class="header">My TODO List</h1>
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" placeholder="Add Todo ...">
                </div>
                <button type="submit" class="btn btn-success mb-2">Add</button>
            </form>
            <ul class="list-group list-group--center">
                <li class="list-group-item">Homework <a class="btn btn-danger" href="#" role="button">Delete</a></li>
                <li class="list-group-item">Workout <a class="btn btn-danger" href="#" role="button">Delete</a></li>
                <li class="list-group-item">Reading Books <a class="btn btn-danger" href="#" role="button">Delete</a></li>
            </ul>
        </div>
    </body>
</html>
