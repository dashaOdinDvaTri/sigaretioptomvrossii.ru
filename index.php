<?php header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
	echo 'Ошибка в конфигурационном файле';
	die();
}
     ?>
<!DOCTYPE html><html lang="ru">
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
      
        
        
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />   
        
        
        <meta name="yandex-verification" content="4e43a5326a5b97e2" />
        
        <meta name="viewport" content="user-scalable=1, width=device-width, initial-scale=1.0 shrink-to-fit=no">
        
        <title><?php print $ini['title']; ?></title>
        <meta name="keywords" content="сигареты,сигареты оптом,продажа сигарет,сигареты с фильтром,сигаретф без фильтра,родопи,опал,космос,бт,мальборо,прима,винстон,оптима,кредо,бонд,лд,тройка,максим,столичные,интер,хортица,стюардесса,корона,кресты">
        <meta name="description" content="Оптовая продажа сигарет с фильтром и без фильтра на территории России по самым выгодным и низким ценам">
        
        <link rel="stylesheet" type="text/css" href="style/CSS_reset.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jq-form.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2-min.js"></script>
        <script type="text/javascript" src="js/jquery.plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js?v2"></script>
        
        <?php if ($ini['head_code']) include($ini['head_code']); ?>
        
        </head>

<body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id']; ?>">
    
    
    
<!-- Модальное Окно  -->
<div id="overlay">
    <div class="popup">
        <h2>ОБЯЗАТЕЛЬНО К ПРОЧТЕНИЮ!</h2> <br>
        <h2>КУРЕНИЕ УБИВАЕТ!</h2> <br>
        <div id="justify">&nbsp&nbsp&nbspВнимание! <br> &nbsp&nbsp&nbspНа сайте вы не сможете купить товары, т.к. данный интернет-ресурс и его владельцы не ведут дистанционную продажу товаров! На сайте размещена информация о реализуемых товарах, 
            ассортименте, правилах её приобретения, возможных акциях и мероприятиях, 
            а также хозяйственной деятельности владельцев сайта, продаваемых указанные на сайте товары.<br>
            &nbsp&nbsp&nbspДанный контент предназначен исключительно для информирования посетителей и не является рекламой товаров, представленных на сайте. <br>
            &nbsp&nbsp&nbspТакже, информация, размещённая на сайте, предназначена для лиц, старше 18 лет. Переходя на сайт вы подтверждаете своё совершеннолетие, 
            а равно то, что знакомы со ст.20 15-ФЗ от 23.02.2013г.</div>
                 <br><br>
         
        <button class="close" title="Перейти на сайт" onclick="document.getElementById('overlay').style.display='none';"></button>
        <button class="close_non" title="Уйти с сайта" onclick="javascript:document.location.href='http://smeshariki.ru'"></button>
    </div>
</div>
<!-- Модальное Окно  -->
    
    
    
    
    
    
	<div class="wrapper">
		<div class="header">
			<div class="head-top-row">
				
				<?php if ($ini['phone']) 
				{ ?>
				<address class="head-phone"><span class="phone-icon"></span>
				<?php print $ini['phone']; ?></address>
				
				<?php } ?>
				
				
				<?php if ($ini['phone2']) { ?>
				<address class="head-phone2">
				<?php print $ini['phone2']; ?></address>
				
				<?php } ?>
				
				
				<?php if ($ini['phone3']) { ?>
				<address class="head-phone3">
				
				<?php print $ini['phone3']; ?></address>
				
				<?php } ?>
				
		
				
				<a href="#" class="blue-btn call-request-btn header-btn">Пришлите заявку</a>
			</div>
			

<div class="head-nav-row">
				<div class="logo" id="ib-block1" contenteditable="true">
					<img src="images/sigaretioptom_logo.png" width="245" height="113" alt="sigaretioptom"></div>
				
				
	<div id="ib-block2" contenteditable="true">
	    <ul class="nav">
	<li><a href="#our-price">прайс-лист</a></li>
	<li><a href="#our-advantages">наши преимущества</a></li>
	<li><a href="#sheme">схема работы</a></li>
		<li><a href="#reviews">отзывы</a></li>
	<li><a href="#contacts">контакты</a></li>
</ul></div>
			</div>
			
			
			<div class="head-title-row" id="ib-block3" contenteditable="true"><h1>Купить сигареты оптом вы можете у нас</h1>

<p class="main-post-title">
    &nbsp&nbsp&nbspПродажа сигарет с фильтром и без фильтра, стиков, зажигалок и табачной продукции на территории России. Цены в прайсе на сайте актуальные и обновляются по мере смены остатков на складе и цен. 
    Оптовая продажа сигарет ведется с МРЦ, имеющейся на момент отгрузки. Для покупки сигарет с другой МРЦ - по запросу. 
    Посмотреть весь прайс-лист на сигареты, актуальный на сегодня вы можете <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">ТУТ</a>.</p>
</div>
		</div>
		
		<!--end header-->
		
		<div class="price">
			<div class="price" id="our-price" contenteditable="true">
			    <h2>Оптовый Прайс-лист на сигареты</h2>
		<p class="main-post-title"> &nbsp&nbsp&nbspВсегда актуальные цены на сигареты, стики и табачную продукцию ведущих российских, арабских, белорусских, киргизских, таджикских и многих других производителей качественного табака. Оптовый Прайс-лист обновляется ежедневно. Цены, указанные в нём всегда актуальны. Оперативно узнать о наличии и новых поступлениях сигарет в режиме он-лайн вы можете узначать в чате в телеграм: <?php print $ini['phone2']; ?>, или написав по контактам, указанным на сайте, или обновив страницу с прайс-листом.  </p>
		<p class="main-post-title-center"><a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">Смотреть прайс-лист</a></p><br><br>
		
		
		<!--end-price-->
		
		
		<div class="gallery-block" id="ib-block4" contenteditable="true"><ul id="gallery"><li>
	<div class="gal-img"><img alt="sigaretioptom_marlboro_red" height="299" src="images/gallery/sigarety_marlboro_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Мальборо. Красн/Желт <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a>
	</div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_optima_red" height="299" src="images/gallery/sigarety_optima_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Оптима. Красн/Желт <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a> </div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_winston_blue" height="299" src="images/gallery/sigarety_winston_blue.jpg" width="249"></div>

	<div class="gal-title">Сигареты Винстон. Син <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_kosmos" height="299" src="images/gallery/sigarety_kosmos.jpg" width="249"></div>

	<div class="gal-title">Сигареты Космос. <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_opal" height="299" src="images/gallery/sigarety_opal.jpg" width="249"></div>

	<div class="gal-title">Сигареты Опал. <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a> </div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_rodopi" height="299" src="images/gallery/sigarety_rodopi.jpg" width="249"></div>

	<div class="gal-title">Сигареты Родопи. <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_bond_blue" height="299" src="images/gallery/sigarety_bond_blue.jpg" width="249"></div>

	<div class="gal-title">Сигареты Бонд стрит. <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_credo" height="299" src="images/gallery/sigarety_credo.jpg" width="249"></div>

	<div class="gal-title">Сигареты Кредо. <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
			<li>
	<div class="gal-img"><img alt="sigaretioptom_ld_red" height="299" src="images/gallery/sigarety_ld_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты ЛД. Син/Красн <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
			<li>
	<div class="gal-img"><img alt="sigaretioptom_maksim_red" height="299" src="images/gallery/sigarety_maksim_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Максим. Красн/Сер <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
			<li>
	<div class="gal-img"><img alt="sigaretioptom_tambovskii_volk_black" height="299" src="images/gallery/sigarety_tambovskii_volk_black.jpg" width="249"></div>

	<div class="gal-title">Сигареты Тамбовский волк. Черн/Красн <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_troika_brown" height="299" src="images/gallery/sigarety_troika_brown.jpg" width="249"></div>

	<div class="gal-title">Сигареты Тройка. Корич <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_stolichnye_hard" height="299" src="images/gallery/sigarety_stolichnye_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты Столичные. Тв <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_donskoy_tabak_dark" height="299" src="images/gallery/sigarety_donskoy_tabak_dark.jpg" width="249"></div>

	<div class="gal-title">Сигареты Донской табак. Темн/Светл<br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_inter_hard" height="299" src="images/gallery/sigarety_inter_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты Интер. Тв <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_tu_134_hard" height="299" src="images/gallery/sigarety_tu_134_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты ТУ 134. Тв <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_bt_hard" height="299" src="images/gallery/sigarety_bt_hard.jpeg" width="249"></div>

	<div class="gal-title">Сигареты БТ. Тв <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_beloe_solnce_classic" height="299" src="images/gallery/sigarety_beloe_solnce_classic.jpg" width="249"></div>

	<div class="gal-title">Сигареты Белое солнце. Класс/Ориг <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_hortica_red" height="299" src="images/gallery/sigarety_hortica_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Хортица. Красн/Син <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_stewardess_hard" height="299" src="images/gallery/sigarety_stewardess_hard.jpg" width="249"></div>

	<div class="gal-title">Сигареты Стюардесса. Тв <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_kresty_red" height="299" src="images/gallery/sigarety_kresty_red.jpg" width="249"></div>

	<div class="gal-title">Сигареты Кресты. Красн/Син <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_bayron_white" height="299" src="images/gallery/sigarety_bayron_white.jpg" width="249"></div>

	<div class="gal-title">Сигареты Байрон. Бел <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_korona" height="299" src="images/gallery/sigarety_korona.jpg" width="249"></div>

	<div class="gal-title">Сигареты Корона. Желт <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
	<li>
	<div class="gal-img"><img alt="sigaretioptom_prima_dona" height="299" src="images/gallery/sigarety_prima_dona.jpg" width="249"></div>

	<div class="gal-title">Сигареты Прима Дона. <br> Цена: <a href="https://clck.ru/LrncT" target="newframe" style="color: #eb3f00">см.прайс-лист</a></div>
	</li>
</ul></div><!--end-gallery-->


<div class="form-block pattern-bg">	
<div id="ib-block5" contenteditable="true">
    <h3 class="form-title">Для оптовой закупки сигарет пришлите заявку.</h3></div>
    
    <form class="order-form clr" method="post" action="form/form.php">
    
<p><input type="text" name="name" class="name <?php if ($ini['name_required']) print 'required'; ?>" placeholder="Ваше имя"></p>

<p><input type="text" name="phone" class="phone phone-mask <?php if ($ini['phone_required']) print 'required'; ?>" placeholder="Ваш телефон"></p>
	
<p><input type="text" name="email" class="email <?php if ($ini['email_required']) print 'required'; ?>" placeholder="Ваш e-mail"></p>
			
<script type="text/javascript" src="js/captcha.js"></script>
					<p><button class="db-btn" type="submit">Отправить</button></p>
				</form>
		</div>

		<!--end form-block-->
		
		<div class="head-title-row" id="ib-block3" contenteditable="true"><h2>Оптовый ассортимент сигарет</h2>

<p class="main-post-title">&nbsp&nbsp&nbspВ ассортименте имеется широкий выбор популярной табачной продукции различной ценовой категории от разных производителей, такие как Milano (Милано), Cavallo (Кавалло), Mond (Монд), Rothmans, LD, Winston, Alliance, Chesterfield, L&M, More, Saint George, NEXT, болгарские сигареты, крымские, сигареты производства республики Беларусь, Киргизкой и Таджикской респ., Прима Дона и другие сигареты без фильтра, сигареты производства Балтийской Табачной Фабрики - Business Class, Dover и т.д. Сигареты оптом отправляются транспортной во все регионы россии. Так же возможно приобрести сигареты оптом с доставкой из Москвы, Ростова-на-Дону, Кемерово, Санкт-Петербурга, Ярославля и других городов РФ.<br> &nbsp&nbsp&nbspПрисылайте ваши заявки!</p>
</div>
		
		<!--end-stat-block-->
		
		
		
		<div class="why-we-wrap-block">
			<div class="why-we-block" id="our-advantages" contenteditable="true"><h2>Почему из всех оптовых поставщиков сигарет выбирают нас?</h2>

<ul class="why-we-list">
    <li>
	<ul class="why-we-inner"><li>
		<div class="why-we-img"><img alt="большой опыт в оптовых поставках сигарет" height="137" src="images/why-we-list/sigaretioptom_opit.png" width="137"></div>
		Большой опыт в данном направлении</li>
		<li>
		<div class="why-we-img"><img alt="зарекомендовали себя как лучшие поставщики сигарет" height="137" src="images/why-we-list/sigaretioptom_reputaciya.png" width="137"></div>
		Достойная репутация</li>
		<li>
		<div class="why-we-img"><img alt="индивидуально подходим к каждому покупателю сигарет" height="137" src="images/why-we-list/sigaretioptom_zabota.png" width="137"></div>
		Индивидуальный подход к каждому клиенту</li>
		<li>
		<div class="why-we-img"><img alt="для каждого оптового покупателя сигарет свои цены" height="137" src="images/why-we-list/sigaretioptom_ceni.png" width="137"></div>
		Гибкая ценовая политика</li>
		<li>
		<div class="why-we-img"><img alt="оперативно обрабатываем заказы на сигареты" height="137" src="images/why-we-list/sigaretioptom_vremya.png" width="137"></div>
		Оперативность обработки ваших заказов</li>
	</ul></li>
	</ul></div>
		</div>
		
		
		
		
		
		<div class="work-sheme" id="sheme" contenteditable="true"><h2>Что нужно сделать, чтоб купить сигареты оптом</h2>

<ul class="sheme-list clr">
	<li>
	<ul class="sheme-list-inner left-list">
		<li><img alt="" height="101" src="images/sheme-work/l-1.gif" width="101"><span>Прислать заявку</span></li>
		<li><img alt="" height="101" src="images/sheme-work/l-2.gif" width="101"><span>Согласовать способ оплаты</span></li>
		<li><img alt="" height="101" src="images/sheme-work/l-3.gif" width="101"><span>Оплатить сигартеы</span></li>
	</ul>
	</li>
	<li class="l-right">
	<ul class="sheme-list-inner right-list">
		<li><span>Узнать что есть на складе</span><img alt="" height="101" src="images/sheme-work/r-1.gif" width="101"></li>
		<li><span>Получить накладную</span><img alt="" height="101" src="images/sheme-work/r-2.gif" width="101"></li>
		<li><span>Принять сигареты</span><img alt="" height="101" src="images/sheme-work/r-3.gif" width="101"></li>
	</ul>
	</li>
</ul>
</div>
		<div class="reviews" id="reviews" contenteditable="true">
			<h2>Отзывы о сотрудничестве</h2>
			<ul class="reviews-list"><li>
					<div class="rev-img">
						<img src="images/reviews/sigaretioptom-1.jpg" alt="Сигареты оптом в Тамбове" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Дилер из Центрального Федерального Округа</h3>
						<span class="per-info">Тамбов</span>
						<span class="per-info">Александра</span>
						<p>Работаем с этими ребятами не первый год. Сначала покупали сигареты небольшими партиями, но со временем пришло доверие и объёмы увеличились. А теперь сигареты оптом закупаем только у них! </div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigaretioptom-2.jpg" alt="Сигареты оптом в Кемерово" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Дилер из Сибирского Федерального Округа </h3>
						<span class="per-info">Кемерово</span>
						<span class="per-info">Елена</span>
						<p>Это лучшие оптовые поставщики сигарет из всех, с которыми работала. Да, бывают косяки, но в сравнении с остальными эта компания просто идеальна! </p>
					</div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigaretioptom-3.jpg" alt="Сигареты оптом в Самаре" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Дилер из Приволжского Федерального Округа</h3>
						<span class="per-info">Самара</span>
						<span class="per-info">Лолита</span>
						<p>Я стала дилером по оптовой продаже сигарет в Приволжском ФО сравнительно недавно. Сначала думала, что какой-то развод, т.к. отгружали только после предоплаты. Но ребята понимают толк в своём деле и ни разу не подвели!</p>
					</div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigaretioptom-4.jpg" alt="Сигареты оптом в Краснодаре" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Дилер из Южного Федерального Округа</h3>
						<span class="per-info">Краснодар</span>
						<span class="per-info">Алёна</span>
						<p>Один риторический вопрос - зачем искать кого-то лучше, когда есть те, кто устраивает полностью? Вот так и с этой компанией - они просто лучшие. Сигареты качественные, поставка в срок, цены на сигареты низкие, ассортимент сигарет огромный. Что ещё нужно?</p>
					</div>
				</li>
				<li>
					<div class="rev-img">
						<img src="images/reviews/sigaretioptom-5.jpg" alt="Сигареты оптом в РФ" width="231" height="199"></div>
					<div class="rev-text">
						<h3>Нужен дилер по продаже сигарет!</h3>
						<span class="per-info">Во всех городах РФ</span>
						<span class="per-info">Не важно, какая у вас компания</span>
						<p>На постоянной основе приглашаем к сотрудничеству крупнух оптовых дилеров сигарет и табачной продукции из всех городов России. Для тех, кто готов выбирать большие объёмы сигарет, крупные партии табачной продукции мы готовы предложить лучшие цены!</p>
					</div>
				</li>
			</ul></div>
		<div class="contacts-info clr" id="contacts">
			<div id="ib-block-cont" contenteditable="true"><h2>Узнайте как купить сигареты оптом</h2></div>
			
			
			<div class="map-column">
			    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A04f22e77870d4542e001429d5460465c12d12a5347f9dd4abd510b9f37bc5e3a&amp;width=635&amp;height=543&amp;lang=ru_RU&amp;scroll=true"></script>
			    			</div>
			
			
			<div class="contacts-column">
				
				<address class="bottom-contacts">
					<?php if ($ini['address']) { ?><span class="contacts-title">Адрес:</span>
					
					<span><?php print $ini['address']; ?></span>
					<?php } ?><?php if ($ini['phone']) { ?>
					
					<span class="contacts-title">Телефон:</span>
					<span>
					    <?php print $ini['phone']; ?> </span> 
					    
					    <span class="contacts-title">ТЕЛЕГРАМ:</span>
					<span>
					    <?php print $ini['phone2']; ?> </span>
					    
					    <?php } ?>
					    
					    
					    
					
					<span class="contacts-title">Электронная почта:</span>
					<span>zakaz@sigaretioptomvrossii.ru (для корректного и оперативного ответа просим отправлять заявки через форму обратной связи или в Телеграм)</span>
					
					
					
					
					</address>
				<a href="#" class="blue-btn call-request-btn bottom-btn">Пришлите заявку</a>
				<div class="delivery-info" id="ib-block-delivery" contenteditable="true">
					<span class="contacts-title">Условия доставки сигарет:</span>
					<span>Любая партия сигарет до терминала транспортной компании бесплатно. Самовывоза нет.</span>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="copyright">
				<p>© <?php print $ini['company_name'] . ', ' . date('Y'); ?></p>
			</div>
			
			
			
			
			
			
			
				<div class="developer">
				<p>Лэндинг сделан <a href="http://ya.ru/" target="_blank">Руками мастеров</a></p>
			</div>
			
		</div>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Мы чтим закон. </br> 
		&nbsp&nbsp! Согласно Федеральному закону от 04.05.2011 № 99-ФЗ «О лицензировании отдельных видов деятельности» оптовая и розничная торговля сигаретами и табачной продукцией лицензированию не подлежит.</br> 
		
		&nbsp&nbsp! Мы соблюдаем федеральный закон от 23.02.2013 N 15-Ф3 "Об охране здоровья граждан от воздействия окружающего табачного дыма и последствий потребления табака", и не продаём табачную продукцию несовершеннолетним лицам.</br> 
		
		
		
	</div>
	
	
	
	
	<!--end wrapper-->
	
	<div class="modals">
		<div class="overlay"></div>
		<div class="modal recall-modal">
			<a href="#" class="close-btn"></a>
			
			
		<form action="form/form.php" method="POST" class="modal-form callback-form">
		<input type="hidden" name="type" value="call_request">
			
			<p><input type="text" name="name" class="name" placeholder="Ваше имя"></p>
			<p><input type="text" name="phone" class="phone phone-mask required" placeholder="Ваш телефон"></p>
			<p><input type="text" name="email" class="email email-mask required" placeholder="Ваша почта"></p>
			<script type="text/javascript" src="js/captcha.js"></script>
			<p><button type="submit" class="blue-btn modal-btn">Заказать звонок</button></p>
			</form>
		
		</div>
		
		<div class="modal thanks1-modal">
			<h3 class="form-title">Спасибо!</h3>
			<a href="#" class="close-btn"></a>
			<p class="call-you">Ваша заявка принята!</p>
		</div>
		
		<div class="modal thanks2-modal">
			<h3 class="form-title">Спасибо!</h3>
			<a href="#" class="close-btn"></a>
			<p class="call-you">Мы перезвоним вам в ближайшее время!</p>
		</div>
	</div>
	<?php if ($ini['body_code']) include($ini['body_code']); ?><?php include 'functions_html.php'; ?>
	 
	 
	

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55899766, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55899766" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
	
	
	
	
	
	
	<!--LiveInternet counter--><script type="text/javascript">
document.write('<a href="//www.liveinternet.ru/click" '+
'target="_blank"><img src="//counter.yadro.ru/hit?t14.15;r'+
escape(document.referrer)+((typeof(screen)=='undefined')?'':
';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
';h'+escape(document.title.substring(0,150))+';'+Math.random()+
'" alt="" title="LiveInternet: показано число просмотров за 24'+
' часа, посетителей за 24 часа и за сегодня" '+
'border="0" width="88" height="31"><\/a>')
</script><!--/LiveInternet-->
	
	<!-- Скрипт для модального окна определяющий время появления окна -->
    <script type="text/javascript">
	var delay_popup = 2000;
	setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
</script>
<!-- Скрипт для модального окна  -->
	
	
	</body></html>
