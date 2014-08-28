<?
$pagename = 'egrn';
$pagetitle = 'Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ';
include('include/head.php');
?>

          <ul class="breadcrumbs">
            <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>       
            <li class="last"><span>Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ</span></li>
          </ul>          
        </div>
      </div>

      <div id="content">
        <div class="title">
          <span class="icomoon color_5">O</span><h1>Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ</h1>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">         
            <span class="point_num">1</span>
            <h3>Кто подаёт заявление</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label for="f_1">Лично</label></em>                          
            <em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label for="f_2">Я - представитель заявителя</label></em>                                                                
          </fieldset>
                     
          <fieldset class="group_2">                   
            <span class="point_num">2</span>
            <h3>Ваши персональные данные <span class="fr">
            <a href="#">Изменить данные</a> <i class="q">?
                <div class="bg_c3 q_hover">
                  <p>Изменение личных данных будет происходить в личном кабинете.</p>
                </div></i>
              </span></h3>  
                      
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
            </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label>Мужской</label>
            </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" /><label>Женский</label></em><br/>            
            
            <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/>

            <em class="wrapper l_33"><input type="text" placeholder="ИНН" class="big" /><i class="not">Необязательно</i>
            </em>                                 
          </fieldset>

          <fieldset class="group_3">                     
            <span class="point_num">3</span>
            <h3>Меняли ли вы фамилию, имя или отчество после 01.01.1996?</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_22" id="f_3" checked="checked" /><label for="f_3">Да</label></em>
            <div class="fields_cover">
              <em class="wrapper l_50"><input type="text" placeholder="Прежняя фамилия" class="big" /><i class="not">Необязательно</i>
              </em><em class="wrapper l_25"><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
              <em class="wrapper l_50"><input type="text" placeholder="Прежнее имя" class="big" /><i class="not">Необязательно</i>
              </em><em class="wrapper l_25"><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
              <em class="wrapper l_50"><input type="text" placeholder="Прежнее отчество" class="big" /><i class="not">Необязательно</i>
              </em><em class="wrapper l_25"><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
              <a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a>
            </div>                                      
            <em class="wrapper l_100"><input type="radio" name="g_22" id="f_4"/><label for="f_4">Нет</label></em>                                    
          </fieldset>          
          
          <fieldset class="group_4">                     
            <span class="point_num">4</span>
            <h3>Документ, удостоверяющий вашу личность</h3>
            <em class="wrapper l_50">
              <select class="select_choice">
                <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                <option>Паспорт РФ</option>
              </select>                  
            </em><br/>

            <em class="wrapper l_16"><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
            </em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>            
            </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России" disabled="disabled"/></em>

            <em class="wrapper l_66">
              <div class="search_inp-block">
                <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                <div class="selction_ajax-placeholder"></div>
              </div>
            </em><em class="wrapper l_33">
              <select class="select_choice">
                <option value="0" selected="selected" class="selected_one">Код страны</option>                
                <option>007</option>
              </select>
            </em>

            <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
          </fieldset>
          
          <fieldset class="group_4">                      
            <span class="point_num">4</span>
            <h3>Персональные данные получателя услуги</h3>          
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия"  class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
            
            <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
            </em><em class="wrapper l_16"><input type="radio" name="sex_1" checked="checked" /><label>Мужской</label>
            </em><em class="wrapper l_16"><input type="radio" name="sex_1" /><label>Женский</label></em><br/>
            
            <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em><br/>                                                             
          </fieldset> 
          
          <fieldset class="group_5">                      
            <span class="point_num">5</span>
            <h3>Документ, удостоверяющий личность получателя услуги</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_2" id="f_15" checked="checked" /><label for="f_15">Паспорт</label></em>
            <div class="fields_cover">
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Код подразд-я" class="big" />            
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em> 
              
              <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>                          
            </div>               
            <em class="wrapper l_100"><input type="radio" name="g_2" id="f_16"/><label for="f_16">Свидетельство о рождении</label></em>                                  
            <div class="fields_cover">
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Номер акт. записи" class="big" />            
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдано" class="big" /></em> 
              
              <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>                            
            </div>                                         
          </fieldset>          
                              
          <fieldset class="group_6">                      
            <span class="point_num">6</span>
            <h3>Имеет ли получатель услуги постоянную регистрацию?</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_3" id="f_17" checked="checked"/><label for="f_17">Да</label></em>
            <div class="fields_cover">
              <h4>Адрес текущего места постоянной регистрации <i class="q">?
              <div class="bg_c3 q_hover">
                <h4>Тест</h4>
                <p>тест</p>                               
              </div></i></h4>                            
              <em class="wrapper l_100"><input type="text" placeholder="Выберите регион" class="big" /></em>
              
              <em class="wrapper l_25"><input type="text" placeholder="Дата регистрации" class="big" /></em> 
            </div>           
            <em class="wrapper l_100"><input type="radio" name="g_3" id="f_18"/><label for="f_18">Нет</label></em>                   
          </fieldset> 
                    
          <fieldset class="group_7">                      
            <span class="point_num">7</span>
            <h3>Новый адрес регистрации</h3> 
            <em class="wrapper l_100"><input type="text" placeholder="Выберите регион" class="big" /></em>                                           
          </fieldset>
          
          <fieldset class="group_8">                      
            <span class="point_num">8</span>
            <h3>Снялся ли получатель услуги с регистрационного учёта по прежнему месту жительства?</h3>             
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_4" id="f_19"/><label for="f_19">Да</label></em>                                   
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_20"/><label for="f_20">Нет</label></em>                             
          </fieldset>                     
          
          <fieldset class="group_9">                    
            <span class="point_num">9</span>
            <h3>Регистрация производится на вашу жилплощадь?</h3>             
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_5" id="f_21"/><label for="f_21">Да</label></em>                                   
            <em class="wrapper l_100"><input type="radio" name="g_5" id="f_22"/><label for="f_22">Нет</label></em>
            <div class="fields_cover">
              <h4>Персональные данные владельца жилого помещения</h4>          
              <em class="wrapper l_33"><input type="text" placeholder="Фамилия"  class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
              
              <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
              </em><em class="wrapper l_16"><input type="radio" name="sex_3" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_16"><input type="radio" name="sex_3" /><label>Женский</label></em><br/>
              
              <h4>Кем получатель услуги приходится владельцу жилого помещения?</h4>          
              <em class="wrapper l_50">
                <select>            
                  <option>Выберете степень родства</option>
                </select>                  
              </em>
              <h4>Контактные данные владельца жилого помещения</h4>            
                <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em>
              <h4>Паспортные данные владельца жилого помещения</h4> 
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Код подразд-я" class="big" />            
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>                                                        
            </div>                                                      
          </fieldset> 
                                                 
          <fieldset class="group_10">                      
            <span class="point_num">10</span>
            <h3>Тип жилищного фонда</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_6" id="f_23"/><label for="f_23">Жильё муниципального фонда</label></em>              
            <em class="wrapper l_100"><input type="radio" name="g_6" id="f_24"/><label for="f_24">Жильё государственного фонда</label></em>
            <div class="fields_cover">              
              <em class="wrapper l_100"><input type="text" placeholder="Организация" class="big" /></em>                            
            </div>
            <em class="wrapper l_100"><input type="radio" name="g_6" id="f_25" checked="checked"/><label for="f_25">Жильё частной формы собственности</label></em>                                                       
          </fieldset>
          
          <fieldset class="group_11">                      
            <span class="point_num">11</span>
            <h3>Распоряжение помещением на основании</h3>                               
            <em class="wrapper l_100"><input type="radio" name="g_7" id="f_26" checked="checked"/><label for="f_26">Свидетельства собственности</label></em>
            <div class="fields_cover">
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />          
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдано" class="big" /></em>                                                        
            </div>             
            <em class="wrapper l_100"><input type="radio" name="g_7" id="f_27"/><label for="f_27">Договора социального найма</label></em>
            <div class="fields_cover">
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />          
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдано" class="big" /></em>                                                        
            </div>             
            <em class="wrapper l_100"><input type="radio" name="g_7" id="f_28"/><label for="f_28">По решению суда</label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_50"><input type="text" placeholder="Номер документа" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em> 
            </div>
                        
            <em class="wrapper l_100"><input type="radio" name="g_7" id="f_29"/><label for="f_29">Иное</label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_100"><input type="text" placeholder="Пояснение" class="big" /></em> 
            </div>                             
          </fieldset> 

          <fieldset class="group_12">                      
            <span class="point_num">12</span>
            <h3>Есть или было ли у вас гражданство другого государства?</h3>                      
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_8" id="f_30"/><label for="f_30">Нет, я никогда не имел гражданство другого государства</label></em>            
            <em class="wrapper l_100"><input type="radio" name="g_8" id="f_31"/><label for="f_31">Да, у меня имеется по настоящее время гражданство другого государства</label></em>
            <div class="fields_cover">
              <h4>Укажите страну, и дату получения другого гражданства</h4>              
              <em class="wrapper l_66">
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Гражданство</option>                
                  <option>Белоруссия</option>
                  <option>Украина</option>
                  <option>Белоруссия</option>
                  <option>Украина</option>
                  <option>Белоруссия</option>
                  <option>Украина</option>
                  <option>Белоруссия</option>
                  <option>Украина</option>
                  <option>Белоруссия</option>
                  <option>Украина</option>
                </select>                  
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" /></em><br/>              
              <em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>               
              <h4>Укажите дату вступления в гражданство РФ</h4>              
              <em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" /></em>                         
            </div>            
                                    
            <em class="wrapper l_100"><input type="radio" name="g_8" id="f_32" /><label for="f_32">Да, ранее у меня имелось гражданство другого государства</label></em>
            <div class="fields_cover">
              <h4>Укажите страну, и дату получения другого гражданства</h4>              
              <em class="wrapper l_75">
                <select>
                  <option>Гражданство</option>                
                  <option>Белоруссия</option>
                  <option>Украина</option>
                </select>                  
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата" class="big" /></em><br/>              
              <em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>              
              <h4>Укажите дату вступления в гражданство РФ</h4>              
              <em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" /></em>                           
            </div>
                        
            <em class="wrapper l_100"><input type="radio" name="g_8" id="f_33" /><label for="f_33">Я являюсь лицом без гражданства</label></em>                                          
          </fieldset> 

          <fieldset class="group_13">                      
            <span class="point_num">13</span>
            <h3>Дополнительные данные получателя услуги</h3>  
            <em class="wrapper l_100">
              <select>
                <option>Основная причина переселения</option>                
              </select>                  
            </em>
            <h4>Информация о работе</h4>
            <em class="wrapper l_100">
              <select>
                <option>Сфера деятельности по последнему месту жительства</option>                
              </select>                  
            </em>
            <em class="wrapper l_100">
              <select>
                <option>Вид занятости</option>                
              </select>                  
            </em>
            <h4>Социальное обеспечение</h4>
            <em class="wrapper l_100">
              <select>
                <option>Вид соцобеспечения по последнему месту жительства</option>                
              </select>                  
            </em>
            <h4>Личная информация</h4>
            <em class="wrapper l_50">
              <select>
                <option>Образование</option>                
              </select>                  
            </em><em class="wrapper l_50">
              <select>
                <option>Состояние в браке</option>                
              </select>                  
            </em><br/>
            <em class="wrapper l_100">
              <select>
                <option>Если до переселения проживал с семьёй, то прибыл</option>                
              </select>
              <i class="not">необязательно</i>                  
            </em>                         
          </fieldset> 

          <fieldset class="group_14">                      
            <span class="point_num">14</span>
            <h3>Часть семьи получателя услуги уже проживает по этому адресу?</h3>
            <em class="wrapper l_100"><input type="radio" name="g_9" id="f_34" checked="checked"/><label for="f_34">Да</label></em> 
            <em class="wrapper l_100"><input type="radio" name="g_9" id="f_35" /><label for="f_35">Нет</label></em>               
          </fieldset> 

          <fieldset class="group_15">                      
            <span class="point_num">15</span>
            <h3>Куда вы будете подавать оригиналы документов?</h3>                      
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label for="f_36">по месту жительства (как в паспорте), срок оказания услуги составит 10 дней</label></em>
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>            
            </div>            
            
            <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label for="f_37">по месту пребывания, срок оказания услуги составит до 2-x месяцев</label></em>                        
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>            
            </div>
            
            <em class="wrapper l_100"><input type="radio" name="g_10" id="f_38" /><label for="f_38">по месту фактического проживания, срок оказания услуги составит 2 месяца</label></em> 
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>            
            </div>
            
            <h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
            
            <div class="map_cover">
              <div class="map_block" id="map"></div>
              <div class="map_nav">
                <h4 class="map_nav_h">Доступны подразделения:</h4>
                <ul class="map_list">
                  <li class="map_list_item">
                    <div class="left">
                      <p><a href="#"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
                      <p>Москва, Неглинная, 23</p>
                    </div>
                    <div class="right">
                      <input type="checkbox"/>   
                    </div>
                  </li>
                  <li class="map_list_item">
                    <div class="left">
                      <p><a href="#"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                      <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
                    </div>
                    <div class="right">
                      <input type="checkbox"/>   
                    </div>
                  </li>
                  <li class="map_list_item">
                    <div class="left">
                      <p><a href="#"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
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
            </div><!-- map_cover -->
                                                 
          </fieldset> 


          
          <fieldset class="group_16">                      

            <h3>Согласие на обработку персональных данных</h3>          
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
            
            <em class="wrapper skew l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
             либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>           
                                                   
          </fieldset>                                                                                               
          
          <span class="fr">
              <input class="big btn" type="submit" value="Отправить">
          </span>                     
                             
        </form>                      
        
      </div>

<?
include('include/footer.php');
?> 