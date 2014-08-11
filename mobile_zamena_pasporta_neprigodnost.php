<?
$pagename = 'mobile_zamena_pasporta_neprigodnost';
$pagetitle = 'Замена паспорта :: В связи с непригодностью к использованию';
include('include/mobile_head.php');
?>
<div id="content">
	<div class="title">
		<div class="limiter">
			<span class="icomoon color_3">G</span>
			<h1>Замена паспорта гражданина <span class="reverse_title_max">Российской Федерации</span><span class="reverse_title_min">РФ</span></h1>
			<h2>В связи с непригодностью к использованию</h2>
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
				<em class="wrapper l_100"><span class="fl btn_field"><input class="big btn white" type="submit" value="Изменить данные"></span></em>
			</div>
		</fieldset>


		<fieldset class="group_3">
			<div class="limiter">
				<span class="point_num">3</span>
				<h3>Сведения о паспорте, подлежащем замене</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_33"><label for="settings02">Серия</label><input type="text" placeholder="Серия" class="big" value="17 08" disabled="disabled"/>
				</em><em class="wrapper l_33"><label for="settings02">Номер</label><input type="text" placeholder="Номер" value="949485" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><label for="settings02">Дата выдачи</label><input type="text" placeholder="Дата выдачи" value="07.12.2004" class="big" disabled="disabled" /></em><em class="wrapper l_33"><label for="settings02">Код подразделения</label><input type="text" placeholder="Код подразделения" class="big" value="330-009" disabled="disabled" /></em><br/>
				<em class="wrapper l_100"><label for="settings02">Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России по Свердловской области в Октябрьс…" disabled="disabled" /></em>
				<br/>
				<div class="info-block_wrap">
					<div class="info_block type_2">
						<p class="info-block_h"><b>Обратите внимание</b></p>
						<p>Изменение личных данных будет происходить в личном кабинете.</p>
						<span class="icomoon">"</span>
					</div>
				</div>
				<em class="wrapper l_100"><span class="fl btn_field"><input class="big btn white" type="submit" value="Изменить данные"></span></em>
				<em class="wrapper l_100">
				<select class="select_choice">
					<option value="0" class="selected_one" name="Номер транспортного средства">Номер транспортного средства</option>
					<option value="1" >Номер не задан</option>
					<option value="2">А777АА 777</option>
					<option value="3">А999АА 999</option>
					<option value="4">А777АА 777</option>
					<option value="5">А999АА 999</option>
					<option value="6">А777АА 777</option>
					<option value="7">А999АА 999</option>
					<option value="6">А777АА 777</option>
					<option value="7">А999АА 999</option>
				</select>
				</em>
			</div>
		</fieldset>
		<fieldset class="group_4">
			<div class="limiter">
				<span class="point_num">4</span>
				<h3>Имеется ли у вас действующий в настоящий момент загранпаспорт?</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_3" id="f_1" checked="checked"/><label class="flag_label"  for="f_1">Нет</label></em>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_3" id="f_2"/><label class="flag_label"  for="f_2">Да</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">

					<h4>Данные вашего загранпаспорта</h4>

					<em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_33"><label>Действителен до</label><input type="text" placeholder="Действителен до" class="big" /></em>

					<em class="wrapper l_100"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
			</div><!-- fields_cover -->
		</fieldset>
		<fieldset class="group_5">
			<div class="limiter">
				<span class="point_num">5</span>
				<h3>Есть или было ли у вас гражданство другого государства?</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_4" id="f_3" checked="checked"/><label class="flag_label"  for="f_3">Нет, я никогда не имел гражданство другого государства</label></em>
			</div>
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_4" id="f_4"/><label class="flag_label"  for="f_4">Да, у меня имеется по настоящее время гражданство другого государства</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">

					<h4>Данные вашего загранпаспорта</h4>
					
					<em class="wrapper l_100">
						<select class="select_choice">
							<option value="0" class="selected_one" name="Номер транспортного средства">Гражданство</option>
							<option value="2">Россия</option>
							<option value="3">Белорусия</option>
							<option value="4">Россия</option>
							<option value="5">Белорусия</option>
							<option value="6">Россия</option>
							<option value="7">Белорусия</option>
							<option value="6">Россия</option>
							<option value="7">Белорусия</option>
						</select>
					</em>
					<em class="wrapper l_33"><label>Дата вступления</label><input type="text" placeholder="Дата вступления" class="big" /></em>
					<em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>

					<h4>Основание приобретения гражданство РФ</h4>

					<em class="wrapper l_100"><input type="radio" name="g_4_1" id="f_5"/><label class="flag_label" for="f_5">По рождению</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_1" id="f_6"/><label class="flag_label" for="f_6">Прием в гражданство</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_1" id="f_7"/><label class="flag_label" for="f_7">Восстановление в гражданстве</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_1" id="f_8"/><label class="flag_label" for="f_8">Иное</label></em>

					<h4>Укажите наименование органа, принявшего решение о гражданстве РФ, и дату вступления</h4>
					
					<em class="wrapper l_100"><label for="f_10">Название организации</label><input type="text" id="f_10" placeholder="Название организации" class="big" /></em>
					<em class="wrapper l_33"><label for="f_11">Дата вступления</label><input type="text" id="f_11" placeholder="Дата вступления" class="big" /></em>
				</div>
			</div><!-- fields_cover -->

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_4" id="f_12"/><label class="flag_label"  for="f_12">Да, ранее у меня имелось гражданство другого государства</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">

					<h4>Данные вашего загранпаспорта</h4>
					
					<em class="wrapper l_100">
						<select class="select_choice">
							<option value="0" class="selected_one" name="Номер транспортного средства">Гражданство</option>
							<option value="2">Россия</option>
							<option value="3">Белорусия</option>
							<option value="4">Россия</option>
							<option value="5">Белорусия</option>
							<option value="6">Россия</option>
							<option value="7">Белорусия</option>
							<option value="6">Россия</option>
							<option value="7">Белорусия</option>
						</select>
					</em>
					<em class="wrapper l_33"><label>Дата вступления</label><input type="text" placeholder="Дата вступления" class="big" /></em>
					<em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>

					<h4>Основание приобретения гражданство РФ</h4>

					<em class="wrapper l_100"><input type="radio" name="g_4_2" id="f_13"/><label class="flag_label" for="f_13">По рождению</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_2" id="f_14"/><label class="flag_label" for="f_14">Прием в гражданство</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_2" id="f_15"/><label class="flag_label" for="f_15">Восстановление в гражданстве</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_2" id="f_16"/><label class="flag_label" for="f_16">Иное</label></em>

					<h4>Укажите наименование органа, принявшего решение о гражданстве РФ, и дату вступления</h4>
					
					<em class="wrapper l_100"><label for="f_17">Название организации</label><input type="text" id="f_17" placeholder="Название организации" class="big" /></em>
					<em class="wrapper l_33"><label for="f_18">Дата вступления</label><input type="text" id="f_18" placeholder="Дата вступления" class="big" /></em>
				</div>
			</div><!-- fields_cover -->

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="g_4" id="f_19"/><label class="flag_label"  for="f_19">Я являюсь лицом без гражданства</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">

					<h4>Данные вашего загранпаспорта</h4>
					
					<em class="wrapper l_100">
						<select class="select_choice">
							<option value="0" class="selected_one" name="Номер транспортного средства">Гражданство</option>
							<option value="2">Россия</option>
							<option value="3">Белорусия</option>
							<option value="4">Россия</option>
							<option value="5">Белорусия</option>
							<option value="6">Россия</option>
							<option value="7">Белорусия</option>
							<option value="6">Россия</option>
							<option value="7">Белорусия</option>
						</select>
					</em>
					<em class="wrapper l_33"><label>Дата вступления</label><input type="text" placeholder="Дата вступления" class="big" /></em>
					<em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>

					<h4>Основание приобретения гражданство РФ</h4>

					<em class="wrapper l_100"><input type="radio" name="g_4_3" id="f_13"/><label class="flag_label" for="f_13">По рождению</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_3" id="f_14"/><label class="flag_label" for="f_14">Прием в гражданство</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_3" id="f_15"/><label class="flag_label" for="f_15">Восстановление в гражданстве</label></em>
					<em class="wrapper l_100"><input type="radio" name="g_4_3" id="f_16"/><label class="flag_label" for="f_16">Иное</label></em>

					<h4>Укажите наименование органа, принявшего решение о гражданстве РФ, и дату вступления</h4>
					
					<em class="wrapper l_100"><label for="f_20">Название организации</label><input type="text" id="f_20" placeholder="Название организации" class="big" /></em>
					<em class="wrapper l_33"><label for="f_20">Дата вступления</label><input type="text" id="f_20" placeholder="Дата вступления" class="big" /></em>
				</div>
			</div><!-- fields_cover -->
		</fieldset>

		<fieldset class="group_6">
			<div class="limiter">
				<span class="point_num">6</span>
				<h3>Семейное положение</h3>
			</div>

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="family_status" checked="checked" id="f_s_1"/><label class="flag_label" for="f_s_1">Никогда не была замужем</label></em>
			</div>

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_2"/><label class="flag_label" for="f_s_2">Замужем</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<h4>Персональные данные супруга</h4>
					
					<em class="wrapper l_50"><label for="">Фамилия</label><input type="text" placeholder="Фамилия" class="big" /></em><br/>
					<em class="wrapper l_50"><label for="">Имя</label><input type="text" placeholder="Имя" class="big" /></em><em class="wrapper l_50"><label for="">Отчество</label><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
					
					<em class="wrapper l_33"><label for="">Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
					</em>
					
					<h4>Сведения о документе, подтверждающем ваше семейное положение</h4>
					
					<em class="wrapper l_33"><label for="">Дата вступления в брак</label><input type="text" placeholder="Дата вступления в брак" class="big" />
					</em><em class="wrapper l_33"><label for="">Серия</label><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_33"><label for="">Номер</label><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_66"><label for="">Номер актовой записи</label><input type="text" placeholder="Номер актовой записи" class="big" />
					</em><em class="wrapper l_33"><label for="">Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_66"><label for="">Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
			</div>

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_3"/><label class="flag_label" for="f_s_3">Вдова</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<h4>Персональные данные супруга</h4>
					
					<em class="wrapper l_50"><label for="#">Фамилия</label><input type="text" placeholder="Фамилия" class="big" />
					</em><br/>
					<em class="wrapper l_50"><label for="#">Имя</label><input type="text" placeholder="Имя" class="big" />
					</em><em class="wrapper l_50"><label for="#">Отчество</label><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
					
					<em class="wrapper l_33"><label for="#">Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
					</em>
				</div>
			</div>

			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_4"/><label class="flag_label" for="f_s_4">Разведена</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<h4>Персональные данные супруга</h4>
					
					<em class="wrapper l_50"><input type="text" placeholder="Фамилия" class="big" />
					</em><br/>
					<em class="wrapper l_50"><input type="text" placeholder="Имя" class="big" />
					</em><em class="wrapper l_50"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
					
					<em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
					</em>
					
					<h4>Сведения о документе, подтверждающем ваше семейное положение</h4>
					
					<em class="wrapper l_33"><label for="">Дата вступления в брак</label><input type="text" placeholder="Дата вступления в брак" class="big" />
					</em><em class="wrapper l_33"><label for="">Серия</label><input type="text" placeholder="Серия" class="big" />
					</em><em class="wrapper l_33"><label for="">Номер</label><input type="text" placeholder="Номер" class="big" />
					</em><em class="wrapper l_66"><label for="">Номер актовой записи</label><input type="text" placeholder="Номер актовой записи" class="big" />
					</em><em class="wrapper l_33"><label for="">Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_66"><label for="">Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
			</div>
		</fieldset>

		<fieldset class="group_7">
			<div class="limiter">
				<span class="point_num">7</span>
				<h3>Есть ли у вас несовершеннолетние дети?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" checked="checked" name="chaild" id="ch_1"/><label class="flag_label" for="ch_1">Нет</label></em>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="chaild" id="ch_2"/><label class="flag_label" for="ch_2">Да</label></em>
			</div>
			
			<div class="fields_cover">
				<div class="limiter">
					<h4>Укажите страну ФИО ребенка</h4>
					
					<em class="wrapper l_50"><label for="#">Фамилия</label><input type="text" placeholder="Фамилия" class="big" />
					</em><br/><em class="wrapper l_50"><label for="#">Имя</label><input type="text" placeholder="Имя" class="big" />
					</em><em class="wrapper l_50"><label for="#">Отчество</label><input type="text" placeholder="Отчество" class="big" /></em><br/>
					
					<em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
					</em><em class="wrapper l_25"><input type="radio" name="sex_3" checked="checked" /><label class="flag_label">Мужской</label>
                	</em><em class="wrapper l_25"><input type="radio" name="sex_3" /><label class="flag_label">Женский</label></em><br/>					
					
					<a class="btn white plus" href="#">
						<span class="icomoon">8</span>
						<b>Добавить данные</b>
					</a>
				</div>
			</div>
		</fieldset>

		<fieldset class="group_8">
			<div class="limiter">
				<span class="point_num">8</span>
				<h3>Укажите данные родителей как в свидетельстве о рождении <i class="q">?</i></h3>
			</div>
			
			<div class="limiter">
				<h4>Сведения об отце</h4>
				<em class="wrapper l_50"><label for="#">Фамилия</label><input type="text" placeholder="Фамилия" class="big" />
				</em><br/><em class="wrapper l_50"><label for="#">Имя</label><input type="text" placeholder="Имя" class="big" />
				</em><em class="wrapper l_50"><label for="#">Отчество</label><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
				
				<em class="wrapper l_33"><label for="#">Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
				</em><br/>

				<em class="wrapper l_100"><input type="checkbox" id="f_21" /><label class="flag_label" for="f_21">Нет сведений об отце</label></em>

				<h4>Сведения о матери</h4>
				<em class="wrapper l_50"><label for="#">Фамилия</label><input type="text" placeholder="Фамилия" class="big" />
				</em><br/><em class="wrapper l_50"><label for="#">Имя</label><input type="text" placeholder="Имя" class="big" />
				</em><em class="wrapper l_50"><label for="#">Отчетсво</label><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
				
				<em class="wrapper l_33"><label for="#">Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
				</em>
			</div>
		</fieldset>

		<fieldset class="group_9">
			<div class="limiter">
				<span class="point_num">9</span>
				<h3>Куда вы будете подавать оригиналы документов?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="pl_1" /><label class="flag_label" for="pl_1">По месту жительства, как в паспорте (срок оказания услуги составит 10 дней)</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
					
					<em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
					</em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
					
					<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="place" id="pl_2" /><label class="flag_label" for="pl_2">По месту пребывания (срок оказания услуги составит до 2-x месяцев)</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
					
					<em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
					</em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
					
					<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="place" id="pl_3" /><label class="flag_label" for="pl_3">По месту фактического проживания (срок оказания услуги составит 2 месяца)</label></em>
			</div>

			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
					
					<em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
					</em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
					
					<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
			</div>

			<div class="limiter">
				<h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
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
				    </div>                 
				</div><!-- map_cover -->
		</fieldset>

		<fieldset class="group_16">
		    <div class="limiter">
		        <h3>Согласие на обработку персональных данных</h3>
		        <em class="wrapper l_100"><input id="f_22" type="checkbox" checked="checked" /><label for="f_22" class="flag_label">Согласен на обработку персональных данных</label></em>
		        <em class="wrapper l_100"><input id="f_23" type="checkbox" checked="checked" /><label for="f_23" class="flag_label">Об ответственности за предоставление заведомо ложных сведений,
		        либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
		    </div>
		</fieldset>
	</form>
	</div><!-- content -->
	<?
	include('include/mobile_footer.php');
	?>