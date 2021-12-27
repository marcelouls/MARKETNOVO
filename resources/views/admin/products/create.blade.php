@extends('layouts.app')

@section('content')
<h1>CRIAR PRODUTO</h1>
<form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="name">Nome do Produto</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
    @error('name')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label for="description">Descrição</label>
    <input type="text" name="description" class="form-control @error('name') is-invalid @enderror" value="{{old('description')}}">
    @error('description')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label for="description">Conteúdo</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control  @error('name') is-invalid @enderror" value="{{old('body')}}"></textarea>
    @error('body')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label for="phone">Preço</label>
    <input type="text" name="price" class="form-control  @error('name') is-invalid @enderror" value="{{old('price')}}">
    @error('price')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label> Categorias</label>
    <select name="categories[]" id="" class="form-control" multiple>
        @foreach ($categories as $category )
        <option value="{{$category->id}}">{{$category->name}}</option>

        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Fotos do Produto    </label>
    <input type="file" name="photos[]" class="form-control @error('photos.*') is-invalid  @enderror" multiple>
    @error('photos.*')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>


<div>
    <button type="submit" class="btn btn-lg btn-success"> Criar Produto </button>
</div>
</form>
@endsection
