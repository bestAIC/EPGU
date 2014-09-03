<?
$pagename = 'mobile_egrn';
$pagetitle = 'Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ';
include('include/mobile_head.php');
?>

      <div id="content">
        <div class="title">
          <div class="limiter">
            <span class="icomoon color_5">\</span><h1>Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ</h1>
          </div>  
        </div>
        
          
        <form class="main clear big_inp-form">
              
          <fieldset class="group_1">
            <div class="limiter">         
              <span class="point_num">1</span>
              <h3>Кто подаёт заявление</h3>
            </div>
            <div class="limiter">          
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label for="f_1">Лично</label></em>                          
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label for="f_2">Я - представитель заявителя</label></em>
            </div>                                                                
          </fieldset>
          <div class="v_1">           
          <fieldset class="group_2">
            <div class="limiter">                   
              <span class="point_num">2</span>
              <h3>Ваши персональные данные</h3>  
            </div>
            <div class="limiter">
              <em class="wrapper l_50"><label>Фамилия</label><input type="text" placeholder="Фамилия" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Имя</label><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Отчество</label><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
              
              <em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" /><label>Женский</label></em><br/>            
              
              <em class="wrapper l_50"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/>

              <em class="wrapper l_50"><label>ИНН</label><input type="text" placeholder="ИНН" class="big" /><i class="not">Необязательно</i>
              </em>

              <div class="info-block_wrap">
                <div class="info_block type_2">
                  <p class="info-block_h"><b>Обратите внимание</b></p>
                  <p>Чтобы получить полную информацию о штрафах, рекомендуем заполнить все поля</p>
                  <span class="icomoon">"</span>
                </div>
              </div>
              <div class="clear mobile_morpf btn-cont_inner">
                <em class="wrapper l_100">
                  <a href="#" class="btn white rarr fl"><b>Изменить данные</b></a>
                </em>
              </div>

            </div>                                
          </fieldset>

          <fieldset class="group_3">
            <div class="limiter">                     
              <span class="point_num">3</span>
              <h3>Меняли ли вы фамилию, имя или отчество после 01.01.1996?</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_22" id="f_3" /><label for="f_3">Да</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">  
                <em class="wrapper l_50"><label>Прежняя фамилия</label><input type="text" placeholder="Прежняя фамилия" class="big" /><i class="not">Необязательно</i>
                </em><em class="wrapper l_33"><label>Год изменения</label><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
                <em class="wrapper l_50"><label>Прежнее имя</label><input type="text" placeholder="Прежнее имя" class="big" /><i class="not">Необязательно</i>
                </em><em class="wrapper l_33"><label>Год изменения</label><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
                <em class="wrapper l_50"><label>Прежнее отчество</label><input type="text" placeholder="Прежнее отчество" class="big" /><i class="not">Необязательно</i>
                </em><em class="wrapper l_33"><label>Год изменения</label><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
                <a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a>
              </div>
            </div>
            <div class="limiter">                                      
              <em class="wrapper l_100"><input type="radio" name="g_22" id="f_4" checked="checked" /><label for="f_4">Нет</label></em>
            </div>                                    
          </fieldset>          
          
          <fieldset class="group_4">
            <div class="limiter">                     
              <span class="point_num">4</span>
              <h3>Документ, удостоверяющий вашу личность</h3>
            </div>
            <div class="limiter">
              <em class="wrapper l_50">
                <label>Тип документа</label>
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                  <option>Паспорт РФ</option>
                </select>                  
              </em><br/>

              <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><label>Код подразд-я</label><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>            
              </em><br/>
              <em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/>
              </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России" disabled="disabled"/></em>

              <em class="wrapper l_66">
                <label>Страна рождения</label>
                <div class="search_inp-block">
                  <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em><em class="wrapper l_33">
                <label>Код страны</label>
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Код страны</option>                
                  <option>007</option>
                </select>
              </em>

              <em class="wrapper l_100"><label>Место рождения</label><input type="text" placeholder="Место рождения" class="big" /></em>
            </div>
          </fieldset>
          
          <fieldset class="group_5">
            <div class="limiter">                      
              <span class="point_num">5</span>
              <h3>Укажите адрес вашего места жительства</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label for="f_36">По месту постоянной регистрации, как в паспорте</label></em>           
            </div>
            <div class="limiter">  
              <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label for="f_37">По месту временного нахождения</label></em>
            </div>                          
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100"><label>Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
                
                <em class="wrapper l_50"><label>Район</label><input type="text" placeholder="Район" class="big" />
                </em><em class="wrapper l_50"><label>Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
                
                <em class="wrapper l_50"><label>Улица</label><input type="text" placeholder="Улица" class="big" /></em><br/>
                <em class="wrapper l_33"><label>Дом</label><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_33"><label>Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_33"><label>Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>

                <em class="wrapper l_33"><label>Период пребывания</label><input type="text" placeholder="Период пребывания" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_33"><label>Код налогового органа</label><input type="text" placeholder="Код налогового органа" value="1234" class="big" disabled="disabled"/></em>
              </div>             
            </div>                                         
          </fieldset>          
                              
          <fieldset class="group_6">
            <div class="limiter">                      
              <span class="point_num">6</span>
              <h3>Являетесь ли вы гражданином РФ?</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_3" id="f_17" checked="checked"/><label for="f_17">Да</label></em>
            </div>
            <div class="limiter">          
              <em class="wrapper l_100"><input type="radio" name="g_3" id="f_18"/><label for="f_18">Нет</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">
                <h4>Сведения о документе, подтверждающем регистрацию по месту жительства в РФ</h4>                            
                <em class="wrapper l_50">
                  <label>Тип документа</label>
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                    <option>Паспорт РФ</option>
                  </select>                  
                </em><br/>

                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_33"><label>Регистрация до</label><input type="text" placeholder="Регистрация до" class="big" /></em><br/>

                <em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" /></em>
              </div>
            </div>                      
          </fieldset> 
                    
          <fieldset class="group_7">
            <div class="limiter">                      
              <span class="point_num">7</span>
              <h3>Меняли ли вы место жительства?</h3>
            </div>
            <div class="limiter"> 
              <em class="wrapper l_100"><input type="radio" name="g_5" id="f_27" /><label for="f_27">Да</label></em>
            </div> 
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100">
                  <label>Выберете регион</label>
                  <div class="search_inp-block">
                    <input type="search" placeholder="Выберете регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em>
              </div>
            </div>
            <div class="limiter">       
             <em class="wrapper l_100"><input type="radio" name="g_5" id="f_28" checked="checked"/><label for="f_28">Нет</label></em>
            </div>                                            
          </fieldset>
          </div> 









          <div class="v_2"> 
          <fieldset class="group_2">
            <div class="limiter">                   
              <span class="point_num">2</span>
              <h3>Персональные данные получателя услуги</h3>  
            </div>
            <div class="limiter">            
              <em class="wrapper l_50"><label>Фамилия</label><input type="text" placeholder="Фамилия" class="big" />
              </em><em class="wrapper l_50"><label>Имя</label><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_50"><label>Отчество</label><input type="text" placeholder="Отчество" class="big" /></em><br/>
              
              <em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
              </em><em class="wrapper l_25"><input type="radio" name="sex_2_1" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2_1" /><label>Женский</label></em><br/>            
              
              <em class="wrapper l_50"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big"/>
              </em><em class="wrapper l_50"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big"/></em><br/>

              <em class="wrapper l_33"><label>ИНН</label><input type="text" placeholder="ИНН" class="big" /><i class="not">Необязательно</i>
              </em>
            </div>                                 
          </fieldset>

          <fieldset class="group_3">
            <div class="limiter">                   
              <span class="point_num">3</span>
              <h3>Ваши персональные данные</h3>  
            </div>
            <div class="limiter">          
              <em class="wrapper l_50"><label>Фамилия</label><input type="text" placeholder="Фамилия" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Имя</label><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Отчество</label><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
              
              <em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2_2" disabled="disabled" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2_2" disabled="disabled" /><label>Женский</label></em><br/>            
              
              <em class="wrapper l_50"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/>

              <em class="wrapper l_33"><label>ИНН</label><input type="text" placeholder="ИНН" class="big" /><i class="not">Необязательно</i>
              </em>

              <div class="info-block_wrap">
                <div class="info_block type_2">
                  <p class="info-block_h"><b>Обратите внимание</b></p>
                  <p>Чтобы получить полную информацию о штрафах, рекомендуем заполнить все поля</p>
                  <span class="icomoon">"</span>
                </div>
              </div>
              <div class="clear mobile_morpf btn-cont_inner">
                <em class="wrapper l_100">
                  <a href="#" class="btn white rarr fl"><b>Изменить данные</b></a>
                </em>
              </div>
                            
            </div>                                 
          </fieldset>

          <fieldset class="group_4">
            <div class="limiter">                     
              <span class="point_num">4</span>
              <h3>Менял ли получатель фамилию, имя или отчество после 01.01.1996?</h3>
            </div>
            <div class="limiter">          
              <em class="wrapper l_100"><input type="radio" name="g_23" id="f_3_1" /><label for="f_3_1">Да</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_50"><label>Прежняя фамилия</label><input type="text" placeholder="Прежняя фамилия" class="big" /><i class="not">Необязательно</i>
                </em><em class="wrapper l_33"><label>Год изменения</label><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
                <em class="wrapper l_50"><label>Прежнее имя</label><input type="text" placeholder="Прежнее имя" class="big" /><i class="not">Необязательно</i>
                </em><em class="wrapper l_33"><label>Год изменения</label><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
                <em class="wrapper l_50"><label>Прежнее отчество</label><input type="text" placeholder="Прежнее отчество" class="big" /><i class="not">Необязательно</i>
                </em><em class="wrapper l_33"><label>Год изменения</label><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
                <a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a>
              </div> 
            </div>
            <div class="limiter">                                      
              <em class="wrapper l_100"><input type="radio" name="g_23" id="f_4_1" checked="checked" /><label for="f_4_1">Нет</label></em>
            </div>                                    
          </fieldset>          
          
          <fieldset class="group_5">
            <div class="limiter">                     
              <span class="point_num">5</span>
              <h3>Документ, удостоверяющий личность получателя услуги</h3>
            </div>
            <div class="limiter">  
              <em class="wrapper l_50">
                <label>Тип документа</label>
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                  <option>Паспорт РФ</option>
                </select>                  
              </em><br/>

              <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big"/>
              </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><label>Код подразд-я</label><input type="text" placeholder="Код подразд-я" class="big"/>            
              </em><br/>
              <em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
              </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big"/></em>

              <em class="wrapper l_66">
                <label>Страна рождения</label>
                <div class="search_inp-block">
                  <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em><em class="wrapper l_33">
                <label>Код страны</label>
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Код страны</option>                
                  <option>007</option>
                </select>
              </em>

              <em class="wrapper l_100"><label>Место рождения</label><input type="text" placeholder="Место рождения" class="big" /></em>
            </div>
          </fieldset>
          
          <fieldset class="group_6">
          <div class="limiter">                      
            <span class="point_num">6</span>
            <h3>Укажите адрес места жительства получателя услуги</h3>
          </div>
          <div class="limiter">            
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10_1" id="f_36_1" /><label for="f_36_1">По месту постоянной регистрации, как в паспорте</label></em>           
          </div>
          <div class="limiter">  
            <em class="wrapper l_100"><input type="radio" name="g_10_1" id="f_37_1" /><label for="f_37_1">По месту временного нахождения</label></em>
          </div>                          
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100"><label>Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
                
                <em class="wrapper l_50"><label>Район</label><input type="text" placeholder="Район" class="big" />
                </em><em class="wrapper l_50"><label>Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
                
                <em class="wrapper l_50"><label>Улица</label><input type="text" placeholder="Улица" class="big" /></em><br/>

                <em class="wrapper l_33"><label>Дом</label><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_33"><label>Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_33"><label>Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>

                <em class="wrapper l_33"><label>Период пребывания</label><input type="text" placeholder="Период пребывания" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_33"><label>Код налогового органа</label><input type="text" placeholder="Код налогового органа" value="1234" class="big" disabled="disabled"/></em>
              </div>              
            </div>                                         
          </fieldset>          
                              
          <fieldset class="group_7">
          <div class="limiter">                      
            <span class="point_num">7</span>
            <h3>Являетесь ли вы гражданином РФ?</h3>
          </div>
          <div class="limiter">            
            <em class="wrapper l_100"><input type="radio" name="g_3_1" id="f_17_1" checked="checked"/><label for="f_17_1">Да</label></em>
          </div>
          <div class="limiter">          
            <em class="wrapper l_100"><input type="radio" name="g_3_1" id="f_18_1"/><label for="f_18_1">Нет</label></em>
          </div>  
            <div class="fields_cover">
              <div class="limiter">
                <h4>Сведения о документе, подтверждающем регистрацию по месту жительства в РФ</h4>                            
                <em class="wrapper l_50">
                  <label>Тип документа</label>
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                    <option>Паспорт РФ</option>
                  </select>                  
                </em><br/>

                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_33"><label>Регистрация до</label><input type="text" placeholder="Регистрация до" class="big" />            
                </em><br/>

                <em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big"  /></em>
              </div>
            </div>                      
          </fieldset> 
                    
          <fieldset class="group_8">
            <div class="limiter">                      
              <span class="point_num">8</span>
              <h3>Менял ли получатель услуги место жительства?</h3>
            </div>
            <div class="limiter">   
              <em class="wrapper l_100"><input type="radio" name="g_5_1" id="f_27_1" /><label for="f_27_1">Да</label></em>
            </div>   
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100">
                  <label>Выберете регион</label>
                  <div class="search_inp-block">
                    <input type="search" placeholder="Выберете регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em>
              </div>       
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_5_1" id="f_28_1" checked="checked"/><label for="f_28_1">Нет</label></em>
            </div>                                              
          </fieldset>
          </div>



          
          <fieldset>                      
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