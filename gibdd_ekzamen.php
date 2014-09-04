<?
$pagename = 'gibdd_ekzamen';
$pagetitle = 'Приём экзаменов на получение права на управление транспортным средством :: Получение или замена международного водительского удостоверения';
include('include/head.php');
?>
			<ul class="breadcrumbs">
				<li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
				<li class="first"><a href="#">Личные документы</a></li>
				<li class="last"><span>Приём экзаменов на получение права на управление транспортным средством</span></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div class="title">
		<span class="icomoon color_1">^</span><h1>Приём экзаменов на получение права на управление транспортным средством</h1>
		<h2>Получение или замена международного водительского удостоверения</h2>
		</div>
		<form class="main clear" action="zamena_psporta_pol_ok.php">
			<fieldset class="group_1">
				<span class="point_num">1</span>
				<h3>Ваши персональные данные <span class="fr">
				<a href="#">Изменить данные</a> <i class="q">?
				<div class="bg_c3 q_hover">
					<p>Изменение личных данных будет происходить в личном кабинете.</p>
				</div></i>
				</span></h3>
				<em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Имя" value="Александр" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Отчество" value="Андреевич" class="big" disabled="disabled"/></em><br/>
				
				<em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
				</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" checked="checked" /><label>Мужской</label>
				</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" /><label>Женский</label></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926) 867 09 09" disabled="disabled"/></em><br/>
			</fieldset>
			<fieldset class="group_2">
				<span class="point_num">2</span>
				<h3>Ваши паспортные данные</h3>
				
				<em class="wrapper l_16"><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
				</em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
				
				<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" disabled="disabled" />
				</em><br/>

				<em class="wrapper l_66">
					<div class="search_inp-block">
						<input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
						<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
						<div class="selction_ajax-placeholder"></div>
					</div>
				</em>
				
				<em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
			</fieldset>
			<fieldset class="group_3">                     
				<span class="point_num">3</span>
				<h3>Меняли ли вы когда либо фамилию, имя или отчество?</h3>          
				<em class="wrapper l_100"><input type="radio" name="g_22" id="f_3" /><label for="f_3">Да</label></em>
				<div class="fields_cover">
				  <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" /><i class="not">Необязательно</i>
				  </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" /><i class="not">Необязательно</i>
				  </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">Необязательно</i>
				  </em><br/>
				  <a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a>
				</div>                                      
				<em class="wrapper l_100"><input type="radio" name="g_22" id="f_4" checked="checked" /><label for="f_4">Нет</label></em>                                    
			</fieldset> 			
			<fieldset class="group_4">
				<span class="point_num">4</span>
				<h3>Сведения о медицинской справке</h3>
									
				<em class="wrapper l_25"><input type="text" placeholder="Номер справки" class="big"/>
				</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
				
				<em class="wrapper l_75"><input type="text" placeholder="Название медицинского учреждения" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер лицензии" class="big" />
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
			</fieldset>
			<fieldset class="group_5">
				<span class="point_num">5</span>
				<h3>Хотели бы вы указать данные вашего предыдущего водительского удостоверения?</h3>				
				<em class="wrapper l_100"><input type="radio" checked="checked" name="citizenship" id="c_1"/><label for="c_1">Нет</label></em>				
				<em class="wrapper l_100"><input type="radio" name="citizenship" id="c_2"/><label for="c_2">Да</label></em>
				<div class="fields_cover">
					<h4>Данные водительского удостоверения</h4>
					<em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
					</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big"/>
					</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
					</em><em class="wrapper l_33"><input type="text" placeholder="Действительный до" class="big" /></em><br/>
					
					<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big"/>
					</em>

					<em class="wrapper l_75">
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
			</fieldset>

			<fieldset class="group_6">
				<span class="point_num">6</span>
				<h3>Где вы будете получать водительское удостоверение?</h3>
				
				<em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="pl_1" /><label for="pl_1">По месту постоянной регистрации, как в паспорте</label></em>
				<div class="fields_cover">
					<em class="wrapper l_100">
						<div class="search_inp-block">
							<input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>
					
					<em class="wrapper l_50">
						<div class="search_inp-block">
							<input type="search" placeholder="Район" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="cities" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em><em class="wrapper l_50">
						<div class="search_inp-block">
							<input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>
					
					<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
					
				</div>
				
				<em class="wrapper l_100"><input type="radio" name="place" id="pl_2" /><label for="pl_2">По месту временной регистрации</label></em>
				<div class="fields_cover">
					<em class="wrapper l_100">
						<div class="search_inp-block">
							<input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>
					
					<em class="wrapper l_50">
						<div class="search_inp-block">
							<input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em><em class="wrapper l_50">
						<div class="search_inp-block">
							<input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>

					<em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
					</em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
					</em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
					
				</div>

				<h4>В какой день вы хотите посетить Госавтоинспекцию?</h4>
				<em class="wrapper l_25"><input type="text" placeholder="Укажите дату" class="big" /></em>		
				<h4>Просим вас выбрать удобное подразделение Госавтоинспекции</h4>
				
				<div class="map_cover">
					<div class="map_block" id="map"></div>
					<div class="map_nav">
						<h4 class="map_nav_h">Доступны подразделения:</h4>
						<ul class="map_list">
							<li class="map_list_item">
								<div class="left">
									<p><a href="#"><span class="map_num">1</span><span class="map_txt">Госавтоинспекция по г.Москве</span></a></p>
									<p>Москва, Неглинная, 23</p>
								</div>
								<div class="right">
								  <input type="checkbox"/>    
								</div>
							</li>
							<li class="map_list_item">
								<div class="left">
									<p><a href="#"><span class="map_num">2</span><span class="map_txt">Госавтоинспекция по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
									<p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
								</div>
								<div class="right">
								  <input type="checkbox"/>    
								</div>
							</li>
							<li class="map_list_item">
								<div class="left">
									<p><a href="#"><span class="map_num">3</span><span class="map_txt">Госавтоинспекция по г. Москве</span></a></p>
									<p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
								</div>
								<div class="right">
								  <input type="checkbox"/>    
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
				</div><!-- map_cover -->
			</fieldset>
			<fieldset class="group_10">
				<h3>Согласие на обработку персональных данных</h3>
				
				<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
				
				<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
				либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
			</fieldset>
					
			<div class="clear last_btn-block">
				<span class="fr">
					<input class="big btn" type="submit" value="Отправить">
				</span>
			</div>
		</form>
	</div>
	<?
	include('include/footer.php');
	?>