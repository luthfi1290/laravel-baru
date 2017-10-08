@extends('layouts.app')

@section('content')
    @if ( count($books) < 1)
        @include('members.upload')
    @else
        @include('members.status')
    @endif
@endsection