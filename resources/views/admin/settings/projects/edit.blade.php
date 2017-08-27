@extends('layouts.backend.master')

@section('ptitle', 'Edit Project')

@section('ctitle', 'Edit Project: ' . $project->title)

@section('content')
    @if($project)
		@include('admin.settings.projects.views._edit')
    @else
		<h3 class="text-center">No result was found to display. <a class="btn btn-link" href="{{ route('settings.projects.create') }}"> Create new one</a></h3>
    @endif
@endsection