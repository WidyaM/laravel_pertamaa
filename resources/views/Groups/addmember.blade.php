@extends('layouts.app')

@section('title', 'Groups')

@section('content')


<form action = "/groups/addmember/{{$group->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Teman</label>
    <select class="form-select" aria-label="Default select example" name="friend_id">
    <option selected>Pilih Teman untuk di masukan ke group</option>
    @foreach ($friend as $f)
      <option value="{{$f->id}}">{{$f->nama}}</option>
    @endforeach
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Tambah Ke Group</button>
</form>
    
@endsection