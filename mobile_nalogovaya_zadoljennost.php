<?
$pagename = 'mobile_nalogovaya_zadoljennost';
$pagetitle = 'Налоговая задолженность';
include('include/mobile_head.php');
?>

            <div id="content">
                <div class="title">
                  <div class="limiter">
                    <span class="icomoon color_2">C</span><h1>Налоговая задолженность</h1>
                  </div>
                </div>

                <form action="#" class="main clear big_inp-form bt">
                    <fieldset class="group_1">
                    <div class="limiter">
                      <span class="point_num">1</span>
                      <h3>Персональные данные</h3>
                    </div>
                    <div class="limiter">          
                      <em class="wrapper l_100"><label for="settings02">Налогоплательщик</label><input type="text" placeholder="Налогоплательщик" value="Константинопольский К. К." class="big" disabled="disabled"/></em>
                      <em class="wrapper l_50"><label for="settings02">ИНН</label><input type="text" placeholder="ИНН" class="big"/>
                      </em><em class="wrapper l_50 mobile_morpf"><a href="#" class="btn mobile_morpf"><b>Узнать ИНН</b></a></em>
          
                      <div class="clear">
                        <em class="wrapper l_100">    
                          <span class="fr"><input class="big btn" type="submit" value="Найти задолженность" disabled="disabled"/></span>
                        </em>           
                      </div>
                    </div>
                    </fieldset>

                    <fieldset class="group_1">
                      <div class="limiter">
                        <span class="point_num">1</span>
                        <h3>Узнать свой ИНН</h3>
                      </div>
                      
                      <div class="limiter">          
                        <em class="wrapper l_100"><label for="settings02">Налогоплательщик</label><input type="text" placeholder="Налогоплательщик" value="Константинопольский К. К." class="big" disabled="disabled"/></em><br/>
                        
                        <em class="wrapper l_33"><label for="settings02">Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
                        </em><em class="wrapper l_33"><label for="settings02">Серия и номер паспорта</label><input type="text" placeholder="Серия и номер паспорта" class="big"/>
                        </em><em class="wrapper l_33"><label for="settings02">Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
            
                        <div class="clear mobile_morpf btn-cont_inner">
                          <em class="wrapper l_100">                        
                            <a href="#" class="btn white larr fl"><b>Вернуться назад</b></a>                 
                            <span class="fr btn_field"><input class="big btn" type="submit" value="Узнать ИНН" /></span>
                          </em>                              
                        </div>
                      </div>
                    </fieldset> 

                    <fieldset class="group_2">
                      <div class="limiter">                  
                        <span class="point_num">2</span>
                        <h3>Ваши задолженности</h3>

                        <div class="cover_info_title">          
                          <p>Общая сумма задолженностей составляет: <b>150 000</b> <strong class="rouble">p</strong></p>  
                        </div>
                      </div>
                        
                        <div class="ticket">
                          <div class="limiter">
                            <div class="sub_title clear"><span class="fl">Транспортный налог</span><span class="fr money">5000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
                            <dl>
                              <dt>Ведомство</dt>
                              <dd>ИФНС России №36 по г.Москве</dd>
                            </dl>
                          </div>
                        </div>
                        <div class="ticket">
                          <div class="limiter">
                            <div class="sub_title clear"><span class="fl">Транспортный налог</span><span class="fr money">5000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
                            <dl>
                              <dt>Ведомство</dt>
                              <dd>ИФНС России №36 по г.Москве</dd>
                            </dl>
                           </div> 
                        </div>            
                        <div class="ticket">
                          <div class="limiter">
                            <div class="sub_title clear"><span class="fl">Пенни на транспортный налог на 12.01.2014</span><span class="fr money">5000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
                            <dl>
                              <dt>Ведомство</dt>
                              <dd>ИФНС России №36 по г.Москве</dd>
                            </dl>
                          </div>  
                        </div>                                                   
                                    
                                   
                    </fieldset>
                </form>

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

                <div class="social_wrap-b">
                  <div class="limiter">
                    <div class="social">
                        <b>Поделись удобным сервисом с друзьями</b>
                        <div class="social-ico_cont">
                            <a href="#"><span class="icomoon">#</span></a>
                            <a href="#"><span class="icomoon">$</span></a>
                            <a href="#"><span class="icomoon">%</span></a>
                            <a href="#"><span class="icomoon">&</span></a>
                        </div>
                    </div>
                  </div>  
                </div>

            </div><!-- content -->
<?
include('include/mobile_footer.php');
?>