@extends('layout')


@section('content')
    Hello user
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@stop