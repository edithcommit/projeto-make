<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
</head>
<style>
    body{
    background-color:rgba(191, 111, 140, 0.48);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    height: 100%;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    height: 100vh;
    width: 80%;
}

.form-section {
    flex: 1;
    background-color: #ffffff;
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 400px;
    margin-top: 50px;
    margin-bottom: 50px;
}

.form-section h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
    color: #333;
}

.form-section p {
    margin-bottom: 30px;
    color: #666;
}

input {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 100%;
    font-size: 1em;
}

button {
    background-color: #a87177;
    color: white;
    padding: 15px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1em;
}

.image-section {
    flex: 1;
    background-color: #f0d8dd;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
    margin-bottom: 50px;
}

.image-section img {
    max-width: 100%;
    height: 87vh;
    object-fit: cover;
}

</style>
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
                  
           </nav>
         </header>

    <div class="container">
        <div class="form-section">
            <h1>Cadastro</h1>
            <p>Crie sua conta e junte-se a nós.</p>
            <form method="POST" action="cadastro.php">
                <input type="text" name="nome" placeholder="Nome" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="senha" placeholder="Senha" required><br>
                <button type="submit">Criar Conta</button>
            </form>
        </div>
        <div class="image-section">
            <img src="assets/login.jpg" alt="login">
        </div>
    </div>
</body>
</html>