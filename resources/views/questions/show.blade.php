
@extends('layouts.app_renamed')

@section('content')
        <div class="container">
      <h2 class="text-sm-center text-info">  {{ $question->title }} </h2>
      <p>  {{ $question->body }} </p>
      <ul id="addreply" class="list-group mt-5"></ul>
        </div>

        @foreach ($question->replies as $reply)
            <p>in {{ $reply->created_at }} - {{ $reply->replier->name }} wrote: {{  $reply->body }}</p>
        @endforeach

        <br>
        <div class="display-inline">
        <div class="text-center">
        <form action="{{  url("questions/$question->id/replies") }}" method="post" class="form-inline" id="addreply">
            @csrf
        <textarea type="text" name="reply" class="form-control " style="border: 1px solid #86e2d5;"  rows="2" id="response"></textarea>
        <button id="submitButton" type="submit" value="addrebly" style="border: 1px solid #86e2d5;" class="btn btn-outline-info  rounded float-right ml-3">reply</button>
        </form>
        </div>
@endsection
