@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 my-2">
            <a href="{{ route('app.products.index') }}" class="btn btn-primary">Voltar</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('app.products.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10" readonly>{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Preço</label>
                            <select name="category_id" id="category_id" class="form-control" readonly>
                                <option value="">{{ $product->category->name }}</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
