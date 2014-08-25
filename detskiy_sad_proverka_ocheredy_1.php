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
			<em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label for="f_1"><p><strong>Заявление №424134 от 29.08.2014</strong></p><p>
			<b>Статус:</b> Передача изменений Заявления по месту предоставления услуги</p></label>
			</em>
			<em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label for="f_2"><p><strong>Заявление № 341455 от 28.08.2014</strong></p><p>
			<b>Статус:</b> Ожидает рассмотрения</p></label></em>
			<em class="wrapper l_100"><input type="radio" name="g_1" id="f_3"/><label for="f_3"><p><strong>Заявление № 1341414 от 20.08.2014</strong></p><p>
			<b>Статус:</b> Не явился</p></label></em>

			<div class="clear"><span class="fr"><input class="big btn" type="submit" value="Проверить очередь" /></span></div>
		</fieldset>
	</form>
</div>

<?
include('include/footer.php');
?> 