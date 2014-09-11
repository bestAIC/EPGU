<?
$pagename = 'rastorjenie_braka';
$pagetitle = 'Заявление на расторжение брака :: по взаимному согласию обоих супругов';
include('include/head.php');
?>

                <ul class="breadcrumbs">
                    <li class="first"><a href="#" tabindex="-1"><span class="icomoon">7</span>Главная</a></li>
                    <li class="last"><span>Заявление на расторжение брака</span></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="title">
                <span class="icomoon color_4">g</span><h1>Заявление на расторжение брака</h1>
                <h2>по взаимному согласию обоих супругов</h2>
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

                <h4>Ваши паспортные данные <span class="fr">
                <a href="#" tabindex="-1">Изменить данные</a> <i class="q">?
                <div class="bg_c3 q_hover">
                    <h4>Обратите внимание</h4>
                    <p>Изменение личных данных будет происходить в личном кабинете.</p>
                </div></i>
                </span></h4>
                
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

            <fieldset class="group_2">
                <span class="point_num">2</span>            
                <h3>Персональные данные второго супруга</h3>
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
                
                <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
                </em><em class="wrapper l_16"><input type="radio" name="sex_11" /><label>Мужской</label>
                </em><em class="wrapper l_16"><input type="radio" name="sex_11" checked="checked" /><label>Женский</label></em><br/>
                
                <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em><br/>
                <em class="wrapper l_33"><input type="text" placeholder="СНИЛС" class="big" /></em>

                <h4>Паспортные данные второго супруга</h4>
                
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


            <fieldset class="group_3">
                <span class="point_num">3</span>
                <h3>Реквизиты записи акта о заключении брака</h3>                
                <em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" />
                </em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
                </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Номер актовой записи" class="big" /></em><br/>
                
                <em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" />
                </em><em class="wrapper l_75"><input type="text" placeholder="Наименование ЗАГСа" class="big"/>
                </em>

                <em class="wrapper l_100"><input type="text" placeholder="Адрес ЗАГСа" class="big" />
                </em><br/>
            </fieldset> 

            <fieldset class="group_4">
                <span class="point_num">4</span>
                <h3>Есть ли у вас льготы при оплате государственной пошлины?</h3>                
                <em class="wrapper l_100"><input type="radio" name="gp" id="f_s_3"/><label for="f_s_3">Да</label></em>
                <div class="fields_cover">
                    <h4>Загрузите копии документов</h4>
                    <em class="wrapper l_100">             
                      <div id="drop_zone">
                        <h4>Перетащите файлы сюда или <a href="#">загрузите вручную</a> (суммарно не больше 10Мб)</h4>
                        <p>Загруженные файлы<nobr>.pdf</nobr><b class="file_progress_line"><span style="width:40%"></span></b></p>
                        <p>Загруженные файлы<nobr>.pdf</nobr><span class="file_error">Ошибка загрузки</span></p>
                        <p>Загруженные файлы<nobr>.pdf</nobr><span class="file_done">2,78 Мб</span></p>
                      </div>
                      <h5>Допустимый формат для загрузки файлов: pdf, doc, xls, jpg. Размер файла не должен превышать 5000 Кб.</h5> 
                    </em>                    
                    
                </div>
                <em class="wrapper l_100"><input type="radio" checked="checked" name="gp" id="f_s_4"/><label for="f_s_4">Нет</label></em>
            </fieldset>                         

            <fieldset class="group_5">
                <span class="point_num">5</span>
                <h3>Данные о смене фамилии и ЗАГСе, в который подаётся заявление</h3>
                <h4>Укажите желаемую фамилию после расторжения брака</h4>
                <em class="wrapper l_50"><input type="text" placeholder="Фамилия" class="big" /></em>
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