@extends('layout.auth')

@section('title', 'Mecanix - Login')
@section('description', 'O maior portal de profissionais de veículos do Brasil')

@section('content-auth')

    <div class="login-wrapper my-auto ">
        <h1 class="login-title">Preencha os dados abaixo para criar sua conta na Mecanix.</h1>

        <form action="#!">
            <div class="row g-3">
                <div class="col-6 pt-4">
                    <label for="firstname" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Nome*" required>
                </div>

                <div class="col-6 pt-4">
                    <label for="lastname" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Sobrenome*" required>
                </div>

                <div class="col-12 pt-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email*" required>
                    <div class="invalid-feedback">
                        Por favor, digite seu email.
                    </div>
                </div>

                <div class="col-12 pt-4">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha*" required>
                </div>

                <div class="col-12 pt-4 pb-3">
                    <input name="signup" id="signup" class="w-100 btn-lg login-btn rounded-pill" type="submit" value="Criar conta">
                </div>
            </div>
        </form>

        <div class="container-fluid pb-2">
            <div class="row">
                <div class="col-12 px-1 text-center">
                    <a href="#" class="text-reset">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
