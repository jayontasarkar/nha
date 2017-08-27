@extends('layouts.backend.master')

@section('ptitle', 'NHA PROJECT MANAGEMENT SYSTEM')

@section('ctitle')
	PROJECT TITLE : &nbsp;&nbsp;{{ $project->title }}&nbsp; ({{ $project->location }})
@stop

@section('content')
<div class="row">
	<div class="col-md-6">
		<a href="#" class="btn btn-block btn-warning btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em;"
		>
			<i class="material-icons">gamepad</i>
			START PROJECT LOTTERY
		</a>
	</div>
	<div class="col-md-6">
		<a href="{{ route('lottery.edit', [$project->id]) }}" class="btn btn-block btn-info btn-lg"
			style="height: 100px; line-height: 80px;text-align: center;font-size: 1.5em;"
		>
			<i class="material-icons">mode_edit</i>
			EDIT/UPDATE WINNERS
		</a>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
	  $('.searchable').multiSelect({
	  selectableHeader: "<input type='text' style='width: 100%;' autocomplete='off' placeholder='Search By Name'>",
	  selectionHeader: "<input type='text' style='width: 100%;' autocomplete='off' placeholder='Search By Name'>",
	  afterInit: function(ms){
	    var that = this,
	        $selectableSearch = that.$selectableUl.prev(),
	        $selectionSearch = that.$selectionUl.prev(),
	        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
	        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

	    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
	    .on('keydown', function(e){
	      if (e.which === 40){
	        that.$selectableUl.focus();
	        return false;
	      }
	    });
	    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
	    .on('keydown', function(e){
	      if (e.which == 40){
	        that.$selectionUl.focus();
	        return false;
	      }
	    });
	  },
	  afterSelect: function(values){
	    alert("Select value: " + values);
	  },
	  afterDeselect: function(values){
	    alert("DeSelect value: " + values);
	  }
	});
	});
</script>
@stop