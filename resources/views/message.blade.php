@extends('layouts.app')
@section('content')
<div class="container">
    <a href="/message-all" class="btn btn-dark">totas as mensagens</a>
    <div class="row justify-content-center">
        <form action="" method="POST">
            @csrf
            <input type="text" class="form-control mt-3" name="title" placeholder="Titulo">
            <textarea name="body" class="form-control mt-3" placeholder="Conteudo"></textarea>
            <input type="number" class="form-control mt-3" name="user_id" placeholder="Usuario">
            <button type="submit" class="btn btn-info mt-3">Salvar</button>
        </form>
    </div>
</div>
@endsection
