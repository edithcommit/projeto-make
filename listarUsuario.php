<?php
require_once 'ClassUsuarioDAO.php';

$dao = new ClassUsuarioDAO();
$usuarios = $dao->listarUsuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Usuários</title>
    
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

<div class="container">
    <div class="list-content">
        <h1>Lista de Usuários</h1>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <a href="editarUsuario.php?id=<?= $usuario['id'] ?>">Editar</a> |
                        <a href="excluirUsuario.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</body>
</html>
