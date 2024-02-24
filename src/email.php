<?php
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    if(isset($_POST['send'])){

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'errazojose03@gmail.com';
        $mail->Password = 'mwkuwscuijennyci';
        $mail->Port = '465';
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress('errazojose03@gmail.com');
        $mail->Subject = ("$email ( Subject: $subject )");
        $mail->Body = $message;
        $mail->send();
        echo"<script> alert('Message Successfully Sent!');window.location='index2.html'</script>";

    }else{
        echo"<script> alert('Sending Message Failed!');window.location='index2.html'</script>";
    }
    ?>
    <script>
        
    </script>
