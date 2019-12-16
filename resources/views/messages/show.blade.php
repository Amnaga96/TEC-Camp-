<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>


@extends('layouts.app_renamed')
@section('content')
        <div>
      <h2 class="text-sm-center text-info">  {{ $question->title }} </h2>
      <p>  {{ $question->body }} </p>
        </div>
        <br>
        <form action="" method="">
        <div class="col-10 mt-3 mb-3 ml-5">
            <button class="btn btn-outline-info  rounded float-right ml-6">reply</button>
            </div>
        </form>

      @stop
