@if(session()->has('success'))
	<div class="alert bg-green flash-msg">
	    {{ session()->get('success') }}
	</div>
@endif

@if(session()->has('warning'))
	<div class="alert bg-red flash-msg">
	    {{ session()->get('warning') }}
	</div>
@endif