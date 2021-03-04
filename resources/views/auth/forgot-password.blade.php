@extends('layout.auth')

@section('title', 'Mecanix - Login')
@section('description', 'O maior portal de profissionais de veículos do Brasil')

@section('content-auth')

    <div class="login-wrapper my-auto ">
        <h1 class="login-title pt-2">Esqueci minha senha, uma nova senha será enviada para o email solicitado abaixo.</h1>

        <form action="#!">

            <div class="col-12 pt-5">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email*" required>
            </div>

            <div class="col-12 pt-5 pb-3">
                <input name="reset-password" id="reset-password" class="w-100 btn-lg login-btn rounded-pill" type="submit" value="Resetar minha senha">
            </div>
            
        </form>

        <div class="container-fluid pb-2">
            <div class="row">
                <div class="col-12 px-1 text-center">
                    <a href="/" class="text-reset">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
