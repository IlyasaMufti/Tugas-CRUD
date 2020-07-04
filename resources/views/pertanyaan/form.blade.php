@extends('adminlte.master')

@section('content')
	<form action= "/pertanyaan" method="POST">
		@csrf
		<div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Tulis Judul" id="judul" name="Judul">
  </div>
  <div class="form-group">
    <label for="isi">Pertanyaan:</label>
    <input type="text" class="form-control" placeholder="Tulis pertanyaan" id="isi" name="Isi">
    <input hidden name="created_at" value="{{\carbon\carbon::now()}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection