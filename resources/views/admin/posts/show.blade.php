@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="row">
      <div class="col-12">

        <ul>
          <li> Titolo: {{$post->title}}</li>
          <li> Autore: {{$post->user->name}}</li>
        </ul>

        <p>{{ $post->content}}</p>
        <img src="{{ $post->image }}" alt="">

      </div>


    </div>
    <a class="btn btn-primary" href="{{ route('admin.posts.index', compact('post')) }}"> Indietro</a>

  </div>
@endsection
