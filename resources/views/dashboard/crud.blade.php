@extends('templates.template')

@section('style')
  <style>
      
      h1 {
      	color: red;
      	text-align:  center;
      	padding-top: 30px;
      	
      }
      .hidden:{
		display: block;
	}



    </style>
@endsection

@section ('content')

<!--<form action="" method="post">
	{{ csrf_field() }}
	<input type="text" name="nama" placeholder="nama">
	<input type="text" name="alamat" placeholder="username">
	<input type="text" name="Email" placeholder="fakultas">
	<input type="text" name="Password" placeholder="jurusan">

	<button type="submit">Submit</button>
</form>
-->
<div class="content">
		<form action="{{route('create')}}" method="post">
			{{ csrf_field() }}
			<input type="text" name="name" placeholder="nama">
			<input type="text" name="name" placeholder="username">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="password" placeholder="password">

			<button type="submit">Submit</button>
		</form>
</div>
<div class="container-fluid">
	<h1>Bookings</h1>
	
	<div class="table-responsive">
		<table class="table table-striped" id="bookings-table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Password</th>
					<th>action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
@endsection

@section ('script')
<script type="text/javascript">
$(function() {
    $('#bookings-table').DataTable({
        processing: true,
        serverSide: true,
		responsive: true,
        ajax: "{!! route('datatabel') !!}",
        columns: [
			
			{ data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'password', name: 'password' },
			{ data: 'action', name: 'action' }

			]
    });

    $('#buttoncreate').click(function(){
    	
    	$("#create").removeAttr('hidden');
    })

});
</script>
@endsection

