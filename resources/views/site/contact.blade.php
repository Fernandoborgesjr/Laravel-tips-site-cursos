@extends('site.master.layout')

@section('content')
<div class="container py-5">
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Contato</h1>
            <hr class="my-4">
            <p class="lead">Nossa equipe está sempre a disposição para lhe ajudar! Entre em contato e retornaremos o mais breve possí</p>
            </p>
        </div>
    </div>

    <form>
        <div class="mb-3 form-group">
            <label for="exampleFormControlInput1" class="form-label">Endereço de e-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleFormControlTextarea1" class="form-label">Menssagem:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection