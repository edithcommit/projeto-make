<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Catálogo de produtos</title>
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
                            <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                            <li class="nav-item"><a href="index.php" class="nav-link">Sobre</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
                        </ul>
                        
                    </div>
                    <div class="login-button">
                       <a href="formulario.php"><button>Entrar</button></a>
                    </div>
           </nav>
         </header>

    <div class="catalog">
    <div class="catalog-content">
        <div class="text-catalog">
            <h1>Bem-vindo ao nosso Catálogo!</h1><br>
            <p>descubra todos os nossos produtos</p>
            <form action="search.php" method="POST">
                <input type="text" name="search" placeholder="O que você procura?" required>
                <input class="btn-search" type="submit" value="Procurar">
        </form>

        </div>
    </div> 
    </div>         
   
    <div class="products">
            <div class="home-products">
           <img src="assets/woman1.jpg" alt="">
           <img src="assets/woman2.jpg" alt="">
           <img src="assets/woman3.jpg" alt="">
            </div>

            <div class="text-home">
        <h1>Nossos melhores produtos</h1>
        <div class="home-list">
            <ul>
                <li class="home-item">Bases</li> |
                <li class="home-item">Contornos</li> |
                <li class="home-item">Batom Matte</li>
            </ul>
        </div>
        </div>
        
        <div class="product-container">
    
  <div class="product-card">
    <img src="assets/produto1.jpg" alt="Paleta Rosada">
    <div class="product-info">
      <h3>Pó translúcido</h3>
      <p>R$ 89,90</p>
    </div>
  </div>

  <div class="product-card">
    <img src="assets/produto2.jpg" alt="Paleta Nude">
    <div class="product-info">
      <h3>Base Dior</h3>
      <p>R$ 129,90</p>
    </div>
  </div>

  <div class="product-card">
    <img src="assets/produto3.jpg" alt="Paleta Glam">
    <div class="product-info">
      <h3>Contorno Glam</h3>
      <p>R$ 109,90</p>
    </div>
  </div>

  <div class="product-card">
    <img src="assets/produto4.jpg" alt="Batom Matte">
    <div class="product-info">
      <h3>Batom Matte</h3>
      <p>R$ 79,90</p>
    </div>
  </div>

</div> <!-- fim do product-container-->

  <div class="buy">
  <img src="assets/comprar.jpg" alt="Imagem promocional">
  <div class="buy-text">
    <p>Faça seu investimento. Invista em você.</p>
    <a href="carrinho.php"><button>Comprar</button></a>
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

</div> 
</body>
</html>