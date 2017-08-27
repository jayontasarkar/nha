@extends('layouts.backend.master')

@section('ptitle', 'NHA PROJECT MANAGEMENT SYSTEM')

@section('ctitle')
	PROJECT TITLE : &nbsp;&nbsp;{{ $project->title }}&nbsp; ({{ $project->location }})
@stop

@section('content')
<select id='custom-headers' class="searchable" multiple='multiple'>
    @for($i = 1; $i <= 40; $i++)
    	<option value='{{ $i }}' {{ $i % 2 == 0 ? 'selected' : '' }}>elem {{ $i }}</option>
    @endfor
</select>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
	  $('.searchable').multiSelect({
	  selectableHeader: "<p style='font-size: 1.3em;text-align: center;'>List of Lottery Loosers</p><input type='text' style='width: 100%;' autocomplete='off' placeholder='Search By Name'>",
	  selectionHeader: "<p style='font-size: 1.3em;text-align: center;'>List of Lottery Winners</p><input type='text' style='width: 100%;' autocomplete='off' placeholder='Search By Name'>",
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