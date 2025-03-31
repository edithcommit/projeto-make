<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, #E7B3F3,rgb(241, 147, 132));
}

div{
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    padding: 70px;
    border-radius: 20px;
    color: white;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

button{
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
}

input{
    padding: 10px;
    border: none;
    border-radius: 10px;
    outline: none;
}
</style>
<body>
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="email" placeholder="Email">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Enviar</button>
    </div>
</body>
</html>