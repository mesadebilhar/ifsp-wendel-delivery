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
                <img src="https://media.istockphoto.com/id/1217286823/pt/vetorial/space-landscape-with-scenic-view-on-sputnik-or-artificial-satellite-flying-around-earth.jpg?s=612x612&w=0&k=20&c=q7VIlZAyS_FbroHx6P35l0kpERsRhYtMfigQ2iM8Esw=" alt="" class="circle large">
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
        <a href=""><i>restaurant</i>Conf. Restaurant</a>
        <a href=""><i>settings</i>Configurações</a>
        <div class="divider bottom-margin"></div>
        <button class="top-margin responsive red5"><p class="white-text">Sair</p></button>     
    </nav>
    <!-- Menu navegação lateral breakpoint large@ -->
    <!-- @Menu lateral breakpoint medium -->
     <nav class="left m">
        <header>
            <img src="https://media.istockphoto.com/id/1217286823/pt/vetorial/space-landscape-with-scenic-view-on-sputnik-or-artificial-satellite-flying-around-earth.jpg?s=612x612&w=0&k=20&c=q7VIlZAyS_FbroHx6P35l0kpERsRhYtMfigQ2iM8Esw=" alt="" class="circle large">
        </header>
        <a href=""><i>travel_explore</i> Explorar</a>
        <a href=""><i>fastfood</i>Pedidos</a>
        <a href=""><i>shopping_cart</i> Carrinho</a>
        <a href=""><i>two_wheeler</i>Entregas</a>
        <a href=""><i>restaurant</i>Conf. Restaurant</a>
        <a href=""><i>settings</i>Configurações</a>
        <div class="divider bottom-margin"></div>
        <button class="top-margin responsive red5"><p class="white-text">Sair</p></button>     
       
     </nav>
    <!-- Menu lateral breakpoint medium@ -->
    <!-- @Menu lateral bp small -->
    <div class="fixed bottom left min padding s">
        <nav class="min primary active circle" id="botao-menu">
            <button class="extra circle">
            <i>add</i>
            </button>
        </nav>
        <menu id="small-menu" class="top transparent no-wrap">
            <li ><button class="fill"><i></i><span></span></button></li>
            <li><button class="fill"><i></i><span></span></button></li>
            <li><button class="fill"><i></i><span></span></button></li>
            <li><button class="fill"><i></i><span></span></button></li>
            <li><button class="fill"><i></i><span></span></button></li>
            <li><button class="fill"><i></i><span></span></button></li>
        </menu>
    </div>
    <!-- Menu lateral bp small@-->
     
    <main class="responsive max no-padding">
        <img src="rainbow-vortex.svg" alt="" class="responsive small-height l bottom-round">
        <img src="rainbow-vortex.svg" alt="" class="responsive small  m bottom-round">
        <div class="responsive s padding primary"><p class=" black-text center-align">Sputniki</p></div>
        <div class="fixed transparent bottom right min padding l m">
        <nav class="toolbar large-elevate min orange8">
            <i class="circle padding" onclick="ui('mode', ui('mode') == 'dark' ? 'light' : 'dark')">lightbulb</i>   
        </nav>
        </div>
    </main>
  <nav class="bottom s primary wrap">
        <a href=""><i>travel_explore</i></a>
        <a href=""><i>fastfood</i></a>
        <a href=""><i>shopping_cart</i> </a>
        <a href=""><i>two_wheeler</i></a>
        <a href=""><i>restaurant</i> </a>
        <a href=""><i>settings</i></a>
        
  </nav>

</body>

<fieldset>
  <legend>Cadastre produtos no Cardápio</legend>
  <div class="field border label">
    <input type="text">
    <label>Nome</label>
  </div>
  <div class="field label border">
    <input type="decimal">
    <label>Preço</label>
  </div>
  <button class="small-round green">
    <i>check</i>
    <span>Adicionar</span>
  </button>
</fieldset>

</html>
