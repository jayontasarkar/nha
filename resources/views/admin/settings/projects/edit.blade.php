@extends('layouts.backend.master')

@section('ptitle', 'LIST USERS')

@section('ctitle', 'ALL USERS PAGE')

@section('content')
    @if($user)
		@include('admin.settings.users.views._edit')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.users.create') }}"> Create new one</a></h3>
    @endif
@endsection