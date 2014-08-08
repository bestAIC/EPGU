<?
$pagename = 'mobile_postanovka_na_registraciu';
$pagetitle = 'Постановка на регистрационный учет';
include('include/mobile_head.php');
?>

      <div id="content">
        <div class="title">
          <div class="limiter">        
            <span class="icomoon color_3">G</span><h1>Регистрация граждан</h1>
            <h2>по месту жительства</h2>
          </div>  
        </div>
        
          
        <form class="main clear big_inp-form bt">
              
          <fieldset class="group_1">
            <div class="limiter">                   
              <span class="point_num">1</span>
              <h3>Тип заявителя</h3>
            </div>
            <div class="limiter">           
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label class="flag_label"  for="f_1">Я подаю заявление за самого себя, мне есть 18 лет</label></em>  
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label class="flag_label"  for="f_2">Я подаю заявление за самого себя, мне нет 18 лет (14-18)</label></em>                         
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_3"/><label class="flag_label"  for="f_3">Я - законный представитель несовершеннолетнего</label></em> 
            </div>                       
            <div class="fields_cover">
              <div class="limiter">             
                <h4>Кем вы приходитесь получателю услуги?</h4>                            
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_4"/><label class="flag_label"  for="f_4">Отец</label></em>              
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_5"/><label class="flag_label"  for="f_5">Мать</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_6"/><label class="flag_label"  for="f_6">Опекун</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_7"/><label class="flag_label"  for="f_7">Попечитель</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_8"/><label class="flag_label"  for="f_8">Иное</label></em>                
                <div class="fields_cover_inner">
                  <em class="wrapper l_100"><input type="text" placeholder="Ваш вариант" class="big" /></em>                
                </div>                                                
              </div>                 
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_1" id="f_9"/><label class="flag_label"  for="f_9">Я - законный представитель недееспособного, либо иного лица</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">
                <h4>Кем вы приходитесь получателю услуги?</h4>                            
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_10"/><label class="flag_label"  for="f_10">Отец</label></em>              
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_11"/><label class="flag_label"  for="f_11">Мать</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_12"/><label class="flag_label"  for="f_12">Опекун</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_13"/><label class="flag_label"  for="f_13">Попечитель</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_14"/><label class="flag_label"  for="f_14">Иное</label></em>
                <em class="wrapper l_100"><input type="text" placeholder="Ваш вариант" class="big" disabled="disabled"/></em>
              </div>  
            </div>                                                      
          </fieldset>
                     
          <fieldset class="group_2">
            <div class="limiter">                   
              <span class="point_num">2</span>
              <h3>Ваши персональные данные</h3>  
            </div>
            <div class="limiter">          
              <em class="wrapper l_50"><label>Фамилия</label><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Имя</label><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Отчество</label><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
              
              <em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label class="flag_label" >Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_2" disabled="disabled" /><label class="flag_label"  class="flag_label">Женский</label></em><br/>            
              
              <em class="wrapper l_50"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
              </em><em class="wrapper l_50"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/>
              
              <div class="info-block_wrap">
                <div class="info_block type_2">
                  <p class="info-block_h"><b>Обратите внимание</b></p>
                  <p>Чтобы получить полную информацию о штрафах, рекомендуем заполнить все поля</p>
                  <span class="icomoon">"</span>
                </div>
              </div>
                                          
            </div>                                 
          </fieldset>
          
          <fieldset class="group_3">
            <div class="limiter">                     
              <span class="point_num">3</span>
              <h3>Ваши паспортные данные</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><label>Код подразделения</label><input type="text" placeholder="Код подразделения" value="111-000" class="big" disabled="disabled"/>            
              </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/>
              </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России" disabled="disabled"/>
              </em>
            </div>                                    
          </fieldset>
          
          <fieldset class="group_4">
            <div class="limiter">                      
              <span class="point_num">4</span>
              <h3>Персональные данные получателя услуги</h3> 
            </div>
            <div class="limiter">           
              <em class="wrapper l_50"><label>Фамилия</label><input type="text" placeholder="Фамилия"  class="big" />
              </em><em class="wrapper l_50"><label>Имя</label><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_50"><label>Отчество</label><input type="text" placeholder="Отчество" class="big" /></em><br/>
              
              <em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
              </em><em class="wrapper l_25"><input type="radio" name="sex_1" checked="checked" /><label class="flag_label"  >Мужской</label>
              </em><em class="wrapper l_25"><input type="radio" name="sex_1" /><label class="flag_label"  >Женский</label></em><br/>
              
              <em class="wrapper l_50"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big" />
              </em><em class="wrapper l_50"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big" /></em><br/>
            </div>                                                             
          </fieldset> 
          
          <fieldset class="group_5">
            <div class="limiter">                      
              <span class="point_num">5</span>
              <h3>Документ, удостоверяющий личность получателя услуги</h3>
            </div>
            <div class="limiter">          
              <em class="wrapper l_100"><input type="radio" name="g_2" id="f_15" checked="checked" /><label class="flag_label"  for="f_15">Паспорт</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_33"><label>Код подразделения</label><input type="text" placeholder="Код подразделения" class="big" />            
                </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" /></em> 
                
                <em class="wrapper l_100"><label>Место рождения</label><input type="text" placeholder="Место рождения" class="big" /></em> 
              </div>                         
            </div>
            <div class="limiter">               
              <em class="wrapper l_100"><input type="radio" name="g_2" id="f_16"/><label class="flag_label"  for="f_16">Свидетельство о рождении</label></em>
            </div>                                  
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_33"><label>Номер акт. записи</label><input type="text" placeholder="Номер акт. записи" class="big" />            
                </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_66"><label>Кем выдано</label><input type="text" placeholder="Кем выдано" class="big" /></em> 
                
                <em class="wrapper l_100"><label>Место рождения</label><input type="text" placeholder="Место рождения" class="big" /></em>
              </div>                            
            </div>                                         
          </fieldset>          
                              
          <fieldset class="group_6">
            <div class="limiter">                      
              <span class="point_num">6</span>
              <h3>Имеет ли получатель услуги постоянную регистрацию?</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_3" id="f_17" checked="checked"/><label class="flag_label"  for="f_17">Да</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">
                <h4>Адрес текущего места постоянной регистрации</h4>                            
                <em class="wrapper l_100"><label>Выберите регион</label><input type="text" placeholder="Выберите регион" class="big" /></em>              
                <em class="wrapper l_33"><label>Дата регистрации</label><input type="text" placeholder="Дата регистрации" class="big" /></em> 
              </div>
            </div> 
            <div class="limiter">          
              <em class="wrapper l_100"><input type="radio" name="g_3" id="f_18"/><label class="flag_label"  for="f_18">Нет</label></em>
            </div>                     
          </fieldset> 
                    
          <fieldset class="group_7">
            <div class="limiter">                      
              <span class="point_num">7</span>
              <h3>Новый адрес регистрации</h3>
            </div>
            <div class="limiter"> 
              <em class="wrapper l_100"><label>Выберите регион</label><input type="text" placeholder="Выберите регион" class="big" /></em>
            </div>                                             
          </fieldset>
          
          <fieldset class="group_8">
            <div class="limiter">                      
              <span class="point_num">8</span>
              <h3>Снялся ли получатель услуги с регистрационного учёта по прежнему месту жительства?</h3>
            </div>
            <div class="limiter">               
              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_4" id="f_19"/><label class="flag_label"  for="f_19">Да</label></em>                                   
              <em class="wrapper l_100"><input type="radio" name="g_4" id="f_20"/><label class="flag_label"  for="f_20">Нет</label></em>
            </div>                               
          </fieldset>                     
          
          <fieldset class="group_9">
            <div class="limiter">                    
              <span class="point_num">9</span>
              <h3>Регистрация производится на вашу жилплощадь?</h3>
            </div>
            <div class="limiter">             
              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_5" id="f_21"/><label class="flag_label"  for="f_21">Да</label></em>                                   
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_5" id="f_22"/><label class="flag_label"  for="f_22">Нет</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">
                <h4>Персональные данные владельца жилого помещения</h4>          
                <em class="wrapper l_50"><label>Фамилия</label><input type="text" placeholder="Фамилия"  class="big" />
                </em><em class="wrapper l_50"><label>Имя</label><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_50"><label>Отчество</label><input type="text" placeholder="Отчество" class="big" /></em><br/>
                
                <em class="wrapper l_33"><label>Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" />
                </em><em class="wrapper l_25"><input type="radio" name="sex_3" checked="checked" /><label class="flag_label" >Мужской</label>
                </em><em class="wrapper l_25"><input type="radio" name="sex_3" /><label class="flag_label"  >Женский</label></em><br/>
                
                <h4>Кем получатель услуги приходится владельцу жилого помещения?</h4>          
                <em class="wrapper l_100">
                  <select>            
                    <option>Выберете степень родства</option>
                  </select>                  
                </em>
                <h4>Контактные данные владельца жилого помещения</h4>            
                  <em class="wrapper l_50"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big" />
                  </em><em class="wrapper l_50"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big" /></em>
                <h4>Паспортные данные владельца жилого помещения</h4> 
                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_33"><label>Код подразделения</label><input type="text" placeholder="Код подразделения" class="big" />            
                </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_66"><label>Кем выдан</label><input type="text" placeholder="Кем выдан" class="big" /></em>
              </div>                                                        
            </div>                                                      
          </fieldset> 
                                                 
          <fieldset class="group_10">
            <div class="limiter">                      
              <span class="point_num">10</span>
              <h3>Тип жилищного фонда</h3>
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_6" id="f_23"/><label class="flag_label"  for="f_23">Жильё муниципального фонда</label></em>              
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_6" id="f_24"/><label class="flag_label"  for="f_24">Жильё государственного фонда</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">              
                <em class="wrapper l_100"><label>Организация</label><input type="text" placeholder="Организация" class="big" /></em>
              </div>                            
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_6" id="f_25" checked="checked"/><label class="flag_label"  for="f_25">Жильё частной формы собственности</label></em>
            </div>                                                         
          </fieldset>
          
          <fieldset class="group_11">
            <div class="limiter">                      
              <span class="point_num">11</span>
              <h3>Распоряжение помещением на основании</h3> 
            </div>
            <div class="limiter">                                
              <em class="wrapper l_100"><input type="radio" name="g_7" id="f_26" checked="checked"/><label class="flag_label"  for="f_26">Свидетельства собственности</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />          
                </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
                
                <em class="wrapper l_100"><label>Кем выдано</label><input type="text" placeholder="Кем выдано" class="big" /></em>
              </div>                                                          
            </div>
            <div class="limiter">             
              <em class="wrapper l_100"><input type="radio" name="g_7" id="f_27"/><label class="flag_label"  for="f_27">Договора социального найма</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_33"><label>Серия</label><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_33"><label>Номер</label><input type="text" placeholder="Номер" class="big" />          
                </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
                
                <em class="wrapper l_100"><label>Кем выдано</label><input type="text" placeholder="Кем выдано" class="big" /></em>
              </div>                                                          
            </div>
            <div class="limiter">             
              <em class="wrapper l_100"><input type="radio" name="g_7" id="f_28"/><label class="flag_label"  for="f_28">По решению суда</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">                           
                <em class="wrapper l_33"><label>Номер документа</label><input type="text" placeholder="Номер документа" class="big" />
                </em><em class="wrapper l_33"><label>Дата выдачи</label><input type="text" placeholder="Дата выдачи" class="big" /></em>
              </div> 
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_7" id="f_29"/><label class="flag_label"  for="f_29">Иное</label></em>
            </div>  
            <div class="fields_cover">
              <div class="limiter">                           
                <em class="wrapper l_100"><label>Пояснение</label><input type="text" placeholder="Пояснение" class="big" /></em>
              </div>   
            </div>                             
          </fieldset> 

          <fieldset class="group_12">
            <div class="limiter">                      
              <span class="point_num">12</span>
              <h3>Есть или было ли у вас гражданство другого государства?</h3>
            </div>
            <div class="limiter">                        
              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_8" id="f_30"/><label class="flag_label"  for="f_30">Нет, я никогда не имел гражданство другого государства</label></em>            
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_8" id="f_31"/><label class="flag_label"  for="f_31">Да, у меня имеется по настоящее время гражданство другого государства</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">
                <h4>Укажите страну, и дату получения другого гражданства</h4>              
                <em class="wrapper l_66">
                  <label>Гражданство</label>
                  <select class="select_choice">
                    <option value="0" class="selected_one" name="Гражданство">Гражданство</option>                
                    <option value="1" >Белоруссия</option>
                    <option value="2" >Украина</option>
                  </select>                  
                </em><em class="wrapper l_33"><label>Дата вступления</label><input type="text" placeholder="Дата вступления" class="big" /></em><br/>              
                <em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>               
                <h4>Укажите дату вступления в гражданство РФ</h4>              
                <em class="wrapper l_33"><label>Дата вступления</label><input type="text" placeholder="Дата вступления" class="big" /></em>
              </div>                          
            </div>            
            <div class="limiter">                        
              <em class="wrapper l_100"><input type="radio" name="g_8" id="f_32" /><label class="flag_label"  for="f_32">Да, ранее у меня имелось гражданство другого государства</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">
                <h4>Укажите страну, и дату получения другого гражданства</h4>              
                <em class="wrapper l_66">
                  <label>Гражданство</label>
                  <select class="select_choice">
                    <option value="0" class="selected_one" name="Гражданство">Гражданство</option>                
                    <option value="1" >Белоруссия</option>
                    <option value="2" >Украина</option>
                  </select>                  
                </em><em class="wrapper l_33"><label>Дата</label><input type="text" placeholder="Дата" class="big" /></em><br/>              
                <em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>              
                <h4>Укажите дату вступления в гражданство РФ</h4>              
                <em class="wrapper l_33"><label>Дата вступления</label><input type="text" placeholder="Дата вступления" class="big" /></em>
              </div>                             
            </div>
            <div class="limiter">            
              <em class="wrapper l_100"><input type="radio" name="g_8" id="f_33" /><label class="flag_label"  for="f_33">Я являюсь лицом без гражданства</label></em>
            </div>                                            
          </fieldset> 

          <fieldset class="group_13">
            <div class="limiter">                      
              <span class="point_num">13</span>
              <h3>Дополнительные данные получателя услуги</h3>
            </div>
            <div class="limiter">    
              <em class="wrapper l_100">
                <label>Основная причина переселения</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Основная причина переселения">Основная причина переселения</option>
                  <option value="1" selected="selected">текст</option>                
                </select>                  
              </em>
              <h4>Информация о работе</h4>
              <em class="wrapper l_100">
                <label>Сфера деятельности по последнему месту жительства</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Сфера деятельности по последнему месту жительства">Сфера деятельности по последнему месту жительства</option>
                  <option value="1" selected="selected">текст</option>                
                </select>                  
              </em>
              <em class="wrapper l_100">
                <label>Вид занятости</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Вид занятости">Вид занятости</option>
                  <option value="1" selected="selected">текст</option>                
                </select>                  
              </em>
              <h4>Социальное обеспечение</h4>
              <em class="wrapper l_100">
                <label>Вид соцобеспечения по последнему месту жительства</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Вид соцобеспечения по последнему месту жительства">Вид соцобеспечения по последнему месту жительства</option>
                  <option value="1" selected="selected">текст</option>                
                </select>                  
              </em>
              <h4>Личная информация</h4>
              <em class="wrapper l_50">
                <label>Образование</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Образование">Образование</option>
                  <option value="1" selected="selected">текст</option>                
                </select>                  
              </em><em class="wrapper l_50">
                <label>Состояние в браке</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Состояние в браке">Состояние в браке</option>
                  <option value="1" selected="selected">текст</option>                
                </select>                  
              </em><br/>
              <em class="wrapper l_100">
                <label>Если до переселения проживал с семьёй, то прибыл</label>
                <select class="select_choice">
                  <option value="0" class="selected_one" name="Если до переселения проживал с семьёй, то прибыл">Если до переселения проживал с семьёй, то прибыл</option>
                  <option value="1" selected="selected">текст</option>                
                </select>
                <i class="not">необязательно</i>                  
              </em>
            </div>                           
          </fieldset> 

          <fieldset class="group_14">
            <div class="limiter">                      
              <span class="point_num">14</span>
              <h3>Часть семьи получателя услуги уже проживает по этому адресу?</h3>
            </div>
            <div class="limiter">  
              <em class="wrapper l_100"><input type="radio" name="g_9" id="f_34" checked="checked"/><label class="flag_label"  for="f_34">Да</label></em> 
              <em class="wrapper l_100"><input type="radio" name="g_9" id="f_35" /><label class="flag_label"  for="f_35">Нет</label></em>
            </div>                 
          </fieldset> 

          <fieldset class="group_15">
            <div class="limiter">                      
              <span class="point_num">15</span>
              <h3>Куда вы будете подавать оригиналы документов?</h3>
            </div>
            <div class="limiter">                         
              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label class="flag_label"  for="f_36">по месту жительства (как в паспорте), срок оказания услуги составит 10 дней</label></em>
            </div>
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100"><label>Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
                
                <em class="wrapper l_50"><label>Район</label><input type="text" placeholder="Район" class="big" />
                </em><em class="wrapper l_50"><label>Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
                
                <em class="wrapper l_100"><label>Улица</label><input type="text" placeholder="Улица" class="big" />
                </em><em class="wrapper l_33"><label>Дом</label><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_33"><label>Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_33"><label>Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
              </div>              
            </div>            
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label class="flag_label" for="f_37">по месту пребывания, срок оказания услуги составит до 2-x месяцев</label></em>            
            </div>            
            <div class="fields_cover">
              <div class="limiter">
                <em class="wrapper l_100"><label>Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
                
                <em class="wrapper l_50"><label>Район</label><input type="text" placeholder="Район" class="big" />
                </em><em class="wrapper l_50"><label>Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
                
                <em class="wrapper l_100"><label>Улица</label><input type="text" placeholder="Улица" class="big" />
                </em><em class="wrapper l_33"><label>Дом</label><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_33"><label>Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_33"><label>Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
              </div>        
            </div>
            <div class="limiter">
              <em class="wrapper l_100"><input type="radio" name="g_10" id="f_38" /><label class="flag_label" for="f_38">по месту фактического проживания, срок оказания услуги составит 2 месяца</label></em> 
            </div>
            <div class="fields_cover">
              <div class="limiter">           
                 <em class="wrapper l_100"><label>Регион</label><input type="text" placeholder="Регион" class="big" /></em><br/>
                 
                 <em class="wrapper l_50"><label>Район</label><input type="text" placeholder="Район" class="big" />
                 </em><em class="wrapper l_50"><label>Населенный пункт</label><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
                 
                 <em class="wrapper l_100"><label>Улица</label><input type="text" placeholder="Улица" class="big" />
                 </em><em class="wrapper l_33"><label>Дом</label><input type="text" placeholder="Дом" class="big" />
                 </em><em class="wrapper l_33"><label>Корпус</label><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                 </em><em class="wrapper l_33"><label>Кв-ра</label><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
              </div>       
            </div>
              <div class="limiter">
                <h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
              </div>

              <div class="map_cover">
                <div class="map_block" id="map"></div>
                  <div class="address_list">               
                    <div class="map_nav">
                      <div class="limiter">
                      <h4 class="map_nav_h">Доступны подразделения:</h4>
                      </div>
                      <ul class="map_list">
                        <li class="map_list_item">
                          <p><a href="#"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
                          <p>Москва, Неглинная, 23</p>
                        </li>
                        <li class="map_list_item">
                          <p><a href="#"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                          <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
                        </li>
                        <li class="map_list_item">
                          <p><a href="#"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
                          <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
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
                  </div>                 
              </div><!-- map_cover -->
            
         </fieldset> 
    
    
         
         <fieldset class="group_16">           
          <div class="limiter">    
            <h3>Согласие на обработку персональных данных</h3>     
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" /><label class="flag_label">Согласен на обработку персональных данных</label></em>
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" /><label class="flag_label">Об ответственности за предоставление заведомо ложных сведений,
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