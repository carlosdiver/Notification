# Notification Library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require gustavoweb/composer_teste
```

To use the library, require the autoload of the composer, invoke the class and make the method call:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of the email sending is using the magic method construct! Once you've invoked the construct method within your application, your system will be able to send the emails.

### Developer
* [Carlos Eduardo] - Developer of this library, CEO and Founder of Criativa Web Design
* [Criativa Web Design] - Official web site of Criativa Web Design Agency
* [phpMailer] - Lib to send E-mail

License
----

MIT

[//]:#
[Carlos Eduardo]: <mailto:contato@criativawebdesign.com.br>
[Criativa Web Design]: <https://www.criativawebdesign.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
