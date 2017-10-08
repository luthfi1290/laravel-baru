@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">List Book</h3>
                    </div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($books as $book)
                            <tr>
                                <td><img src="{{ asset('storage/cover/'.$book->path)}}" alt="{{ $book->title }}" height='150px'></td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->description }}</td>
                                <td>
                                  {{ Form::model($book,['route' =>['books.update',$book->id] , 'method' => 'patch'])}}
                                    {!! Form::select('status',[
                                      'pending' => 'Pending',
                                      'accept' => 'Accept',
                                      'reject' => 'Reject'
                                    ],$book->status)
                                    !!}
                                    <button type="submit" name="submit" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-ok-circle"></span></button>
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
    </div>
@endsection
