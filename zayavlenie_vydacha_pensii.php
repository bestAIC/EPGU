<?
$pagename = 'zayavlenie_vydacha_pensii';
$pagetitle = 'Заявление на выдачу пенсии';
include('include/head.php');
?>
			<ul class="breadcrumbs">
				<li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
				<li class="first"><a href="#">Личные документы</a></li>
				<li class="last"><span>Заявление на выдачу пенсии</span></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div class="title">
			<span class="icomoon color_1">b</span><h1>Заявление на выдачу пенсии</h1>
		</div>
		<form class="main clear" action="zamena_psporta_pol_ok.php">
			<fieldset class="group_1">         
				<span class="point_num">1</span>
				<h3>Кто подаёт заявление</h3>          
				<em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label for="f_1">Лично</label></em>                          
				<em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label for="f_2">Я представитель</label></em>                                                                
			</fieldset>

			<fieldset class="group_2">
				<span class="point_num">2</span>
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
				
				<em class="wrapper l_50"><input type="text" placeholder="Страховой номер" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926) 867 09 09" disabled="disabled"/></em><br/>
			</fieldset>

			<fieldset class="group_3">
				<span class="point_num">3</span>
				<h3>Документ, удостоверяющий вашу личность</h3>
				<em class="wrapper l_50">
		          <select class="select_choice">
		            <option value="0" selected="selected" class="selected_one">Тип документа</option>                
		            <option>Паспорт РФ</option>
		          </select>                  
		        </em><br/>
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
			<fieldset class="group_4">                     
				<span class="point_num">4</span>
				<h3>Тип гражданства</h3>          
				<em class="wrapper l_100"><input type="radio" checked="checked" name="g_22" id="f_3" /><label for="f_3">Имею гражданство</label></em>
				<div class="fields_cover">
					<em class="wrapper l_66">
						<div class="search_inp-block">
							<input type="search" placeholder="Гражданство" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>
				</div>                                      
				<em class="wrapper l_100"><input type="radio" name="g_22" id="f_4" /><label for="f_4">Я лицо без гражданства</label></em>                                    
			</fieldset> 			
			<fieldset class="group_5">
				<span class="point_num">5</span>
				<h3>Данные СНИЛС</h3>
									
				<em class="wrapper l_50"><input type="text" placeholder="Страховой Номер" class="big"/>
				</em><em class="wrapper l_50"><input type="checkbox" id="f_29"/><label for="f_29">У меня отсутствует СНИЛС</label>
				</em><br/>

			</fieldset>
			<fieldset class="group_6">
				<span class="point_num">6</span>
				<h3>Адрес места вашего рождения</h3>				
				<em class="wrapper l_66">
					<div class="search_inp-block">
						<input type="search" placeholder="Выберите страну" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
						<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
						<div class="selction_ajax-placeholder"></div>
					</div>
				</em>
			</fieldset>
			<fieldset class="group_7">
				<span class="point_num">7</span>
				<h3>Где вы будете получать водительское удостоверение?</h3>				

				<em class="wrapper l_100"><input type="radio" checked="checked" name="place_1" id="pl_1" /><label for="pl_1">Адрес места жительства</label></em>
				<div class="fields_cover">
					<em class="wrapper l_66">
						<div class="search_inp-block">
							<input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>

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
				
				<em class="wrapper l_100"><input type="radio" name="place_1" id="pl_2" /><label for="pl_2">Адрес места пребывания</label></em>
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
				<em class="wrapper l_100"><input type="radio" name="place_1" id="pl_3" /><label for="pl_3">Адрес фактического проживания</label></em>
				<div class="fields_cover">
					<em class="wrapper l_66">
						<div class="search_inp-block">
							<input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>

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
			</fieldset>

			<fieldset class="group_8">
				<span class="point_num">8</span>
				<h3>Сведения о законном представителе</h3>				
				<em class="wrapper l_100">
		          <select class="select_choice">
		            <option value="0" selected="selected" class="selected_one">Категория представителя</option>                
		            <option>Организация, на которую возложено исполнение обязанностей опекуна или попечителя</option>
		          </select>                  
		        </em>
		        <em class="wrapper l_100"><input type="text" placeholder="Наименование организации" class="big" />
				</em>

				<em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>

				<em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em>
			</fieldset>

			<fieldset class="group_9">
				<span class="point_num">9</span>
				<h3>Адрес проживания законного представителя</h3>				

				<em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="pl_1" /><label for="pl_1">Адрес места жительства</label></em>
				<div class="fields_cover">
					<em class="wrapper l_66">
						<div class="search_inp-block">
							<input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax" disabled="disabled" /><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>

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
				
				<em class="wrapper l_100"><input type="radio" name="place" id="pl_2" /><label for="pl_2">Адрес места пребывания</label></em>
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
				<em class="wrapper l_100"><input type="radio" name="place" id="pl_3" /><label for="pl_3">Адрес фактического проживания</label></em>
				<div class="fields_cover">
					<em class="wrapper l_66">
						<div class="search_inp-block">
							<input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
							<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
							<div class="selction_ajax-placeholder"></div>
						</div>
					</em>

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
			</fieldset>	

			<fieldset class="group_10">
				<span class="point_num">10</span>
				<h3>Документ, удостоверяющий личность законного представителя</h3>
				<em class="wrapper l_50">
		          <select class="select_choice">
		            <option value="0" selected="selected" class="selected_one">Тип документа</option>                
		            <option>Паспорт РФ</option>
		          </select>                  
		        </em><br/>
				<em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
				
				<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
				</em>
			</fieldset>

			<fieldset class="group_11">
				<span class="point_num">11</span>
				<h3>Документ, удостоверяющий полномочия законного представителя</h3>
				<em class="wrapper l_100"><input type="text" placeholder="Наименование документа" class="big" />
				</em>
				<em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
				
				<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
				</em>
			</fieldset>															

			<fieldset class="group_12">
				<span class="point_num">12</span>
				<h3>Юридический адрес организации</h3>
				<em class="wrapper l_100">
					<div class="search_inp-block">
						<input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
						<input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
						<div class="selction_ajax-placeholder"></div>
					</div>
				</em>
			</fieldset>	

			<fieldset class="group_13">                     
				<span class="point_num">13</span>
				<h3>Работаете ли вы в настоящий момент?</h3>          
				<em class="wrapper l_100"><input type="radio" name="g_23" id="f_5" /><label for="f_5">Да</label></em>                                     
				<em class="wrapper l_100"><input type="radio" name="g_23" id="f_6" checked="checked" /><label for="f_6">Нет</label></em>                                    
			</fieldset>

			<fieldset class="group_14">                     
				<span class="point_num">14</span>
				<h3>Прошу</h3>          
				<em class="wrapper l_100"><input type="checkbox" id="f_41"/><label for="f_41">Назначить страховую часть трудовой пенсии по старости</label></em>				
				<em class="wrapper l_100"><input type="checkbox" id="f_42" /><label for="f_42">Назначить накопительную часть трудовой пенсии по старости</label></em>
    			<em class="wrapper l_100"><input type="checkbox" id="f_43"/><label for="f_43">Назначить трудовую пенсию по инвалидности</label></em>				
				<em class="wrapper l_100"><input type="checkbox" id="f_44" /><label for="f_44">Назначить накопительную часть трудовой пенсии по инвалидности</label></em>                                   
			</fieldset>

			<fieldset class="group_15">                     
				<span class="point_num">15</span>
				<h3>Назначалась ли вам ранее пенсия по другому основанию или от другого ведомства?</h3>          
				<em class="wrapper l_100"><input type="radio" name="g_24_1" id="f_7" /><label for="f_7">Да</label></em> 
				<div class="fields_cover">
					<em class="wrapper l_100"><input type="checkbox" id="f_50" /><label for="f_50">Я хочу отказаться от ранее назначенной пенсии</label></em>                                   					
				</div>				                                    
				<em class="wrapper l_100"><input type="radio" name="g_24_1" id="f_8" checked="checked" /><label for="f_8">Нет</label></em>					   
			</fieldset>

			<fieldset class="group_16">                     
				<span class="point_num">16</span>
				<h3>Согласие на перерасчет размера пенсии</h3>          
				<em class="wrapper l_100"><input type="checkbox" id="f_51" /><label for="f_51">Согласие на перерасчет размера пенсии в сторону увеличения при установлении более высокой группы инвалидности (установлении инвалидности впервые), достижении возраста 80 лет, изменении причины инвалидности.</label></em>
				<em class="wrapper l_100"><input type="checkbox" id="f_52" /><label for="f_52">Прошу установить федеральную социальную доплату к пенсии (если общая сумма моего материального обеспечения не достигает велечины прожиточного минимума в субъекте РФ</label></em>                                   										   
			</fieldset>	

			<fieldset class="group_17">                     
				<span class="point_num">17</span>
				<h3>Находятся ли у вас на иждивении нетрудоспособные члены семьи?</h3>          
				<em class="wrapper l_100"><input type="radio" name="g_24" id="f_9" /><label for="f_9">Да</label></em>
				<div class="fields_cover">
					<h4>Количество нетрудоспособных членов семьи</h4>
					<em class="wrapper l_16"><input type="text" class="big" /></em>                                   					
				</div>					                                     
				<em class="wrapper l_100"><input type="radio" name="g_24" id="f_9_1" checked="checked" /><label for="f_9_1">Нет</label></em>
 			</fieldset>									

			<fieldset class="group_18">
				<span class="point_num">18</span>	
				<h3>Выберете отделение пенсионного фонда для подачи заявления</h3>
				
				<div class="map_cover">
					<div class="map_block" id="map"></div>
					<div class="map_nav">
						<h4 class="map_nav_h">Доступны подразделения:</h4>
						<ul class="map_list">
							<li class="map_list_item">
								<div class="left">
									<p><a href="#"><span class="map_num">1</span><span class="map_txt">ПФР по г.Москве</span></a></p>
									<p>Москва, Неглинная, 23</p>
								</div>
								<div class="right">
								  <input type="checkbox"/>    
								</div>
							</li>
							<li class="map_list_item">
								<div class="left">
									<p><a href="#"><span class="map_num">2</span><span class="map_txt">ПФР по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
									<p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
								</div>
								<div class="right">
								  <input type="checkbox"/>    
								</div>
							</li>
							<li class="map_list_item">
								<div class="left">
									<p><a href="#"><span class="map_num">3</span><span class="map_txt">ПФР по г. Москве</span></a></p>
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
								<p><strong>ПФР по г. Москве</strong></p>
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
				<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_55"/><label for="f_55">Я предупреждён: о необходимости безотлагательно извещать территориальный орган ПФР об обстоятельствах, влекущих за собой изменение размера пенсии или прекращение её выплаты, и об ответственности <span class="pseudo">читать далее</span></label></em>
			</fieldset>

			<fieldset>
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