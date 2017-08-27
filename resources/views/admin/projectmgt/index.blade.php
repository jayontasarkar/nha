@extends('layouts.backend.master')

@section('ptitle', 'NHA PROJECT MANAGEMENT SYSTEM')

@section('ctitle')
	PROJECT MANAGEMENT
@stop

@section('content')
    @if(count($projects))
		@include('admin.projectmgt.views._table')
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