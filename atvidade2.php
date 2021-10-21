<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 PHP</title>
    <link rel="stylesheet" href="arqs/style.css"> <!-- Chamando o arquivo style.css-->
</head>
<body>

<?php 
/*São Paulo Brasil
Escola: Etec Irmã Agostina
Curso: Desenvolvimento de Sistemas
Matéria: Programação Web 2
Professor(a): Gilberto Alexandre das Neves
Atividade 2 
Aluno(a): Gabriel Albuquerque de Moura Silva
Data: 21/10/2021*/
?>
    <section class="contairner grid grid-template-columns">
        <div class="item">
        <h1>Formulário de Avaliação</h1>
        <hr>

        <h4>O que você achou do site?</h4>
        <form name = "Cadastro" method = "post" action="arqs/cadastro.php"> 
            <input type="radio" name="avaliacao" value="muit"/>Muito Bom
            <input type="radio" name="avaliacao" value="bom"/>Bom
            <input type="radio" name="avaliacao" value="reg"/>Ruim
            <input type="radio" name="avaliacao" value="lix"/>Um lixo
            <br>

            <h4>Qual a seção que você mais gostou?</h4>

            <select name="Seções"> <!-- Criando caixa de opções!-->
                <option>Em Cartaz</option>
                <option>Trilha Sonora</option>
                <option>Galeria</option>
                <option>Bilheteria</option>
                <option>Outra</option>
            </select>
            Outra: <input type="text"> <!-- Criando caixa de texto-->
            <br>

            <h4>Digite seus comentários no espaço abaixo:</h4>
            &nbsp;  &nbsp;  &nbsp; 
            <textarea name="comen"  cols="55" rows="8"></textarea> <!-- Criando caixa de texto com tamanho expandido-->
            <br>

            <h4>Diga-nos como entrar em contato com você:</h4>
            Nome:&nbsp; &nbsp; <input type="text" name="nome"> <br/>
            E-mail: &nbsp; <input type="text" name="nome"> <br/>
            Fone:&nbsp;  &nbsp;  &nbsp; <input type="text" name="nome"> <br/>
            FAX:&nbsp;  &nbsp;  &nbsp; <input type="text" name="nome"> <br/>
            
            <br>
            <input type="checkbox" name="novi" value="noti" >  <!-- Criando uma checkbox !-->
            Quero receber as novidades do site por e-mail
            <br>    <br>


            <input type="submit" value="Enviar Dados"> <!-- Botão de enviar dados !-->
            <INPUT type="reset"  name="limpa" value="Limpar Formulário">  <!-- Botão de limpar dados !-->
        </form>
    </div>
</section>
</body>
</html>