<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pesquisar Produtos</title>
</head>
<body>

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

 <div class="search-content">
    
     <h1>Pesquisar Produtos</h1>
        <form method="POST" class="search-form" action="search.php">
            <input type="text" name="search" class="search-input" placeholder="Digite o nome ou preço do produto" required>
            <button type="submit" class="search-button">Buscar</button>
        </form>
      
 </div>




    <?php
if (isset($_POST['search'])) {
    // conectando com o banco
    define("DB_HOST", "localhost");
    define("DB_NAME", "bdmake");
    define("DB_CHARSET", "utf8");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");

    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASSWORD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    // pra processar a minha busca
    $search = $_POST['search'];
    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE nome LIKE ? OR preco LIKE ?");
    $stmt->execute(["%$search%", "%$search%"]);
    $results = $stmt->fetchAll();

    // pra mostrar meus resultados
    if (count($results) > 0) {
        foreach ($results as $r) {
            echo "<div class='results-card'><strong>" . $r['nome'] . "</strong> - R$ " . $r['preco'] . "</div>";
        }
    } else {
        echo "<div class='no-results'>Nenhum resultado encontrado.</div>";
    }
}
?>


</body>
</html>
