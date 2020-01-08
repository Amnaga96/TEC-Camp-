

@extends('layouts.app_renamed')


@section('content')

<div class="container">   <br><br> <div style="heigt:100% ; background-color:#86e2d5 ;" class="shareet"><h4 class="ml-5">Edit area</h4> </div><br><br>
</div>
  @if ($errors->count())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div style="width:600px; height:100%;"  class="container">

    <form action="{{ route('area.update',$area->id) }}" method="post" enctype="multipart/form-data">
        @csrf
         @method('PATCH') 
        Area : <input class="mt-2 form-control form-control-lg " style="border-color:#86e2d5 ;" type="text" name="name" value="{{$area->name}}" > <br><br>
                    <span class="input-group-btn rounded float-left">
                        <div class="text-info mt-3 mr-2">
                            <input style="border: 1px solid #22a391; border-radius: 4px; " class="btn button mt-3" type="submit" value="save">
                            <a href="{{ route('area.page')}}" style="border: 1px solid #22a391; border-radius: 4px;" class="btn button mt-3">Cancel</a>
                        </div>
                    </span>
    </form>
</div>            
@endsection