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
          <span class="icomoon color_5">\</span><h1>Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ</h1>
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
            <em class="wrapper l_100"><input type="radio" name="g_22" id="f_3" /><label for="f_3">Да</label></em>
            <div class="fields_cover">
              <em class="wrapper l_50"><input type="text" placeholder="Прежняя фамилия" class="big" /><i class="not">Необязательно</i>
              </em><em class="wrapper l_25"><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
              <em class="wrapper l_50"><input type="text" placeholder="Прежнее имя" class="big" /><i class="not">Необязательно</i>
              </em><em class="wrapper l_25"><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
              <em class="wrapper l_50"><input type="text" placeholder="Прежнее отчество" class="big" /><i class="not">Необязательно</i>
              </em><em class="wrapper l_25"><input type="text" placeholder="Год изменения" class="big" /><i class="not">Необязательно</i></em><br/>
              <a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a>
            </div>                                      
            <em class="wrapper l_100"><input type="radio" name="g_22" id="f_4" checked="checked" /><label for="f_4">Нет</label></em>                                    
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
          
          <fieldset class="group_5">                      
            <span class="point_num">5</span>
            <h3>Укажите адрес вашего места жительства</h3>          
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label for="f_36">По месту постоянной регистрации, как в паспорте</label></em>           
            
            <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label for="f_37">По месту временного нахождения</label></em>                        
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>

              <em class="wrapper l_33"><input type="text" placeholder="Период пребывания" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_33"><input type="text" placeholder="Код налогового органа" value="1234" class="big" disabled="disabled"/></em>            
            </div>                                         
          </fieldset>          
                              
          <fieldset class="group_6">                      
            <span class="point_num">6</span>
            <h3>Являетесь ли вы гражданином РФ?</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_3" id="f_17" checked="checked"/><label for="f_17">Да</label></em>        
            <em class="wrapper l_100"><input type="radio" name="g_3" id="f_18"/><label for="f_18">Нет</label></em>
            <div class="fields_cover">
              <h4>Сведения о документе, подтверждающем регистрацию по месту жительства в РФ</h4>                            
              <em class="wrapper l_50">
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                  <option>Паспорт РФ</option>
                </select>                  
              </em><br/>

              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Регистрация до" class="big" />            
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big"  /></em>
            </div>                      
          </fieldset> 
                    
          <fieldset class="group_7">                      
            <span class="point_num">7</span>
            <h3>Меняли ли вы место жительства?</h3> 
            <em class="wrapper l_100"><input type="radio" name="g_5" id="f_27" /><label for="f_27">Да</label></em> 
            <div class="fields_cover">
              <em class="wrapper l_100">
                <div class="search_inp-block">
                  <input type="search" placeholder="Выберете регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em>
            </div>       
            <em class="wrapper l_100"><input type="radio" name="g_5" id="f_28" checked="checked"/><label for="f_28">Нет</label></em>                                            
          </fieldset>

          
          <fieldset>                      

            <h3>Согласие на обработку персональных данных</h3>          
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
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