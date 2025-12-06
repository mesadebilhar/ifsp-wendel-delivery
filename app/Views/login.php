<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!--Útil para ícones: https://fonts.google.com/icons-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/beercss@3.12.13/dist/cdn/beer.min.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/npm/beercss@3.12.13/dist/cdn/beer.min.js"></script>
    <script type="module"
        src="https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.1.2/dist/cdn/material-dynamic-colors.min.js"></script>
    <title>Delivery muito legal.</title>
</head>

<body>
    <!--<header class="indigo max center-align"><h1 class=""> Delivery  <h1></body>-->
    <main class="responsive center-align ">
        <!--@Título-->
        <h1 class="center-align large">
            <img src="https://blob.gifcities.org/gifcities/KYXN2V7K33GXFIDPGF7Z6ABOKKZEMYB4.gif" alt="">
            Delivery Sputniki
            <img src="https://blob.gifcities.org/gifcities/KYXN2V7K33GXFIDPGF7Z6ABOKKZEMYB4.gif" alt=""></h3>
            <h6>Um sistema de entrega fora de órbita!</h4>
                <img src="https://blob.gifcities.org/gifcities/U57UBMIUCFTJYKK7U6SOGV4PJZD7EPWN.gif" alt="">
                <!--Título@-->
                <div class="large-space"></div>
                <!--@Nav com tabs!-->
                <div class="grid">
                    <div class="s8 m4"></div>
                    <nav class="tabbed s10 m5">
                        <a data-ui="#login" class="active">
                            <span>Login</span>
                        </a>
                        <a data-ui="#registrar">
                            <span>Registrar</span>
                        </a>
                    </nav>
                </div>
                <!--Nav com tabs@-->

                <div class="small-space"></div>

                <!--@Formulário Login-->


                <div class="grid">
                    <div class="s8 m4"></div>

                    <div id="login" class="page left active padding border round s10 m5">
                        <!--@Email Formulário-->
                        <form action="/login" method="post">
                            <?php echo csrf_field(); ?>

                            <h5>Entrar na conta</h5>
                            <div class="left-align field border">
                                <label for="">E-mail</label>
                                <input type="text" name="email">
                            </div>
                            <!--Email Formulário@-->
                            <!--@Senha Formulário-->
                            <div class="left-align field border">
                                <label for="">Senha</label>
                                <input type="password" name="senha">
                            </div>
                            <div class="left-align bottom-padding top-padding">
                                <button class="primary" type="submit" name="info" value="login"><i>login</i> LOGIN</button>
                            </div>
                            <!--Senha Formulário@-->
                        </form>
                    </div>
                    <!--Formulário Login@-->


                    <!--@Formulário Registrar-->

                    <div id="registrar" class="page left padding border round s10 m5">
                        <form action="/registrar" method="post">
                            <?php echo csrf_field(); ?>
                            <h5>Criar conta</h5>
                            <div class="left-align field border">
                                <label for="">Nome</label>
                                <input type="text" name="nome" required>
                            </div>
                            <div class="left-align field border">
                                <label for="">Sobrenome</label>
                                <input type="text" name="sobrenome" required>
                            </div>
                            <div class="left-align field border">
                                <label for="">E-mail</label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="left-align field border">
                                <label for="">Endereço</label>
                                <input type="text" name="endereco_user" required>
                            </div>
                            <div class="left-align field border">
                                <label for="">Senha</label>
                                <input type="password" name="senha" required>
                            </div>
                            <div class="left-align top-padding">
                                <button class="primary" type="submit"><i>login</i> Cadastrar </button>
                            </div>
                        </form>
                        <!--Formulário Registrar@-->
                    </div>
                </div>

                <!--Formulário Login@-->

                <div class="small-space padding"></div>
                <!--@Mensagem de erro-->
                <?php if (session()->getFlashdata('erro')): ?>
                    <span id="snack" class="snackbar error active">
                        <?php echo session()->getFlashdata('erro') ?>
                    </span>
                <?php endif; ?>
                <!-- Mensagem de erro@ -->

                <!-- @Sucesso ao criar conta -->
                <?php if (session()->getFlashdata('msg')): ?>
                    <span id="snack" class="snackbar success active">
                        <?php echo session()->getFlashdata('msg') ?>
                    </span>
                <?php endif; ?>
                <!-- Sucesso ao criar conta@ -->
                <!--@Botão para mudar o tema-->
                <div class="grid">
                    <div class="s8 m4"></div>
                    <div class="left-align top-padding s10 m5">
                        <!--Peguei a func daqi: https://codepen.io/kickerbnu/pen/QWreKKx-->
                        <button class="square msmall" onclick="ui('mode', ui('mode') == 'dark' ? 'light' : 'dark')">
                            <i>lightbulb</i>
                        </button>
                    </div>
                </div>
                <!--Botão para mudar o tema@-->
                <script>
                    window.onload = function() {
                        //sair a snacc barrrrrrrrrrrrrr
                        let snacc = document.getElementById('snack');
                        snacc.addEventListener('click', (e) => {
                            if (e.target == snacc) {
                                snacc.classList.toggle('active');
                            }
                        });
                        setTimeout(() => {
                            snacc.classList.remove('active');
                        }, 3600);
                    }
                </script>
    </main>





</html>