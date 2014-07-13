@extends('layouts.layout')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
       
        <div class="page-header">

          <h3>User <small>profile</small></h3>

        </div>
        <a href="/users" class="btn btn-danger pull-right">BACK</a>
        <table class="table table-hover">
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </thead>
          <tbody>

            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>

  </div>

@stop