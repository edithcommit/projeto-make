<?php
require_once 'ClassMembroDAO.php';

$dao = new ClassMembroDAO();
$membros = $dao->listarMembro();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Membros</title>
    
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
    <div class="list-members">
        <h1>Lista de Membros</h1>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($membros as $membro): ?>
                <tr>
                    <td><?= $membro['id'] ?></td>
                    <td><?= $membro['nome'] ?></td>
                    <td><?= $membro['email'] ?></td>
                    <td><?= $membro['telefone'] ?></td>
                    <td>
                        <a href="editarMembro.php?id=<?= $membro['id'] ?>">Editar</a> |
                        <a href="excluirMembro.php?id=<?= $membro['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</body>
</html>
