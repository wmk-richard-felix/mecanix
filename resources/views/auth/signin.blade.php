@extends('layout.auth')

@section('title', 'Mecanix - Login')
@section('description', 'O maior portal de profissionais de veículos do Brasil')

@section('content-auth')

    <div class="login-wrapper my-auto ">
        <h1 class="login-title">Para ver e gerenciar as informações da sua conta, entre abaixo.</h1>

        <form action="#!">

            <div class="col-12 pt-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email*" required>
            </div>

            <div class="col-12 pt-4">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Digite sua senha*" required>
            </div>

            <div class="col-12 pt-2 text-end">
                <a href="/auth/forgot-password" class="forgot-password-link">Esqueci minha senha</a>
            </div>

            <div class="col-12 pt-4 pb-3">
                <input name="login" id="login" class="w-100 btn-lg login-btn rounded-pill" type="submit" value="Login">
            </div>
            
        </form>

        <div class="container-fluid pb-2">
            <div class="row">
                <div class="col-12 px-1 text-center">
                    <p class="my-0 login-wrapper-footer-text">Não possui uma conta?
                        <a href="/auth/signup" class="text-reset">Criar conta</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
