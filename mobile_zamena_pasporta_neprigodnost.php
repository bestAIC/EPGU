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
	          <em class="wrapper l_66"><label for="settings01">Фамилия</label><input id="settings01" type="text" placeholder="Фамилия" value="Константинопольский" disabled="disabled" class="big"/></em>

	          <em class="wrapper l_50"><label for="settings01">Имя</label><input id="settings01" type="text" placeholder="Имя" value="Константин" class="big" disabled="disabled"/></em><em class="wrapper l_50"><label for="settings01">Отчество</label><input id="settings01" type="text" placeholder="Отчество" value="Андреевич" class="big"/ disabled="disabled"></em>

	          <em class="wrapper l_25"><label for="settings01">Дата рождения</label><input id="settings01" type="text" placeholder="Дата рождения" value="30.09.1992" disabled="disabled" class="big" disabled="disabled" /></em><br/><em class="wrapper l_66"><label for="settings01">Адрес электронной почты</label><input id="settings01" type="text" placeholder="Адрес электронной почты" value="30.09.1992" disabled="disabled" class="big" disabled="disabled" /></em><br/><em class="wrapper l_50"><label for="settings01">Контактный телефон</label><input id="settings01" type="text" placeholder="Контактный телефон" value="+7 931 123-33-44" disabled="disabled" class="big" disabled="disabled" /></em>

	          
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
				<em class="wrapper l_16"><label for="settings02">Серия</label><input type="text" placeholder="Серия" class="big" value="17 08" disabled="disabled"/>
				</em><em class="wrapper l_25"><label for="settings02">Номер</label><input type="text" placeholder="Номер" value="949485" class="big" disabled="disabled"/>
				</em><em class="wrapper l_25"><label for="settings02">Дата выдачи</label><input type="text" placeholder="Дата выдачи" value="07.12.2004" class="big" disabled="disabled" /></em><em class="wrapper l_33"><label for="settings02">Код подразделения</label><input type="text" placeholder="Код подразделения" class="big" value="330-009" disabled="disabled" /></em><br/>

				<em class="wrapper l_100"><label for="settings02">Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России по Свердловской области в Октябрьс…" disabled="disabled" /></em>

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
				    <option value="1" selected="selected">Номер не задан</option>            
				    <option value="2">А777АА 777</option>
				    <option value="3">А999АА 999</option>
				    <option value="4">А777АА 777</option>
				    <option value="5">А999АА 999</option>
				    <option value="6">А777АА 777</option>
				    <option value="7">А999АА 999</option>
				    <option value="6">А777АА 777</option>
				    <option value="7">А999АА 999</option>
				  </select>                             
				</em><br/>
	        </div>
	    </fieldset>
	</form>

</div><!-- content -->

<?
include('include/mobile_footer.php');
?>