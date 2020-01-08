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
        background-color: #22a391;
        }
</style>


@extends('layouts.app_renamed')
    @section('content')
<div class="container">
    <div class="btn button mb-3 pb-2" style="border: 1px solid #22a391;">
     <a href="{{ url('admin/users/create') }}" class="text-info">Add new User</a></div>
    {{--  table to list users  --}}
    <div class="mt-3 mb-3 text-center ">
    <div class="reponsive-table">
        <table style="margin-Top:20px ;" class="table table-sm">
            <tr style="background-color: #86e2d5;"  class="table-info text-center ">
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Type</td>
                <td>Settings</td>
            </tr>
            @foreach ($users as $type)

                @foreach ($type as $user)

                <tr class="text-center">
                    <td scope="col" class="text-info">{{ $loop->index + 1 }}</td>
                    <td scope="col" class="text-info">{{ $user->name }}</td>
                    <td scope="col" class="text-info">{{ $user->email }}</td>
                    <td scope="col" class="text-info">{{ $user->user_type }}</td>
                    <td>
                        <a href="{{ route('user-edit',['id' => $user->id]) }}" class="btn button">Edit</a>
                        <a href="{{ route('user-delete',['id' => $user->id]) }}" class="btn button">Delete</a>
                    </td>
                </tr>
                @endforeach

            @endforeach
        </table>
    </div>
    </div>
@stop
