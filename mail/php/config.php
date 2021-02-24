<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// Имя
	const NAMEISREQUIRED = true;
	const MSGSNAMEERROR = "Поле обязательно для заполнения";

	// Телефон
	const TELISREQUIRED = false;
	const MSGSTELERROR = "Поле обязательно для заполнения";

	// Email
	const EMAILISREQUIRED = false;
	const MSGSEMAILERROR = "Поле обязательно для заполнения";
	const MSGSEMAILINCORRECT = "Некорректный почтовый адрес";

	// Текстовое поле
	const TEXTISREQUIRED = false;
	const MSGSTEXTERROR = "Поле обязательно для заполнения";

	// Файл
	const FILEISREQUIRED = false;
	const MSGSFILEERROR = "Поле обязательно для заполнения";

	// Соглашение
	const AGGREMENTISREQUIRED = false;
	const MSGSAGGREMENTERROR = "Поле обязательно для заполнения"; 

	// Сообщение об успешной отправке
	const MSGSSUCCESS = "Сообщение успешно отправлено";

	// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
		const HOST = 'ssl://smtp.mail.ru';
		const LOGIN = 'dasha-golenko@mail.ru';
		const PASS = 'POPCHIK666';
		const PORT = '465';

	// *** /SMTP *** //

    //https://accounts.google.com/b/0/DisplayUnlockCaptcha РАЗРЕШИТЬ ДЛЯ gmail

  // Почта с которой будет приходить письмо
	const SENDER = 'dasha-golenko@mail.ru';
	
	// Почта на которую будет приходить письмо
	const CATCHER = 'dasha-golenko@mail.ru';
	
	// Тема письма
	const SUBJECT = 'Заявка с сайта-портфолио Polina Dudareva';
	
	// Кодировка
  const CHARSET = 'UTF-8';
