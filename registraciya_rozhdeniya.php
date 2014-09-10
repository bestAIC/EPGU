<?
$pagename = 'registraciya_rozhdeniya';
$pagetitle = 'Регистрация рождения';
include('include/head.php');
?>

                <ul class="breadcrumbs">
                    <li class="first"><a href="#" tabindex="-1"><span class="icomoon">7</span>Главная</a></li>
                    <li class="last"><span>Регистрация рождения</span></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="title">
                <span class="icomoon color_4">e</span><h1>Регистрация рождения</h1>
            </div>

        <form class="main clear">

            <fieldset class="group_1">
                <span class="point_num">1</span>
                <h3>Кто регистрирует рождение?</h3>
            
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_1" checked="checked" class="switcher_group" data-for="v_1" /><label for="f_1">Родители ребенка, состоящие в законном браке</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_2" class="switcher_group" data-for="v_1" /><label for="f_2">Родители ребенка, не состоящие в законном браке</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_3" class="switcher_group" data-for="v_1" /><label for="f_3">Мать ребенка, не состоящая в браке</label></em>
            </fieldset>        

            <fieldset class="group_2">
                <span class="point_num">2</span>            
                <h3>Ваши персональные данные <span class="fr">
                <a href="#" tabindex="-1">Изменить данные</a> <i class="q">?
                <div class="bg_c3 q_hover">
                    <h4>Обратите внимание</h4>
                    <p>Изменение личных данных будет происходить в личном кабинете.</p>
                </div></i>
                </span></h3>
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" value="Александр" class="big" disabled="disabled"/>
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" value="Андреевич" class="big" disabled="disabled"/></em><br/>
                
                <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
                </em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" checked="checked" /><label>Мужской</label>
                </em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" /><label>Женский</label></em><br/>
                
                <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
                </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7 912 200-00-02" disabled="disabled"/></em><br/>
                <em class="wrapper l_33"><input type="text" placeholder="СНИЛС" class="big" value="152-676-184-70" disabled="disabled"/></em>
            </fieldset>
            
            <fieldset class="group_3">
                <span class="point_num">3</span>
                <h3>Ваши паспортные данные <span class="fr">
                <a href="#" tabindex="-1">Изменить данные</a> <i class="q">?
                <div class="bg_c3 q_hover">
                    <h4>Обратите внимание</h4>
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
                        <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                
                <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
            </fieldset>

            <fieldset class="group_4">
                <span class="point_num">4</span>
                <h3>Укажите адрес вашей регистрации</h3>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                
                <em class="wrapper l_50">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Район" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="cities" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em><em class="wrapper l_50">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                
                <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>                
            </fieldset>

            <fieldset class="group_5">
                <span class="point_num">5</span>            
                <h3>Персональные данные второго родителя</h3>
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
                
                <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
                </em><em class="wrapper l_16"><input type="radio" name="sex_1"  checked="checked" /><label>Мужской</label>
                </em><em class="wrapper l_16"><input type="radio" name="sex_1" /><label>Женский</label></em><br/>
                
                <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em><br/>
                <em class="wrapper l_33"><input type="text" placeholder="СНИЛС" class="big" /></em>
            </fieldset>
            
            <fieldset class="group_6">                     
              <span class="point_num">6</span>
              <h3>Документ, удостоверяющий личность второго родителя</h3>
              <em class="wrapper l_50">
                <select class="select_choice">
                  <option value="0" selected="selected" class="selected_one">Тип документа</option>                
                  <option>Паспорт РФ</option>
                </select>                  
              </em><br/>

              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big"/>
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big"/></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>

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

            <fieldset class="group_7">
                <span class="point_num">7</span>
                <h3>Семейное положение</h3>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                
                <em class="wrapper l_50">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Район" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="cities" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em><em class="wrapper l_50">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                
                <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>                   
            </fieldset>

            <fieldset class="group_8">
                <span class="point_num">8</span>
                <h3>Сведения о документе, подтверждающем ваше семейное положение</h3>                
                <em class="wrapper l_33"><input type="text" placeholder="Номер актовой записи" class="big" />
                </em><em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" />
                </em><br/>

                <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
            </fieldset>            

            <fieldset class="group_9">
                <span class="point_num">9</span>
                <h3>Данные медицинской справки о рождении ребёнка</h3>                
                <em class="wrapper l_25"><input type="text" placeholder="Номер справки" class="big" />
                </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_50"><input type="text" placeholder="ФИО глав. врача" class="big" /></em>

                <em class="wrapper l_100"><input type="text" placeholder="Адрес больницы" class="big" /></em>
            </fieldset>

            <fieldset class="group_10">
                <span class="point_num">10</span>
                <h3>Сведения о ребёнке</h3> 
                <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big"  />
                </em><em class="wrapper l_16"><input type="radio" name="sex_4" checked="checked" /><label>Мужской</label>
                </em><em class="wrapper l_16"><input type="radio" name="sex_4" /><label>Женский</label>
                </em><br/><em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em> 
                <h4>Назвать ребенка</h4>
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>              
            </fieldset>

            <fieldset class="group_10">
                <span class="point_num">10</span>
                <h3>Выберете способ получения документа (свидетельство о рождении)</h3> 
                <em class="wrapper l_100"><input type="radio" name="g_24_1" id="f_7" /><label for="f_7">Лично</label></em>                                                 
                <em class="wrapper l_100"><input type="radio" name="g_24_1" id="f_8" checked="checked" /><label for="f_8">Курьером</label></em>            
            </fieldset>            

            <fieldset class="group_11">
                <span class="point_num">11</span>
                <h3>Выберете место регистрации рождения</h3>

                <em class="wrapper l_100"><input type="radio" checked="checked" name="g_25_1" id="f_9" /><label for="f_9">По месту жительства матери</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_100">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                            <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                    
                    <em class="wrapper l_50">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Район" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                            <input type="search" name="cities" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em><em class="wrapper l_50">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                            <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>

                    <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                    </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>                    
                </div>

                <em class="wrapper l_100"><input type="radio" name="g_25_1" id="f_10" /><label for="f_10">По месту жительства отца</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_100">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                            <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                    
                    <em class="wrapper l_50">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Район" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                            <input type="search" name="cities" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em><em class="wrapper l_50">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                            <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>

                    <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
                    </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>                    
                </div> 


                <h4>Выберете ближайшее отделение ЗАГСа для подачи заявления</h4>
                
                <div class="map_cover">
                    <div class="map_block" id="map"></div>
                    <div class="map_nav">
                        <h4 class="map_nav_h">Доступны подразделения:</h4>
                        <ul class="map_list">
                            <li class="map_list_item">
                                <div class="left">
                                    <p><a href="#0" tabindex="-1"><span class="map_num">1</span><span class="map_txt">ЗАГС по г.Москве</span></a></p>
                                    <p>Москва, Неглинная, 23</p>
                                </div>
                                <div class="right">
                                  <input name="map_select_point" type="radio"/>    
                                </div>
                            </li>
                            <li class="map_list_item">
                                <div class="left">
                                    <p><a href="#0" tabindex="-1"><span class="map_num">2</span><span class="map_txt">ЗАГС по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                                    <p>Москва. Походный пр-д, 3, стр. 2</p>
                                </div>
                                <div class="right">
                                  <input name="map_select_point" type="radio"/>    
                                </div>
                            </li>
                            <li class="map_list_item">
                                <div class="left">
                                    <p><a href="#0" tabindex="-1"><span class="map_num">3</span><span class="map_txt">ЗАГС по г. Москве</span></a></p>
                                    <p>Москва, Боткинский 2-й пр-д, 8, стр. 1</p>
                                </div>
                                <div class="right">
                                  <input name="map_select_point" type="radio"/>    
                                </div>
                            </li>
                        </ul>
                    </div><!-- map_nav -->
                    <div class="map_ballon_block">
                        <div class="map_ballon_wrap">
                            <a class="map_ballon_close"><span class="icomoon">L</span></a>
                            <div class="map_ballon_h">
                                <p><strong>ЗАГС по г. Москве</strong></p>
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
            <fieldset class="group_10">
                <h3>Согласие на обработку персональных данных</h3>
                
                <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
                
                <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
                либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
            </fieldset>

            <div class="clear last_btn-block">
                <span class="fr">
                    <input class="big btn" type="submit" value="Отправить">
                </span>
            </div>
        </form>
      </div>


<?
include('include/footer.php');
?>