<?
$pagename = 'mobile_detskiy_sad';
$pagetitle = 'Детский сад';
include('include/mobile_head.php');
?>

      <div id="content">
        <div class="title">
          <div class="limiter">
            <span class="icomoon color_4">Y</span><h1>Запись в детский сад</h1>
          </div>
        </div>
        
          
        <form action="#" class="main clear big_inp-form bt">             
          <fieldset class="group_1">
            <div class="limiter">         
              <span class="point_num">1</span>
              <h3>Выберете ребенка</h3> 
            </div>
            <div class="limiter">           
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label for="f_1">Константинопольский Константин Константинович, 5 лет</label></em>  
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label for="f_2">Константинопольский Евгений Константинович, 3 года</label></em>                         
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_3"/><label for="f_3">Константинопольская Татьяна Константиновна, 2 года</label></em>                                                                            
            </div>
          </fieldset>
                     
          <fieldset class="group_2">
            <div class="limiter">                             
              <span class="point_num">2</span>
              <h3>Ваши персональные данные</h3>  
            </div>
            <div class="limiter">          
              <em class="wrapper l_50"><label for="i_01">Фамилия</label><input id="i_01" type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label for="i_02">Имя</label><input id="i_02" type="text" placeholder="Имя" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label for="i_03">Отчество</label><input id="i_03" type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
              
              <em class="wrapper l_33"><label for="i_04">Дата рождения</label><input id="i_04" type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" /><label>Женский</label></em><br/> 

              <em class="wrapper l_33"><label for="i_05">СНИЛС</label><input id="i_05" type="text" placeholder="СНИЛС" class="big" value="152-676-184 70" disabled="disabled"/></em><br/>            
              
              <em class="wrapper l_50"><label for="i_06">Адрес электронной почты</label><input id="i_06" type="text" placeholder="Адрес электронной почты" class="big" value="therasmus30.09.1992@yandex.ru" disabled="disabled"/>
              </em><em class="wrapper l_50"><label for="i_07">Контактный телефон</label><input id="i_07" type="text" placeholder="Контактный телефон" class="big" value="+7 912 200-00-02" disabled="disabled"/></em>
              
              <div class="info-block_wrap">
                <div class="info_block type_2">
                  <p class="info-block_h"><b>Обратите внимание</b></p>
                  <p>Чтобы получить полную информацию о штрафах, рекомендуем заполнить все поля</p>
                  <span class="icomoon">"</span>
                </div>
              </div>

              <em class="wrapper l_100"><a class="big white btn fl" href="#fine"><b>Изменить данные</b></a></em>

            </div>
          </fieldset>
          
          <fieldset class="group_3">
            <div class="limiter">                     
              <span class="point_num">3</span>
              <h3>Ваши паспортные данные</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_33"><label for="i_08">Серия</label><input id="i_08" type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><label for="i_09">Номер</label><input id="i_09" type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><label for="i_10">Код подраз-я</label><input id="i_10" type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/></em>

              <em class="wrapper l_33"><label for="i_11">Дата выдачи</label><input id="i_11" type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/>
              </em><em class="wrapper l_66"><label for="i_12">Кем выдан</label><input id="i_12" type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России" disabled="disabled"/></em>
            </div>                                      
          </fieldset>
          
          <fieldset class="group_4">
            <div class="limiter">                      
              <span class="point_num">4</span>
              <h3>Кем вы приходитесь ребенку?</h3>
            </div>
            <div class="limiter">                                    
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_10"/><label for="f_10">Отец</label></em>              
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_11"/><label for="f_11">Мать</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_12"/><label for="f_12">Опекун</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_13"/><label for="f_13">Попечитель</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_14"/><label for="f_14">Иное</label></em>
              <div class="fields_cover_inner">
                <em class="wrapper l_100"><label for="i_13">Ваш вариант</label><input id="i_13" type="text" placeholder="Ваш вариант" class="big" /></em>                
              </div>
            </div>                                                                
          </fieldset> 
          
          <fieldset class="group_5">
            <div class="limiter">                      
              <span class="point_num">5</span>
              <h3>Персональные данные ребенка</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_50"><input type="text" placeholder="Фамилия" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Отчество" class="big" /></em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big"  />
              </em><em class="wrapper l_25"><input type="radio" name="sex_4" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_4" /><label>Женский</label></em><br/>

              <em class="wrapper l_33"><input type="text" placeholder="СНИЛС" class="big" /><i class="not">необязательно</i></em>
            </div>                                           
          </fieldset>          
                              
          <fieldset class="group_6">
            <div class="limiter">                      
              <span class="point_num">6</span>
              <h3>Данные свидетельства о рождении ребенка</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_3" id="f_17" checked="checked"/><label for="f_17">Российской Федерации</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_33"><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Номер" class="big" />          
                </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Номер акт. записи" class="big" />
                </em><em class="wrapper l_66"><input type="text" placeholder="Кем выдано" class="big" /></em>
                <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
              </div>                                                         
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_3" id="f_18"/><label for="f_18">Иного государства</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">                           
                <em class="wrapper l_66"><input type="text" placeholder="Наименование документа" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Номер" class="big" /></em>
              </div>   
            </div>                    
          </fieldset> 
                    
          <fieldset class="group_7">
            <div class="limiter">                        
              <span class="point_num">7</span>
              <h3>Место проживания ребёнка совпадает с местом регистрации?</h3>
            </div>
            <div class="limiter">               
              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_4" id="f_19"/><label for="f_19">Да</label></em>
            </div>
            <div class="limiter">                                                 
              <em class="wrapper l_100"><input type="radio" name="g_4" id="f_20"/><label for="f_20">Нет</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">                           
                <em class="wrapper l_100"><input type="text" placeholder="Выберите регион" class="big" /></em>
              </div>      
            </div>                            
          </fieldset>
          
          <fieldset class="group_8">
            <div class="limiter">                      
              <span class="point_num">8</span>
              <h3>Параметры для выбора детского сада</h3>
            </div>
            <div class="limiter">  
              <em class="wrapper l_33">Отображать по:
              </em><em class="wrapper l_33"><input type="radio" checked="checked" name="g_4" id="f_19"/><label for="f_19">месту регистрации</label>
              </em><em class="wrapper l_33"><input type="radio" name="g_4" id="f_20"/><label for="f_20">месту проживания</label></em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата зачисления" class="big" />
              </em><em class="wrapper l_66">
                  <select>            
                    <option>Возрастная группа</option>
                  </select>                  
                </em> 

              <em class="wrapper l_66">
                <select>            
                  <option>Потребность по здоровью</option>
                </select>                  
              </em>
            </div>                                               
          </fieldset>                     
        

          <fieldset class="group_9">
            <div class="limiter">                      
              <span class="point_num">9</span>
              <h3>Выберете желаемый и дополнительные детские сады</h3>
            </div>
            <div class="limiter">                        
              <em class="wrapper l_100"><input type="text" placeholder="Поиск по адресу" class="big" /></em> 
              <em class="wrapper l_33">Сортировать по:
              </em><em class="wrapper l_33"><input type="radio" checked="checked" name="g_5" id="f_21"/><label for="f_21">удалённости</label>
              </em><em class="wrapper l_33"><input type="radio" name="g_5" id="f_22"/><label for="f_22">длине очереди</label></em><br/>
            </div>  
            <div class="map_cover">
              <div class="map_block" id="map"></div>
              <div class="address_list">
              <div class="map_nav">
                <h4 class="map_nav_h">Выберите детские сады:<br/><span class="subtitle">Максимум 4: 1 предпочтительный и 3 дополнительных</span></h4>

                <ul class="map_list">
                  <li class="map_list_item">
                    <span class="map_check"><input type="checkbox" id="ds_1"/></span>
                    <div>
                      <p><span class="pseudo">Детский сад №2293</span></p>
                      <p>Москва, Неглинная, 23</p>
                      <p>В очереди 5 человек</p>
                    </div>  
                  </li>
                  <li class="map_list_item">
                    <span class="map_check"><input type="checkbox" id="ds_2"/></span>                    
                    <div>
                      <p><span class="pseudo">Детский сад №2285</span></p>
                      <p>Москва, Походный пр-д, 3, стр. 2</p>
                      <p>В очереди 40 человек</p>
                    </div>
                  </li>
                  <li class="map_list_item">
                    <span class="map_check"><input type="checkbox" id="ds_3"/></span>
                    <div>
                      <p><span class="pseudo">Детский сад №1732</span></p>
                      <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
                      <p>В очереди 12 человек</p>
                    </div>
                  </li>
                  <li class="map_list_item">
                    <span class="map_check"><input type="checkbox" id="ds_4"/></span>                   
                    <div>
                      <p><span class="pseudo">Детский сад №1952</span></p>
                      <p>Москва, Широкий 2-й пр-д, 8, стр. 1</p>
                      <p>В очереди 20 человек</p>
                    </div>
                  </li>
                  <li class="map_list_item">
                    <span class="map_check"><input type="checkbox" id="ds_5"/></span>                   
                    <div>
                      <p><span class="pseudo">Детский сад №1977</span></p>
                      <p>Москва, Нагорный 2-й пр-д, 8, стр. 1</p>
                      <p>В очереди 3 человека</p>
                    </div>
                  </li>                                    
                </ul>
              </div>  
              </div><!-- map_nav -->

              <div class="map_ballon_block">
                <div class="map_ballon_wrap">
                  <a class="map_ballon_close"><span class="icomoon">L</span></a>
                  <div class="map_ballon_h">
                    <p><strong>Детский сад №2285</strong></p>
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
            <div class="limiter">  
              <div class="select_item_cover">  
              <h4>Какой из выбранных детских садов сделать предпочтительным?</h4>
              <div class="select_item_list">
                
              </div>

              <em class="wrapper l_100"><input type="checkbox" id="f_35"/><label for="f_35">Если в выбранных мною детских садах не будет мест, прошу предложить мне доступный для записи садик</label></em>
              </div>
            </div>                                       
          </fieldset> 

          <fieldset class="group_10">
            <div class="limiter">                      
              <span class="point_num">10</span>
              <h3>Есть ли у вас льготы?</h3>
            </div>
            <div class="limiter">  
              <em class="wrapper l_100"><input type="radio" name="g_9" id="f_34" /><label for="f_34">Да</label></em>
            </div>
              
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100"><input type="search" placeholder="Название льготы" class="big" /><input type="button" class="search_btn" value="P"/></em>
                <div class="facility"> 
                  <h5>Первоочередные</h5>
                  <br/>
                  <em class="wrapper l_100"><input type="checkbox" id="f_40"/><label for="f_40">Дети судей, прокуроров, следователей</label></em>
                  <em class="wrapper l_100"><input type="checkbox" id="f_42"/><label for="f_42">Дети инвалиды и дети, один из родителей которых является инвалидом</label></em>
                  <h5>Приоритетные</h5>
                  <br/>
                  <em class="wrapper l_100"><input type="checkbox" id="f_41"/><label for="f_41">Дети из многодетной семьи</label></em>
                  <em class="wrapper l_100"><input type="checkbox" id="f_43"/><label for="f_43">Дети, братья и сестры которых посещают данное образовательное учреждение</label></em>
                </div>
                <em class="wrapper l_100"><input type="checkbox" id="f_45"/><label for="f_45">Иные льготы</label></em>
                <div class="fields_cover_inner">
                  <em class="wrapper l_100"><input type="text" placeholder="Название льготы" class="big" /></em>                
                </div>
              </div>                                                                     
            </div>
            <div class="limiter">             
              <em class="wrapper l_100"><input type="radio" name="g_9" id="f_35" checked="checked"/><label for="f_35">Нет</label></em>
            </div>                   
          </fieldset> 
          
          <fieldset class="group_11">                      
            <div class="limiter">
              <h3>Согласие на обработку персональных данных</h3>          
              
              <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
              
              <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
               либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>           
            </div>                                         
          </fieldset>                                                                                               
          <div class="limiter">
            <span class="fr">
                <input class="big btn" type="submit" value="Отправить">
            </span>
          </div>                     
                             
        </form>                      
        
      </div>

<?
include('include/mobile_footer.php');
?>