@extends('adminlte.master')

@section('content')
	
	<table>
		<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pertanyaan as $key => $item)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->Judul}}</td>
        <td>{{$item->Isi}}</td>
        <td><a href="{{ url ('/pertanyaan/'.$item->id)}}">Detail Pertanyaan</a></td>
        <td><form action="{{ url ('/jawaban/'.$item->id)}}" method="POST"><div class="form-group">
        	@csrf
    		<input type="text" class="form-control" placeholder="Tulis jawaban" id="isi" name="Isi">
   			<input hidden name="id_pertanyaan" value="{{$item->id}}"  >
    		<input hidden name="created_at" value="{{\carbon\carbon::now()}}">
  			</div>
  			<button type="submit" class="btn btn-primary">Submit</button> 
  		</form>
  		</td>
      </tr>
      	@endforeach      
  </table>
	</table>

@endsection