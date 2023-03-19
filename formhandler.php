<?php 

if(isset($_POST['submit'])) {

    $fio = $_POST['fio'];
    $phone = $_POST['phone'];

    $email = "rbru-metrika@yandex.ru";
    $to  = "<$email>";  
    $subject = "Данные формы (Тестовое задание от Rocket Business)"; 

    $message = "---Новая заявка--- \n ФИО: $fio \n Телефон: $phone";

    $headers  = "Content-type: text/html; charset=utf-8 \r\nFrom: <rocket-business@domain.ru> \r\n";  

    $result = mail($to, $subject, $message, $headers);

    echo "
    <script>
    alert('Заявка успешно отправлена');
    document.location.href = 'index.php';
    </script>
    ";
    header("index.php");
}

else {
    header("index.php");
}
