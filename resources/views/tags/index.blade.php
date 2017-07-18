@extends('main')

@section('title', '| All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                        <td>{{ date('M j, Y', strtotime($tag->created_at)) }}</td>
                        <td>
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning btn-block">Edit</a></td>


                        </td>
                        <td>
                            {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'font-size:12px']) }}
                            {{ Form::close() }}
                        </td>

                    </tr>
                @endforeach
                </tbody>

            </table>
        </div> <!-- end of .col-md-8 -->

        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                <h2>New Tag</h2>
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection