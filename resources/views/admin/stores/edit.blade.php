@extends('layouts.app')

@section('content')
<h1>CRIAR LOJA</h1>
<form action="{{route('admin.stores.update',['store' => $store->id])}}" method="post" enctype="multipart/form-data">
@csrf
@method("PUT")

<div class="form-group">
    <label for="name">Loja</label>
    <input type="text" name="name" class="form-control" value="{{$store->name}}">
</div>

<div class="form-group">
    <label for="description">Descrição</label>
    <input type="text" name="description" class="form-control" value="{{$store->descricao}}">
</div>

<div class="form-group">
    <label for="phone">phone</label>
    <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
</div>

<div class="form-group">
    <label for="mobile_phone">Celular\whatsapp</label>
    <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_fone}}">
</div>

<div class="form-group">
    <p>
        <img src="{{asset('storage/'.$store->logo)}}" alt="">
    </p>
    <label>Logo Loja  </label>
    <input type="file" name="logo" class="form-control @error('logo') is-invalid  @enderror" >
    @error('logo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>



<div>
    <button type="submit" class="btn btn-lg btn-success"> Atualizar Loja </button>
</div>
</form>
@endsection
