<?
	$pagename = 'mobile_zagran_pasport_nov_18_plus';
	$pagetitle = 'Загранпаспорт :: Для лиц достигших 18 летнего врозраста';
	include('include/mobile_head.php');
?>

<div id="content">
	<div class="title">
		<div class="limiter">
			<span class="icomoon color_3">G</span>
			<h1>Оформление загранпаспорта нового образца</h1>
			<h2>Для лиц достигших 18 летнего врозраста</h2>
		</div>
	</div>
	<form action="#" class="main clear big_inp-form bt">
		<fieldset class="group_1">
			<div class="limiter">
				<span class="point_num">1</span>
				<h3>Персональные данные</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_50"><label for="settings01">Фамилия</label><input id="settings01" type="text" placeholder="Фамилия" value="Константинопольский" disabled="disabled" class="big"/></em><em class="wrapper l_50"><label for="settings01">Имя</label><input id="settings01" type="text" placeholder="Имя" value="Константин" class="big" disabled="disabled"/></em>
				<em class="wrapper l_50"><label for="settings01">Отчество</label><input id="settings01" type="text" placeholder="Отчество" value="Андреевич" class="big"/ disabled="disabled"></em><br/>

				<em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
				</em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label class="flag_label" >Мужской</label>
				</em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" /><label class="flag_label"  class="flag_label">Женский</label></em><br/>

				<em class="wrapper l_50"><label for="settings01">Адрес электронной почты</label><input id="settings01" type="text" placeholder="Адрес электронной почты" value="30.09.1992" disabled="disabled" class="big" disabled="disabled" /></em><em class="wrapper l_50"><label for="settings01">Контактный телефон</label><input id="settings01" type="text" placeholder="Контактный телефон" value="+7 931 123-33-44" disabled="disabled" class="big" disabled="disabled" /></em>
				
				<div class="info-block_wrap">
					<div class="info_block type_2">
						<p class="info-block_h"><b>Обратите внимание</b></p>
						<p>Изменение личных данных будет происходить в личном кабинете.</p>
						<span class="icomoon">"</span>
					</div>
				</div>
				<em class="wrapper l_100"><span class="fl btn_field mobile_morpf"><input class="big btn white" type="submit" value="Изменить данные"></span></em>
			</div>
		</fieldset>

		<fieldset class="group_2">
			<div class="limiter">
				<span class="point_num">2</span>
				<h3>Ваши паспортные данные</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_33"><label for="settings02">Серия</label><input type="text" placeholder="Серия" class="big" value="17 08" disabled="disabled"/>
				</em><em class="wrapper l_33"><label for="settings02">Номер</label><input type="text" placeholder="Номер" value="949485" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><label for="settings02">Дата выдачи</label><input type="text" placeholder="Дата выдачи" value="07.12.2004" class="big" disabled="disabled" /></em><em class="wrapper l_33"><label for="settings02">Код подразделения</label><input type="text" placeholder="Код подразделения" class="big" value="330-009" disabled="disabled" /></em><br/>
				<em class="wrapper l_100"><label for="settings02">Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России по Свердловской области в Октябрьс…" disabled="disabled" /></em>
				<br/>
				
				<em class="wrapper l_100">
					<div class="search_inp-block">
						<input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
						<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
						<div class="selction_ajax-placeholder"></div>
					</div>
				</em>

				<em class="wrapper l_100"><label for="">Место рождения</label><input type="text" placeholder="Место рождения" class="big" /></em>

				<div class="info-block_wrap">
					<div class="info_block type_2">
						<p class="info-block_h"><b>Обратите внимание</b></p>
						<p>Изменение личных данных будет происходить в личном кабинете.</p>
						<span class="icomoon">"</span>
					</div>
				</div>
				<em class="wrapper l_100"><span class="fl btn_field mobile_morpf"><input class="big btn white" type="submit" value="Изменить данные"></span></em>
				
			</div>
		</fieldset>

		<fieldset class="group_3">
			<div class="limiter">
				<span class="point_num">3</span>
				<h3>Загрузите свою фотографию</h3>
			</div>


			<div class="limiter">
				<div class="load_photo-wrap clear">
					<div class="col_left load_photo_cols">
						<div class="load_photo">
							<div class="photo_brd">
								<img src="pic/pic_8.jpg" alt="">
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
						</div>
						
					</div><!-- col_left -->
					<div class="col_right load_photo_cols">
						<div class="require">
							<div class="require_wrap">
								<h4>Требования к фотографии</h4>
								<ul class="list clear">
									<li>Черно-белая или цветная фотография формата JPEG. Размер файла 200–500 кБ.</li>
									<li>Фон: белый, светло-голубой или светло-серый.</li>
									<li>Головные уборы допускаются (по религиозным причинам), но они не должны скрывать овал лица.</li>
								</ul>
								<div class="more_info">
									<span class="pseudo popup_link"><em class="popup_technical">Все требования</em></span>
								</div>
							</div>
						</div>
						<div class="edit_wrap">
							<ul class="list edit_list clear">
								<li><div class="lnk"><button class="icomoon">Q</button><span class="txt">Повернуть по часовой</span></div></li>
								<li><div class="lnk"><button class="icomoon">R</button><span class="txt">Повернуть против часовой</span></div></li>
								<li><div class="lnk"><button class="icomoon">S</button><span class="txt">Обрезать фотографию</span></div></li>
								<li><div class="lnk"><button class="icomoon">T</button><span class="txt">Отменить последнее действие</span></div></li>
							</ul>
						</div>
					</div><!-- col_right -->
				</div><!-- load_photo-wrap -->
				<div class="col_bottom load_photo_cols clear">
					<div class="clear">
						<div class="more_info">
							<span class="pseudo popup_link"><em class="popup_technical">Все требования</em></span>
						</div>
					</div>
					<div class="clear">
						<span class="btn big download_photo" href="#"><b>Загрузить фотографию</b></span>
					</div>

					<div class="clear">
						<span class="btn white fl big change_photo" href="#"><b>Изменить фотографию</b></span>
					</div>

					<div class="clear">
						<span class="btn white larr fl big back_photo" href="#"><b>Вернуться назад</b></span>
						<span class="btn fr big done_photo" href="#"><b>Фотография готова</b></span>
					</div>

					<!-- При ошибке к классу .advice_upload необходимо добавить класс .error; При успешной загрузке, класс .upload -->
					<div class="advice_upload">
						<div class="advice type_ok">
							<div class="advice_h">
								<div class="advice_ico"><span class="icomoon">4</span></div>
								<h2><span>Ваша фотография успшно загружена!</span></h2>
							</div>
						</div>
						<div class="advice type_not">
							<div class="advice_h">
								<div class="advice_ico"><span class="icomoon">3</span></div>
								<h2><span>Извините, ваша фотография не подходит</span></h2>
							</div>
						</div>
					</div><!-- advice_upload -->
				</div>
			</div>
		</fieldset>

		<fieldset class="group_4">
			<div class="limiter">
				<span class="point_num">4</span>
				<h3>Меняли ли вы когда-либо фамилию, имя или отчество?</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked"/><label class="flag_label"  for="f_1">Нет</label></em>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label class="flag_label"  for="f_2">Да</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_50"><label for="f_2_0">Фамилия</label><input id="f_2_0" type="text" placeholder="Фамилия" class="big" />
					</em><em class="wrapper l_50"><label for="f_2_1">Имя</label><input id="f_2_1" type="text" placeholder="Имя" class="big" />
					</em><em class="wrapper l_50"><label for="f_2_2">Отчество</label><input id="f_2_2" type="text" placeholder="Отчество" class="big" />
					</em><br/>

					<em class="wrapper l_25"><label for="f_2_3">Дата изменения</label><input id="f_2_3" type="text" placeholder="Дата изменения" class="big" /></em>

					<em class="wrapper l_100">
						<div class="search_inp-block">
							<input type="search" placeholder="Адрес изменения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>

					<em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>
				</div>
			</div><!-- fields_cover -->
		</fieldset>

		<fieldset class="group_5">
			<div class="limiter">
				<span class="point_num">5</span>
				<h3>Имеет ли вы второе гражданство?</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_2" id="f_3" checked="checked"/><label class="flag_label"  for="f_3">Нет</label></em>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_2" id="f_4"/><label class="flag_label"  for="f_4">Да</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100">
						<label for="">Выберите страну</label>
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
			</div><!-- fields_cover -->
		</fieldset>

		<fieldset class="group_6">
			<div class="limiter">
				<span class="point_num">6</span>
				<h3>Тип оформления загранпаспорта</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_3" id="f_5" checked="checked"/><label class="flag_label"  for="f_5">Первичное</label></em>
			</div>

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_3" id="f_6"/><label class="flag_label"  for="f_6">В дополнение к имеющемуся</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<h4>Данные вашего загранпаспорта</h4>

					<em class="wrapper l_33"><label for="f_2_0">Серия</label><input id="f_2_0" type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_1">Номер</label><input id="f_2_1" type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_2">Дата выдачи</label><input id="f_2_2" type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_3">Действителен до</label><input id="f_2_3" type="text" placeholder="Действителен до" class="big" /></em>

					<em class="wrapper l_100"><label for="f_2_4">Кем выдан</label><input id="f_2_4" type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
			</div><!-- fields_cover -->

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_3" id="f_7"/><label class="flag_label"  for="f_7">В замен использованного</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<h4>Данные вашего загранпаспорта</h4>

					<em class="wrapper l_33"><label for="f_2_5">Серия</label><input id="f_2_5" type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_6">Номер</label><input id="f_2_6" type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_7">Дата выдачи</label><input id="f_2_7" type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_8">Действителен до</label><input id="f_2_8" type="text" placeholder="Действителен до" class="big" /></em>

					<em class="wrapper l_100"><label for="f_2_9">Кем выдан</label><input id="f_2_9" type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
			</div><!-- fields_cover -->

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_3" id="f_8"/><label class="flag_label"  for="f_8">В замен утраченного</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<h4>Данные вашего загранпаспорта</h4>

					<em class="wrapper l_33"><label for="f_2_10">Серия</label><input id="f_2_10" type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_11">Номер</label><input id="f_2_11" type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_12">Дата выдачи</label><input id="f_2_12" type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_33"><label for="f_2_13">Действителен до</label><input id="f_2_13" type="text" placeholder="Действителен до" class="big" /></em>

					<em class="wrapper l_100"><label for="f_2_14">Кем выдан</label><input id="f_2_14" type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
			</div><!-- fields_cover -->
		</fieldset>

		<fieldset class="group_7">
			<div class="limiter">
				<span class="point_num">7</span>
				<h3>Цель получения загранпаспорта</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_4" id="f_9" checked="checked"/><label class="flag_label"  for="f_9">Для временных выездов за границу</label></em>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_4" id="f_10"/><label class="flag_label"  for="f_10">Для проживания за границей</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<label for="">Выберите страну</label>
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
			</div><!-- fields_cover -->
		</fieldset>

		<fieldset class="group_8">
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
				<div class="limiter">
					<span class="point_num">8</span>
					<h3>Ваша деятельность за последнии 10 лет</h3>
				</div>

				<div class="limiter">
					<h4>Виды деятельности</h4>
					
					<div class="field_prelude">
						<ul class="list">
							<li><div class="sub_txt"><strong>Работа</strong></div></li>
							<li><div class="sub_txt"><strong>Учеба</strong> (в строке "Ваша должность/статус/звание" нужно писать - студент)</div></li>
							<li><div class="sub_txt"><strong>Военная служба</strong></div></li>
							<li><div class="sub_txt"><strong>Иное</strong> (В случае, если по каким либо причинам вы не работали более 1 месяца, необходимо указывать данную информацию отдельной записью, при этом в поле «Адрес» указать адрес постоянного места жительства за указанный период, а в поле «Ваша должность/статус/звание» – значение «Не работал(а)»)</div></li>
						</ul>
					</div>
				</div>

				<div class="filed_slide">
					<div class="limiter">
						<div class="radio_group">
							<em class="wrapper l_25"><input type="radio" name="g_5_1" id="f_2_15" checked="checked" /><label class="flag_label" for="f_2_15">Я работал</label>
							</em><em class="wrapper l_25"><input type="radio" name="g_5_1" id="f_2_16"/><label class="flag_label" for="f_2_16">Я учился</label>
							</em><em class="wrapper l_25"><input type="radio" name="g_5_1" id="f_2_17"/><label class="flag_label" for="f_2_17">Я служил</label>
							</em><em class="wrapper l_25"><input type="radio" name="g_5_1" id="f_2_18"/><label class="flag_label" for="f_2_18">Я не работал (иное)</label>
							</em>
						</div>
										
						<em class="wrapper l_50">
							<label for="f_31">С какого месяца</label>
							<select class="select_choice" id="f_31">
								<option value="0" selected="selected" class="selected_one">С какого месяца</option>
								<option value="Январь">Январь</option> 
								<option value="Февраль">Февраль</option> 
								<option value="Март">Март</option> 
								<option value="Апрель">Апрель</option> 
								<option value="Май">Май</option> 
								<option value="Июнь">Июнь</option> 
								<option value="Июль">Июль</option> 
								<option value="Август">Август</option> 
								<option value="Сентябрь">Сентябрь</option> 
								<option value="Октябрь">Октябрь</option> 
								<option value="Ноябрь">Ноябрь</option> 
								<option value="Декабрь">Декабрь</option>
							</select>
						</em><em class="wrapper l_33">
							<label for="f_32">Года</label>
							<select class="select_choice" id="f_32">
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
						</em><em class="wrapper l_50">
							<label for="f_33">По какой месяц</label>
							<select class="select_choice" id="f_33">
								<option value="0" selected="selected" class="selected_one">По какой месяц</option>
								<option value="Январь">Январь</option> 
								<option value="Февраль">Февраль</option> 
								<option value="Март">Март</option> 
								<option value="Апрель">Апрель</option> 
								<option value="Май">Май</option> 
								<option value="Июнь">Июнь</option> 
								<option value="Июль">Июль</option> 
								<option value="Август">Август</option> 
								<option value="Сентябрь">Сентябрь</option> 
								<option value="Октябрь">Октябрь</option> 
								<option value="Ноябрь">Ноябрь</option> 
								<option value="Декабрь">Декабрь</option>
							</select>
						</em><em class="wrapper l_33">
							<label for="f_34">Год</label>
							<select class="select_choice" id="f_34">
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
										
						<em class="wrapper l_100 chk_50"><input type="checkbox" id="f_35"/><label class="flag_label" for="f_35">По настоящее время</label></em>
										
						<em class="wrapper l_100"><label for="f_36">Ваша должность</label><input id="f_36" type="text" placeholder="Ваша должность" class="big"/>
						</em>
						<em class="wrapper l_100"><label for="f_37">Место работы</label><input id="f_37" type="text" placeholder="Место работы" class="big" />
						</em>
										
						<em class="wrapper l_100"><label for="f_38">Укажите адрес</label><input id="f_38" type="text" placeholder="Укажите адрес" class="big"/>
						</em>
					</div>
					<div class="limiter">
						<div class="wrapper l_100">
							<a href="#" class="btn white close"><span class="icomoon">L</span><b>Удалить данные</b></a>
						</div>
					</div>
				</div><!-- filed_slide -->
			</div><!-- field_slide_wrap -->
			<div class="l_100 btn_add-slide">
				<div class="limiter">
					<a class="btn big plus" href="#">
						<b>Добавить данные</b>
					</a>
				</div>
			</div>
		</fieldset>

		<fieldset class="group_9">
			<div class="limiter">
				<span class="point_num">9</span>
				<h3>Имели ли вы допуск к сведениям особой важности или совершенно секретным сведениям?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_6" checked="checked" id="f_11"/><label class="flag_label" for="f_11">Нет</label></em>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_6" id="f_12"/><label class="flag_label" for="f_12">Да</label></em>
			</div>
			
			
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_75"><label for="">По какой линии организации</label><input type="text" placeholder="По какой линии организации" class="big"/>
					</em><em class="wrapper l_25"><label for="">Год</label><input type="text" placeholder="Год" class="big" />
					</em>
				</div>
			</div>
		</fieldset>

		<fieldset class="group_10">
			<div class="limiter">
				<span class="point_num">10</span>
				<h3>Имеете ли вы договорные контрактные обязательства, препядствующие выезду за границу?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_7" checked="checked" id="f_13"/><label class="flag_label" for="f_13">Нет</label></em>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_7" id="f_14"/><label class="flag_label" for="f_14">Да</label></em>
			</div>
			
			
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_75"><label for="">По какой линии организации</label><input type="text" placeholder="По какой линии организации" class="big"/>
					</em><em class="wrapper l_25"><label for="">Год</label><input type="text" placeholder="Год" class="big" />
					</em>
				</div>
			</div>
		</fieldset>

		<fieldset class="group_11">
			<div class="limiter">
				<span class="point_num">11</span>
				<h3>Имеете ли вы судимость или не привлечены в качестве обвиняемого?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_8" checked="checked" id="f_15"/><label class="flag_label" for="f_15">Нет</label></em>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_8" id="f_16"/><label class="flag_label" for="f_16">Да</label></em>
			</div>
		</fieldset>

		<fieldset class="group_12">
			<div class="limiter">
				<span class="point_num">12</span>
				<h3>Призывались ли вы на военную службу или альтернативную гражданскую службу?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_9" checked="checked" id="f_17"/><label class="flag_label" for="f_17">Нет</label></em>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_9" id="f_18"/><label class="flag_label" for="f_18">Да</label></em>
			</div>
		</fieldset>

		<fieldset class="group_13">
			<div class="limiter">
				<span class="point_num">13</span>
				<h3>Не уклонялись ли вы от исполнения обязательств, наложенных судом?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_10" checked="checked" id="f_19"/><label class="flag_label" for="f_19">Нет</label></em>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_10" id="f_20"/><label class="flag_label" for="f_20">Да</label></em>
			</div>
		</fieldset>

		<fieldset class="group_15">
			<div class="limiter">
				<span class="point_num">15</span>
				<h3>Куда вы будете подавать оригиналы документов?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="p_21" /><label class="flag_label" for="p_21">По месту постоянной регистрации, как в паспорте (срок оказания услуги – 2 месяца)</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100"><label for="">Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
					
					<em class="wrapper l_50"><label for="">Район</label><input type="text" placeholder="Район" class="big" />
					</em><em class="wrapper l_50"><label for="">Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
					
					<em class="wrapper l_50"><label for="">Улица</label><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><label for="">Дом</label><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><label for="">Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><label for="">Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
				
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="place" id="p_22" /><label class="flag_label" for="p_22">По месту временного нахождения (срок оказания услуги – 4 месяца) </label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100"><label for="">Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
					
					<em class="wrapper l_50"><label for="">Район</label><input type="text" placeholder="Район" class="big" />
					</em><em class="wrapper l_50"><label for="">Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
					
					<em class="wrapper l_50"><label for="">Улица</label><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><label for="">Дом</label><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><label for="">Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><label for="">Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
				
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="place" id="p_23" /><label class="flag_label" for="p_23">По месту временной регистрации (срок оказания услуги – 4 месяца)</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100"><label for="">Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
					
					<em class="wrapper l_50"><label for="">Район</label><input type="text" placeholder="Район" class="big" />
					</em><em class="wrapper l_50"><label for="">Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
					
					<em class="wrapper l_50"><label for="">Улица</label><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><label for="">Дом</label><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><label for="">Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><label for="">Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
				
			</div>
			<div class="limiter">
				<div class="map-h_wrap">
					<h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
				</div>
			</div>
			
			<div class="map_cover">
			  <div class="map_block" id="map"></div>
			    <div class="address_list">               
			      <div class="map_nav">
			        <div class="limiter">
			        <h4 class="map_nav_h">Доступны подразделения:</h4>
			        </div>
			        <ul class="map_list">
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			            <p><a href="#"><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
			            <p>Москва, Неглинная, 23</p>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			            <p><a href="#"><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
			            <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			            <p><a href="#"><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
			            <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			            <p><a href="#"><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
			            <p>Москва, Неглинная, 23</p>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			            <p><a href="#"><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
			            <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			            <p><a href="#"><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
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
			    </div>                 
			</div><!-- map_cover -->
		</fieldset>

		 <fieldset class="group_16">           
		  <div class="limiter">    
		    <h3 class="ml0">Согласие на обработку персональных данных</h3>     
		    
		    <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40" class="flag_label">Согласен на обработку персональных данных</label></em>
		    
		    <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_41" /><label for="f_41" class="flag_label">Об ответственности за предоставление заведомо ложных сведений,
		     либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>      
		  </div>                   
		 </fieldset>                                                
		
		<div class="last-btn_cover">
		 <div class="last-btn_cont clear">
		 	<span class="fr">
		 	  <input class="big btn" type="submit" value="Отправить">
		 	</span>
		 </div>
		</div>  
	</form>
</div>

<?
	include('include/mobile_footer.php');
?>