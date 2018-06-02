@extends('templates.template')

@section('content')
		
	<p> form edit</p>

	<form action="{{ url('update/'.$id)}}" method="post">
		{{ csrf_field() }}
		<input type="text" name="nomor" value="{{ $data->nomor}}" placeholder="nomor">
		<input type="text" name="judul" value="{{ $data->judul}}" placeholder="judul">
		<input type="text" name="isi" value="{{ $data->isi}}" placeholder="isi" >
		<input type="text" name="keterangan" value="{{ $data->keterangan}}" placeholder="keterangan">
		
		<button type="submit"> Submit </button>
	</form>
@endsection

