@extends('adminlte.master')

@section('content')

<div class="card" style="width: 18rem;">
  <div class="card-body">
  	@foreach($pertanyaan as $key=>$item)
    <h3 class="card-title">Judul : {{$item->Judul}}</h3>
    <p class="card-text">Pertanyaan : {{$item->Isi}} <br><br></p>
    <p class="card-text">Tanggal dibuat : {{$item->created_at}}</p>
    <p class="card-text">Tanggal diperbarui : {{$item->updated_at}} <br><br></p>
  </div>
  	@endforeach
  <ul class="list-group list-group-flush">
  	@foreach($jawaban as $key=>$item)
    <li class="list-group-item">Jawaban : {{$item->Isi}}</li>
    @endforeach
  </ul>
  <div class="card-body">
  	@foreach($pertanyaan as $key=>$item)
    <form method="POST" action="/pertanyaan/{{$item->id}}/edit" style="display: inline">
    	@csrf
    	@method('GET')
    <button type="submit" class="btn btn-sm btn-success">Ubah</button>
	</form>
    
    <form method="POST" action="/pertanyaan/{{$item->id}}" style="display: inline">
    	@csrf
    	@method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
	</form>
    @endforeach
  </div>
</div>

@endsection