@extends('adminlte.master')

@section('content')
<div class="card">
<div class="card-body">
<a href="{{ url('pertanyaan/create') }}" class="btn btn-primary mb-2">TAMBAH DATA</a>
@if(session('success'))
<div class="alert alert-success">{{ session("success") }}</div>
@endif
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">No.</th>
      <th>Judul</th>
      <th>Isi</th>
      <th style="width: 40px">Action</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($list as $key => $val)
         <tr>
          <td>{{$key+1}}</td>
          <td>{{ $val->judul}}</td>
          <td>{{ $val->isi}}</td>
          <td style="display: flex;">
            <a href="{{url('pertanyaan/'.$val->id)}}" class="btn btn-default btn-sm">show</a>
            <a href="{{url('pertanyaan/'.$val->id).'/edit'}}" class="btn btn-warning btn-sm">edit</a>
            <form action="{{url('pertanyaan/'.$val->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger btn-sm" value="delete">
            </form>
            
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3">Data kosong</td>
        </tr>
      @endforelse  
  </tbody>
</table>
</div>
</div>
@endsection

@push('script')

@endpush
