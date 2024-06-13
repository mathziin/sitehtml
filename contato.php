<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php');
    $nome = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFormulario = '';
    if( isset($_POST['submit']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if(
            $nome != ''
            && $email != ''
            && $mensagem != '')
            
        {
            // Usuario preencheu corretamente
            
            $mensagemEmail = 'Nome: ' . $nome . ' - ';
            $mensagemEmail .= 'Email: ' . $email . ' - ';
            $mensagemEmail .= 'Mensagem: ' . $mensagem;
            if(mail('adplenitude2005@gmail.com', 'Mensagem de contato', $mensagemEmail)){
            //email enviado
                $sucessoFormulario = 'Mensagem enviada com sucesso!';
            }
        }
        else{
            // usuario não preencheu todos
            $erroFormulario = "Por favor verifique o preenchimento dos campos";
        }
    }

    
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
            <?php echo $nome; ?>
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center">Envie sua Dúvida</p>
            <form action="#" class="formulario" method="post">
                <?php if($erroFormulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>
                <?php if($sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoFormulario ?>
                    </div>
                <?php endif; ?>
                <div class="formulario__grupo formulario__grupo--esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" type="text" name="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" type="email" name="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="formulario__botao" value="Enviar" name="submit">
            </form>
            <p class="text-center">
                R. Tauro - Jardim Novo Horizonte <br>
            </p>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.832338419079!2d-46.820035824492116!3d-23.574464362074078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5557b79b005f%3A0x5ecdda2e843cab1a!2sR.%20Tauro%2C%20118%20-%20Jardim%20Novo%20Horizonte%2C%20Carapicu%C3%ADba%20-%20SP%2C%2006341-550!5e0!3m2!1spt-BR!2sbr!4v1717537252120!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0"></iframe>
            </div>
        </section>
        <?php include('partes/rodape.php'); ?>