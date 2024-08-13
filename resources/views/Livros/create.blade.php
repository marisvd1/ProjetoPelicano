@extends('Livros.layout')
@section('content')
<div class="wrapperdiv">
<div class="formcontainer">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastrar livro</h2>
            </div>
        </div>
    </div>
    <form action="{{route('livros.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-control"> 
                        Título
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="titulo" id="titulo" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="autor" class="col-sm-2 col-form-control"> 
                        Autor
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="autor" id="autor" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ano_publicacao" class="col-sm-2 col-form-control"> 
                        Ano de Publicação
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="ano_publicacao" id="ano_publicacao" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="genero" class="col-sm-2 col-form-control"> 
                        Gênero
                    </label>
                    <div class="col-sm-10">
                        <select name="genero" id="genero" class="form-control">   
                        <option value="">Selecionar</option>
                        @if($generos)
                        @foreach($generos as $genero)
                        <option value="{{$genero}}">{{$genero}}</option>
                        @endforeach
                        @endif
                        </select>  
                </div>
                </div>
                <div class="col-sm-10">
                    <button type="submit" name="submit" id="submit" class="btn btn-light">
                        Cadastrar
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
