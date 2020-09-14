@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12">

      <ul>
        <li> Titolo:
          <a href="{{ route('login')}}"> login</a>
        </li>
        <li> Autore:
          <a href="{{ route('login')}}"> login</a>
        </li>

      </ul>

      <p>{{ $post->content}}</p>
      <img src="{{ $post->image }}" alt="">

    </div>
    <a class="btn btn-primary" href="{{ route('posts.index', compact('post')) }}"> Indietro</a>

  </div>

</div>
@endsection
