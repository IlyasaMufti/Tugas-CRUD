@extends('adminlte.master')

@section('content')

<table>
		<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Jawaban</th>
       </tr>
    </thead>
    <tbody>
    	@foreach($jawaban as $key => $item)
      <tr>
        
        <td>{{$item->Isi}}</td>
       </tr>
      @endforeach      
  </table>
	</table>
@endsection