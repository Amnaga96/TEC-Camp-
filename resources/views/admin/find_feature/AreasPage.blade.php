<style>
.zoom {
        padding: 10px;
        transition: transform .2s;
        width: 80px;
        height: 80px;
    }
    .zoom:hover {
        transform: scale(1.5);
    }

    .button {
        background-color: #86e2d5;
    }

    .button:hover {
        background-color: #86e2d5;
        }
</style>


@extends('layouts.app_renamed')
@section('content')


<div class="container">
    <div class="btn button mb-3 pb-2 " style="border: 1px solid #86e2d5;">
     <a href="{{ url('admin/area/create') }}" style="color:black;">Add new Area</a></div>
     <div class="btn button mb-3 pb-2 " style="border: 1px solid #86e2d5;"><a href="{{ url('admin/home') }}" style="color:black;">your profile</a></div>
    {{--  table to list users  --}}
    <div class="mt-3 mb-3 text-center ">
    <div class="reponsive-table">
        <table style="margin-Top:20px ;" class="table table-sm">
            <tr style="background-color: #86e2d5;"  class=" text-center ">
                <td>Number</td>
                <td>Name</td>
                <td></td>
                <td></td>
                <td>Settings</td>
            </tr>
           
               @foreach ($areas as $area )
    


                <tr class="text-center">
                    <td scope="col" class="text-info">{{$loop->index +1}}</td>
                    <td scope="col" class="text-info">{{$area->name}}</td>
                    <td scope="col" class="text-info"></td>
                    <td scope="col" class="text-info"></td>
                    <td>
                        <a  style="border: 1px solid #86e2d5;"href="{{ route('area.edit',['id' => $area->id]) }}"  class="btn button">Edit</a>
                        <a href="{{ route('area.delete',['id' => $area->id]) }}"  style="border: 1px solid #86e2d5;" class="btn button">Delete</a>
                    </td>
                </tr>
               @endforeach
        </table>
    </div>
    </div>


{{-- list all clinics in a table --}}

@endsection