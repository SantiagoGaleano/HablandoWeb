

<?
require_once "recaptchalib.php";
// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6Lf_DI4UAAAAAFszauUEF-PxKf3xQnzIncFYZo_p
";
$secret = "6Lf_DI4UAAAAAFQDk7bevQwuvWnyEZ4YbykSjJ0G";
// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";
// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;
$reCaptcha = new ReCaptcha($secret);
// Was there a reCAPTCHA response?
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

$name=$_POST['nameFormulario'];
$Email=$_POST['emailFormulario'];
$message=$_POST['celularFormulario'];
$horario=$_POST['gender'];
$horarioDos=$_POST['genderDos'];
$sugerencia=$_POST['sugerenciaHorario'];

    
    $body .= "Nombre: " . $name . "\n"; 
    $body .= "Correo Electrónico: " . $Email . "\n";  
    $body .= "Celular: " . $message . "\n";
    $body .= "Lunes a viernes: " . $horario . "\n";
    $body .= "Sabados: " . $horarioDos . "\n";
    $body .= "Sugerencia: " . $sugerencia . "\n";

    //replace with your email
    mail("hablandoensenas@gmail.com","Inscripciones Cursos LSC",$body); 

  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Tu mensaje ha sido enviado satisfactoriamente, muy pronto nos pondremos en contacto!!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html"> 

</head>