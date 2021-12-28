@extends('layouts.front')


@section('content')

    <div class="row">
        <div class="col-12">
            <h2>Carrinho ds Compras</h2>
            <hr>
        </div>
    </div>

    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th>Açâo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $c)
                <tr>
                    <td>{{$c['name']}}</td>
                    <td>{{$c['price']}}</td>
                    <td>{{$c['amount']}}</td>
                    <td>{{number_format(($c['price'] * $c['amount']), 2, ',', '.')}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger">REMOVER</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>




@endsection
