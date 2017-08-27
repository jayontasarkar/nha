@extends('layouts.backend.master')

@section('ptitle', 'PROJECT PAYMENT DETAILS')

@section('ctitle')
	PROJECT PAYMENT DETAILS
@stop

@section('content')

<form action="">
	<div class="row clearfix">
	    <div class="col-md-6">
	        <div class="form-group form-float">
	            <div class="form-line {{ $errors->first('starting_date') ? 'error' : '' }}">
	                <input type="text" name="starting_date" class="datepicker form-control" placeholder="Project Installment Start Date" data-dtp="dtp_DopE2">
	            </div>
	            @include('layouts.backend.common.formError', ['key' => 'starting_date'])
	        </div>
	    </div>
	    <div class="col-md-6">
	        <div class="form-group form-float">
	            <div class="form-line {{ $errors->first('ending_date') ? 'error' : '' }}">
	                <input type="text" name="ending_date" class="datepicker form-control" placeholder="Project Installment End Date" data-dtp="dtp_DopE2">
	            </div>
	            @include('layouts.backend.common.formError', ['key' => 'ending_date'])
	        </div>
	    </div>
	    <div class="col-md-6">
	    	<div class="form-group form-float">
	    		<input class="form-control" type="text" name="" placeholder="Project Name">
	    	</div>
	    </div>
	    <div class="col-md-6">
	    	<div class="form-group form-float">
	    		<input class="form-control" type="number" name="" placeholder="Per Installment">
	    	</div>
	    </div>
	    <div class="col-md-6">
	    	<div class="form-group form-float">
	    		<input class="form-control" type="text" name="" placeholder="First Payment">
	    	</div>
	    </div>
	    <div class="col-md-6">
	    	<div class="form-group form-float">
	    		<input class="form-control" type="number" name="" placeholder="Project Amount">
	    	</div>
	    </div>
	    <div>
	    	<button type="submit" class="btn btn-info">Submit</button>
	    </div>
	</div>
</form>

@stop