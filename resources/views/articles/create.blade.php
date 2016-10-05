@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Create Articles</h1>
        <hr>
  <!-- Creating Form -->

        {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null , ['class' => 'form-controll']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null , ['class' => 'form-controll']) !!}
        </div>
        <div class="form-group ">
            {!! Form::label('published_at','Published at:') !!}
            {!! Form::input('date','published_at', date('Y-m-d') , ['class' => ' form-controll']) !!}
        </div>

        <div class="form-group">

            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-controll']) !!}
        </div>

        {!! Form::close() !!}
        <div class="well well-sm">
            {{
          var_dump($errors)
          }}
        </div>
    </div>




@endsection