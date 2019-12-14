<!-- DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>   
</body>
</html> -->
@extends('layouts.app')
@section('content')
  <div class="container">
  <h1 class="text-info mt-5 mb-3"> Inbox </h1>
      <table class="table table-sm">
        <thead class="table-info">
          <tr class="text-center">
            
            <th scope="col">question title</th>
            <th scope="col">time</th>
            <th scope="col">more details</th>
          </tr>
        </thead>
        <tbody class="text-center" >
        @foreach ($questions as $question)
          <tr>
            <td class="text-info">{{ $question->title }}</td>
            <td>{{ $question->created_at }}</td>
            {{-- <td>{{ $question->body }}</td> --}}
          <td class="text-info"><a href="{{url("/questions/$question->id/show")}}">more details</a></td>
            
          </tr>
        @endforeach

        </tbody>
      </table>
    </div>  
       @stop
   