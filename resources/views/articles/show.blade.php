@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Article </h1>
        <hr>


            <article>
                <h2>
                   {{  $article->title }}
                </h2>
                <div class="body"> {{ $article->body }}</div>
            </article>



    </div>

@endsection