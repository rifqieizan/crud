@extends('templates.template')

@section('style')
	<style type="text/css">
	p
	{
		text-align: center;
	}
	form
	{
		padding-top: 15px;
		padding-left: 150px;
	}
	</style>
@endsection

@section('content') 

<button id="buttoncreate"> Create </button>


<form id="create" action="{{route('creates')}}" method="post" hidden>
	{{ csrf_field() }}

	<input type="text" name="nomor" placeholder="nomor">
	<input type="text" name="judul" placeholder="judul">
	<input type="text" name="isi" placeholder="isi">
	<input type="text" name="keterangan" placeholder="keterangan">

	<button> submit </button>
</form>

<div class="container-fluid">
	<h1>Bookings</h1>
	
	<div class="table-responsive">
		<table class="table table-striped" id="bookings-table">
			<thead>
				<tr>
					<th>Nomor</th>
					<th>Judul</th>
					<th>Isi</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('delete')}}" method="post">
			{{ csrf_field() }}
			<input type="hidden" id="id" name="id">
			<p>Are you sure want to delete this data ? </p>
			<button class="btn btn-danger pull-right" type="submit">Delete</button>
			<button class="btn pull-right" type="button" data-dismiss="modal">Cancel</button>
		</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div -->>
    </div>
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
			
			{ data: 'nomor', name: 'nomor' },
            { data: 'judul', name: 'judul' },
            { data: 'isi', name: 'isi' },

            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'password', name: 'password' },
			{ data: 'action', name: 'action' }

			]
    });

    $('#buttoncreate').click(function(){
    	if ($("#create").attr('hidden')) {
    			$("#create").removeAttr('hidden');
    	} else {
    			$("#create").attr('hidden');
    	}
    })
});

function deletesData(id) {
	
	$('#id').val(id);
	$('#exampleModal').modal('show');

}

</script>
@endsection