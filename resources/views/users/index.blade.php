
@extends('main')

@section('title', '| All Users')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>All Users</h1>
        </div>

        <div class="col-md-3">
            <a href="{{ route('users.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New
                User</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->

    <div class="row">
        <div class="col-md-12">
            <h1>Users</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created At</th>
                    <th>Update At</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->email }}</a></td>
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->password }}</a></td>
                        <td>{{ date('M j, Y', strtotime($user->created_at)) }}</td>
                        <td>{{ date('M j, Y', strtotime($user->update_at)) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-block">Edit</a></td>
                        </td>
                        <td>
                            {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'font-size:12px']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@stop