
@extends('layouts.app_renamed')

@section('content')
  <div class="container">
      <div class="row text-center shadow-lg bd-with  bg-white rounded mx-auto d-block p-3"  style="border: 1px solid #86e2d5;">
      <div class="col-12"><img src="{{asset('img/chat.jpg')}}" alt="#" width=200px height=200px style="border: 1px solid #86e2d5;"></div>
        <div class="text-center col-12">
            <div class="container display-table">
              <h2 class="text-sm-center text-info p-3">Title:  {{ $question->title }} </h2>
              <p class="time-left">in {{ $question->created_at }}</p> 
              <p class="left col-md-8 offset-md-4 container darker ml-5">{{ $question->body }} </p>
              <ul id="addreply" class="list-group mt-5">
                @foreach ($question->replies as $reply)
                  <p class="time-left">in {{ $reply->created_at }}</p>
                  <p class="left col-md-8 offset-md-4 container darker ml-5 "> <strong>{{ $reply->replier->name }}</strong>: {{  $reply->body }}</p>
                @endforeach
              </ul>
            </div>      
            <br>
            <div class="container display-inline text-center col-md-4">
              <form action="{{  url("questions/$question->id/replies") }}" method="post" class="form-inline text-center" id="addreply">
              @csrf
              <textarea type="text" name="reply" class="text-center form-control" style="border: 1px solid #86e2d5;"  rows="2" id="response" placeholder="Type message.."></textarea>
              <button id="submitButton" type="submit" value="addrebly" style="border: 1px solid #86e2d5;" class="btn btn-outline-info  rounded float-right ml-3 mt-3 text-center">Reply</button>
              </form>
            </div>
         </div>
      </div>
  </div>

@endsection
