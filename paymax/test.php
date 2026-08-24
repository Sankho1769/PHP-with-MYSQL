<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label>Input your email : </label>
        <input type="text" name="email" ></input> </br>
          <label>Input your Message : </label>
        <textarea name="feedback" rows="10" cols="50" placeholder="Type your message here..."></textarea> </br>
        <input type="submit" value="Submit"/> </br>
    </form>
  

    <?php
        $x = $_POST["email"];
        $message = $_POST["feedback"];
    
    $to      = $x;
    $subject = 'Test Mail';
    $message = 'hello';
    $headers = 'From: majid.mallik@bhawanipurglobal.edu.in'       . "\r\n" .
                 'Reply-To: majid.mallik@bhawanipurglobal.edu.in' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


       // $x = abs($x);
        //$x = sqrt($x);
       // echo "<br>The absolute value is $x ";
       //echo "<br>The square root is $x ";
      //  $x = "Welcome to BGC";
   
   //$x = trim($x);
   //$len= strlen($x);
   //$words = str_contains($x,"BGC");
    //echo "The  length is $len";

   // $rev = strrev($x);
   //$y = explode(" ",$x);
    //echo "The  reverse is $rev";
   // print_r ($y) ;
   // echo $y[0];
   // echo $y[1];
   // echo $y[2];
    ?>
    
</body>
</html>

 <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = '://example.com'; // Your SMTP provider
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your_email@example.com';
    $mail->Password   = 'your_password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('your_email@example.com', 'Mailer');
        $mail->addAddress('recipient@example.com');
        $mail->isHTML(true);
        $mail->Subject = 'Test Email';
        $mail->Body    = 'This is a secure HTML email message.';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
