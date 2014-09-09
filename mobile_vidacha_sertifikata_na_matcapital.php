<?
$pagename = 'mobile_vidacha_sertifikata_na_matcapital';
$pagetitle = 'Выдача сертификата на материнский (семейный) капитал';
include('include/mobile_head.php');
?>

<div id="content">
	<div class="title">
		<div class="limiter">
			<span class="icomoon color_4">]</span>
			<h1>Выдача сертификата на материнский (семейный) капитал</h1>
			<h2>Подача заявления о выдаче сертификата</h2>
		</div>
	</div>
    
      
    <form class="main clear big_inp-form bt">
		<fieldset class="group_1">
		    <div class="limiter">
		    	<span class="point_num">1</span>
		    	<h3>Кто подает заявление</h3>
		    </div>
		
		    <div class="limiter">
		    	<em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_1" checked="checked" class="switcher_group" data-for="v_1" /><label for="f_1">Отец</label></em>
		    	<em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_2" class="switcher_group" data-for="v_1" /><label for="f_2">Мать</label></em>
		    	<em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_3" class="switcher_group" data-for="v_1" /><label for="f_3">Ребенок</label></em>
		    </div>
		    <div class="limiter">
		    	<em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_4" class="switcher_group" data-for="v_1"/><label for="f_4">Представитель</label></em>
		    </div>
		        
		    <div class="fields_cover">
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_1_1n" id="f_1_1_1" class="switcher_group" data-for="v_2" /><label for="f_1_1_1" >законный представитель, опекун или попечитель несовершеннолетнего или недееспособного лица</label></em>
		        	<em class="wrapper l_100"><input type="radio" name="g_1_1n" id="f_1_1_2" class="switcher_group" data-for="v_3" /><label for="f_1_1_2">организация, на которую возложено исполнение обязанностей опекуна или попечителя</label></em>
		        	<em class="wrapper l_100"><input type="radio" name="g_1_1n" id="f_1_1_3" class="switcher_group" data-for="v_2"/><label for="f_1_1_3" >доверенное лицо</label></em>
		        </div>
		    </div>
		</fieldset>

		<div class="switcher_n">
		    <fieldset class="group_2">
		        <div class="limiter">
		        	<span class="point_num">2</span>            
		        	<h3>Ваши персональные данные</h3>
		        </div>
		        
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_1_v_1">Фамилия</label><input id="set_1_v_1" type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_2_v_1">Имя</label><input id="set_2_v_1" type="text" placeholder="Имя" value="Александр" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_3_v_1">Отчество</label><input id="set_3_v_1" type="text" placeholder="Отчество" value="Андреевич" class="big" disabled="disabled"/></em><br/>
		        	
		        	<em class="wrapper l_33"><label for="set_4_v_1">Дата рождения</label><input id="set_4_v_1" type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_1_v_1" disabled="disabled" checked="checked" /><label>Мужской</label>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_1_v_1" disabled="disabled" /><label>Женский</label></em><br/>
		        	
		        	<em class="wrapper l_50"><label for="set_5_v_1">Адресс электронной почты</label><input id="set_5_v_1" type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_6_v_1">Контактный телефон</label><input id="set_6_v_1" type="text" placeholder="Контактный телефон" class="big" value="+7 912 200-00-02" disabled="disabled"/></em><br/>

		        	<div class="info-block_wrap">
		        	    <div class="info_block type_2">
		        	        <p class="info-block_h"><b>Обратите внимание</b></p>
		        	        <p>Изменение личных данных будет происходить в личном кабинете.</p>
		        	        <span class="icomoon">"</span>
		        	    </div>
		        	</div>

		        	<div class="clear mobile_morpf btn-cont_inner">
		        		<em class="wrapper l_100">
		        			<a href="#" tabindex="-1" class="btn white rarr fl"><b>Изменить данные</b></a>
		        		</em>
		        	</div>
		        </div>
		    </fieldset>

		    <fieldset class="group_3">
		        <div class="limiter">
		        	<span class="point_num">3</span>
		        	<h3>Ваши паспортные данные</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_7_v_1">Серия</label><input id="set_7_v_1" type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_8_v_1">Номер</label><input id="set_8_v_1" type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_9_v_1">Код подразд-я</label><input id="set_9_v_1" type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_10_v_1">Дата выдачи</label><input id="set_10_v_1" type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
		        	
		        	<em class="wrapper l_100"><label for="set_11_v_1">Кем выдан</label><input id="set_11_v_1" type="text" placeholder="Кем выдан" class="big" disabled="disabled" />
		        	</em>
		        			    
		        	<em class="wrapper l_66">
		        		<label for="set_12_v_1">Страна рождения</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" placeholder="Страна рождения" id="set_12_v_1" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	        <div class="selction_ajax-placeholder" name="country"></div>
		        	    </div>
		        	</em>
		        	
		        	<em class="wrapper l_100"><label for="set_13_v_1">Место рождения</label><input id="set_13_v_1" type="text" placeholder="Место рождения" class="big" /></em>

		        	<div class="info-block_wrap">
		        	    <div class="info_block type_2">
		        	        <p class="info-block_h"><b>Обратите внимание</b></p>
		        	        <p>Изменение личных данных будет происходить в личном кабинете.</p>
		        	        <span class="icomoon">"</span>
		        	    </div>
		        	</div>

		        	<div class="clear mobile_morpf btn-cont_inner">
		        		<em class="wrapper l_100">
		        			<a href="#" tabindex="-1" class="btn white rarr fl"><b>Изменить данные</b></a>
		        		</em>
		        	</div>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_4">
		        <div class="limiter">
		        	<span class="point_num">4</span>
		        	<h3>Гражданство</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_1_v_1" id="с_1_v_1" checked="checked" /><label for="с_1_v_1">Российской федерации</label></em>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_1_v_1" id="с_1_v_2"/><label for="с_1_v_2">Иного государства</label></em>
		        </div>
		        <div class="fields_cover">
		            <div class="limiter">
		            	<label for="set_14_v_1">Страна</label>
		            	<div class="search_inp-block">
		            	    <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	    <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		            	    <div class="selction_ajax-placeholder" name="country"></div>
		            	</div>
		            </div>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_1_v_1" id="с_2_2_v_1"/><label for="с_2_2_v_1">Я лицо без государства</label></em>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_5">
		        <div class="limiter">
		        	<span class="point_num">5</span>
		        	<h3>Укажите адрес вашей постоянной регистрации, как в паспорте</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_75">
		        		<label for="set_15_v_1">Страна</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_15_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	        <div class="selction_ajax-placeholder" name="country"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_100">
		        		<label for="set_16_v_1">Регион</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_16_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="region"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_50">
		        		<label for="set_17_v_1">Район</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_17_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="areas"></div>
		        	    </div>
		        	</em><em class="wrapper l_50">
		        		<label for="set_18_v_1">Населенный пункт</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_18_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="cities"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_50"><label for="set_19_v_1">Улица</label><input type="text" placeholder="Улица" id="set_19_v_1" class="big" />
		        	</em><em class="wrapper l_16"><label for="set_20_v_1">Дом</label><input type="text" placeholder="Дом" id="set_20_v_1" class="big" />
		        	</em><em class="wrapper l_16"><label for="set_21_v_1">Корпус</label><input type="text" placeholder="Корпус" id="set_21_v_1" class="big" />
		        	</em><em class="wrapper l_16"><label for="set_22_v_1">Квартира</label><input type="text" placeholder="Квартира" id="set_22_v_1" class="big" /></em>
		        </div>
		    </fieldset>

		    <fieldset class="group_6">
		        <div class="limiter">
		        	<span class="point_num">6</span>
		        	<h3>Персональные данные ребенка</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_66">
		        		<label for="set_23_v_1">Очередность рождения или усыновления</label>
		        	    <select class="select_choice" id="set_23_v_1">
		        	        <option value="0" selected="selected" class="selected_one">Очередность рождения или усыновления</option>
		        	        <option value="1">Второй</option>
		        	        <option value="2">Третий</option>
		        	        <option value="3">Четвертый</option>
		        	        <option value="4">Пятый</option>
		        	    </select>
		        	</em>
		        	
		        	<em class="wrapper l_33"><label for="set_24_v_1">Фамилия</label><input id="set_24_v_1" type="text" placeholder="Фамилия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_25_v_1">Имя</label><input id="set_25_v_1" type="text" placeholder="Имя" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_26_v_1">Отчество</label><input id="set_26_v_1" type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i>
		        	</em>
		        	
		        	<div>
		        		<em class="wrapper l_33"><label for="set_27_v_1">Дата рождения</label><input id="set_27_v_1" type="text" placeholder="Дата рождения" class="big" />
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_2_v_1" checked="checked" id="sex_2_v_1_1" /><label for="sex_2_v_1_1">Мужской</label>
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_2_v_1" id="sex_2_v_1_2" /><label for="sex_2_v_1_2">Женский</label></em><br/>
		        	</div>

		        	
		        			    
		        	<em class="wrapper l_66">
		        		<label for="set_28_v_1">Страна рождения</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" placeholder="Страна рождения" id="set_28_v_1" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	        <div class="selction_ajax-placeholder" name="country"></div>
		        	    </div>
		        	</em>
		        	<em class="wrapper l_66">
		        		<label for="set_29_v_1">Гражданство</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_29_v_1" placeholder="Гражданство" name="nationality" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="nationality" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="nationality"></div>
		        	    </div>
		        	</em>
		        	
		        	<label for="set_30_v_1">Дата рождения</label>
		        	<em class="wrapper l_33"><input id="set_30_v_1" type="text" placeholder="Дата рождения" class="big" /><i class="not">необязательно</i>
		        	</em>
		        </div>

		        <div class="limiter">
		        	<h4>Данные свидетельства о рождении ребенка</h4>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_2_v_1" id="с_3_v_1" checked="checked" /><label for="с_3_v_1">Российской федерации</label></em>
		        </div>
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_33"><label for="set_31_v_1">Серия</label><input id="set_31_v_1" type="text" placeholder="Серия" class="big" />
		            	</em><em class="wrapper l_33"><label for="set_32_v_1">Номер</label><input id="set_32_v_1" type="text" placeholder="Номер" class="big" />
		            	</em><em class="wrapper l_33"><label for="set_33_v_1">Дата выдачи</label><input id="set_33_v_1" type="text" placeholder="Дата выдачи" class="big" /></em>
		            	
		            	<em class="wrapper l_100"><label for="set_34_v_1">Кем выдан</label><input id="set_34_v_1" type="text" placeholder="Кем выдан" class="big" /></em>
		            </div>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_2_v_1" id="с_2_v_1"/><label for="с_2_v_1">Иного государства</label></em>
		        </div>
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_100"><label for="set_35_v_1">Наименование документа</label><input id="set_35_v_1" type="text" placeholder="Наименование документа" class="big" /></em>
		            </div>
		        </div>
		    </fieldset>

		    <fieldset class="group_7">
		        <div class="limiter">
		        	<span class="point_num">7</span>
		        	<h3>Лишались ли вы родительских прав в отношении ребенка (детей)?</h3>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_3_v_1" id="с_5_v_1" checked="checked" /><label for="с_5_v_1">Да</label></em>
		        	<em class="wrapper l_100"><input type="radio" name="g_3_v_1" id="с_6_v_1" /><label for="с_6_v_1">Нет</label></em>
		        	<em class="wrapper l_100"><input type="checkbox" name="g_4_v_1" id="с_7_v_1"/><label for="с_7_v_1">Умышленных преступления, относящихся к преступлениям против личности, в отношении своего ребенка (детей) не совершал</label></em>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" name="g_4_v_1" id="с_8_v_1" /><label for="с_8_v_1">Об ответственности за достоверность представленных сведений предупреждена (предупрежден)</label></em>
		        </div>
		    </fieldset>

		    <fieldset class="group_8">
		        <div class="limiter">
		        	<span class="point_num">8</span>
		        	<h3>Государственный сертификат на материнский (семейный) капитал прошу выдать</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_5_v_2" id="с_9_v_1" checked="checked" /><label for="с_9_v_1">в отделении Пенсионного фонда РФ</label></em>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_5_v_2" id="с_10_v_1" /><label for="с_10_v_1">по почте</label></em>
		        </div>

		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_66">
		            		<label for="set_36_v_1">Страна</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_36_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		            	        <div class="selction_ajax-placeholder" name="country"></div>
		            	    </div>
		            	</em>
		            </div>
		        </div>
		    </fieldset>

		    <fieldset class="group_9">
		        <div class="limiter">
		        	<span class="point_num">9</span>
		        	<h3>Государственный сертификат на материнский (семейный) капитал прошу</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6_v_1" checked="checked" id="c_9_v_1"/><label for="c_9_v_1">по месту постоянной регистрации, как в паспорте</label></em>
		        </div>
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_75">
		            		<label for="set_37_v_1">Страна</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_37_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		            	        <div class="selction_ajax-placeholder" name="country"></div>
		            	    </div>
		            	</em>
		            			    
		            	<em class="wrapper l_100">
		            		<label for="set_38_v_1">Регион</label>
		            	   <div class="search_inp-block">
		            	       <input type="search" id="set_38_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	       <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	       <div class="selction_ajax-placeholder" name="region"></div>
		            	   </div>
		            	</em>
		            			    
		            	<em class="wrapper l_50">
		            		<label for="set_39_v_1">Район</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_39_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	        <div class="selction_ajax-placeholder" name="areas"></div>
		            	    </div>
		            	</em><em class="wrapper l_50">
		            		<label for="set_40_v_1">Населенный пункт</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_40_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	        <div class="selction_ajax-placeholder" name="cities"></div>
		            	    </div>
		            	</em>
		            			    
		            	<em class="wrapper l_50"><label for="set_41_v_1">Улица</label><input id="set_41_v_1" type="text" placeholder="Улица" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_42_v_1">Дом</label><input id="set_42_v_1" type="text" placeholder="Дом" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_43_v_1">Корпус</label><input id="set_43_v_1" type="text" placeholder="Корпус" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_44_v_1">Квартира</label><input id="set_44_v_1" type="text" placeholder="Квартира" class="big" /></em>
		            </div>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6_v_1" id="c_10_v_1"/><label for="c_10_v_1">по месту временного нахождения</label></em>
		        </div>
		    
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_75">
		            		<label for="set_46_v_1">Страна</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_46_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		            	        <div class="selction_ajax-placeholder" name="country"></div>
		            	    </div>
		            	</em>
		            	
		            	<em class="wrapper l_100">
		            		<label for="set_47_v_1">Регион</label>
		            	   <div class="search_inp-block">
		            	       <input type="search" id="set_47_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	       <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	       <div class="selction_ajax-placeholder" name="region"></div>
		            	   </div>
		            	</em>
		            	
		            	<em class="wrapper l_50">
		            		<label for="set_48_v_1">Район</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_48_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	        <div class="selction_ajax-placeholder" name="areas"></div>
		            	    </div>
		            	</em><em class="wrapper l_50">
		            		<label for="set_49_v_1">Населенный пункт</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_49_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	        <div class="selction_ajax-placeholder" name="cities"></div>
		            	    </div>
		            	</em>
		            			    
		            	<em class="wrapper l_50"><label for="set_50_v_1">Улица</label><input id="set_50_v_1" type="text" placeholder="Улица" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_51_v_1">Дом</label><input id="set_51_v_1" type="text" placeholder="Дом" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_52_v_1">Корпус</label><input id="set_52_v_1" type="text" placeholder="Корпус" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_53_v_1">Квартира</label><input id="set_53_v_1" type="text" placeholder="Квартира" class="big" /></em>
		            </div>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6_v_1" id="c_11_v_1"/><label for="c_11_v_1">по месту временной регистрации</label></em>
		        </div>
		    
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_75">
		            		<label for="set_54_v_1">Страна</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_54_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		            	        <div class="selction_ajax-placeholder" name="country"></div>
		            	    </div>
		            	</em>
		            	
		            	<em class="wrapper l_100">
		            		<label for="set_55_v_1">Регион</label>
		            	   <div class="search_inp-block">
		            	       <input type="search" id="set_55_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	       <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	       <div class="selction_ajax-placeholder" name="region"></div>
		            	   </div>
		            	</em>
		            	
		            	<em class="wrapper l_50">
		            		<label for="set_56_v_1">Район</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_56_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	        <div class="selction_ajax-placeholder" name="areas"></div>
		            	    </div>
		            	</em><em class="wrapper l_50">
		            		<label for="set_57_v_1">Населенный пункт</label>
		            	    <div class="search_inp-block">
		            	        <input type="search" id="set_57_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		            	        <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		            	        <div class="selction_ajax-placeholder" name="cities"></div>
		            	    </div>
		            	</em>
		            			    
		            	<em class="wrapper l_50"><label for="set_58_v_1">Улица</label><input id="set_58_v_1" type="text" placeholder="Улица" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_59_v_1">Дом</label><input id="set_59_v_1" type="text" placeholder="Дом" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_60_v_1">Корпус</label><input id="set_60_v_1" type="text" placeholder="Корпус" class="big" />
		            	</em><em class="wrapper l_16"><label for="set_61_v_1">Квартира</label><input id="set_61_v_1" type="text" placeholder="Квартира" class="big" /></em>
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
		            	    <h4 class="map_nav_h">Доступны подразделения:</h4>
		            	    <ul class="map_list">
		            	        <li class="map_list_item">
		            	            <span class="map_check"><input type="checkbox"/></span>
		            	            <div>
		            	                <p><a href="#0"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
		            	                <p>Москва, Неглинная, 23</p>
		            	            </div>
		            	           
		            	        </li>
		            	        <li class="map_list_item">
		            	            <span class="map_check"><input type="checkbox"/></span>
		            	            <div>
		            	                <p><a href="#0"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
		            	                <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
		            	            </div>
		            	        </li>
		            	        <li class="map_list_item">
		            	            <span class="map_check"><input type="checkbox"/></span>
		            	            <div>
		            	                <p><a href="#0"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
		            	                <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
		            	            </div>
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
		    
		    <fieldset class="group_10">
		        <div class="limiter">
		        	<h3>Согласие на обработку персональных данных</h3>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39_v_1"/><label for="f_39_v_1">Согласен на обработку персональных данных</label></em>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40_v_1" /><label for="f_40_v_1">Об ответственности за предоставление заведомо ложных сведений,
		        	либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
		        </div>
		    </fieldset>
		</div>

		<div class="switcher_n">
		    <fieldset class="group_2">
		        <div class="limiter">
		        	<span class="point_num">2</span>            
		        	<h3>Ваши персональные данные</h3>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_62_v_1">Фамилия</label><input id="set_62_v_1" type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_63_v_1">Имя</label><input id="set_63_v_1" type="text" placeholder="Имя" value="Александр" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_64_v_1">Отчество</label><input id="set_64_v_1" type="text" placeholder="Отчество" value="Андреевич" class="big" disabled="disabled"/></em><br/>
		        	
		        	<em class="wrapper l_33"><label for="set_65_v_1">Дата рождения</label><input id="set_65_v_1" type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" checked="checked" /><label>Мужской</label>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" /><label>Женский</label></em><br/>
		        	
		        	<em class="wrapper l_50"><label for="set_66_v_1">Адрес электронной почты</label><input id="set_66_v_1" type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_67_v_1">Контактный телефон</label><input id="set_67_v_1" type="text" placeholder="Контактный телефон" class="big" value="+7 912 200-00-02" disabled="disabled"/></em><br/>

		        	<div class="info-block_wrap">
		        	    <div class="info_block type_2">
		        	        <p class="info-block_h"><b>Обратите внимание</b></p>
		        	        <p>Изменение личных данных будет происходить в личном кабинете.</p>
		        	        <span class="icomoon">"</span>
		        	    </div>
		        	</div>

		        	<div class="clear mobile_morpf btn-cont_inner">
		        		<em class="wrapper l_100">
		        			<a href="#" tabindex="-1" class="btn white rarr fl"><b>Изменить данные</b></a>
		        		</em>
		        	</div>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_3">
		        <div class="limiter">
		        	<span class="point_num">3</span>
		        	<h3>Ваши паспортные данные</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_68_v_1">Серия</label><input id="set_68_v_1" type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_69_v_1">Номер</label><input id="set_69_v_1" type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_70_v_1">Код подразд-я</label><input id="set_70_v_1" type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_71_v_1">Дата выдачи</label><input id="set_71_v_1" type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
		        	
		        	<em class="wrapper l_100"><label for="set_72_v_1">Кем выдан</label><input id="set_72_v_1" type="text" placeholder="Кем выдан" class="big" disabled="disabled" />
		        	</em>
		        			    
		        	<em class="wrapper l_66">	
		        		<label for="set_73_v_1">Страна рождения</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_73_v_1" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	        <div class="selction_ajax-placeholder" name="country"></div>
		        	    </div>
		        	</em>
		        	
		        	<em class="wrapper l_100"><label for="set_74_v_1">Место рождения</label><input id="set_74_v_1" type="text" placeholder="Место рождения" class="big" /></em>

		        	<div class="info-block_wrap">
		        	    <div class="info_block type_2">
		        	        <p class="info-block_h"><b>Обратите внимание</b></p>
		        	        <p>Изменение личных данных будет происходить в личном кабинете.</p>
		        	        <span class="icomoon">"</span>
		        	    </div>
		        	</div>

		        	<div class="clear mobile_morpf btn-cont_inner">
		        		<em class="wrapper l_100">
		        			<a href="#" tabindex="-1" class="btn white rarr fl"><b>Изменить данные</b></a>
		        		</em>
		        	</div>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_4">
		        <div class="limiter">
		        	<span class="point_num">4</span>
		        	<h3>Гражданство</h3>
		        </div>
		    
	        	<div class="limiter">
	        		<em class="wrapper l_100"><input type="radio" name="g_1" id="с_1" checked="checked" /><label for="с_1">Российской федерации</label></em>
	        	</div>
	        	<div class="limiter">
	        		<em class="wrapper l_100"><input type="radio" name="g_1" id="с_2"/><label for="с_2">Иного государства</label></em>
	        	</div>
	        	<div class="fields_cover">
	        	    <div class="limiter">
	        	    	<em class="wrapper l_75">
	        	    		<label for="set_75_v_1">Страна</label>
	        	    	    <div class="search_inp-block">
	        	    	        <input type="search" id="set_75_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
	        	    	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
	        	    	        <div class="selction_ajax-placeholder" name="country"></div>
	        	    	    </div>
	        	    	</em>
	        	    </div>
	        	</div>
	        	<div class="limiter">
	        		<em class="wrapper l_100"><input type="radio" name="g_1" id="с_2_2"/><label for="с_2_2">Я лицо без государства</label></em>
	        	</div>
		    </fieldset>
		    
		    <fieldset class="group_5">
		        <div class="limiter">
		        	<span class="point_num">5</span>
		        	<h3>Укажите адрес вашей постоянной регистрации, как в паспорте</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_75">
		        		<label for="set_76_v_1">Страна</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_76_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
		        	        <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
		        	        <div class="selction_ajax-placeholder"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_100">
		        		<label for="set_77_v_1">Регион</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_77_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="region"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_50">
		        		<label for="set_78_v_1">Район</label>
		        	   <div class="search_inp-block">
		        	       <input type="search" id="set_78_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	       <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	       <div class="selction_ajax-placeholder" name="areas"></div>
		        	   </div>
		        	</em><em class="wrapper l_50">
		        		<label for="set_79_v_1">Населенный пункт</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_79_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="cities"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_50"><label for="set_80_v_1">Улица</label><input id="set_80_v_1" type="text" placeholder="Улица" class="big" />
		        	</em><em class="wrapper l_16"><label for="set_81_v_1">Дом</label><input id="set_81_v_1" type="text" placeholder="Дом" class="big" />
		        	</em><em class="wrapper l_16"><label for="set_82_v_1">Корпус</label><input id="set_82_v_1" type="text" placeholder="Корпус" class="big" />
		        	</em><em class="wrapper l_16"><label for="set_83_v_1">Квартира</label><input id="set_83_v_1" type="text" placeholder="Квартира" class="big" /></em>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_6">
		        <div class="limiter">
		        	<span class="point_num">6</span>
		        	<h3>Сведения о документе, подтверждающем полномочия представителя</h3>
		        </div>	
	        	<div class="limiter">
	        		<em class="wrapper l_33"><label for="set_84_v_1">Документ</label><input id="set_84_v_1" type="text" placeholder="Документ" class="big" />
	        		</em><em class="wrapper l_33"><label for="set_85_v_1">Серия</label><input id="set_85_v_1" type="text" placeholder="Серия" class="big" />
	        		</em><em class="wrapper l_33"><label for="set_86_v_1">Номер</label><input id="set_86_v_1" type="text" placeholder="Номер" class="big" /></em>
	        		
	        		</em><em class="wrapper l_100"><label for="set_87_v_1">Кем выдан</label><input id="set_87_v_1" type="text" placeholder="Кем выдан" class="big" /></em>
	        	</div>
		    </fieldset>
		    
		    <fieldset class="group_7">
		        <div class="limiter">
		        	<span class="point_num">7</span>
		        	<h3>Персональные данные получателя услуги</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_88_v_1">Фамилия</label><input id="set_88_v_1" type="text" placeholder="Фамилия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_89_v_1">Имя</label><input id="set_89_v_1" type="text" placeholder="Имя" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_90_v_1">Отчество</label><input id="set_90_v_1" type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
		        			    
		        	<div>
		        		<em class="wrapper l_33"><label for="set_91_v_1">Дата рождения</label><input id="set_91_v_1" type="text" placeholder="Дата рождения" class="big" />
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_4_1" id="s_1" checked="checked" /><label for="s_1">Мужской</label>
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_4_1" id="s_2" /><label for="s_2">Женский</label></em><br/>
		        	</div>
		        			    
		        	<em class="wrapper l_33"><label for="set_92_v_1">СНИЛС</label><input type="text" placeholder="СНИЛС" class="big" /></em><br/>
		        			    
		        	<em class="wrapper l_50"><label for="set_93_v_1">Адрес электронной почты</label><input id="set_93_v_1" type="email" placeholder="Адрес электронной почты" class="big" /></em>
		        	<em class="wrapper l_33"><label for="set_94_v_1">Контактный телефон</label><input id="set_94_v_1" type="tel" placeholder="Контактный телефон" class="big" /></em>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_8">
		        <div class="limiter">
		        	<span class="point_num">8</span>
		        	<h3>Персональные данные ребенка</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_66">
		        		<label for="set_95_v_1">Очередность рождения или усыновления</label>
		        	    <select class="select_choice" id="set_95_v_1">
		        	        <option value="0" selected="selected" class="selected_one">Очередность рождения или усыновления</option>
		        	        <option value="1">Второй</option>
		        	        <option value="2">Третий</option>
		        	        <option value="3">Четвертый</option>
		        	        <option value="4">Пятый</option>
		        	    </select>
		        	</em>
		        	
		        	<em class="wrapper l_33"><label for="set_96_v_2">Фамилия</label><input id="set_96_v_2" type="text" placeholder="Фамилия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_97_v_2">Имя</label><input id="set_97_v_2" type="text" placeholder="Имя" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_98_v_2">Отчество</label><input id="set_98_v_2" type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
		        			    
		        	<div>
		        		<em class="wrapper l_33"><label for="set_99_v_2">Дата рождения</label><input id="set_99_v_2" type="text" placeholder="Дата рождения" class="big" />
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_2" id="f_4_v_2" checked="checked" /><label for="f_4_v_2">Мужской</label>
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_2" id="f_5_v_2" /><label for="f_5_v_2">Женский</label></em><br/>
		        	</div>
		        			    
		        	<em class="wrapper l_66">	
		        		<label for="set_100_v_2">Страна рождения</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_100_v_2" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
		        	        <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
		        	        <div class="selction_ajax-placeholder"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_66">
		        		<label for="set_101_v_2">Гражданство</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_101_v_2" placeholder="Гражданство" name="nationality" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="nationality" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="nationality"></div>
		        	    </div>
		        	</em><br/>
		        	
		        	<em class="wrapper l_25"><label for="set_102_v_2">Дата усыновления</label><input id="set_102_v_2" type="text" placeholder="Дата усыновления" class="big" /><i class="not">необязательно</i></em>
		        </div>
		    
		        <div class="limiter">
		        	<h4>Данные свидетельства о рождении ребенка</h4>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_2" id="с_3" checked="checked" /><label for="с_3">Российской федерации</label></em>
		        </div>
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_33"><label for="set_103_v_2">Серия</label><input id="set_103_v_2" type="text" placeholder="Серия" class="big" />
		            	</em><em class="wrapper l_33"><label for="set_104_v_2">Номер</label><input id="set_104_v_2" type="text" placeholder="Номер" class="big" />
		            	</em><em class="wrapper l_33"><label for="set_105_v_2">Дата выдачи</label><input id="set_105_v_2" type="text" placeholder="Дата выдачи" class="big" /></em>
		            	
		            	<em class="wrapper l_100"><label for="set_106_v_2">Кем выдан</label><input id="set_106_v_2" type="text" placeholder="Кем выдан" class="big" /></em>
		            </div>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_2" id="с_2"/><label for="с_2">Иного государства</label></em>
		        </div>
		        <div class="fields_cover">
		            <div class="limiter">
		            	<em class="wrapper l_100"><label for="set_107_v_2">Наименование документа</label><input id="set_107_v_2" type="text" placeholder="Наименование документа" class="big" /></em>
		            </div>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_9">
		        <div class="limiter">
		        	<span class="point_num">9</span>
		        	<h3>Лишались ли вы родительских прав в отношении ребенка (детей)?</h3>
		        </div>
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_3" id="с_5" checked="checked" /><label for="с_5">Да</label></em>
		        	<em class="wrapper l_100"><input type="radio" name="g_3" id="с_6" /><label for="с_6">Нет</label></em>
		        	<em class="wrapper l_100"><input type="checkbox" name="g_4" id="с_7"/><label for="с_7">Умышленных преступления, относящихся к преступлениям против личности, в отношении своего ребенка (детей) не совершал</label></em>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" name="g_4" id="с_8" /><label for="с_8">Об ответственности за достоверность представленных сведений предупреждена (предупрежден)</label></em>
		        </div>
		    </fieldset>
		    
		    <fieldset class="group_10">
		        <div class="limiter">
		        	<span class="point_num">10</span>
		        	<h3>Государственный сертификат на материнский (семейный) капитал прошу выдать</h3>
		        </div>

	        	<div class="limiter">
	        		<em class="wrapper l_100"><input type="radio" name="g_5" id="с_9" checked="checked" /><label for="с_9">в отделении Пенсионного фонда РФ</label></em>
	        	</div>
	        	<div class="limiter">
	        		<em class="wrapper l_100"><input type="radio" name="g_5" id="с_10" /><label for="с_10">по почте</label></em>
	        	</div>

	        	<div class="fields_cover">
	        	    <div class="limiter">
	        	    	<em class="wrapper l_66">
	        	    		<label for="set_107_v_1">Страна</label>
	        	    	    <div class="search_inp-block">
	        	    	        <input type="search" id="set_107_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
	        	    	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
	        	    	        <div class="selction_ajax-placeholder" name="country"></div>
	        	    	    </div>
	        	    	</em>
	        	    </div>
	        	</div>
		    </fieldset>
		    
		    <fieldset class="group_11">
		        <div class="limiter">
		        	<span class="point_num">11</span>
		        	<h3>Государственный сертификат на материнский (семейный) капитал прошу</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6" checked="checked" id="c_9"/><label for="c_9">по месту постоянной регистрации, как в паспорте</label></em>
		        </div>
		        <div class="fields_cover">
		        	<div class="limiter">
		        	    <em class="wrapper l_75">
		        	    	<label for="set_108_v_1">Страна</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_108_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	            <div class="selction_ajax-placeholder" name="country"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_100">
		        	    	<label for="set_109_v_1">Регион</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_109_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="region"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50">
		        	    	<label for="set_110_v_1">Район</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_110_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="areas"></div>
		        	        </div>
		        	    </em><em class="wrapper l_50">
		        	    	<label for="set_111_v_1">Населенный пункт</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_111_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="cities"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50"><label for="set_112_v_1">Улица</label><input id="set_112_v_1" type="text" placeholder="Улица" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_113_v_1">Дом</label><input id="set_113_v_1" type="text" placeholder="Дом" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_114_v_1">Корпус</label><input id="set_114_v_1" type="text" placeholder="Корпус" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_115_v_1">Квартира</label><input id="set_115_v_1" type="text" placeholder="Квартира" class="big" /></em>
		        	</div>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6" id="c_10"/><label for="c_10">по месту временного нахождения</label></em>
		        </div>
		    
		        <div class="fields_cover">
		        	<div class="limiter">
		        	    <em class="wrapper l_75">
		        	    	<label for="set_116_v_1">Страна</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_116_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	            <div class="selction_ajax-placeholder" name="country"></div>
		        	        </div>
		        	    </em>
		        	    
		        	    <em class="wrapper l_100">
		        	    	<label for="set_117_v_1">Регион</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_117_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="region"></div>
		        	        </div>
		        	    </em>
		        	    
		        	    <em class="wrapper l_50">
		        	    	<label for="set_118_v_1">Район</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_118_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="areas"></div>
		        	        </div>
		        	    </em><em class="wrapper l_50">
		        	    	<label for="set_119_v_1">Населенный пункт</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_119_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="cities"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50"><label for="set_120_v_1">Улица</label><input id="set_120_v_1" type="text" placeholder="Улица" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_121_v_1">Дом</label><input id="set_121_v_1" type="text" placeholder="Дом" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_122_v_1">Корпус</label><input id="set_122_v_1" type="text" placeholder="Корпус" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_123_v_1">Квартира</label><input id="set_123_v_1" type="text" placeholder="Квартира" class="big" /></em>
		        	</div>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6" id="c_11"/><label for="c_11">по месту временной регистрации</label></em>
		        </div>
		    
		        <div class="fields_cover">
		        	<div class="limiter">
		        	    <em class="wrapper l_75">
		        	    	<label for="set_124_v_1">Страна</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_124_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	            <div class="selction_ajax-placeholder" name="country"></div>
		        	        </div>
		        	    </em>
		        	    
		        	    <em class="wrapper l_100">
		        	    	<label for="set_125_v_1">Регион</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_125_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="region"></div>
		        	        </div>
		        	    </em>
		        	    
		        	    <em class="wrapper l_50">
		        	    	<label for="set_126_v_1">Район</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_126_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="areas"></div>
		        	        </div>
		        	    </em><em class="wrapper l_50">
		        	    	<label for="set_127_v_1">Населенный пункт</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_127_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="cities"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50"><label for="set_128_v_1">Улица</label><input id="set_128_v_1" type="text" placeholder="Улица" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_129_v_1">Дом</label><input id="set_129_v_1" type="text" placeholder="Дом" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_130_v_1">Корпус</label><input id="set_130_v_1" type="text" placeholder="Корпус" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_131_v_1">Квартира</label><input id="set_131_v_1" type="text" placeholder="Квартира" class="big" /></em>
		        	</div>
		        </div>
		    
		        <div class="limiter">
		        	<h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
		        </div>
		        
		        <div class="map_cover">
		            <div class="map_block" id="map_piter"></div>
		            <div class="address_list">
		            	<div class="map_nav">
		            	    <h4 class="map_nav_h">Доступны подразделения:</h4>
		            	    <ul class="map_list">
		            	        <li class="map_list_item">
		            	            <span class="map_check"><input type="checkbox"/></span>
		            	            <div>
		            	                <p><a href="#0"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
		            	                <p>Москва, Неглинная, 23</p>
		            	            </div>
		            	        </li>
		            	        <li class="map_list_item">
		            	            <span class="map_check"><input type="checkbox"/></span>
		            	            <div>
		            	                <p><a href="#0"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
		            	                <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
		            	            </div>
		            	        </li>
		            	        <li class="map_list_item">
		            	            <span class="map_check"><input type="checkbox"/></span>
		            	            <div>
		            	                <p><a href="#0"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
		            	                <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
		            	            </div>
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
		    
		    <fieldset class="group_12">
		        <div class="limiter">
		        	<h3>Согласие на обработку персональных данных</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
		        	либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
		        </div>
		    </fieldset>
		</div>

		<div class="switcher_n">
		    <fieldset class="group_2">
		        <div class="limiter">
		        	<span class="point_num">2</span>            
		        	<h3>Наименование и юридический адрес организации</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_100"><label for="set_132_v_1">Наименование организации</label><input id="set_132_v_1" type="text" placeholder="Наименование организации" class="big" /></em>
		        	
		        	<em class="wrapper l_100">
		        		<label for="set_133_v_1">Выберите регион</label>
		        	    <div class="search_inp-block">
		        	        <input id="set_133_v_1" type="search" placeholder="Выберите регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="region"></div>
		        	    </div>
		        	</em>
		        </div>
		    </fieldset>

		    <fieldset class="group_3">
		        <div class="limiter">
		        	<span class="point_num">3</span>            
		        	<h3>Ваши персональные данные</h3>
		        </div>

		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_134_v_1">Фамилия</label><input id="set_134_v_1" type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_135_v_1">Имя</label><input id="set_135_v_1" type="text" placeholder="Имя" value="Александр" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_136_v_1">Отчество</label><input id="set_136_v_1" type="text" placeholder="Отчество" value="Андреевич" class="big" disabled="disabled"/></em><br/>
		        	
		        	<em class="wrapper l_33"><label for="set_137_v_1">Дата рождения</label><input id="set_137_v_1" type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_1_v_3" disabled="disabled" checked="checked" /><label>Мужской</label>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_1_v_3" disabled="disabled" /><label>Женский</label></em><br/>
		        	
		        	<em class="wrapper l_50"><label for="set_138_v_1">Адрес электронной почты</label><input id="set_138_v_1" type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_139_v_1">Контактный телефон</label><input id="set_139_v_1" type="text" placeholder="Контактный телефон" class="big" value="+7 912 200-00-02" disabled="disabled"/></em><br/>

		        	<div class="info-block_wrap">
		        	    <div class="info_block type_2">
		        	        <p class="info-block_h"><b>Обратите внимание</b></p>
		        	        <p>Изменение личных данных будет происходить в личном кабинете.</p>
		        	        <span class="icomoon">"</span>
		        	    </div>
		        	</div>

		        	<div class="clear mobile_morpf btn-cont_inner">
		        		<em class="wrapper l_100">
		        			<a href="#" tabindex="-1" class="btn white rarr fl"><b>Изменить данные</b></a>
		        		</em>
		        	</div>
		        </div>
		    </fieldset>

		    <fieldset class="group_4">
		        <div class="limiter">
		        	<span class="point_num">4</span>
		        	<h3>Ваши паспортные данные</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_140_v_1">Серия</label><input id="set_140_v_1" type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_141_v_1">Номер</label><input id="set_141_v_1" type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_142_v_1">Код подразд-я</label><input id="set_142_v_1" type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>
		        	</em><em class="wrapper l_33"><label for="set_143_v_1">Дата выдачи</label><input id="set_143_v_1" type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
		        	
		        	<em class="wrapper l_100"><label for="set_144_v_1">Кем выдан</label><input id="set_144_v_1" type="text" placeholder="Кем выдан" class="big" disabled="disabled" />
		        	</em>
		        			    
		        	<em class="wrapper l_66">
		        		<label for="set_145_v_1">Страна рождения</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_145_v_1" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	        <div class="selction_ajax-placeholder" name="country"></div>
		        	    </div>
		        	</em>
		        	
		        	<em class="wrapper l_100"><label for="set_146_v_1">Место рождения</label><input id="set_146_v_1" type="text" placeholder="Место рождения" class="big" /></em>

		        	<div class="info-block_wrap">
		        	    <div class="info_block type_2">
		        	        <p class="info-block_h"><b>Обратите внимание</b></p>
		        	        <p>Изменение личных данных будет происходить в личном кабинете.</p>
		        	        <span class="icomoon">"</span>
		        	    </div>
		        	</div>

		        	<div class="clear mobile_morpf btn-cont_inner">
		        		<em class="wrapper l_100">
		        			<a href="#" tabindex="-1" class="btn white rarr fl"><b>Изменить данные</b></a>
		        		</em>
		        	</div>
		        </div>
		    </fieldset>

		    <fieldset class="group_5">
		        <div class="limiter">
		        	<span class="point_num">5</span>
		        	<h3>Персональные данные получателя услуги</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_147_v_1">Фамилия</label><input id="set_147_v_1" type="text" placeholder="Фамилия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_148_v_1">Имя</label><input id="set_148_v_1" type="text" placeholder="Имя" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_149_v_1">Отчество</label><input id="set_149_v_1" type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
		        			    
		        	<em class="wrapper l_33"><label for="set_150_v_1">Дата рождения</label><input id="set_150_v_1" type="text" placeholder="Дата рождения" class="big" />
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_4" id="s_1_v_3" checked="checked" /><label for="s_1_v_3">Мужской</label>
		        	</em><em class="wrapper l_16"><input type="radio" name="sex_4" id="s_2_v_3" /><label for="s_2_v_3">Женский</label></em><br/>
		        			    
		        	<em class="wrapper l_33"><label for="set_151_v_1">СНИЛС</label><input id="set_151_v_1" type="text" placeholder="СНИЛС" class="big" /></em><br/>
		        			    
		        	<em class="wrapper l_50"><label for="set_152_v_1">Адрес электронной почты</label><input id="set_152_v_1" type="email" placeholder="Адрес электронной почты" class="big" /></em>
		        	<em class="wrapper l_33"><label for="set_153_v_1">Контактный телефон</label><input id="set_153_v_1" type="tel" placeholder="Контактный телефон" class="big" /></em>
		        </div>
		    </fieldset>

		    <fieldset class="group_6">
		        <div class="limiter">
		        	<span class="point_num">6</span>
		        	<h3>Сведения о документе, подтверждающем полномочия представителя</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_33"><label for="set_154_v_1">Документ</label><input id="set_154_v_1" type="text" placeholder="Документ" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_155_v_1">Серия</label><input id="set_155_v_1" type="text" placeholder="Серия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_156_v_1">Номер</label><input id="set_156_v_1" type="text" placeholder="Номер" class="big" /></em>
		        
		        	</em><em class="wrapper l_100"><label for="set_157_v_1">Кем выдан</label><input id="set_157_v_1" type="text" placeholder="Кем выдан" class="big" /></em>
		        </div>
		    </fieldset>

		    <fieldset class="group_7">
		        <div class="limiter">
		        	<span class="point_num">7</span>
		        	<h3>Персональные данные ребенка</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_66">
		        		<label for="set_158_v_1">Очередность рождения или усыновления</label>
		        	    <select class="select_choice" id="set_158_v_1">
		        	        <option value="0" selected="selected" class="selected_one">Очередность рождения или усыновления</option>
		        	        <option value="1">Второй</option>
		        	        <option value="2">Третий</option>
		        	        <option value="3">Четвертый</option>
		        	        <option value="4">Пятый</option>
		        	    </select>
		        	</em>
		        	
		        	<em class="wrapper l_33"><label for="set_159_v_1">Фамилия</label><input id="set_159_v_1" type="text" placeholder="Фамилия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_160_v_1">Имя</label><input id="set_160_v_1" type="text" placeholder="Имя" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_161_v_1">Отчество</label><input id="set_161_v_1" type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
		        			    
		        	<div>
		        		<em class="wrapper l_33"><label for="set_162_v_1">Дата рождения</label><input id="set_162_v_1" type="text" placeholder="Дата рождения" class="big" />
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_2_v_3" id="f_4_v_3" checked="checked" /><label for="f_4_v_3">Мужской</label>
		        		</em><em class="wrapper l_16"><input type="radio" name="sex_2_v_3" id="f_5_v_3" /><label for="f_5_v_3">Женский</label></em><br/>
		        	</div>
		        			    
		        	<em class="wrapper l_66">
		        		<label for="set_163_v_1">Страна рождения</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_163_v_1" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	        <div class="selction_ajax-placeholder" name="country"></div>
		        	    </div>
		        	</em>
		        			    
		        	<em class="wrapper l_66">
		        		<label for="set_164_v_1">Гражданство</label>
		        	    <div class="search_inp-block">
		        	        <input type="search" id="set_164_v_1" placeholder="Гражданство" name="nationality" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	        <input type="search" name="nationality" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	        <div class="selction_ajax-placeholder" name="nationality"></div>
		        	    </div>
		        	</em>
		    
			    	<em class="wrapper l_33"><label for="set_165_v_1">Дата усыновления</label><input id="set_165_v_1" type="text" placeholder="Дата усыновления" class="big" /><i class="not">необязательно</i></em>

			        <h4>Данные свидетельства о рождении ребенка</h4>
			    
		        	<em class="wrapper l_33"><label for="set_166_v_1">Серия</label><input id="set_166_v_1" type="text" placeholder="Серия" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_167_v_1">Номер</label><input id="set_167_v_1" type="text" placeholder="Номер" class="big" />
		        	</em><em class="wrapper l_33"><label for="set_168_v_1">Дата выдачи</label><input id="set_168_v_1" type="text" placeholder="Дата выдачи" class="big" /></em>
		        	
		        	<em class="wrapper l_100"><label for="set_169_v_1">Кем выдан</label><input id="set_169_v_1" type="text" placeholder="Кем выдан" class="big" /></em>
				</div>
		    </fieldset>

		    <fieldset class="group_8">
		        <div class="limiter">
		        	<span class="point_num">8</span>
		        	<h3>Лишались ли вы родительских прав в отношении ребенка (детей)?</h3>
		        </div>

		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_3_v_3" id="с_5_v_3" checked="checked" /><label for="с_5_v_3">Да</label></em>
		        	<em class="wrapper l_100"><input type="radio" name="g_3_v_3" id="с_6_v_3" /><label for="с_6_v_3">Нет</label></em>
		        	<em class="wrapper l_100"><input type="checkbox" name="g_4_v_3" id="с_7_v_3"/><label for="с_7_v_3">Умышленных преступления, относящихся к преступлениям против личности, в отношении своего ребенка (детей) не совершал</label></em>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" name="g_4_v_3" id="с_8_v_3" /><label for="с_8_v_3">Об ответственности за достоверность представленных сведений предупреждена (предупрежден)</label></em>
		        </div>
		    </fieldset>

		    <fieldset class="group_9">
		        <div class="limiter">
		        	<span class="point_num">9</span>
		        	<h3>Государственный сертификат на материнский (семейный) капитал прошу</h3>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6_v_3" checked="checked" id="c_9_v_3"/><label for="c_9_v_3">по месту постоянной регистрации, как в паспорте</label></em>
		        </div>
		        <div class="fields_cover">
		        	<div class="limiter">
		        	    <em class="wrapper l_75">
		        	    	<label for="set_170_v_1">Страна</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_170_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
		        	            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
		        	            <div class="selction_ajax-placeholder"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_100">
		        	    	<label for="set_171_v_1">Регион</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_171_v_1" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
		        	            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
		        	            <div class="selction_ajax-placeholder"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50">
		        	    	<label for="set_172_v_1">Район</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_172_v_1" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
		        	            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
		        	            <div class="selction_ajax-placeholder"></div>
		        	        </div>
		        	    </em><em class="wrapper l_50">
		        	    	<label for="set_173_v_1">Населенный пункт</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_173_v_1" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
		        	            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
		        	            <div class="selction_ajax-placeholder"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50"><label for="set_174_v_1">Улица</label><input type="text" placeholder="Улица" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_175_v_1">Дом</label><input type="text" placeholder="Дом" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_176_v_1">Корпус</label><input type="text" placeholder="Корпус" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_177_v_1">Квартира</label><input type="text" placeholder="Квартира" class="big" /></em>
		        	</div>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6_v_3" id="c_10_v_3"/><label for="c_10_v_3">по месту временного нахождения</label></em>
		        </div>
		    
		        <div class="fields_cover">
		        	<div class="limiter">
		        	   <em class="wrapper l_75">
		        	   		<label for="set_178_v_1">Страна</label>
							<div class="search_inp-block">
								<input type="search" id="set_178_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
								<input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
								<div class="selction_ajax-placeholder" name="country"></div>
							</div>
		        	   </em>
		        	   
		        	   <em class="wrapper l_100">
		        	   		<label for="set_179_v_1">Регион</label>
		        	       <div class="search_inp-block">
		        	           <input type="search" id="set_179_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	           <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	           <div class="selction_ajax-placeholder" name="region"></div>
		        	       </div>
		        	   </em>
		        	   
		        	   <em class="wrapper l_50">
		        	   		<label for="set_180_v_1">Район</label>
		        	       <div class="search_inp-block">
		        	           <input type="search" id="set_180_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	           <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	           <div class="selction_ajax-placeholder" name="areas"></div>
		        	       </div>
		        	   </em><em class="wrapper l_50">
		        	   		<label for="set_181_v_1">Населенный пункт</label>
		        	       <div class="search_inp-block">
		        	           <input type="search" id="set_181_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	           <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	           <div class="selction_ajax-placeholder" name="cities"></div>
		        	       </div>
		        	   </em>
		        			    
		        	    <em class="wrapper l_50"><label for="set_182_v_1">Улица</label><input id="set_182_v_1" type="text" placeholder="Улица" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_183_v_1">Дом</label><input id="set_183_v_1" type="text" placeholder="Дом" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_184_v_1">Корпус</label><input id="set_184_v_1" type="text" placeholder="Корпус" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_185_v_1">Квартира</label><input id="set_185_v_1" type="text" placeholder="Квартира" class="big" /></em>
		        	</div>
		        </div>
		    
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="radio" name="g_6_v_3" id="c_11_v_3"/><label for="c_11_v_3">по месту временной регистрации</label></em>
		        </div>
		    
		        <div class="fields_cover">
		        	<div class="limiter">
		        	    <em class="wrapper l_75">
		        	    	<label for="set_186_v_1"></label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_186_v_1" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
		        	            <div class="selction_ajax-placeholder" name="country"></div>
		        	        </div>
		        	    </em>
		        	    
		        	    <em class="wrapper l_100">
		        	    	<label for="set_187_v_1">Регион</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_187_v_1" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="region" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="region"></div>
		        	        </div>
		        	    </em>
		        	    
		        	    <em class="wrapper l_50">
		        	    	<label for="set_188_v_1">Район</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_188_v_1" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="areas" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="areas"></div>
		        	        </div>
		        	    </em><em class="wrapper l_50">
		        	    	<label for="set_189_v_1">Населенный пункт</label>
		        	        <div class="search_inp-block">
		        	            <input type="search" id="set_189_v_1" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
		        	            <input type="search" name="cities" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
		        	            <div class="selction_ajax-placeholder" name="cities"></div>
		        	        </div>
		        	    </em>
		        			    
		        	    <em class="wrapper l_50"><label for="set_190_v_1">Улица</label><input id="set_190_v_1" type="text" placeholder="Улица" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_191_v_1">Дом</label><input id="set_191_v_1" type="text" placeholder="Дом" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_192_v_1">Корпус</label><input id="set_192_v_1" type="text" placeholder="Корпус" class="big" />
		        	    </em><em class="wrapper l_16"><label for="set_193_v_1">Квартира</label><input id="set_193_v_1" type="text" placeholder="Квартира" class="big" /></em>
		        	</div>
		        </div>
		    
		        <div class="limiter">
		        	<h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
		        </div>
		        
		        <div class="map_cover">
		            <div class="map_block" id="map_moscow" class="map_double"></div>
		            <div class="address_list">
			            <div class="map_nav">
			                <h4 class="map_nav_h">Доступны подразделения:</h4>
			                <ul class="map_list">
			                    <li class="map_list_item">
			                        <span class="map_check"><input type="checkbox"/></span>
			                        <div>
			                            <p><a href="#0"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
			                            <p>Москва, Неглинная, 23</p>
			                        </div>
			                        <div class="right">
			                          <input type="checkbox"/>    
			                        </div>
			                    </li>
			                    <li class="map_list_item">
			                        <span class="map_check"><input type="checkbox"/></span>
			                        <div>
			                            <p><a href="#0"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
			                            <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
			                        </div>
			                        <div class="right">
			                          <input type="checkbox"/>    
			                        </div>
			                    </li>
			                    <li class="map_list_item">
			                        <span class="map_check"><input type="checkbox"/></span>
			                        <div>
			                            <p><a href="#0"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
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
		    
		    <fieldset class="group_10">
		        <div class="limiter">
		        	<h3>Согласие на обработку персональных данных</h3>
		        </div>
		        
		        <div class="limiter">
		        	<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39_v_3"/><label for="f_39_v_3">Согласен на обработку персональных данных</label></em>
		        	
		        	<em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40_v_3" /><label for="f_40_v_3">Об ответственности за предоставление заведомо ложных сведений,
		        	либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
		        </div>
		    </fieldset>
		</div>
    </form>
</div>

<?
include('include/mobile_footer.php');
?>