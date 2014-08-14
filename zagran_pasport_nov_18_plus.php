<?
$pagename = 'zagran_pasport_nov_18_plus';
$pagetitle = 'Оформление загранпаспорта нового образца  :: Для лиц достигших 18 летнего возраста';
include('include/head.php');
?>
		<ul class="breadcrumbs">
			<li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
			<li class="first"><a href="#">Личные документы</a></li>
			<li class="last"><span>Заявление о выдаче или замене паспорта</span></li>
		</ul>
	</div>
</div>
<div id="content">
	<div class="title">
		<span class="icomoon color_3">F</span><h1>Оформление загранпаспорта нового образца</h1>
		<h2>Для лиц достигших 18 летнего возраста</h2>
	</div>

	<form class="main clear">
		<fieldset class="group_1">
			<span class="point_num">1</span>
			<h3>Ваши персональные данные <span class="fr">
			<a href="#">Изменить данные</a> <i class="q">?
			<div class="bg_c3 q_hover">
				<p>Изменение личных данных будет происходить в личном кабинете.</p>
			</div></i>
			</span></h3>
			<em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
			</em><em class="wrapper l_33"><input type="text" placeholder="Имя" value="Александра" class="big" disabled="disabled"/>
			</em><em class="wrapper l_33"><input type="text" placeholder="Отчество" value="Константиновна" class="big" disabled="disabled"/></em><br/>
			
			<em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
			</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" /><label>Мужской</label>
			</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" checked="checked" /><label>Женский</label></em><br/>
			
			<em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="alexandra_k@bestmail.ru" disabled="disabled"/>
			</em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926) 867 09 09" disabled="disabled"/></em><br/>
		</fieldset>

		<fieldset class="group_2">
			<span class="point_num">2</span>
			<h3>Ваши паспортные данные</h3>
			
			<em class="wrapper l_16"><input type="text" placeholder="Серия" value="6512" class="big" disabled="disabled"/>
			</em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="994994" class="big" disabled="disabled"/>
			</em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" value="777-000" class="big" disabled="disabled"/>
			</em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" value="30.09.2010" disabled="disabled"/></em><br/>
			
			<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" value="Отделением УФМС России по Свердловской области в Верхенпышминском районе" class="big" disabled="disabled"/>
			</em><br/>
			<em class="wrapper l_66">
				<select class="select_choice">
					<option value="0" selected="selected" class="selected_one">Страна рождения</option>
					<option value="1">Белоруссия</option>
					<option value="2">Белоруссия</option>
					<option value="3">Украина</option>
					<option value="4">Белоруссия</option>
					<option value="5">Белоруссия</option>
					<option value="6">Украина</option>
					<option value="7">Украина</option>
					<option value="8">Белоруссия</option>
					<option value="9">Украина</option>
					<option value="10">Украина</option>
				</select>
			</em>
			
			<em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
		</fieldset>

		<fieldset class="group_3">
			<span class="point_num">3</span>
			<h3>Загрузите свою фотографию</h3>
			<div class="col_top">
				<h4>Требования к фотографии</h4>
				<ul class="list">
					<li>Черно-белая или цветная фотография формата JPEG. Размер файла 200–500 кБ.</li>
					<li>Фон: белый, светло-голубой или светло-серый.</li>
					<li>Головные уборы допускаются (по религиозным причинам), но они не должны скрывать овал лица.</li>
				</ul>
				<div class="more_info">
					<span class="pseudo popup_link"><em class="popup_technical">Все требования</em></span>
				</div>
			</div>
			<div class="col_left">
				<div class="load_photo">
					<div class="photo_brd">
						<img src="pic/pic_7.jpg" alt="" width="180" height="236">
						<div class="load_photo-sub">
							<div class="sub_wrap">
								<div class="sub_line sub_line_1"><span class="sub_txt">Голова не должна быть выше этой линии</span></div>
							</div>
							<div class="sub_wrap">
								<div class="sub_line sub_line_2"><span class="sub_txt">Глаза должны быть на уровне этой линии</span></div>
							</div>
							<div class="sub_wrap">
								<div class="sub_line sub_line_3"><span class="sub_txt">Плечи должны быть на уровне этой линии</span></div>
							</div>
						</div>
					</div>
					<div class="load_photo-btn">
						<a class="btn white small" href="#">
							<b>Загрузить фотографию</b>
						</a>
					</div>
				</div>
				<!-- При ошибке к классу .advice_upload необходимо добавить класс .error; При успешной загрузке, класс .upload -->
				<div class="advice_upload">
					<div class="advice type_not">
						<div class="advice_h">
							<div class="advice_ico"><span class="icomoon">3</span></div>
							<h2><span>Извините, ваша фотография не подходит</span></h2>
						</div>
					</div>
					<div class="advice type_ok">
						<div class="advice_h">
							<div class="advice_ico"><span class="icomoon">4</span></div>
							<h2><span>Ваша фотография успшно загружена</span></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col_right">
				<ul class="list edit_list">
					<li><div class="lnk"><button class="icomoon">Q</button><span class="txt">Повернуть по часовой</span></div></li>
					<li><div class="lnk"><button class="icomoon">R</button><span class="txt">Повернуть против часовой</span></div></li>
					<li><div class="lnk"><button class="icomoon">S</button><span class="txt">Обрезать фотографию</span></div></li>
					<li><div class="lnk"><button class="icomoon">T</button><span class="txt">Отменить последнее действие</span></div></li>
				</ul>
			</div>
		</fieldset>

		<fieldset class="group_4">
			<span class="point_num">4</span>
			<h3>Меняли ли вы когда-либо фамилия, имя или отчество?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_1" checked="checked" id="p_1"/><label for="p_1">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_1" id="p_2"/><label for="p_2">Да</label></em>
			
			<div class="fields_cover">
				<em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
				
				<em class="wrapper l_25"><input type="text" placeholder="Дата изменения" class="big" />
				</em><em class="wrapper l_75"><input type="text" placeholder="Укажите адрес изменения" class="big" />
				</em><br/>

				<a class="btn white plus" href="#">
					<span class="icomoon">8</span>
					<b>Добавить данные</b>
				</a>
				
			</div>
		</fieldset>

		<fieldset class="group_5">
			<span class="point_num">5</span>
			<h3>Имеете ли вы второе гражданство?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_2" checked="checked" id="p_3"/><label for="p_3">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_2" id="p_4"/><label for="p_4">Да</label></em>
			
			<div class="fields_cover">
				<em class="wrapper l_100">
					<select class="select_choice">
						<option value="0" selected="selected" class="selected_one">Страна рождения</option>
						<option value="1">Белоруссия</option>
						<option value="2">Белоруссия</option>
						<option value="3">Украина</option>
						<option value="4">Белоруссия</option>
						<option value="5">Белоруссия</option>
						<option value="6">Украина</option>
						<option value="7">Украина</option>
						<option value="8">Белоруссия</option>
						<option value="9">Украина</option>
						<option value="10">Украина</option>
					</select>
				</em>
			</div>
		</fieldset>

		<fieldset class="group_6">
			<span class="point_num">6</span>
			<h3>Тип оформления загранпаспорта</h3>

			<em class="wrapper l_100"><input type="radio" name="type_3" checked="checked" id="p_5"/><label for="p_5">Первичное</label></em>
				<div class="fields_cover">	
					<em class="wrapper l_25"><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><em class="wrapper l_25"><input type="text" placeholder="Действителен до" class="big" /></em><br/>
					
					<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
					</em>
				</div>
			
			<em class="wrapper l_100"><input type="radio" name="type_3" id="p_6"/><label for="p_6">В дополнение к имеющемуся</label></em>
				<div class="fields_cover">	
					<em class="wrapper l_25"><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><em class="wrapper l_25"><input type="text" placeholder="Действителен до" class="big" /></em><br/>
					
					<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
					</em>
				</div>

			<em class="wrapper l_100"><input type="radio" name="type_3" id="p_7"/><label for="p_7">Взамен использованного</label></em>
				<div class="fields_cover">	
					<em class="wrapper l_25"><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><em class="wrapper l_25"><input type="text" placeholder="Действителен до" class="big" /></em><br/>
					
					<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
					</em>
				</div>

			<em class="wrapper l_100"><input type="radio" name="type_3" id="p_8"/><label for="p_8">Взамен утраченного</label></em>
				<div class="fields_cover">	
					<em class="wrapper l_25"><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><em class="wrapper l_25"><input type="text" placeholder="Действителен до" class="big" /></em><br/>
					
					<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
					</em>
				</div>
		</fieldset>

		<fieldset class="group_7">
			<span class="point_num">7</span>
			<h3>Цель получения загранпаспорта</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_4" checked="checked" id="p_9"/><label for="p_9">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_4" id="p_10"/><label for="p_10">Да</label></em>
			
			<div class="fields_cover">
				<em class="wrapper l_100">
					<select class="select_choice">
						<option value="0" selected="selected" class="selected_one">Выберите страну</option>
						<option value="1">Белоруссия</option>
						<option value="2">Белоруссия</option>
						<option value="3">Украина</option>
						<option value="4">Белоруссия</option>
						<option value="5">Белоруссия</option>
						<option value="6">Украина</option>
						<option value="7">Украина</option>
						<option value="8">Белоруссия</option>
						<option value="9">Украина</option>
						<option value="10">Украина</option>
					</select>
				</em>
			</div>
		</fieldset>

		<fieldset class="group_8">
			<span class="point_num">8</span>
			<ul class="info_column">           
			  <li class="info_block type_1">
			    <h4>Внимание!</h4>
			    <p>Трудовая деятельность заполняется в соответствии с записями в трудовой книжке, а также включая учёбу в учебных заведениях и военную службу, без сокращений. Юридические адреса мест работы указываются полностью.</p>
			    <span class="icomoon">"</span>
			  </li>
			  <li>
			  	<img src="pic/pic_9.png" alt="" width="261" height="446">
			  </li>
			  <li class="info_block type_no-ico">
			    <h4>Дополнительная информация</h4>
			    <p>Вы не заполнили промежуток: с мая 2013 по сентябрь 2013</p>
			    <p>Вы не заполнили промежуток: с ноября 2013 по сентябрь 2014</p>
			  </li>
			</ul>

			<div class="field_slide-wrap js-field_slide-wrap">
				<h3>Ваша деятельность за последнии 10 лет</h3>

				<h4>Виды деятельности</h4>

				<div class="field_prelude">
					<ul class="list">
						<li><span class="icomoon">U</span><div class="sub_txt"><strong>Работа</strong></div></li>
						<li><span class="icomoon">V</span><div class="sub_txt"><strong>Учеба</strong> (в строке "Ваша должность/статус/звание" нужно писать - студент)</div></li>
						<li><span class="icomoon">W</span><div class="sub_txt"><strong>Военная служба</strong></div></li>
						<li><span class="icomoon">X</span><div class="sub_txt"><strong>Иное</strong> (В случае, если по каким либо причинам вы не работали более 1 месяца, необходимо указывать данную информацию отдельной записью, при этом в поле «Адрес» указать адрес постоянного места жительства за указанный период, а в поле «Ваша должность/статус/звание» – значение «Не работал(а)»)</div></li>
					</ul>
				</div>

				<div class="filed_slide">
					<div class="clear">
						<a href="#" class="close fr"><span class="icomoon">L</span><span class="sub_txt">Удалить данные</span></a>
					</div>
					<em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_1" checked="checked" /><label for="f_1">Я работал</label>
					</em><em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_2"/><label for="f_2">Я учился</label>
					</em><em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_3"/><label for="f_3">Я служил</label>
					</em><em class="wrapper l_25"><input type="radio" name="g_1_1" id="f_4"/><label for="f_4">Я не работал (иное)</label>
					</em>
				
					<em class="wrapper l_33">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">С какого месяца</option>
							<option value="1">Белоруссия</option>
							<option value="2">Белоруссия</option>
							<option value="3">Украина</option>
							<option value="4">Белоруссия</option>
							<option value="5">Белоруссия</option>
							<option value="6">Украина</option>
							<option value="7">Украина</option>
							<option value="8">Белоруссия</option>
							<option value="9">Украина</option>
							<option value="10">Украина</option>
						</select>
					</em><em class="wrapper l_16">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">Года</option>
							<option value="1">2014</option>
							<option value="2">2013</option>
							<option value="3">2012</option>
							<option value="4">2011</option>
							<option value="5">2010</option>
							<option value="6">2009</option>
							<option value="7">2008</option>
							<option value="8">2007</option>
							<option value="9">2006</option>
							<option value="10">2005</option>
						</select>
					</em><em class="wrapper l_33">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">По какой месяц</option>
							<option value="1">Белоруссия</option>
							<option value="2">Белоруссия</option>
							<option value="3">Украина</option>
							<option value="4">Белоруссия</option>
							<option value="5">Белоруссия</option>
							<option value="6">Украина</option>
							<option value="7">Украина</option>
							<option value="8">Белоруссия</option>
							<option value="9">Украина</option>
							<option value="10">Украина</option>
						</select>
					</em><em class="wrapper l_16">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">Год</option>
							<option value="1">2014</option>
							<option value="2">2013</option>
							<option value="3">2012</option>
							<option value="4">2011</option>
							<option value="5">2010</option>
							<option value="6">2009</option>
							<option value="7">2008</option>
							<option value="8">2007</option>
							<option value="9">2006</option>
							<option value="10">2005</option>
						</select>
					</em>
				
					<em class="wrapper l_50 chk_50"><input type="checkbox" id="f_35"/><label for="f_35">По настоящее время</label></em>
				
					<em class="wrapper l_50"><input type="text" placeholder="Ваша должность" class="big"/>
					</em><em class="wrapper l_50"><input type="text" placeholder="Место работы" class="big" />
					</em>
				
					<em class="wrapper l_100"><input type="text" placeholder="Укажите адрес" class="big"/>
					</em>
				</div>

				<div class="filed_slide">
					<div class="clear">
						<a href="#" class="close fr"><span class="icomoon">L</span><span class="sub_txt">Удалить данные</span></a>
					</div>
					<em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_1" checked="checked" /><label for="f_1">Я работал</label>
					</em><em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_2"/><label for="f_2">Я учился</label>
					</em><em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_3"/><label for="f_3">Я служил</label>
					</em><em class="wrapper l_25"><input type="radio" name="g_1_1" id="f_4"/><label for="f_4">Я не работал (иное)</label>
					</em>
				
					<em class="wrapper l_33">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">С какого месяца</option>
							<option value="1">Белоруссия</option>
							<option value="2">Белоруссия</option>
							<option value="3">Украина</option>
							<option value="4">Белоруссия</option>
							<option value="5">Белоруссия</option>
							<option value="6">Украина</option>
							<option value="7">Украина</option>
							<option value="8">Белоруссия</option>
							<option value="9">Украина</option>
							<option value="10">Украина</option>
						</select>
					</em><em class="wrapper l_16">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">Года</option>
							<option value="1">2014</option>
							<option value="2">2013</option>
							<option value="3">2012</option>
							<option value="4">2011</option>
							<option value="5">2010</option>
							<option value="6">2009</option>
							<option value="7">2008</option>
							<option value="8">2007</option>
							<option value="9">2006</option>
							<option value="10">2005</option>
						</select>
					</em><em class="wrapper l_33">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">По какой месяц</option>
							<option value="1">Белоруссия</option>
							<option value="2">Белоруссия</option>
							<option value="3">Украина</option>
							<option value="4">Белоруссия</option>
							<option value="5">Белоруссия</option>
							<option value="6">Украина</option>
							<option value="7">Украина</option>
							<option value="8">Белоруссия</option>
							<option value="9">Украина</option>
							<option value="10">Украина</option>
						</select>
					</em><em class="wrapper l_16">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">Год</option>
							<option value="1">2014</option>
							<option value="2">2013</option>
							<option value="3">2012</option>
							<option value="4">2011</option>
							<option value="5">2010</option>
							<option value="6">2009</option>
							<option value="7">2008</option>
							<option value="8">2007</option>
							<option value="9">2006</option>
							<option value="10">2005</option>
						</select>
					</em>
				
					<em class="wrapper l_50 chk_50"><input type="checkbox" id="f_36"/><label for="f_36">По настоящее время</label></em>
				
					<em class="wrapper l_50"><input type="text" placeholder="Ваша должность" class="big"/>
					</em><em class="wrapper l_50"><input type="text" placeholder="Место работы" class="big" />
					</em>
				
					<em class="wrapper l_100"><input type="text" placeholder="Укажите адрес" class="big"/>
					</em>
				</div>
				
				<div class="filed_slide">
					<div class="clear">
						<a href="#" class="close fr"><span class="icomoon">L</span><span class="sub_txt">Удалить данные</span></a>
					</div>
					<em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_1" checked="checked" /><label for="f_1">Я работал</label>
					</em><em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_2"/><label for="f_2">Я учился</label>
					</em><em class="wrapper l_16"><input type="radio" name="g_1_1" id="f_3"/><label for="f_3">Я служил</label>
					</em><em class="wrapper l_25"><input type="radio" name="g_1_1" id="f_4"/><label for="f_4">Я не работал (иное)</label>
					</em>
				
					<em class="wrapper l_33">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">С какого месяца</option>
							<option value="1">Белоруссия</option>
							<option value="2">Белоруссия</option>
							<option value="3">Украина</option>
							<option value="4">Белоруссия</option>
							<option value="5">Белоруссия</option>
							<option value="6">Украина</option>
							<option value="7">Украина</option>
							<option value="8">Белоруссия</option>
							<option value="9">Украина</option>
							<option value="10">Украина</option>
						</select>
					</em><em class="wrapper l_16">
						<select class="select_choice">
							<option value="0" selected="selected" class="selected_one">Года</option>
							<option value="1">2014</option>
							<option value="2">2013</option>
							<option value="3">2012</option>
							<option value="4">2011</option>
							<option value="5">2010</option>
							<option value="6">2009</option>
							<option value="7">2008</option>
							<option value="8">2007</option>
							<option value="9">2006</option>
							<option value="10">2005</option>
						</select>
					</em><em class="wrapper l_33">
						<select class="select_choice" disabled="disabled">
							<option value="0" selected="selected" class="selected_one">По какой месяц</option>
							<option value="1">Белоруссия</option>
							<option value="2">Белоруссия</option>
							<option value="3">Украина</option>
							<option value="4">Белоруссия</option>
							<option value="5">Белоруссия</option>
							<option value="6">Украина</option>
							<option value="7">Украина</option>
							<option value="8">Белоруссия</option>
							<option value="9">Украина</option>
							<option value="10">Украина</option>
						</select>
					</em><em class="wrapper l_16">
						<select class="select_choice" disabled="disabled">
							<option value="0" selected="selected" class="selected_one">Год</option>
							<option value="1">2014</option>
							<option value="2">2013</option>
							<option value="3">2012</option>
							<option value="4">2011</option>
							<option value="5">2010</option>
							<option value="6">2009</option>
							<option value="7">2008</option>
							<option value="8">2007</option>
							<option value="9">2006</option>
							<option value="10">2005</option>
						</select>
					</em>
				
					<em class="wrapper l_50 chk_50"><input type="checkbox" checked="checked" id="f_37"/><label for="f_37">По настоящее время</label></em>
				
					<em class="wrapper l_50"><input type="text" placeholder="Ваша должность" class="big"/>
					</em><em class="wrapper l_50"><input type="text" placeholder="Место работы" class="big" />
					</em>
				
					<em class="wrapper l_100"><input type="text" placeholder="Укажите адрес" class="big"/>
					</em>
				
					<a class="btn white plus" href="#">
						<span class="icomoon">8</span>
						<b>Добавить данные</b>
					</a>
				</div>

			</div>
		</fieldset>

		<fieldset class="group_9">
			<span class="point_num">9</span>
			<h3>Имели ли вы допуск к сведениям особой важности или совершенно секретным сведениям?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_5" checked="checked" id="p_11"/><label for="p_11">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_5" id="p_12"/><label for="p_12">Да</label></em>
			
			<div class="fields_cover">
				<em class="wrapper l_75"><input type="text" placeholder="По какой линии организации" class="big"/>
				</em><em class="wrapper l_25"><input type="text" placeholder="Год" class="big" />
				</em>
			</div>
		</fieldset>

		<fieldset class="group_10">
			<span class="point_num">10</span>
			<h3>Имеет ли вы договорные, контрактные обязательства, препятствующие выезду за границу?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_6" checked="checked" id="p_13"/><label for="p_13">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_6" id="p_14"/><label for="p_14">Да</label></em>
			
			<div class="fields_cover">
				<em class="wrapper l_75"><input type="text" placeholder="По какой линии организации" class="big"/>
				</em><em class="wrapper l_25"><input type="text" placeholder="Год" class="big" />
				</em>
			</div>
		</fieldset>

		<fieldset class="group_11">
			<span class="point_num">11</span>
			<h3>Призывались ли вы на военную службу или альтернативную гражданскую службу?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_7" checked="checked" id="p_15"/><label for="p_15">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_7" id="p_16"/><label for="p_16">Да</label></em>
		</fieldset>

		<fieldset class="group_12">
			<span class="point_num">12</span>
			<h3>Имеете ли вы судимость или не привлечены ли в качестве обвиняемого?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_8" checked="checked" id="p_17"/><label for="p_17">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_8" id="p_18"/><label for="p_18">Да</label></em>
		</fieldset>

		<fieldset class="group_13">
			<span class="point_num">13</span>
			<h3>Не уклонялись ли вы от исполнения обязательств, наложенных судом?</h3>
			
			<em class="wrapper l_100"><input type="radio" name="type_9" checked="checked" id="p_19"/><label for="p_19">Нет</label></em>
			
			<em class="wrapper l_100"><input type="radio" name="type_9" id="p_20"/><label for="p_20">Да</label></em>
		</fieldset>

		<fieldset class="group_14">
			<span class="point_num">14</span>
			<h3>Куда вы будете подавать оригиналы документов?</h3>
			
			<em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="p_21" /><label for="p_21">По месту постоянной регистрации, как в паспорте (срок оказания услуги – 2 месяца)</label></em>
			<div class="fields_cover">
				<em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
				</em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
				</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
				</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
				</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				
			</div>
			
			<em class="wrapper l_100"><input type="radio" name="place" id="p_22" /><label for="p_22">По месту временного нахождения (срок оказания услуги – 4 месяца) </label></em>
			<div class="fields_cover">
				<em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
				</em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
				</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
				</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
				</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				
			</div>
			
			<em class="wrapper l_100"><input type="radio" name="place" id="p_23" /><label for="p_23">По месту временной регистрации (срок оказания услуги – 4 месяца)</label></em>
			<div class="fields_cover">
				<em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
				</em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
				</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
				</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
				</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				
			</div>
			<h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
			
			<div class="map_cover">
				<div class="map_block" id="map"></div>
				<div class="map_nav">
					<h4 class="map_nav_h">Доступны подразделения:</h4>
					<ul class="map_list">
						<li class="map_list_item">
							<p><a href="#"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
							<p>Москва, Неглинная, 23</p>
						</li>
						<li class="map_list_item">
							<p><a href="#"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
							<p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
						</li>
						<li class="map_list_item">
							<p><a href="#"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
							<p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
						</li>
					</ul>
				</div><!-- map_nav -->
				<div class="map_ballon_block">
					<div class="map_ballon_wrap">
						<a class="map_ballon_close"><span class="icomoon">L</span></a>
						<div class="map_ballon_h">
							<p><strong>МИФНС России №46 по г. Москве</strong></p>
							<p>В составе ИФНС России № 1 по г. Москве</p>
						</div>
						<ul class="map_ballon_list">
							<li class="map_ballon_item">Адрес: Москва, Походный пр-д, 3, стр. 2</li>
							<li class="map_ballon_item">Режим работы: Пн-Пт: 9:00 - 18:00,</li>
							<li class="map_ballon_item">Обед: 12:30 - 13:30</li>
							<li class="map_ballon_item">Телефон: +7 (495) 913-00-09</li>
							<li class="map_ballon_item">Как добраться:</li>
							<li class="map_ballon_item">Ближайшее метро - Волоколамская,</li>
							<li class="map_ballon_item">Мякинино, Тушинская</li>
							<li class="map_ballon_item">E-mail: i010500@r01.nalog.ru</li>
						</ul>
					</div>
				</div><!-- map_ballon_block -->
			</div><!-- map_cover -->
		</fieldset>

		<fieldset class="group_15">
			<h3>Согласие на обработку персональных данных</h3>
			
			<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
			
			<em class="wrapper skew l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
			либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
		</fieldset>
				
		<span class="fr">
			<input class="big btn" type="submit" value="Отправить">
		</span>
	</form>
</div>


<?
include('include/footer.php');
?>