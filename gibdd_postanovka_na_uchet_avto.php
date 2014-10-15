<?
$pagename = 'gibdd_postanovka_na_uchet_avto';
$pagetitle = 'Постановка на учет автотранспортного средства :: Нового или бывшего в употреблении';
include('include/head.php');
?>
			<ul class="breadcrumbs">
				<li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
				<li class="first"><a href="#">Личные документы</a></li>
				<li class="last"><span>Постановка на учет автотранспортного средства</span></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div class="title">
			<h2>Постановка на учет автотранспортного средства</h2>
			<span class="icomoon color_1">_</span><h1>Нового или бывшего в употреблении</h1>		
		</div>

		<form class="main clear" action="zamena_psporta_pol_ok.php">

			<div class="intro">
				<h2>Приветственный текст<b class="close fr">Скрыть</b></h2>
				<p>Те, кому когда-либо приходилось делать в квартире ремонт, наверное, обращали внимание на старые газеты, наклеенные под обоями. Как правило, пока все статьи не перечитаешь, ничего другого делать не можешь. Интересно же — обрывки текста, чья-то жизнь... Так же и с рыбой. Пока заказчик не прочтет всё, он не успокоится. Бывали случаи, когда дизайн принимался именно из-за рыбного текста, который, разумеется, никакого отношения к работе не имел.</p>
			</div>

			<h2 class="group_title">Постановка на учёт</h2>

			<fieldset class="group_1">
				<span class="point_num">1</span>
				<h3>Вы хотите поставить на учет</h3>
									
				<div class="radio_ico-list">

					<em class="wrapper l_100"><input type="radio" name="a_1" id="f_11"/><label for="f_11" class="i_car"><i class="ico_cover"><span class="icomoon fsz70">k</span></i> Автомобиль</label></em>
					<em class="wrapper l_100"><input type="radio" name="a_1" id="f_13"/><label for="f_13" class="i_bus"><i class="ico_cover"><span class="icomoon fsz80">m</span></i> Автобус</label></em>
					<em class="wrapper l_100"><input type="radio" name="a_1" id="f_15"/><label for="f_15" class="i_e_car"><i class="ico_cover"><span class="icomoon fsz100">o</span></i> Прицеп</label></em>
					<em class="wrapper l_100"><input type="radio" name="a_1" id="f_10"/><label for="f_10" class="i_moto"><i class="ico_cover"><span class="icomoon fsz70">j</span></i> Прочие транспортные средства</label></em>
				</div>
			</fieldset>	

			<h2 class="group_title">Ваши данные</h2>		

			<fieldset class="group_2">
				<span class="point_num">2</span>
				<h3>Персональные данные <span class="fr">
				<a href="#">Изменить данные</a> <i class="q">?
				<div class="bg_c3 q_hover">
					<p>Изменение личных данных будет происходить в личном кабинете.</p>
				</div></i>
				</span></h3>
				<em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Имя" value="Александр" class="big" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Отчество" value="Андреевич" class="big" disabled="disabled"/></em><br/>
				
				<em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
				</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" checked="checked" /><label class="man"><span class="icomoon">s</span> Мужской</label>
				</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" /><label class="woman"><span class="icomoon">r</span> Женский</label></em><br/>
				
				<em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926) 867 09 09" disabled="disabled"/></em><br/>
			</fieldset>
			<fieldset class="group_3">
				<span class="point_num">3</span>
				<h3>Паспортные данные <span class="fr">
				<a href="#">Изменить данные</a> <i class="q">?
				<div class="bg_c3 q_hover">
					<p>Изменение личных данных будет происходить в личном кабинете.</p>
				</div></i>
				</span></h3>
				
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

			<h2 class="group_title">Информация о транспортном средстве</h2>

			<fieldset class="group_4">                     
				<span class="point_num">4</span>
				<h3>Вы являетесь</h3>          
				<em class="wrapper l_100"><input type="radio" name="а_22" id="f_3_11" checked="checked" /><label for="f_3_11">Собственником</label></em>                                     
				<em class="wrapper l_100"><input type="radio" name="а_22" id="f_4_11" /><label for="f_4_11">Доверенным представителем физ. лица</label></em>
				<em class="wrapper l_100"><input type="radio" name="а_22" id="f_5_11" /><label for="f_5_11">Доверенным представителем юр. лица</label></em>                                     
			</fieldset>

			<fieldset class="group_5">                     
				<span class="point_num">5</span>
				<h3>Требуется ли вам получение государственного регистрационного знака</h3>          
				<em class="wrapper l_100"><input type="radio" name="а_23" id="f_3_12" checked="checked" /><label for="f_3_12">Да</label></em>                                     
				<em class="wrapper l_100"><input type="radio" name="а_23" id="f_4_12" /><label for="f_4_12">Нет</label></em>
			</fieldset>

			<fieldset class="group_6">                     
				<span class="point_num">6</span>
				<h3>Паспорт транспортного средства</h3>          
				<em class="wrapper l_100"><input type="radio" name="а_24" id="f_3_13" checked="checked" /><label for="f_3_13">Получить новый</label></em>                                     
				<em class="wrapper l_100"><input type="radio" name="а_24" id="f_4_13" /><label for="f_4_13">Внести изменения в действующий</label></em>
			</fieldset>

			<h2 class="group_title">Сведения о транспортном средстве</h2>
			
			<fieldset class="group_7">                     
				<span class="point_num">7</span>
				<h3>Данные о государственном регистрационном знаке</h3>          

				<em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" /><i class="not">Необязательно</i>
				</em><em class="wrapper l_25"><input type="text" placeholder="Транзит" class="big" /><i class="not">Необязательно</i>
				</em><em class="wrapper l_25"><input type="text" placeholder="Тип гос. знака" class="big" /><i class="not">Необязательно</i>
				</em><em class="wrapper l_25"><a href="#">Как определить тип?</a></em><br/>

				<h4>Тип государственного регистрационного знака транзит
					<i class="q">?
					<div class="bg_c3 q_hover">
						<p><img src="pic/pic_5_1.png" alt=""/></p>
					</div></i>
				</h4>

				<em class="wrapper l_100"><input type="radio" name="t_1" id="f_3_14" /><label for="f_3_14">Обычный транзит</label></em>                                     
				<em class="wrapper l_100"><input type="radio" name="t_1" id="f_4_14" /><label for="f_4_14">Транзит - выезд за пределы РФ</label></em>
				<em class="wrapper l_100"><input type="radio" name="t_1" id="f_5_14" /><label for="f_5_14">Транзит - временное участие в движении</label></em>                                                                        
			</fieldset>

			<fieldset class="group_8">
				<span class="point_num">8</span>
				<h3>Описание транспортного средства</h3>
				
				<em class="wrapper l_50"><input type="text" placeholder="Идентефикационный номер (VIN)" class="big" />
				</em><em class="wrapper l_50"><input type="text" placeholder="Номер шасси (рамы)" class="big" /><i class="not">Необязательно</i>
				</em><em class="wrapper l_50"><input type="text" placeholder="Номер кузова" class="big" /><i class="not">Необязательно</i>
				</em>
			</fieldset>

			<fieldset class="group_9">
				<span class="point_num">9</span>
				<h3>Данные транспортного средства</h3>
				
				<em class="wrapper l_33"><input type="text" placeholder="Марка" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Модель" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Год выпуска" class="big" />
				</em><br/>

				<em class="wrapper l_50">
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">Тип транспортного средства</option>                
                    <option>Автомобиль</option>
                  </select><i class="not">Необязательно</i>                  
                </em><em class="wrapper l_50">
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">Тип двигателя</option>                
                    <option>Ацкий</option>
                  </select><i class="not">Необязательно</i>                  
                </em>

                <em class="wrapper l_66"><input type="text" placeholder="Организация изготовитель" class="big" /><i class="not">Необязательно</i>
				</em><em class="wrapper l_33">
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">Цвет</option>                
                    <option>Сиреневенький</option>
                  </select><i class="not">Необязательно</i>                  
                </em>               
			</fieldset>			


			<h2 class="group_title">Информация о документах</h2>

			<fieldset class="group_10">
				<span class="point_num">10</span>
				<h3>Укажите данные паспорта транспортного средства (необязательно)</h3>
									
				<em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
				</em><br/>
				
				<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
				</em>
			</fieldset>



			<fieldset class="group_11">
				<span class="point_num">11</span>
				<h3>Укажите документ, подтверждающий право собственности на транспортное средство (необязательно)</h3>

				<em class="wrapper l_66"><input type="text" placeholder="Форма собственности" class="big"/>
				</em><em class="wrapper l_33"><input type="text" placeholder="Вид документа" class="big" />
				</em>
									
				<em class="wrapper l_33"><input type="text" placeholder="Наименование документа" class="big"/>
				</em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
				</em><br/>
				
				<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
				</em>
			</fieldset>

			<fieldset class="group_12">
				<span class="point_num">12</span>
				<h3>Укажите данные страхового полиса (необязательно)</h3>
									
				<em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
				</em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
				</em><em class="wrapper l_33"><input type="text" placeholder="Действителен до" class="big"/>
				</em><br/>
				
				<em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
				</em>
			</fieldset>


			<h2 class="group_title">Где вы будете ставить на учет автотранспортное средство?</h2>

			<fieldset class="group_13">
				<span class="point_num">13</span>
				<h3>В какой день вы хотите посетить Госавтоинспекцию?</h3>
				<em class="wrapper l_25"><input type="text" placeholder="Укажите дату" class="big" /></em>

				<h4>Ваше местоположение</h4>
	              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label for="f_36">По месту постоянной регистрации, как в паспорте</label></em>           
	              
	              <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label for="f_37">По месту временной регистрации</label></em>                        
	              <div class="fields_cover">
	                <em class="wrapper l_100">
	                  <div class="search_inp-block">
	                    <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
	                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
	                    <div class="selction_ajax-placeholder"></div>
	                  </div>
	                </em><br/>               
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
	                </em><br/>
	                
	                <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
	                </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
	                </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
	                </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>

	              </div> 

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
				<ol>
					<li>При составлении заявления Вам необходимо заполнить все обязательные к заполнению поля в каждом пункте.</li>
					<li>После создания заявления вы сможете распечатать Электронный билет на оказание услуги.</li>
					<li>О ходе рассмотрения Вы можете быть проинформированы путем получения сообщения на странице личного кабинета пользователя.</li>
				</ol>
				<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Я ознакомлен(а) с порядком подачи заявления в электронном виде</label></em>

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