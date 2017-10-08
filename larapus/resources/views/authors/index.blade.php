@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">List Author</h4>
          </div>
          <div class="panel-body">
            @include('authors.create')
            <table class="table table-striped">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
              @php
                $i=1;
              @endphp
              @foreach ($authors as $author)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
                @foreach ($author->roles as $role)
                <td>{{$role->display_name}}</td>  
                @endforeach
                <td>
                  {{ Form::open(['route' => ['authors.destroy',$author->id],'method' => 'DELETE']) }}
                    <a href="{{ route('authors.edit',$author->id)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                    <button type="submit" name="submit" class="btn btn-danger btn-xs" onclick="return confirm('anda yakin?');"><span class="glyphicon glyphicon-trash"></span></button>
                  {{ Form::close() }}
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
