<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $to = "maik.santos@ntectreinamentos.com.br";
    $subject = "Contato - Maik";
    $body = "Nome:".$nome. "\r\n".
            "Email:".$email. "\r\n".
            "Mensagem:".$mensagem;
    $header = "From:maik@ntectreinamentos.com.br"."\r\n".
            "Reply-to:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){
        echo("<script>
        window.alert('Email enviado com sucesso');
        window.location.replace('index.php');
        </script>");
    }else{
        echo("<script>
        window.alert('Não foi possivel enviar o email');
        window.location.replace('index.php');
        </script>");
    }
}
?>