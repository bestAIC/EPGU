<?
$pagename = 'registraciya_braka';
$pagetitle = 'Регистрация заключения брака';
include('include/head.php');
?>

                <ul class="breadcrumbs">
                    <li class="first"><a href="#" tabindex="-1"><span class="icomoon">7</span>Главная</a></li>
                    <li class="last"><span>Регистрация заключения брака</span></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="title">
                <span class="icomoon color_4">a</span><h1>Регистрация заключения брака</h1>
            </div>

        <form class="main clear">

            <fieldset class="group_1">
                <span class="point_num">1</span>            
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
            
            <fieldset class="group_2">
                <span class="point_num">2</span>
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

            <fieldset class="group_3">
                <span class="point_num">3</span>
                <h3>Семейное положение <i class="q">?
                <div class="bg_c3 q_hover">
                    <h4>Пример свидетельства о заключении брака и свидетельства о расторжении брака.</h4>
                    <p>Красным цветом выделена информация, которая поможет вам заполнить формы.</p>
                    <img src="img/doc_group_3.png" alt=""/>
                </div></i>
                </h3>
                
                <em class="wrapper l_100"><input type="radio" name="family_status" checked="checked" id="f_s_1"/><label for="f_s_1">Никогда не была замужем</label></em>
                
                <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_3"/><label for="f_s_3">Вдова</label></em>
                <div class="fields_cover">
                    <h4>Персональные данные супруга</h4>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
                    
                    <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
                    </em>
                    
                </div>
                <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_4"/><label for="f_s_4">Разведена</label></em>
                <div class="fields_cover">
                    <h4>Персональные данные супруга</h4>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
                    
                    <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
                    </em>
                    
                    <h4>Сведения о документе, подтверждающем ваше семейное положение</h4>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Дата вступления в брак" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Номер" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Номер актовой записи" class="big" /></em><br/>
                    <em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
                    </em><em class="wrapper l_75"><input type="text" placeholder="Кем выдан" class="big" />
                    </em>
                    
                </div>
            </fieldset>

            <fieldset class="group_4">
                <span class="point_num">4</span>            
                <h3>Персональные данные второго заявителя</h3>
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
            
            <fieldset class="group_5">
                <span class="point_num">5</span>
                <h3>Паспортные данные второго заявителя<span class="fr">
                <a href="#" tabindex="-1">Изменить данные</a> <i class="q">?
                <div class="bg_c3 q_hover">
                    <h4>Обратите внимание</h4>
                    <p>Изменение личных данных будет происходить в личном кабинете.</p>
                </div></i>
                </span></h3>
                
                <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big"/>
                </em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я"class="big"/>
                </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big"/></em><br/>
                
                <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
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

            <fieldset class="group_6">
                <span class="point_num">6</span>
                <h3>Семейное положение <i class="q">?
                <div class="bg_c3 q_hover">
                    <h4>Пример свидетельства о заключении брака и свидетельства о расторжении брака.</h4>
                    <p>Красным цветом выделена информация, которая поможет вам заполнить формы.</p>
                    <img src="img/doc_group_3.png" alt=""/>
                </div></i>
                </h3>
                
                <em class="wrapper l_100"><input type="radio" name="family_status" checked="checked" id="f_s_1"/><label for="f_s_1">Никогда не был женат</label></em>
                
                <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_3"/><label for="f_s_3">Вдовец</label></em>
                <div class="fields_cover">
                    <h4>Персональные данные супруга</h4>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
                    
                    <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
                    </em>
                    
                </div>
                <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_4"/><label for="f_s_4">Разведен</label></em>
                <div class="fields_cover">
                    <h4>Персональные данные супруга</h4>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
                    
                    <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
                    </em>
                    
                    <h4>Сведения о документе, подтверждающем ваше семейное положение</h4>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Дата вступления в брак" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Номер" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Номер актовой записи" class="big" /></em><br/>
                    <em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
                    </em><em class="wrapper l_75"><input type="text" placeholder="Кем выдан" class="big" />
                    </em>
                    
                </div>
            </fieldset>

            <fieldset class="group_7">
                <span class="point_num">7</span>
                <h3>После заключения брака присвоить фамилии</h3>                
                <em class="wrapper l_100"><input type="radio" name="pass" checked="checked" id="p_1"/><label for="p_1">Оставить фамилию как до брака</label></em>                
                <em class="wrapper l_100"><input type="radio" name="pass" id="p_2"/><label for="p_2">Присвоить фамилию супруга</label></em>
                <em class="wrapper l_100"><input type="radio" name="pass" id="p_3"/><label for="p_3">Двойная фамилия</label></em>
            </fieldset>            

            <fieldset class="group_8">
                <span class="point_num">8</span>
                <h3>Выберете желаемую дату и время бракосочетания, а также отдел ЗАГС</h3>

                <h4>Выберете дату</h4>
                <em class="wrapper l_25"><input type="text" placeholder="Дата" class="big" /></em>
                <h4>Выберете ваше местоположение</h4>
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

                <h4>Выберете ЗАГС</h4>
                
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
                                  <input type="checkbox"/>    
                                </div>
                            </li>
                            <li class="map_list_item">
                                <div class="left">
                                    <p><a href="#0" tabindex="-1"><span class="map_num">2</span><span class="map_txt">ЗАГС по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                                    <p>Москва. Походный пр-д, 3, стр. 2</p>
                                </div>
                                <div class="right">
                                  <input type="checkbox"/>    
                                </div>
                            </li>
                            <li class="map_list_item">
                                <div class="left">
                                    <p><a href="#0" tabindex="-1"><span class="map_num">3</span><span class="map_txt">ЗАГС по г. Москве</span></a></p>
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