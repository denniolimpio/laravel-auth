@extends('layouts.app');

@section('content')

  <h2> Ciao {{ $user->name }}, ecco la lista dei post:</h2>

  <div class="row">
    <div class="col-12">
      <ul>
        @foreach ($posts as $post)

          <li><strong>AUTORE:</strong>  {{ $post->user->name}} -  <strong>TITOLO:</strong> {{ $post->title }}</li>

        <a class="btn btn-primary" href="{{ route('admin.posts.show', compact('post')) }}"> Apri</a>

    @endforeach
  </ul>

</div>


@endsection
