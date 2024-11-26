<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    </head>
    <body>
        <form class="form-signin" action="logar.php" method="POST">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário</label>
                        <input type="usuario" class="form-control" name="usuario" id="inputUsuario" placeholder="Usuário"/>
                        <p id="erroUser"></p>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha"/>
                        <p id="erroPassword"></p>
                    </div>
                    <button type="submit" class="btn btn-primary">Fazer Login</button>    
                </div>
            </div>
        </form>
    </body>
</html>