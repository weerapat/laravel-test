@extends('layout')


@section('content')
    Hello user s
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@stop