<?php
$im=$_post['im'];
$fam=$_post['fam'];
$tel=$_post['tel'];
$tov=$_post['tov'];


$im=htmlspecialchars($im);
$fam=htmlspecialchars($fam);
$tel=htmlspecialchars($tel);
$tov=htmlspecialchars($tov);

$im=urldecode($im);
$fam=urldecode($fam);
$tel=urldecode($tel);
$tov=urldecode($tov);

$im=trim($im);
$fam=trim($fam);
$tel=trim($tel);
$tov=trim($tov);


if(mail("nikitosik22002@gmail.com",
		"Новый заказ из магазина",
		"Имя".$im."\n". "Фамилия".$fam."\n".
		"Телефон".$tel."\n".
		"tov".$tov,
		"From: no-reply@mydomain.ru \r\n"))
{
	echo ('Заказ успешно сделан ожидайте звонка курьера');
}
else {
	echo ('Есть ошибки! Проверте данные...');
}
?>