@extends('layouts.backend.master')

@section('ptitle', 'CREATE NEW USER')

@section('ctitle', 'CREATE NEW LOGIN USER')

@section('content')
    @include('admin.settings.users.views._new')
@endsection