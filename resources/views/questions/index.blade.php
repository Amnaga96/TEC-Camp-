@extends('layouts.app_renamed')
@section('content')
  <div class="container row p-3">
    <div id="showcase" style="background: url('img/backg.jpg') no-repeat center center/cover ; width:800px; height:650px; border: 2px solid #86e2d5;" class="ml-5 mt-5 col-12 p-5" >
        @if (auth()->user()->user_type == 'patient')
          <a  style=" color: black; font-size:20px;" href="{{ url('/ask') }}"> Ask a new question</a>
        @endif
      <table style="margin-Top:20px ;" class="table table-sm  text-center">
        <thead style="background-color: #86e2d5;"  class="table-info ">
          <tr class="text-center">

            <th scope="col">question title</th>
            <th scope="col">time</th>
            <th>replies</th>
            <th scope="col">more details</th>
          </tr>
        </thead>
        <tbody class="text-center" >
        @foreach ($questions as $question)
          <tr>
            <td>{{ $question->title }}</td>
            <td>{{ $question->created_at }}</td>
            <td>{{ $question->replies()->count() }}</td>
          <td class="text-dark"><a href="{{url("/questions/$question->id/show")}}">more details</a></td>
          </tr>
        @endforeach

        </tbody>
      </table>
    </div>
  </div>
       @stop
