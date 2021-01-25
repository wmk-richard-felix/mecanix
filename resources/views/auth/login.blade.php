<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Entrar em Mecanix</title>


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="../css/login.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6 px-0 d-none d-sm-block">

                <img src="../images/car-mechanic-and-customer-shaking-hands.jpg" alt="login image" class="login-img">


            </div>

            <div class="col-sm-6 login-section-wrapper">
                <div class="brand-wrapper">
                    <img src="../images/Logo-sm.svg" alt="logo" class="logo">
                </div>
                <div class="login-wrapper my-auto">
                    <h1 class="login-title">Bem-vindo à Mecanix</h1>

                    <form action="#!">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Digite seu email">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Insira sua senha">
                        </div>
                        <input name="login" id="login" class="btn btn-block login-btn" type="button" value="Login">
                    </form>

                    <a href="#!" class="forgot-password-link">Esqueci minha senha</a>
                    <p class="login-wrapper-footer-text">Não possui uma conta? <a href="#!" class="text-reset">Criar
                            conta</a></p>
                </div>
            </div>



        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>