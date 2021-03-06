<?
$pagename = 'gibdd_shtrafy';
$pagetitle = 'Штрафы ГИБДД';
include('include/head.php');
?>

          <ul class="breadcrumbs">
            <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>       
            <li class="last"><span>Штрафы ГИБДД</span></li>                                       
          </ul>          
        </div>
      </div>

      <div id="content">
        <div class="title">
          <span class="icomoon color_1">B</span><h1>Штрафы ГИБДД</h1>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">
            <ul class="info_column">
              <li class="info_block type_1">
                <h4>Обратите внимание</h4>
                <p>Чтобы получить полную информацию обо всех ваших штрафах, рекомендуем вам ввести данные во все поля.</p>
                <span class="icomoon">"</span>
              </li>
            </ul>  
          
            <span class="point_num">1</span>
            <h3>Водитель / Владелец</h3>          
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Иванов" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" value="Иван" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" value="Иванович" class="big" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_50"><input type="text" placeholder="Номер водительского удостоверения" class="big"/>
            </em><i class="q">?<div class="bg_c3 q_hover"><img src="img/doc_group_1.png" alt=""/></div></i><br/>
            
            <em class="wrapper l_50">
              <select class="select_choice">
                <option value="0" class="selected_one" name="Номер транспортного средства">Номер транспортного средства</option>
                <option value="1" selected="selected">Номер не задан</option>            
                <option value="2">А777АА 777</option>
                <option value="3">А999АА 999</option>
                <option id="new_auto">Новый автомобиль...</option>
              </select>                             
            </em><br/>
            
            <div class="wrapper l_50 new_auto"><input type="text" placeholder="Введите номер" class="big" /></div>

            <div class="clear"><span class="fr"><a href="#fine" class="big btn" /><b>Найти штрафы</b></a></div>
            
          </fieldset> 

          
          <fieldset class="group_2 last">
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
              <li class="info_block type_2">
                <h4>Обратите внимание</h4>
                <p>Оплата штрафа производится в течение 2&nbsp;часов.</p>
                <span class="icomoon">"</span>
              </li>
            </ul>                      
            <span id="fine" class="point_num">2</span>
            <div class="cover_info_title">
              <h3>Ваши штрафы</h3>          
              <p>Общая сумма неоплаченных штрафов: <b>150 000</b> <strong class="rouble">p</strong></p>  
              <ul class="selector">
                <li class="first" id="not_pay">К оплате (107)</li>
                <li id="pay">Оплаченные (170)</li>
                <li id="all" class="last active">Все (277)</li>
              </ul>
            </div>            
            <div class="ticket not_pay">
              <div class="sub_title clear"><span class="fl">Превышение скорости более чем на 20 км/ч</span><span class="fr money">500&nbsp;<nobr class="rouble">p</nobr></span> <a href="oplata_uniteller.php" class="btn_cover_r small btn"><b class="">Оплатить</b></a></div>
              <dl>
                <dt>Дата и время нарушения</dt>
                <dd>26.05.2013 в 11:47</dd>
              </dl>
              <dl>
                <dt>Место нарушения</dt>
                <dd>г.Москва, Садовое кольцо, внутрен., Самотечная эстакада, Садово-Сухаревская ул. д. 4
                  <p><span class="pseudo popup_link"><em class="popup_map">На карте</em></span></p>
                </dd>
              </dl>

              <div class="more_info">
                <span class="pseudo"><em class="slide_down">Узнать больше о штрафе</em><em class="slide_up">Скрыть</em></span>
                <div class="hide_show">
                  <dl>
                    <dt>Статья правонарушения</dt>
                    <dd>Управление транспортным средством водителем, не пристегнутым ремнем безопасности... <span class="pseudo popup_link"><em class="popup_rules">Вся статья</em></span></dd>
                  </dl>
                  <dl>
                    <dt>Марка, модель</dt>
                    <dd>Ниссан</dd>
                  </dl>
                  <dl>
                    <dt>Подразделение, выявившее нарушение</dt>
                    <dd>1145519</dd>
                  </dl>
                  <dl>
                    <dt>Постановление</dt>
                    <dd>77ФА1525884 от 08.12.2012</dd>
                  </dl> 
                  <dl>
                    <dt>Оплатить до</dt>
                    <dd>25.06.2014</dd>
                  </dl>                                                                         
                </div>
              </div>                  
               
            </div>
            
            <div class="ticket not_pay">
              <div class="sub_title clear"><span class="fl">Превышение скорости более чем на 40 км/ч</span><span class="fr money">3 000&nbsp;<nobr class="rouble">p</nobr></span> <a href="oplata_uniteller.php" class="btn_cover_r small btn"><b class="">Оплатить</b></a></div>
              <dl>
                <dt>Дата и время нарушения</dt>
                <dd>26.05.2013 в 11:47</dd>
              </dl>
              <dl>
                <dt>Место нарушения</dt>
                <dd>г.Москва, Садовое кольцо, внутрен., Самотечная эстакада, Садово-Сухаревская ул. д. 4
                  <p><span class="pseudo popup_link"><em class="popup_map">На карте</em></span></p>
                </dd>
              </dl>

              <div class="more_info">
                <span class="pseudo"><em class="slide_down">Узнать больше о штрафе</em><em class="slide_up">Скрыть</em></span>
                <div class="hide_show">
                  <dl>
                    <dt>Статья правонарушения</dt>
                    <dd>Управление транспортным средством водителем, не пристегнутым ремнем безопасности... <span class="pseudo popup_link"><em class="popup_rules">Вся статья</em></span></dd>
                  </dl>
                  <dl>
                    <dt>Марка, модель</dt>
                    <dd>Ниссан</dd>
                  </dl>
                  <dl>
                    <dt>Подразделение, выявившее нарушение</dt>
                    <dd>1145519</dd>
                  </dl>
                  <dl>
                    <dt>Постановление</dt>
                    <dd>77ФА1525884 от 08.12.2012</dd>
                  </dl> 
                  <dl>
                    <dt>Оплатить до</dt>
                    <dd>25.06.2014</dd>
                  </dl>                                                                         
                </div>
              </div>                  
               
            </div>
            
            <div class="ticket pay">
              <div class="sub_title clear"><span class="fl">Превышение скорости более чем на 40 км/ч</span><span class="status pd">Оплачено</span></div>
              <dl>
                <dt>Дата и время нарушения</dt>
                <dd>26.05.2013 в 11:47</dd>
              </dl>
              <dl>
                <dt>Место нарушения</dt>
                <dd>г.Москва, Садовое кольцо, внутрен., Самотечная эстакада, Садово-Сухаревская ул. д. 4
                  <p><span class="pseudo popup_link"><em class="popup_map">На карте</em></span></p>
                </dd>
              </dl>

              <div class="more_info">
                <span class="pseudo"><em class="slide_down">Узнать больше о штрафе</em><em class="slide_up">Скрыть</em></span>
                <div class="hide_show">
                  <dl>
                    <dt>Статья правонарушения</dt>
                    <dd>Управление транспортным средством водителем, не пристегнутым ремнем безопасности... <span class="pseudo popup_link"><em class="popup_rules">Вся статья</em></span></dd>
                  </dl>
                  <dl>
                    <dt>Марка, модель</dt>
                    <dd>Ниссан</dd>
                  </dl>
                  <dl>
                    <dt>Подразделение, выявившее нарушение</dt>
                    <dd>1145519</dd>
                  </dl>
                  <dl>
                    <dt>Постановление</dt>
                    <dd>77ФА1525884 от 08.12.2012</dd>
                  </dl> 
                  <dl>
                    <dt>Оплатить до</dt>
                    <dd>25.06.2014</dd>
                  </dl>                                                                         
                </div>
              </div>                  
               
            </div>
            
            <div class="ticket">
              <div class="sub_title clear"><span class="fl">Превышение скорости более чем на 40 км/ч</span><span class="status processing">В обработке</span></div>
              <dl>
                <dt>Дата и время нарушения</dt>
                <dd>26.05.2013 в 11:47</dd>
              </dl>
              <dl>
                <dt>Место нарушения</dt>
                <dd>г.Москва, Садовое кольцо, внутрен., Самотечная эстакада, Садово-Сухаревская ул. д. 4
                  <p><span class="pseudo popup_link"><em class="popup_map">На карте</em></span></p>
                </dd>
              </dl>

              <div class="more_info">
                <span class="pseudo"><em class="slide_down">Узнать больше о штрафе</em><em class="slide_up">Скрыть</em></span>
                <div class="hide_show">
                  <dl>
                    <dt>Статья правонарушения</dt>
                    <dd>Управление транспортным средством водителем, не пристегнутым ремнем безопасности... <span class="pseudo popup_link"><em class="popup_rules">Вся статья</em></span></dd>
                  </dl>
                  <dl>
                    <dt>Марка, модель</dt>
                    <dd>Ниссан</dd>
                  </dl>
                  <dl>
                    <dt>Подразделение, выявившее нарушение</dt>
                    <dd>1145519</dd>
                  </dl>
                  <dl>
                    <dt>Постановление</dt>
                    <dd>77ФА1525884 от 08.12.2012</dd>
                  </dl> 
                  <dl>
                    <dt>Оплатить до</dt>
                    <dd>25.06.2014</dd>
                  </dl>                                                                         
                </div>
              </div>                  
               
            </div>                                      
          </fieldset>           
                             
        </form>
        
        
        <div class="clear last_btn-block">
          <a href="#" class="btn white fl"><b>На главную</b></a>
          <span class="btn fr"><b>Получить уведомление</b></span>
        </div>        
        
      </div>

<?
include('include/footer.php');
?>    