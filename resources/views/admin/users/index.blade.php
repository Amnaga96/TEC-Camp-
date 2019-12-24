

@extends('admin.layouts.admin')


@section('content')
    <a class="btn btn-primary" href="{{ url('admin/users/create') }}">Add new User</a>
    {{--  table to list users  --}}
    <div class="reponsive-table">
        <table class="table">
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Type</td>
                <td>Settings</td>
            </tr>
            @foreach ($users as $type)

                @foreach ($type as $user)

                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->user_type }}</td>
                    <td>
                        <a href="{{ route('user-edit',['id' => $user->id]) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('user-delete',['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            @endforeach
        </table>
    </div>
@stop
