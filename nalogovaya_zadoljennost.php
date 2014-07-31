<?
$pagename = 'nalogovaya_zadoljennost';
$pagetitle = 'Налоговая задолженность';
include('include/head.php');
?>

      <div id="content">
        <div class="title">
          <span class="icomoon color_2">C</span><h1>Налоговая задолженность</h1>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">
          
            <span class="point_num">1</span>
            <h3>Персональные данные</h3>          
            <em class="wrapper l_50"><input type="text" placeholder="Налогоплательщик" value="Константинопольский К. К." class="big" disabled="disabled"/>            
            </em><em class="wrapper l_25"><input type="text" placeholder="ИНН" class="big"/>
            </em><em class="wrapper l_25"><a href="#" class="btn"><b>Узнать ИНН</b></a></em>

            <div class="clear">    
              <span class="fr"><input class="big btn" type="submit" value="Найти задолженность" disabled="disabled"/></span>         
            </div>
            
          </fieldset> 

          
          <fieldset class="group_1">
          
            <span class="point_num">1</span>
            <h3>Узнать свой ИНН</h3>          
            <em class="wrapper l_50"><input type="text" placeholder="Налогоплательщик" value="Константинопольский К. К." class="big" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Серия и номер паспорта" class="big"/>
            </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>

            <div class="clear">
              <a href="#" class="btn white larr fl"><b>Назад</b></a>                 
              <span class="fr"><input class="big btn" type="submit" value="Узнать ИНН" /></span>
            </div>
            
          </fieldset> 
          
          
          <fieldset class="group_2">
            <ul class="info_column">
              <li class="info_block bg_c0">
                <div class="switcher active">
                  <div class="cover">
                    <div class="left active">Вкл</div>
                    <div class="movable"></div>                  
                    <div class="right">Откл</div>
                  </div>
                </div>              
              
                <h4 class="add_pad">Информер</h4>                                               
                <p>Подключите информер, и информация о штрафах будет отображаться на главной странице портала.</p>
              </li>            
            </ul>                      
            <span class="point_num">2</span>
            <div class="cover_info_title">
              <h3>Информация по задолженностям</h3>          
              <p>Общая сумма ваших задолженностей составляет: <b>150 000</b> <strong class="rouble">p</strong></p>
            </div>
            <div class="ticket">
              <div class="sub_title clear"><span class="fl">Транспортный налог</span><span class="fr">5000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
              <dl>
                <dt>Ведомство</dt>
                <dd>ИФНС России №36 по г.Москве</dd>
              </dl>
            </div>
            <div class="ticket">
              <div class="sub_title clear"><span class="fl">Транспортный налог</span><span class="fr">5000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
              <dl>
                <dt>Ведомство</dt>
                <dd>ИФНС России №36 по г.Москве</dd>
              </dl>
            </div>            
            <div class="ticket">
              <div class="sub_title clear"><span class="fl">Пенни на транспортный налог на 12.01.2014</span><span class="fr">5000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
              <dl>
                <dt>Ведомство</dt>
                <dd>ИФНС России №36 по г.Москве</dd>
              </dl>
            </div>                                                   
          </fieldset>           
                             
        </form>
        
        <div class="advice type_social">
          <div class="social">
              <b>Поделись удобным сервисом с друзьями:</b>
              <div class="social-ico_cont">
                  <a href="#"><span class="icomoon">#</span></a>
                  <a href="#"><span class="icomoon">$</span></a>
                  <a href="#"><span class="icomoon">%</span></a>
                  <a href="#"><span class="icomoon">&amp;</span></a>
              </div>
          </div>
        </div> 
                          

        
        <div class="clear">
          <a href="#" class="btn white fl"><b>На главную</b></a>
          <span class="btn fr"><b>Получить уведомление</b></span>
        </div>        
        
      </div>
<?
include('include/footer.php');
?>    