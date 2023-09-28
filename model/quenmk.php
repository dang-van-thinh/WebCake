<?php
require_once 'LoginModel.php';
if(isset($_POST['forgot'])){
    $email = $_POST['email'];
    if(checkRegister($email) == true){
        $kh= checkRegister($email);
        if(sendEmail($email,$kh['matkhau'])){
            setcookie('success','Gửi Email thành vui lòng vào email đã đăng ký để xem ',time()+5,'/');
        }else{
            setcookie('fail','Gửi Email không thành công',time()+5,'/');
        }
        header('location: ../view/client/login.php');
    }
}
function sendEmail($email,$mk){
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'PHPMailer-master/src/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dangvanthinh372004@gmail.com';                     //SMTP username
    $mail->Password   = 'mtej effd mkpx ygse';                               //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dangvanthinh372004@gmail.com', 'Admin');
    $mail->addAddress($email,'hsadhg');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Quên mật khẩu ';
    $mail->Body    = 'Mật khẩu khôi phục tài khoản '.$email.' là : '.$mk;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>