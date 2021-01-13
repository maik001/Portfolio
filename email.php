<?php


if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['mensagem']);

    $to = "maikdev01@gmail.com";
    $subject = "Contato - Maik";
    $body = "Nome:".$nome. "\r\n".
            "Email:".$email. "\r\n".
            "Mensagem:".$mensagem;
    $header = "From:"."\r\n".
            "Reply-to:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){
        echo("<script>alert('Email Enviado com Sucesso');</script>");
    }else{
        echo("<script>alert('Não foi possivel enviar email');</script>");
    }
}


?>