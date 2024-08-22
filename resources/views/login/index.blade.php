<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style scoped>
        @font-face {
            font-family: 'Roboto';
            src: url('{{ asset('fonts/Roboto-LightItalic') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: #6f6f6f;
        }

        .login-section {
            background-color: #ffffff;
            padding: 40px;
            height: 100vh;
        }

        .blue-section {
            background-color: #00bcd4;
            height: 100vh;
        }

        .login-form {
            max-width: 320px;
            margin: auto;
        }

        .login-form h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            text-align: center;
        }

        .btn {
            font-size: 15px;
            padding: 10px 100px;
            border-radius: 20px;
            color: #000;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .btn:hover {
                color: aliceblue;
            }
    </style>
    </head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Seção de Login -->
            <div class="col-md-4 login-section d-flex login-form">
                <div class="row">
                    <div class="logo">
                        <img src="img/ball.png" alt="Logo">
                        <h4>BOOOL</h4>
                    </div>
                    <div class="">
                        <h1>Olá!</h1>
                        <p>Entre com seu login e senha para começar.</p>
                        <form  action="/login/authorizationLogin" method="post">
                            <div class="form-group">
                                <!--componente input -->
                                <x-input type="text" name="username" id="username" label="Username" value="{{ old('username') }}"
                                    placeholder="Enter your username" />
                            </div>
                            <div class="form-group">
                                <!--componente input -->
                                <x-input type="password" name="password" id="password" label="Password" value="{{ old('Password') }}"
                                    placeholder="Enter your username" />
                            </div>
                            <button type="submit" id="bnt-login" class="btn btn-outline-info btn-block">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Seção Azul -->
            <div class="col-md-8 blue-section d-none d-md-block"></div>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
           
    });

</script>

