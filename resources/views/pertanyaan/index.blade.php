@extends('adminlte.master')

@section('content')
	<table>
		<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pertanyaan as $key => $item)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->Judul}}</td>
        <td>{{$item->Isi}}</td>
      </tr>
      	@endforeach      
  </table>
	</table>

@endsection