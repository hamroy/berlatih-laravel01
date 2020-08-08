@extends('adminlte.master')

@section('content')
<div class="card">
<div class="card-body">
<a href="{{ url('pertanyaan') }}" class="btn btn-primary mb-2">Kembali</a>
@if(session('success'))
<div class="alert alert-success">{{ session("success") }}</div>
@endif
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">No.</th>
      <th>Judul</th>
      <th>Isi</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($list as $key => $val)
         <tr>
          <td>{{$key+1}}</td>
          <td>{{ $val->judul}}</td>
          <td>{{ $val->isi}}</td>
        </tr>
      @empty
        <tr>
          <td colspan="2">Data kosong</td>
        </tr>
      @endforelse  
  </tbody>
</table>
</div>
</div>
@endsection

@push('script')

@endpush
