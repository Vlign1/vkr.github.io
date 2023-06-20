<?php
	// Скрипт рассыльщика:
	// Обработка только POST запросов.
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$phone = $_POST['phone']; 
	$messagebody = $_POST['message']; 	
	
	// Адрес электронной почты "от кого".
	$from = "<>";
	
	// Адрес электронной почты получателя.
	$to = ""; 

	// Содержание почты
	$message = "
				Здравствуйте!

				Пользователь оставил запрос на запись.
				Имя: $name

				Почта посетителя $email

				Телефон: $phone

				Сообщение: $messagebody

				
				Это сообщение было отправлено пользователю $to.  

				"; 


	// Отправить письмо
	if(mail ($to,$subject,$message))
	{
		echo "Success";
	}else{
		echo "No";
	}
?>

