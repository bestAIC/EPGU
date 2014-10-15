<?
$pagename = 'sanitarnoe_zakluchenie';
$pagetitle = 'Подача заявления физического лица о постановке на учёт в налоговом органе на территории РФ';
include('include/head.php');
?>

          <ul class="breadcrumbs">
            <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>       
            <li class="last"><span>Получение санитарно-эпидемиологического заключения на вид деятельности</span></li>
          </ul>          
        </div>
      </div>

      <div id="content">
        <div class="title">
          <h2>Санитарно-эпидемиологическое заключение</h2>
          <span class="icomoon color_5">\</span><h1>Получение санитарно-эпидемиологического заключения на вид деятельности</h1>
        </div>
        
          
        <form class="main clear">

            <div class="intro">
              <h2>Приветственный текст<b class="close fr">Скрыть</b></h2>
              <p>Те, кому когда-либо приходилось делать в квартире ремонт, наверное, обращали внимание на старые газеты, наклеенные под обоями. Как правило, пока все статьи не перечитаешь, ничего другого делать не можешь. Интересно же — обрывки текста, чья-то жизнь... Так же и с рыбой. Пока заказчик не прочтет всё, он не успокоится. Бывали случаи, когда дизайн принимался именно из-за рыбного текста, который, разумеется, никакого отношения к работе не имел.</p>
            </div>

            <h2 class="group_title">Вид деятельности</h2>        
                
            <fieldset class="group_1">         
              <span class="point_num">1</span>
              <h3>Выберите вид деятельности, на который подается заявление</h3>
              <em class="wrapper l_100">
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Наименование деятельности, работы, услуги</option>                
                  <option>Переворачивание пингвинов</option>
                </select>
              </em>

            </fieldset>


            <h2 class="group_title">Ваши данные</h2>

            <fieldset class="group_2">                   
              <span class="point_num">2</span>
              <h3>Персональные данные <span class="fr">
              <a href="#">Изменить данные</a> <i class="q">?
                  <div class="bg_c3 q_hover">
                    <p>Изменение личных данных будет происходить в личном кабинете.</p>
                  </div></i>
                </span></h3>  
                        
              <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
              
              <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
              </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label>Мужской</label>
              </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" /><label>Женский</label></em><br/>            
              
              <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
              </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/>
                              
            </fieldset>

            <fieldset class="group_3">
              <span class="point_num">3</span>
              <h3>Паспортные данные <span class="fr">
              <a href="#">Изменить данные</a> <i class="q">?
              <div class="bg_c3 q_hover">
                <p>Изменение личных данных будет происходить в личном кабинете.</p>
              </div></i>
              </span></h3>
              
              <em class="wrapper l_16"><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
              </em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>
              </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" disabled="disabled" />
              </em><br/>

              <em class="wrapper l_66">
                <div class="search_inp-block">
                  <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em>
              
              <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
            </fieldset>

            <h2 class="group_title">Данные аффилированного лица</h2>          

            <fieldset class="group_4">                     
              <span class="point_num">4</span>
              <h3>Кем вы являетесь?</h3>          
              <em class="wrapper l_100"><input type="radio" name="g_22" id="f_3" checked="checked" /><label for="f_3">Юридическое лицо</label></em>
              <div class="fields_cover">
                <em class="wrapper l_100">
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">Выберете организационно-правовую организацию</option>                
                    <option>ОАО</option>
                  </select>                  
                </em>

                <em class="wrapper l_66"><input type="text" placeholder="Полное наименование юридического лица" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="ИНН" class="big" />
                </em>

                <em class="wrapper l_33"><input type="text" placeholder="ОГРН" class="big" />
                </em><em class="wrapper l_66"><input type="text" placeholder="ФИО Генерального директора" class="big" />
                </em>

              </div>                                      
              <em class="wrapper l_100"><input type="radio" name="g_22" id="f_4" /><label for="f_4">Индивидуальный предприниматель</label></em>
              <div class="fields_cover">
                <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_9_1"/><label for="f_9_1">Заявление подаётся уполномоченным лицом</label></em>
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i>
                </em>
                <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big"  />
                </em><em class="wrapper l_16"><input type="radio" name="sex_4" checked="checked" /><label>Мужской</label>
                </em><em class="wrapper l_16"><input type="radio" name="sex_4" /><label>Женский</label>
                </em><em class="wrapper l_33 fr"><input type="text" placeholder="СНИЛС" class="big" />
                </em><br/>

                <h4>Паспортные данные</h4>

                <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
                </em><em class="wrapper l_25"><input type="text" placeholder="Номер"class="big"/>
                </em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" class="big"/>
                </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big"/></em><br/>
                
                <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
                </em>
                
                <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>

              </div>                                    
            </fieldset>


            <fieldset class="group_5">                      
              <span class="point_num">5</span>
              <h3>Укажите ваш юридический адрес</h3> 

              <em class="wrapper l_100">
                <div class="search_inp-block">
                  <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em><br/>               
              <em class="wrapper l_50">
                <div class="search_inp-block">
                  <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em><em class="wrapper l_50">                  
                <div class="search_inp-block">
                  <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                  <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                  <div class="selction_ajax-placeholder"></div>
                </div>
              </em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>
                                          
            </fieldset>                      
      
            
            <fieldset class="group_6">                      
              <span class="point_num">6</span>
              <h3>Совпадает ли фактический адрес с юридическим</h3>          
              <em class="wrapper l_100"><input type="radio" checked="checked" name="a_10" id="f_36_1" /><label for="f_36_1">Да</label></em>           
              
              <em class="wrapper l_100"><input type="radio" name="a_10" id="f_37_1" /><label for="f_37_1">Нет</label></em>                        
              <div class="fields_cover">
                <h4>Укажите фактический адрес</h4>
                <em class="wrapper l_100">
                  <div class="search_inp-block">
                    <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em><br/>               
                <em class="wrapper l_50">
                  <div class="search_inp-block">
                    <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em><em class="wrapper l_50">                  
                  <div class="search_inp-block">
                    <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em><br/>
                
                <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>
              </div>                                         
            </fieldset> 

            <h2 class="group_title">Подача документов</h2>         
                                
            <fieldset class="group_7">
              <span class="point_num">7</span>
              <h3>Куда вы будете подавать оригиналы документов?</h3>

              <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label for="f_36">По месту постоянной регистрации, как в паспорте</label></em>           
              
              <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label for="f_37">По месту временной регистрации</label></em>                        
              <div class="fields_cover">
                <em class="wrapper l_100">
                  <div class="search_inp-block">
                    <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em><br/>               
                <em class="wrapper l_50">
                  <div class="search_inp-block">
                    <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em><em class="wrapper l_50">                  
                  <div class="search_inp-block">
                    <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                    <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                    <div class="selction_ajax-placeholder"></div>
                  </div>
                </em><br/>
                
                <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em><br/>

              </div>

              <h4>Просим вас выбрать подразделение службы по надзору</h4> 

              <div class="map_cover">
                <div class="map_block" id="map"></div>
                <div class="map_nav">
                  <h4 class="map_nav_h">Доступны подразделения:</h4>
                  <ul class="map_list">
                    <li class="map_list_item">
                      <div class="left">
                        <p><a href="#"><span class="map_num">1</span><span class="map_txt">№1 по г.Москве</span></a></p>
                        <p>Москва, Неглинная, 23</p>
                      </div>
                      <div class="right">
                        <input type="checkbox"/>    
                      </div>
                    </li>
                    <li class="map_list_item">
                      <div class="left">
                        <p><a href="#"><span class="map_num">2</span><span class="map_txt">№2 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                        <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
                      </div>
                      <div class="right">
                        <input type="checkbox"/>    
                      </div>
                    </li>
                    <li class="map_list_item">
                      <div class="left">
                        <p><a href="#"><span class="map_num">3</span><span class="map_txt">№3 по г. Москве</span></a></p>
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
                      <p><strong>№1 по г. Москве</strong></p>
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
                              
            <fieldset>                      

              <h3>Согласие на обработку персональных данных</h3>          
              
              <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
              
              <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
               либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>           
                                                     
            </fieldset>  

            <span class="fr">
              <input class="big btn" type="submit" value="Отправить">
            </span>                                                                                              
          </div>
                    
                             
        </form>                      
        

<?
include('include/footer.php');
?> 