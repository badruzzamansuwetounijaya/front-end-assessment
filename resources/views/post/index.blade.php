@extends('layouts.app')

@section('content')
  <ul>
    @foreach ($posts['data'] as $post)
    <li>
      {{ $post['title'] }} 
    </li>
    @endforeach

  </ul>

  {{-- {{ $posts }} --}}
  {{-- {{ $posts }} --}}
@endsection