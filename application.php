<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Создание формы обратной связи</title>
    <meta http-equiv="Refresh" content="1; URL=http://localhost/1/">
</head>

<body>

    <?php 

$sendto   = "vitalik_chaika@mail.ru"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<div style='background: #F7F7F7; width: 50%; border-radius: 20px; padding: 10px 5px; margin: 0 auto 20px; text-align: center; box-shadow: 0 0 6px gray; font-family: cursive;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong>".$usertel."</p>\r\n";
$msg .= "</div></body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='img/spasibo.png'></center>";
} else {
	echo "<center><img src='img/ne-otpravleno.png'></center>";
}

?>

</body>

</html>