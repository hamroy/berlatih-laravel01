@extends('adminlte.master')

@section('content')
<div class="card">
<div class="card-header">
  <h3 class="card-title">Input Pertanyaan</h3>
</div>
<div class="card-body">
<form action="{{url('pertanyaan')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" aria-describedby="judulHelp" value="{{old('judul','')}}">
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Isi</label>
    <textarea name="isi" class="form-control" id="" rows="4">{{old('isi','')}}</textarea>
    @error('isi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection

@push('script')

@endpush
