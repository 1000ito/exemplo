<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha página responsiva</title>
        <link rel="stylesheet" href="index-style.css">
    </head>
    <body>
        <!-- Cabeçalho (Parte superior do site) -->
        <header>
            <nav>
                <div class="logo"> Meu Blog </div>
                <ul class="nav-links">
                    <li><a href="#">inicio </a></li>
                    <li><a href="#"> Sobre </a></li>
                    <li><a href="#"> Contato </a></li>
                </ul>
            </nav>
        </header>

        <main class="container">
            <div class="card"> 
                <strong>card 1 </strong>
                <p>Este e um projeto Card. O layout se adapta a diferentes formatos de tela.</p>
            </div>
            <div class="card"> 
                <strong>card 2 </strong>
                <p>Este e um projeto Card. O layout se adapta a diferentes formatos de tela.</p>
            </div>
            <div class="card"> 
                <strong>card 3 </strong>
                <p>Este e um projeto Card. O layout se adapta a diferentes formatos de tela.</p>
            </div>
            <div class="card">
                <strong>card 4 </strong>
                <p>Este e um projeto Card. O layout se adapta a diferentes formatos de tela.</p>
            </div>
        </main>

        <!--Rodapé (Parte inferior do site) -->
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Todos os direitos estão reservados.| Desenvolvido por: <a href="https://www.instagram.com/isaias_steffens/">Isaias.<a></p>
        </footer>
    </body>
</html>