<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>send mail</p>
    <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="nimi">
        <input type="text" name="mail" placeholder="su email">
        <input type="text" name="subject" placeholder="teema">
        <textarea name="message" placeholder="message"></textarea>
        <button type="submit" name="submit">send mail</button>
    </form>
</body>
</html>