@extends('adminlte.master')

@section('content')
@foreach($pertanyaan as $key => $item)
<form action= "{{url('/pertanyaan/'.$item->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Tulis Judul" id="judul" name="Judul" value="{{$item -> Judul}}">
  </div>
  <div class="form-group">
    <label for="isi">Pertanyaan:</label>
    <input type="text" class="form-control" placeholder="Tulis pertanyaan" id="isi" name="Isi" value="{{$item -> Isi}}">
    <input hidden name="updated_at" value="{{\carbon\carbon::now()}}">
  </div>
  <button type="Submit" class="btn btn-primary">Update</button>
	</form>
@endforeach
@endsection