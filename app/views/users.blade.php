@extends('layouts.layout')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>list of users</h3>

        <table class="table table-hover">
          <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>View</th>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="/user/{{ $user->id }}" class="btn btn-info btn-sm">
                    view <i class="fa fa-circle-thin"></i>
                  </a>
                </td>
              </tr>
            @endforeach  

          </tbody>
        </table>

      </div>
    </div>

    <div class="row">
      <div class="col-md-6" >

        @if (Session::has('message'))
          Data is saved!
        @endif  

        <form role="form" method="POST" action="/profile">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>        

      </div>
    </div>  
  </div>

@stop