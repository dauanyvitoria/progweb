<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <title>Formulário</title>
    </head>
    <body>
     <form id="contato" action="recebe.php" method="get">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
        
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Insira seu sobrenome">

        <label for="nascimento">Nascimento</label>
        <input type="date" name="nascimento" id="nascimento">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Insira seu e-mail">

        <input type="submit" name="submit" id="submit" value="OK">
        
    </form>        
    </body>
</html>