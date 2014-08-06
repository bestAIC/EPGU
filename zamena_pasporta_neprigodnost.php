<?
$pagename = 'zamena_pasporta_neprigodnost';
$pagetitle = 'В связи с непригодностью к использованию';
include('include/head.php');
?>

	    <ul class="breadcrumbs">
	      <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
	      <li class="first"><a href="#">Личные документы</a></li>
	      <li class="last"><span>Замена паспорта</span></li>
	    </ul>          
	  </div>
	</div>

	<div id="content">
	  <div class="title">
	    <span class="icomoon color_3">G</span><h1>Замена паспорта гражданина Российской Федерации</h1>
	    <h2>В связи с непригодностью к использованию</h2>
	  </div>

	  <form class="main clear">
	  	<fieldset class="group_1">         
	  	  <span class="point_num">1</span>
	  	  <h3>Ваши прежние персональные данные <span class="fr">
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
	  	  </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/> 
	  	                                           
	  	</fieldset>

		<fieldset class="group_2">
		  <span class="point_num">2</span>
		  <h3>Загрузите свою фотографию</h3>          
		  <div class="col_top">                         
		    <h4>Требования к фотографии</h4>
		    <ul class="list">
		      <li>Черно-белая или цветная фотография формата JPEG. Размер файла 200–500 кБ.</li>
		      <li>Фон: белый, светло-голубой или светло-серый.</li>
		      <li>Головные уборы допускаются (по религиозным причинам), но они не должны скрывать овал лица.</li>
		    </ul>
		    <div class="more_info">
				<span class="pseudo">Все требования</span>
			</div>
		  </div>
		  <div class="col_left">            
		    <div class="load_photo">
		      <div class="photo_brd">
		        <img src="pic/svg/5.svg"/>
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
		  </div>
		  <div class="col_right">
		    <ul class="list edit_list">
		      <li><a href="#"><span class="icomoon">Q</span><span class="txt">Повернуть по часовой</span></a></li>
		      <li><a href="#"><span class="icomoon">R</span><span class="txt">Повернуть против часовой</span></a></li>
		      <li><a href="#"><span class="icomoon">S</span><span class="txt">Обрезать фотографию</span></a></li>
		      <li><a href="#"><span class="icomoon">T</span><span class="txt">Отменить последнее действие</span></a></li>
		  </div>
		</fieldset>


		<fieldset class="group_3">                      
		  <span class="point_num">3</span>

		  <h3>Сведения о паспорте, подлежащем замене</h3>          
		  
		  <em class="wrapper l_16"><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
		  </em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
		  </em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>            
		  </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
		  
		  <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big"/>
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
		  
		  <em class="wrapper l_100"><input type="text" placeholder="Место рождения как в паспорте" value="город Москва" class="big" disabled="disabled"/></em>                                       
		</fieldset>


	  </form>
	</div>

<?
include('include/footer.php');
?> 