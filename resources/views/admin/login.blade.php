<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Sistemas de Incrição IFNMG - Pirapora </title>

    <!-- Bootstrap -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=App::make('url')->to('/');?>/resources/assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              <h1>Login</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Email" required />
              </div>
              <div>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Login</button>
                <a class="reset_pass" href="#">Esqueci a senha?</a>
              </div>
            </form>
              <div class="clearfix"></div>

              <div class="separator">
                
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>Sistema de Inscrição IFNMG Pirapora</h1>
                  <p>©2016 - {{ date('Y') }} Todos os direitos reservados. IFNMG - Pirapora</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>