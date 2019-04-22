<?php
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, 'mail.criativawebdesign.com.br', 'contato@criativawebdesign.com.br', 'MegC2004',
    'tls', '587', 'carloseduardo.oceano@gmail.com', 'Carlos - Curso Composer');
$novoEmail->sendMail("Teste curso Composer", "<p>Este é um e-mail de teste do curso <b>Composer da UpInside</b></p>",
    "carloseduardo.oceano@gmail.com", "Carlos Eduardo",
    "contato@criativawebdesign.com.br", "Carlos Criativa Web");

//var_dump($novoEmail);
