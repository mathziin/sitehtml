<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        $titulo = "AD Plenitude";
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href ="logo.ico"
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <h1 class="logo">AD Plenitude</h1>
            <nav class="menu-principal">
                <!--<button class="menu-principal__btn menu-principal__btn--fechar">Abrir/Fechar Menu</button>-->
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $tituloPagina =='Inicio' ? 'menu-principal__item--atual' : ''?> " href="index.php">Inicio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina =='Sobre Nós' ? 'menu-principal__item--atual' : ''?>" href="sobre.php">Sobre nós</a></li>                
                    <li><a class="menu-principal__item <?php echo $tituloPagina =='Portfolio' ? 'menu-principal__item--atual' : ''?>" href="portfolio.php">Portfolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina =='Calendário' ? 'menu-principal__item--atual' : ''?>" href="Projetos.php">Calendário</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina =='Contato' ? 'menu-principal__item--atual' : ''?>" href="contato.php">Contato</a></li>
                </li>
            </ul>
        </nav>
    </div>
</header>
<div class="cabecalho-logo">
</div>
<main>