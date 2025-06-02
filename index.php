<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  
    <title>Home</title>
</head>
<body>
     <div class="container">
        <header>
           <nav class="nav-bar">
                    <div class="logo">
                        <h1>MAKE FOR YOU</h1>
                    </div>
                    <div class="nav-list">
                        <ul>
                            <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
                        </ul>
                        
                    </div>
                    <div class="login-button">
                       <a href="formulario.php"><button>Entrar</button></a>
                    </div>
           </nav>
         </header>

            <div class="home">
        <div class="home-content">
            <div class="text">
            <h1>Reveal Yourself</h1><br>
            <p>Nossa missão é realçar a beleza única de cada pessoa, oferecendo produtos com qualidade.</p><br>
            <a href="catalogo.php"><button class="button-catalog">Veja nosso Catálogo</button></a><br>
            </div>
            <img src="assets/home.jpg" alt="Imagem de maquiagem">
        </div>
        </div>

        <div class="about" id="about">
            <div class="about-content">
           
                <div class="text-about">
                    <h1>Sobre nós</h1>
                    <p>Somos uma empresa que preza pela autoestima e bem estar de todas as pessoas que utilizam dos nossos produtos. Prezando sempre a melhor experiência em cada detalhe, com mais de 100 franquias pelo Brasil somos responsáveis por destacar cada traço brasileiro enfatizando nossas culturas e costumes.</p>
                     </div>
                <img src="assets/about.jpg" alt="">
            </div>
            
            <div class="custom-shape-divider-bottom-1744056718">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
         </div>  
        </div>
          
        <div class="be-part">
         <div class="be-part-content">
          <div class="text-section">
           <h1>Seja uma Make Yourself!</h1>
         <p>Se a <b>MAKE FOR YOU</b> faz parte da sua rotina, participe da nossa comunidade.</p>
          </div>
           <form class="form-section" method="POST" action="cadastroMembro.php">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <input type="text" name="telefone" placeholder="Seu telefone" required>
         <button type="submit">Criar Conta</button>
      </form>
  </div>
</div>

      <footer class="footer">
         <div class="footer-container">
      <div class="footer-logo">MAKE FOR YOU</div>
     <div class="footer-copy">
      © 2025 MAKE FOR YOU. Todos os direitos reservados.
         </div>
        </div>
    </footer>

    
    </div>
</body>
</html>