<?
$pagename = 'detskiy_sad';
$pagetitle = 'Проверка очереди в детский сад';
include('include/head.php');
?>

    <ul class="breadcrumbs">
      <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
      <li><span>Личные документы</span></li>
      <li class="last"><span>Запись в детский сад</span></li>
    </ul>          
  </div>
</div>

<div id="content">
	<div class="title">
	  <span class="icomoon color_4">Y</span><h1>Проверка очереди в детский сад</h1>
	</div>

	<form class="main clear">
	      
		<fieldset class="group_1">         
			<span class="point_num">1</span>
			<h3>Выберите заявление</h3>          
			<em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" disabled="disabled" /><label for="f_1"><p><strong>Заявление №424134 от 29.08.2014</strong></p><p>
			<b>Статус:</b> Передача изменений Заявления по месту предоставления услуги</p></label>
			</em>
			<em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"  disabled="disabled"/><label for="f_2"><p><strong>Заявление № 341455 от 28.08.2014</strong></p><p>
			<b>Статус:</b> Ожидает рассмотрения</p></label></em>
			<em class="wrapper l_100"><input type="radio" name="g_1" id="f_3"  disabled="disabled"/><label for="f_3"><p><strong>Заявление № 1341414 от 20.08.2014</strong></p><p>
			<b>Статус:</b> Не явился</p></label></em>
		</fieldset>

		<fieldset class="group_2">
			<span class="point_num">2</span>
			<h3>Информация об очереди</h3>          
			
			<dl class="form_info-descr clear">
				<dt><p>Детский сад №1131, Трифоновская ул., 34к2</p><p class="sub_txt">Предпочтительный детский сад</p></dt>
				<dd><a href="#">Вы 15 в очереди</a></dd>
				<dt><p>Детский сад №1214, Большой проспект Петроградской стороны, 3к5</p></dt>
				<dd><a href="#">Вы 135 в очереди</a></dd>
				<dt><p>Детский сад №542542, Большой коретный переулок, 12</p></dt>
				<dd><a href="#">Вы 2 в очереди</a></dd>
				<dt><p>Детский сад №231, ул. Карла-Маркса, 34</p></dt>
				<dd><a href="#">Вы 452 в очереди</a></dd>
			</dl>
		</fieldset>
	</form>
	
	<div class="clear">
      <a href="#" class="btn white larr fl"><b>Вернуться к выбору</b></a>
      <span class="btn white fr"><b>Изменить данные</b></span>
    </div>
</div>

<?
include('include/footer.php');
?> 