@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code',
            menubar: false
        });
    </script>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New User</h1>
            <hr>
            {!! Form::open(array('route' => 'users.store', 'method'=> 'POST', 'data-parsley-validate' => '', 'files' => true)) !!}
            {{ csrf_field() }}
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '100' )) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '100' )) }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', array('class' => 'form-control', 'required' => '', 'minlength' => '6', 'maxlength' => '16') ) }}

            {{ Form::label('password_confirmation', 'Confirm Password:') }}
            {{ Form::password('password_confirmation', array('class' => 'form-control', 'required' => '', 'minlength' => '6', 'maxlength' => '16') ) }}

            {{ Form::submit('Create User', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

