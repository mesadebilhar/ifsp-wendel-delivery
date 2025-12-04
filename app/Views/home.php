<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/beercss@3.12.13/dist/cdn/beer.min.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/npm/beercss@3.12.13/dist/cdn/beer.min.js"></script>
    <script type="module"
        src="https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.1.2/dist/cdn/material-dynamic-colors.min.js"></script>
    <title>Sputs</title>

</head>

<body>
    <!-- @Menu Navegação Lateral breakpoint large -->
    <nav class="left max l top-margin">
        <header>
            <nav>
                <img src="https://media.istockphoto.com/id/1217286823/pt/vetorial/space-landscape-with-scenic-view-on-sputnik-or-artificial-satellite-flying-around-earth.jpg?s=612x612&w=0&k=20&c=q7VIlZAyS_FbroHx6P35l0kpERsRhYtMfigQ2iM8Esw="
                    alt="" class="circle large">
                <h5>Sputniki</h5>
                <br>
            </nav>
        </header>

        <div class="divider"></div>
        <!-- Âncoras bp large -->
        <a href=""><i>travel_explore</i> Explorar</a>
        <a href=""><i>fastfood</i>Pedidos</a>
        <a href=""><i>shopping_cart</i> Carrinho</a>
        <a href=""><i>two_wheeler</i>Entregas</a>
        
        <a href=""><i>settings</i>Configurações</a>
        <div class="divider bottom-margin"></div>
        <button class="top-margin responsive red5">
            <a href="/logout" class="white-text">Sair</a>
        </button>
    </nav>
    <!-- Menu navegação lateral breakpoint large@ -->
    <!-- @Menu lateral breakpoint medium -->
    <nav class="left m">
        <header>
            <img src="https://media.istockphoto.com/id/1217286823/pt/vetorial/space-landscape-with-scenic-view-on-sputnik-or-artificial-satellite-flying-around-earth.jpg?s=612x612&w=0&k=20&c=q7VIlZAyS_FbroHx6P35l0kpERsRhYtMfigQ2iM8Esw="
                alt="" class="circle large">
        </header>
        <a href=""><i>travel_explore</i> Explorar</a>
        <a href=""><i>fastfood</i>Pedidos</a>
        <a href=""><i>shopping_cart</i> Carrinho</a>
        <a href=""><i>two_wheeler</i>Entregas</a>
        
        <div class="divider bottom-margin"></div>
        <button class="top-margin responsive red5">
            <p class="white-text">Sair</p>
        </button>

    </nav>
    <!-- Menu lateral breakpoint medium@ -->
    <!-- @Menu lateral bp small -->
    <nav class="bottom s primary wrap">
        <a href=""><i>travel_explore</i></a>
        <a href=""><i>fastfood</i></a>
        <a href=""><i>shopping_cart</i> </a>
        <a href=""><i>two_wheeler</i></a>
        
        <a href=""><i>settings</i></a>

    </nav>
    <!-- Menu lateral bp small@-->

    <!-- @Seção Principal -->
    <main class="responsive max no-padding">
        <img src="rainbow-vortex.svg" alt="" class="responsive small-height l bottom-round">
        <img src="rainbow-vortex.svg" alt="" class="responsive small  m bottom-round">
        <div class="responsive s padding primary">
            <p class=" black-text center-align">Sputniki</p>
        </div>
        <div class="fixed transparent bottom right min padding l m">
            <nav class="toolbar large-elevate min orange8">
                <i class="circle padding" onclick="ui('mode', ui('mode') == 'dark' ? 'light' : 'dark')">lightbulb</i>
            </nav>
        </div>
        <!-- @Seção com cards -->

        <div class="grid">
         <?php if(count($restaurante) > 0): foreach($restaurante as $rest): ?>
        <article class="border s8 m4 l2">
            <div class="row">
                <img class="circle large" src="https://i.pinimg.com/736x/fa/96/b2/fa96b2846065dcb74de4414e939a4de4.jpg">
                <div class="max">
                    <h5><?php echo $rest->restaurante_nome?></h5>
                    <p>Endereço: <?php echo $rest->endereco_restaurante?></p>
                </div>
            </div>
            <nav>
                <button>Visualizar</button>
            </nav>
            
        </article>
                <?php endforeach; endif; ?>
        </div>
        <?php if(count($restaurante) == 0): echo '<h3 class="center-align">Nenhum restaurante cadastrado!</h3>'; endif;?>
        <!-- Seção copm cards@ -->
    </main>
    <!-- Seção Principal@ -->
</body>

</html>