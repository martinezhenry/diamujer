<?php        

            if ( isset($_POST['txtName']) && isset($_POST['txtSurname']) && isset($_POST['txtEmail']))  {
                //session_start();
            
?>
<?php
        

error_reporting(E_ALL);
//error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('./PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('./PHPMailer/examples/mail.html');
$body             = str_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server

$mail->Username   = "programadorvpc@gmail.com";  // GMAIL username
$mail->Password   = "programadorvpcjavi.89";            // GMAIL password

$mail->SetFrom('programadorvpc@gmail.com', 'Henry Martinez');

//$mail->AddReplyTo("henry.martinezd@gmail.com","First Last");

$mail->Subject    = "Happy Women's Day";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->AddEmbeddedImage('./PHPMailer/examples/images/img.jpg', 'foto');
$mail->AddEmbeddedImage('./PHPMailer/examples/images/roses.jpg', 'rose');

$address = $_POST['txtEmail'];
$mail->AddAddress($address, $_POST['txtName'] . " " . $_POST['txtSurname']);

//$mail->AddAttachment("./PHPMailer/examples/images/phpmailer.gif");      // attachment
//$mail->AddAttachment("./PHPMailer/examples/images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  header('Location: index.php?invalid');
} else {
  header('Location: main.php?pass=1&name='.$_POST['txtName'] . " " . $_POST['txtSurname']);
}
?>
    
    <?php
} else {
                $_COOKIE['valid'] = "nopass";
                header('Location: index.php?invalid');
            }