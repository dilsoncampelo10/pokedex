<?php $base = "http://localhost:50/pokedex/public"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">
</head>

<body>

    <div class="container">
        <h1>Monte seu time!</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Login</h2>
                <form action="<?= $base ?>/login/signin" method="post">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
                    <input type="submit" value="Fazer login" class="btn btn-dark mt-2">
                </form>
            </div>
            <div class="col-md-6">
                <h2>Cadastro</h2>
                <form action="<?= $base ?>/login/signup" method="post">
                    <label for="nickname" class="form-label">Nickname</label>
                    <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Digite seu nickname (apelido)">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                    <label for="birthdate" class="form-label">Data de nascimento</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
                    <input type="submit" value="Fazer cadastro" class="btn btn-dark mt-2">
                </form>
            </div>
        </div>

    </div>

</body>

</html>