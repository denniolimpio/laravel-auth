@extends('layouts.app')

@section('content')

<h2> Ciao, ecco la lista dei post:</h2>

  <div class="row">
    <div class="col-12">
      <ul>
        @foreach ($posts as $post)

          <li> {{ $post->title }}</li>

          <a class="btn btn-primary" href="{{ route('posts.show', compact('post')) }}"> Apri</a>

        @endforeach
      </ul>

    </div>

  </div>

</div>
@endsection
