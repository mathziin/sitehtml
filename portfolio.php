<?php 
    global $tituloPagina;
    $tituloPagina = "Portfolio";
    include('partes/cabecalho.php'); 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portfólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Aqui estão algumas fotos de cultos que ocorreram durante toda <br> a trajetória da Plenitude.
            </p>

                <nav>
                    <ul class="lista-trabalhos">
                        <li>
                            <a  class="lista-trabalhos__item" href="img/portfolio/igreja2.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/igreja2min.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Foto da igreja</h2>
                            </a>
                        </li>
                        <li>
                            <a class="lista-trabalhos__item" href="img/portfolio/irmãs1.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/irmãsmin.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Foto das irmãs</h2>
                            </a>
                        </li>
                        <li>
                            <a  class="lista-trabalhos__item" href="img/portfolio/igreja.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/igrejamin.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Foto da igreja</h2>
                            </a>
                        </li>
                        <li>
                            <a  class="lista-trabalhos__item" href="img/portfolio/banda.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/bandamin.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Foto da banda</h2>
                            </a>
                        </li>
                        <li>
                            <a  class="lista-trabalhos__item" href="img/portfolio/jovens.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/jovensmin.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Foto dos jovens</h2>
                            </a>
                        </li>
                        <li>
                            <a  class="lista-trabalhos__item" href="img/portfolio/pastor.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/pastor1min.jpg" alt="">
                        <h2 class="lista-trabalhos__titulo">Foto do Paster Presidente</h2>
                            </a>
                        </li>
                    </ul>
                </nav>
        </section>
    </main>
</div>
    <script src="js/jquery.fancybox.min.js"></script>
</body>
</html>