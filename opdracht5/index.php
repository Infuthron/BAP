

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Opdracht 5</title>
    </head>

    <body>
        <div class="wrapper">
            <div class="discription">
                <img src="images/img1.jpg" alt="Umbrella logo" id="img1">
                <p>Please, list al and any complaints about our company. </p>
            </div>
            <div class="form">
                <form method="post" action="index.php">
                    <label>Sender: E-mail :</label>
                    <input type="text" name="mail" id="input1" autofocus>
                    <br>
                    <label>Sender: Subject:</label>
                    <input type="text" name="sub" id="input2">
                    <br>
                    <br>
                    <label>Your complaint:</label>
                    <br>
                    <textarea name="message" rows="5" cols="50">
                    </textarea>
                    <br>
                    <br>
                    <input type="submit" value="Send" Name="send" id="input3">
                    <?php
                    if (isset($_POST['send'])) {
                    $to = 'AleksanderCzaj@gmail.com';
                    $subject = $_POST['sub'];
                    $message = $_POST['message'];
                    $headers = 'From: '.$_POST['mail'];

                        mail($to, $subject, $message, $headers);
                        echo 'Thank you for your input';
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>