@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
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
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Preço</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">:. SELECIONE .:</option>
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name  }}</option>
                                @empty
                                    <option value="">Nenhuma Categoria Cadastrada</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
