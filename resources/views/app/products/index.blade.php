@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-2">
            <a href="{{ route('app.products.create') }}" class="btn btn-primary">Criar Produto</a>
        </div>
        <div class="col-md-12 m-2">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 7%" scope="col">#</th>
                                <th style="width: 75%" scope="col">Categoria</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <a href="{{ route('app.products.show', ['product' => $product->id]) }}" class="btn btn-dark">Visualizar</a>
                                        <a href="{{ route('app.products.edit', ['product' => $product->id]) }}" class="btn btn-warning">Editar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th scope="row" colspan="2">Não há registros</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
