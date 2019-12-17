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
col-10 mt-3 mb-1 ml-3 
-->

@extends('layouts.app_renamed')
@section('content')
        <div class="container">
      <h2 class="text-sm-center text-info">  {{ $question->title }} </h2>
      <p>  {{ $question->body }} </p>
      <ul id="addreply" class="list-group mt-5"></ul>
        </div>
        <br>
        <!--'<p> }}$answer->response}}'</p><div class="display-inline">
        <div class="text-center">
        <form action="" method="" class="form-inline" id="addreply">
        <textarea type="text" name="response" class="form-control " style="border: 1px solid #86e2d5;"  rows="2" id="response"></textarea>
        <button id="submitButton" type="rebly" value="addrebly" style="border: 1px solid #86e2d5;" class="btn btn-outline-info  rounded float-right ml-3">reply</button>
        </form>
        </div>
 -->
