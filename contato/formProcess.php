<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "luiz.mattos1@hotmail.com";
$Subject = "Nova mensagem";
 
// prepare email body text
$Body = "Nome: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "Para:".$email);
 
// resposta para a chamada do ajax
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 