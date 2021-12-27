@extends('layouts.app')

@section('content')
<h1>ATUALIZAR CATEGORIA</h1>
<form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post">
@csrf
@method("PUT")
<div class="form-group">
    <label for="name">Nome de la Categoria</label>
    <input type="text" name="name" class="form-control" value="{{$category->name}}">
</div>

<div class="form-group">
    <label for="description">Descrição</label>
    <input type="text" name="description" class="form-control" value="{{$category->description}}">
</div>



<div>
    <button type="submit" class="btn btn-lg btn-success"> Atualizar Categoria </button>
</div>
</form>
@endsection
