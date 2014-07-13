@extends('layout')


@section('content')

  <div>
  </div>
    Hello user
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@stop