@extends('layouts.app_renamed')
@section('content')
  <div class="container">
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
          <td class="text-info"><a href="{{url("/questions/$question->id/show")}}">more details</a></td>
          </tr>
        @endforeach

        </tbody>
      </table>
    </div>
       @stop
