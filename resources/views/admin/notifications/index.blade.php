@extends('layouts.backend.master')

@section('ptitle', 'APPLICATION NOTIFICATION SYSTEM')

@section('ctitle')
	<span>
		<strong>All {{ ucfirst(Request::input('type')) }} Notifications</strong>
	</span>
	<ul class="list-inline pull-right" style="margin-top: -5px;">
		<li class="list-inline-item">
			<a href="{{ route('notifications.index') }}" class="btn btn-success btn-md">All Notifications</a>
		</li>
		<li class="list-inline-item">
			<a href="{{ url('notifications?type=read') }}" class="btn btn-info btn-md">Read Notifications</a>
		</li>
		<li class="list-inline-item">
			<a href="{{ url('notifications?type=unread') }}" class="btn btn-danger btn-md">Unread Notifications</a>
		</li>
	</ul>
@stop

@section('content')
    @if(count($notifications))
		@include('admin.notifications.views._table')
    @else
		<h3 class="text-center">No result was found to display.</h3>
    @endif
@endsection

@section('script')
	@include('layouts.backend.common._datatable', [
		'columns' => [ 0, 1, 2, 3, 4 ],
		'perPage' => 50
	])
@endsection