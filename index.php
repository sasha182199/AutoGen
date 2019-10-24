<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>AutoGen</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<header>
		<div class="wrapper">
			<div class="logo_header"><a href="/"><img src="/img/logo.svg" alt="logo"></a></div>
			<div class="header_info">
				<div class="mail_info"><a href="mailto:avtogen@gmail.com">avtogen@gmail.com</a></div>
				<div class="phone_number"><a href="tel:+380954568412">+380 95 456 84 12</a></div>
				<div class="time_work">Пн-Пт 9:00-19:00</div>
			</div>
			<div class="site_search"><input type="text" placeholder="Поиск по сайту"></div>
			<div class="language_change">
				<div class="change_lan_ua change_lan">UA</div>
				<div class="change_lan_ru change_lan active">RU</div>
			</div>
		</div>
	</header>
	<main>
		<div class="wrapper">
			<div class="menu_wrapper">
				<div class="menu_item">Автобусы</div>
				<div class="menu_item">Сельхозтехника</div>
				<div class="menu_item">Навесное оборудование</div>
				<div class="menu_item">Строительная техника</div>
				<div class="menu_item">Грузовые автомобили</div>
				<div class="menu_item">Спецтехника</div>
			</div>
		</div>
	<section class="main_banner">
		<div class="text_block_banner">Спецтехника</div>
	</section>
	<section class="brands">
		<div class="wrapper">
			<div class="brands_wrapper">
				<div class="brand"><img src="img/gaz.png" alt=""></div>
				<div class="brand"><img src="img/Belarus.png" alt=""></div>
				<div class="brand"><img src="img/maz.png" alt=""></div>
				<div class="brand"><img src="img/uaz.png" alt=""></div>
				<div class="brand"><img src="img/paz.png" alt=""></div>
			</div>
		</div>
	</section>
	<section class="categories">
		<h1 class="title">Категории товаров</h1>
		<div class="wrapper">
			<div class="category_wrapper">
				<div class="category">
					<div class="category_bg"></div>
					<div class="category_title">
						<div class="ct_title">Автобусы</div>
						<div class="_ct_count">100</div>
					</div>
				</div>
				<div class="category">
					<div class="category_bg"></div>
					<div class="category_title">
						<div class="ct_title">Сельхозтехника</div>
						<div class="_ct_count">48</div>
					</div>
				</div>
				<div class="category">
					<div class="category_bg"></div>
					<div class="category_title">
						<div class="ct_title">Навесное оборудование</div>
						<div class="_ct_count">32</div>
					</div>
				</div>
				<div class="category">
					<div class="category_bg"></div>
					<div class="category_title">
						<div class="ct_title">Строительная техника</div>
						<div class="_ct_count">80</div>
					</div>
				</div>
				<div class="category">
					<div class="category_bg"></div>
					<div class="category_title">
						<div class="ct_title">Грузовые автомобили</div>
						<div class="_ct_count">160</div>
					</div>
				</div>
				<div class="category">
					<div class="category_bg"></div>
					<div class="category_title">
						<div class="ct_title">Спецтехника</div>
						<div class="_ct_count">240</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="statistics">
		<h1 class="title">Наша статистика</h1>
		<div class="wrapper">
			<div class="stats_wrapper">
				<div class="stats_item">
					<p class="stats_title">Широкий ассортимент</p>
					<p class="stats_descr">16 522 000 товаров</p>
				</div>
				<div class="stats_item">
					<p class="stats_title">Постоянные покупатели</p>
					<p class="stats_descr">Более 10 000 довольных клиентов</p>
				</div>
				<div class="stats_item">
					<p class="stats_title">Опыт в e-commerce</p>
					<p class="stats_descr">5 лет на рынке интернет услуг</p>
				</div>
			</div>
		</div>
	</section>
	<section class="contact_us">
		<div class="wrapper">
			<form action="">
				<div class="form_title">Свяжемся с Вами</div>
				<div class="input_name"><input type="text" placeholder="Ваше имя"></div>
				<div class="input_phone"><input type="number" placeholder="+380"></div>
				<div class="submit_button">
					<button>Отправить</button>
				</div>
			</form>
		</div>
	</section>
	<footer>
		<div class="wrapper">
			<div class="footer_wrapper">
				<div class="mail_info"><a href="mailto:avtogen@gmail.com">avtogen@gmail.com</a></div>
				<div class="footer_logo"><img src="/img/logo.svg" alt="logo"></div>
				<div class="phone_number"><a href="tel:+380954568412">+380 95 456 84 12</a></div>
			</div>
			<div class="footer_copyright">© <?php echo(date(Y)); ?> Avtogen - Online Shopping</div>
		</div>
	</footer>
	</main>


</body>
<script src='/js/jquery.min.js'></script>
<script src='/js/scripts.js'></script>
</html>