@extends('Livros.layout')
@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Ano de Publicação</th>
      <th scope="col">Gênero</th>
    </tr>
  </thead>
  @if($livro)
  <tbody>
    @foreach($livro as $livros)
    <tr>
      <td></td>
      <td>{{$livros -> titulo}}</td>
      <td>{{$livros -> autor}}</td>
      <td>{{$livros -> ano_publicacao}}</td>
      <td>{{$livros -> genero}}</td>
    </tr>
    @endforeach
  </tbody>
  
  @endif
</table>
<div class="d-flex">
  <div class="mx-auto">
{!! $livro->links() !!}
</div>
</div>

@endsection