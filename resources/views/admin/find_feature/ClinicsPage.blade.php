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
     <a href="{{ url('admin/clinic/create') }}" style="color:black;">Add new Clinic</a></div>
     <div class="btn button mb-3 pb-2 " style="border: 1px solid #86e2d5;"><a href="{{ url('admin/home') }}" style="color:black;">your profile</a></div>
    {{--  table to list users  --}}
    <div class="mt-3 mb-3 text-center ">
    <div class="reponsive-table">
        <table style="margin-Top:20px ;" class="table table-sm">
                
            
            <tr style="background-color: #86e2d5;"  class=" text-center ">
                <td>Number</td>
                <td>Name</td>
                <td>phone_number</td>
                <td>Area</td>
                <td>Settings</td>
            </tr>
            @foreach ($clinics as $clinic )

                <tr class="text-center">
                    <td scope="col" class="text-info">{{$loop->index +1}}</td>
                    <td scope="col" class="text-info">{{$clinic->name}}</td>
                    <td scope="col" class="text-info">{{$clinic->phone_number}}</td>
                    <td scope="col" class="text-info">
                    @foreach($clinic as $area)
                    {{ $clinic->name}}
                    @endforeach
                    </td>
                    <td>
                        <a style="border: 1px solid #86e2d5;" class="btn button" href="{{ route('clinic.edit',['id' => $clinic->id]) }}">Edit</a>
                        <a href="{{ route('clinic.delete',['id' => $clinic->id]) }}"  style="border: 1px solid #86e2d5;" class="btn button">Delete</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    </div>


{{-- list all clinics in a table --}}

@endsection