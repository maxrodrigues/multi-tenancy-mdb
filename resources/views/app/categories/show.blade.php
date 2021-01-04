@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 my-2">
            <a href="{{ route('app.categories.index') }}" class="btn btn-primary">Voltar</a>
        </div>
        <div class="col-md-12">
            <div class="card">
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
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
