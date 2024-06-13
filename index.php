<?php 
    global $tituloPagina;
    $tituloPagina = "Inicio";
    include('partes/cabecalho.php'); 
?>
<div class="cabecalho-logo">
</div>
            <div class="iniciologo">
                <img src="img/test1.png" alt=""> 
            </div>
        <section id="servicos" class="servicos"><!--Seção Serviços-->
            <div class="container">
                <h2 class="home__titulo home__titulo--branco">Estamos te esperando</h2>
                <section class="servicos__item">
                <img src="img/icone1.png" alt="Icone Mundo">
                <h3>Quando foi Fundada?</h3>
                <p class="servicos__texto">A igreja AD PLENITUDE foi fundada <br>em 2005.</p>
                </section>
                <section class="servicos__item">
                    <img src="img/pastor.png" alt="Icone Pastor">
                    <h3>Quem é o fundador?</h3>
                    <p class="servicos__texto">O fundador é nosso Pastor Presidente Josenildo Cassimiro.</p>
                    </section>
                    <section class="servicos__item">
                        <img src="img/calendario.png" alt="Icone Calendario">
                        <h3>Dias de culto?</h3>
                        <p class="servicos__texto">Quarta - Culto de Ensino - 19:30 <br> Sexta - Ciclo de Oração - 19:00 <br> 1° Sabado - Santa Ceia 19:00 <br> Domingo - EBD ás 09:30 e as 18:30 Culto público
                        </p>
            </div>
        </section>
                    </section><!--Seção Serviços FINAL -->
                    <section class="depoimentos"><!--Seção Depoimentos-->
                        <div class="container">
                            <h2 class="home__titulo">O que Falam de nós</h2>
                            <section class="depoimentos__item">
                                <img class="depoimentos__img" src="img/pessoa-1.jpg" alt="">
                                <p class="depoimentos__texto">Uma ótima igreja sempre que vou no culto sou bem recebido <br> adoro todos os membros.</p>
                                <p class="depoimentos__pessoa">Roberto - Visitante</p>
                            </section>
                    </section><!--fim Seção Depoimentos-->
<?php include('partes/rodape.php'); ?>