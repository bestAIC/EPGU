<?
$pagename = 'mobile_typical_elements';
$pagetitle = 'Типовые элементы - мобильная версия';
include('include/mobile_head.php');
?>

			<div id="content">

				<div class="title">
				  <div class="limiter"><h1>Типовые элементы - mobile</h1></div>
				</div>
				
				
					<!-- advice type_ok -->
					<div class="advice type_ok">
						<div class="limiter">
						  <div class="advice_h">
                  <div class="advice_ico"><span class="icomoon">4</span></div>
                  	<h2><span>Вы подписаны на уведомление</span></h2>
                	</div>
								  <p>После восстановления работоспособности сервиса вам будет отправлено автоматическое уведомление по указаным вами контактным данным, 
								  и вы сможете вернутся к получению услуги.</p> 
					  </div>
					</div>
				

				<br/>
				<br/>
				
				
					<!-- advice type_like -->
					<div class="advice type_like">
					<div class="limiter">
						  <div class="advice_h">
	              <div class="advice_ico"><span class="icomoon">2</span></div>
	              <h2><span>Штрафы не найдены</span></h2>
	            </div>
						</div>
					</div>

				
				<br/>
				<br/>

					<!-- advice type_not -->
					<div class="advice type_not">
					<div class="limiter">
					  <div class="advice_h">
			              <div class="advice_ico"><span class="icomoon">3</span></div>
			              <h2><span>Что-то пошло не так!</span></h2>
			            </div>
					  <p>К сожалению, сейчас услуга недоступна. Попробуйте позднее или подпишитесь на разовое уведомление - мы оповестим вас, как только услуга заработает</p>

					    <form>
					        <fieldset>
					          <em class="wrapper l_83"><label for="">Прислать СМС на номер</label><div class="placeholder_small">E-mail</div><input type="text" placeholder="E-mail" value="test@test.ru" class="big" disabled="disabled"></em><input type="checkbox" checked="checked" /><em class="wrapper l_83"><label for="">Отправить письмо на почту</label><div class="placeholder_small">Контактный телефон</div><input type="text" placeholder="Контактный телефон" value="+7 912 200-00-02" class="big" disabled="disabled"></em><input type="checkbox" checked="checked" />
					        </fieldset>
					    </form>
						</div>
					</div>
				
				<!-- social -->
				<div class="social_wrap-b">
					<div class="limiter">
					    <div class="social">
					        <b>Поделись удобным сервисом с друзьями:</b>
					        <div class="social-ico_cont">
					            <a href="#"><span class="icomoon">#</span></a>
					            <a href="#"><span class="icomoon">$</span></a>
					            <a href="#"><span class="icomoon">%</span></a>
					            <a href="#"><span class="icomoon">&</span></a>
					        </div>
					    </div>
					</div>
				</div>
				
				<div class="switcher_cont">
				  <div class="limiter">
				    <div class="brd">
				      <h4 class="switcher_h">Информер</h4>
				      <em>
				        <div class="switcher active">
				          <div class="cover">
				            <div class="left active">Вкл</div>
				            <div class="movable"></div>                  
				            <div class="right">Откл</div>
				          </div>
				        </div>
				      </em>
				      <div class="switcher_txt">
				          <p>Включите, чтобы всегда видеть штрафы на главной странице</p>
				      </div>
				     </div> 
				   </div> 
				</div><!-- switcher_cont -->

			</div><!-- /content -->
<?
include('include/mobile_footer.php');
?>