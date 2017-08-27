@extends('layouts.backend.master')

@section('ptitle', 'APPLICANT FINANCIAL DETAILS')

@section('ctitle')
	APPLICANT NAME : &nbsp;&nbsp; Md. Rabiul Islam
@stop

@section('content')
<div class="row">
	<div class='col-sm-7'>
		<p><strong>Name:</strong> Md. Rabiul Islam</p>
		<p><strong>Phone:</strong> 01676041105</p>
		<p><strong>Email:</strong> rabiul@gmail.com</p>
		<p><strong>Date Of Birth:</strong> 23 August, 1956 </p>
		<p><strong>Father/Husband Name:</strong> Md. ditechaina </p>
 		<p><strong>Address:</strong> Banani,Dhaka, Bangladesh</p>
	</div>
	<div class='col-sm-5 text-center'>  
		<img height="200" width="200" class="img-responsive img-thumbnail img-circle" src="{{ asset('img/rabiul.png') }}" alt=""> 
	</div>		
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-striped table-hover datatable js-exportable">
		    <thead>
		        <tr>
		            <th>Date</th>
		            <th>Installment Fee</th>
		            <th>Dr</th>
		            <th>Cr</th>
		            <th>Balance</th>
		            <th>Total Balance</th>

		        </tr>
		    </thead>
		    <tbody>
	            <tr>
	                <td>23 June, 2016</td>
	                <td>Partial Payment of Total amount</td>
	                <td>100000/=</td>
	                <td>0.00</td>
	                <td>100000/=</td>            
	                <td>10000000/=</td>            
	            </tr>
	            <tr>
	                <td>25 June, 2016</td>
	                <td>Partial Payment of Total amount</td>
	                <td>0.00</td>
	                <td>100000/=</td>
	                <td>0.00</td>            
	                <td>9900000/=</td>            
	            </tr> 
	            <tr>
	                <td>25 June, 2017</td>
	                <td>Second partial Payment of Total amount</td>
	                <td>100000/=</td>
	                <td>0.00</td>
	                <td>0.00</td>            
	                <td>9900000/=</td>            
	            </tr>
	            <tr>
	                <td>25 June, 2017</td>
	                <td>Second partial Payment of Total amount</td>
	                <td>0.00</td>
	                <td>100000/=</td>
	                <td>0.00</td>            
	                <td>9800000/=</td>            
	            </tr>
		    </tbody>
		</table>
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        $('.datatable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            "searching": false,
	        "paging": false, 
	        "info": false,         
	        "lengthChange":false,
	        "ordering": false,
            buttons: [
                {
                    extend: 'pdf'
                },
                {
                    extend: 'print'
                }
            ]
        });
    });
</script>
@stop