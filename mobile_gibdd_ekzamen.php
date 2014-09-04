<?
$pagename = 'mobile_gibdd_ekzamen';
$pagetitle = 'Приём экзаменов на получение права на управление транспортным средством :: Получение или замена международного водительского удостоверения';
include('include/mobile_head.php');
?>
<div id="content">
	<div class="title">
		<div class="limiter">
			<span class="icomoon color_1">^</span>
			<h1>Приём экзаменов на получение права на управление транспортным средством</h1>
			<h2>Получение или замена международного водительского удостоверения</h2>
		</div>
	</div>
	<form action="#" onsubmit="return false; mySubmit(this)" class="main clear big_inp-form bt">
		<fieldset class="group_1">
			<div class="limiter">
				<span class="point_num">1</span>
				<h3>Ваши персональные данные</h3>
			</div>
			<div class="limiter">
				<em class="wrapper l_50"><label for="settings01">Фамилия</label><input id="settings01" type="text" placeholder="Фамилия" value="Константинопольский" disabled="disabled" class="big"/></em><em class="wrapper l_50"><label for="settings01">Имя</label><input id="settings01" type="text" placeholder="Имя" value="Константин" class="big" disabled="disabled"/></em>
				<em class="wrapper l_50"><label for="settings01">Отчество</label><input id="settings01" type="text" placeholder="Отчество" value="Андреевич" class="big"/ disabled="disabled"></em><br/>

				<em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
				</em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label class="flag_label" >Мужской</label>
				</em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" /><label class="flag_label"  class="flag_label">Женский</label></em><br/>

				<em class="wrapper l_50"><label for="settings01">Адрес электронной почты</label><input id="settings01" type="text" placeholder="Адрес электронной почты" value="alexandr_k@bestmail.ru" disabled="disabled" class="big" disabled="disabled" /></em><em class="wrapper l_50"><label for="settings01">Контактный телефон</label><input id="settings01" type="text" placeholder="Контактный телефон" value="+7 931 123-33-44" disabled="disabled" class="big" disabled="disabled" /></em>
				
				<div class="info-block_wrap">
					<div class="info_block type_2">
						<p class="info-block_h"><b>Обратите внимание</b></p>
						<p>Изменение личных данных будет происходить в личном кабинете.</p>
						<span class="icomoon">"</span>
					</div>
				</div>
				<div class="clear mobile_morpf btn-cont_inner">
					<em class="wrapper l_100">
						<a href="#" class="btn white rarr fl"><b>Изменить данные</b></a>
					</em>
				</div>
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
				
				<em class="wrapper l_66">
					<label for="ser_1">Страна рождения</label>
					<div class="search_inp-block">
						<input id="ser_1" type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
						<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
						<div class="selction_ajax-placeholder"></div>
					</div>
				</em>

				<em class="wrapper l_100"><label for="f_100">Место рождения</label><input id="f_100" type="text" placeholder="Место рождения" class="big" /></em>
				<div class="info-block_wrap">
					<div class="info_block type_2">
						<p class="info-block_h"><b>Обратите внимание</b></p>
						<p>Изменение личных данных будет происходить в личном кабинете.</p>
						<span class="icomoon">"</span>
					</div>
				</div>
				<div class="clear mobile_morpf btn-cont_inner">
					<em class="wrapper l_100">
						<a href="#" class="btn white rarr fl"><b>Изменить данные</b></a>
					</em>
				</div>

			</div>
		</fieldset>
		<fieldset class="group_3">
			<div class="limiter">                     
				<span class="point_num">3</span>
				<h3>Меняли ли вы когда либо фамилию, имя или отчество?</h3>
			</div>
			<div class="limiter">	          
				<em class="wrapper l_100"><input type="radio" name="g_22" id="f_3" /><label for="f_3">Да</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
				  <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" /><i class="not">Необязательно</i>
				  </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" /><i class="not">Необязательно</i>
				  </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">Необязательно</i>
				  </em><br/>
				  <a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a>
				</div>  
			</div>
			<div class="limiter">                                      
				<em class="wrapper l_100"><input type="radio" name="g_22" id="f_4" checked="checked" /><label for="f_4">Нет</label></em>
			</div>	                                    
		</fieldset>

		<fieldset class="group_4">
			<div class="limiter">
				<span class="point_num">4</span>
				<h3>Сведения о медицинской справке</h3>
			</div>
			<div class="limiter">					
				<em class="wrapper l_33"><input type="text" placeholder="Номер справки" class="big"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
				
				<em class="wrapper l_66"><input type="text" placeholder="Название медицинского учреждения" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Номер лицензии" class="big" />
				</em><br/>

				<h4>Разрешена категория</h4>
				<em class="wrapper l_100"><input type="checkbox" id="f_10"/><label for="f_10">A</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_11"/><label for="f_11">B</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_12"/><label for="f_12">C</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_13"/><label for="f_13">D</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_14"/><label for="f_14">E</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_15"/><label for="f_15">E k B</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_16"/><label for="f_16">E k C</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_17"/><label for="f_17">E k D</label></em>
			</div>
		</fieldset>

		<fieldset class="group_5">
			<div class="limiter">
				<span class="point_num">5</span>
				<h3>Хотели бы вы указать данные вашего предыдущего водительского удостоверения?</h3>
			</div>
			<div class="limiter">				
				<em class="wrapper l_100"><input type="radio" checked="checked" name="citizenship" id="c_1"/><label for="c_1">Нет</label></em>
			</div>
			<div class="limiter">					
				<em class="wrapper l_100"><input type="radio" name="citizenship" id="c_2"/><label for="c_2">Да</label></em>
			</div>	
			<div class="fields_cover">
				<div class="limiter">
					<h4>Данные водительского удостоверения</h4>
					<em class="wrapper l_33"><input type="text" placeholder="Серия" class="big"/>
					</em><em class="wrapper l_33"><input type="text" placeholder="Номер" class="big"/>
					</em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" /><br/>

					</em><em class="wrapper l_33"><input type="text" placeholder="Действительный до" class="big" />
					</em><em class="wrapper l_66"><input type="text" placeholder="Кем выдан" class="big"/>
					</em>

					<em class="wrapper l_100">
						<div class="search_inp-block">
						  <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
						  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
						  <div class="selction_ajax-placeholder"></div>
						</div>
					</em>					
					
					<h4>Категория</h4>
					<em class="wrapper l_100"><input type="checkbox" id="f_10_1"/><label for="f_10_1">A</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_11_1"/><label for="f_11_1">B</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_12_1"/><label for="f_12_1">C</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_13_1"/><label for="f_13_1">D</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_14_1"/><label for="f_14_1">E</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_15_1"/><label for="f_15_1">E k B</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_16_1"/><label for="f_16_1">E k C</label></em>
					<em class="wrapper l_100"><input type="checkbox" id="f_17_1"/><label for="f_17_1">E k D</label></em>
				</div>											
			</div>
		</fieldset>


		<fieldset class="group_6">
			<div class="limiter">
				<span class="point_num">6</span>
				<h3>Где вы будете получать водительское удостоверение?</h3>
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="p_21" /><label class="flag_label" for="p_21">По месту постоянной регистрации, как в паспорте</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100">
						<label for="ser_05">Регион</label>
						<div class="search_inp-block">
							<input id="ser_05" type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em><br/>
					
					<em class="wrapper l_50">
						<label for="ser_06">Район</label>
						<div class="search_inp-block">
							<input id="ser_06" type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em><em class="wrapper l_50">
						<label for="ser_07">Населенный пункт</label>
						<div class="search_inp-block">
							<input id="ser_07" type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>
					
					<em class="wrapper l_100"><label for="">Улица</label><input type="text" placeholder="Улица" class="big" /></em>

					<em class="wrapper l_33"><label for="">Дом</label><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_33"><label for="">Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_33"><label for="">Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
				
			</div>
			
			<div class="limiter">
				<em class="wrapper l_100"><input type="radio" name="place" id="p_22" /><label class="flag_label" for="p_22">По месту временной регистрации</label></em>
			</div>
			<div class="fields_cover">
				<div class="limiter">
					<em class="wrapper l_100">
						<label for="ser_08">Регион</label>
						<div class="search_inp-block">
							<input id="ser_08" type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em><br/>
					
					<em class="wrapper l_50">
						<label for="ser_09">Район</label>
						<div class="search_inp-block">
							<input id="ser_09" type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em><em class="wrapper l_50">
						<label for="ser_10">Населенный пункт</label>
						<div class="search_inp-block">
							<input id="ser_10" type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>
					
					<em class="wrapper l_100"><label for="">Улица</label><input type="text" placeholder="Улица" class="big" />
					</em>

					<em class="wrapper l_33"><label for="">Дом</label><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_33"><label for="">Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_33"><label for="">Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
				</div>
				
			</div>
			
			<div class="limiter">
				<div class="map-h_wrap">
					<h4>В какой день вы хотите посетить Госавтоинспекцию?</h4>
				</div>
			</div>
			<div class="limiter">					
				<em class="wrapper l_33"><input type="text" placeholder="Укажите дату" class="big" /></em>
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
			        <h4 class="map_nav_h">Доступны подразделения:</h4>
			        <ul class="map_list">
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			          	<div>
				            <p><a href="#"><span>Госавтоинспекция по г.Москве</span></a></p>
				            <p>Москва, Неглинная, 23</p>
			            </div>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			          	<div>
				            <p><a href="#"><span>Госавтоинспекция по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
				            <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
			            </div>
			          </li>
			          <li class="map_list_item">
			          	<span class="map_check"><input type="checkbox"/></span>
			          	<div>
				            <p><a href="#"><span>Госавтоинспекция по г. Москве</span></a></p>
				            <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
			            </div>
			          </li>
			        </ul>
			      </div><!-- map_nav -->
			      <div class="map_ballon_block">
			        <div class="map_ballon_wrap">
			          <a class="map_ballon_close"><span class="icomoon">L</span></a>
			          <div class="map_ballon_h">
			            <p><strong>Госавтоинспекция по г. Москве</strong></p>
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
		
		<div class="clear last_btn-block">
		  <div class="limiter">
		    <span class="fr">
		        <input class="big btn" type="submit" value="Отправить">
		    </span>
		  </div>
		</div>
	</form>
	</div><!-- content -->
<?
include('include/mobile_footer.php');
?>