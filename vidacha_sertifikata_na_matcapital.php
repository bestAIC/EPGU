<?
$pagename = 'mat_capital';
$pagetitle = 'Выдача сертификата на материнский (семейный) капитал';
include('include/head.php');
?>

                <ul class="breadcrumbs">
                    <li class="first"><a href="#0" tabindex="-1"><span class="icomoon">7</span>Главная</a></li>
                    <li class="last"><span>Заявление о выдаче или замене паспорта</span></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="title">
                <span class="icomoon color_4">]</span>
                <h1>Выдача сертификата на материнский (семейный) капитал</h1>
                <h2>Подача заявления о выдаче сертификата</h2>
            </div>

        <form class="main clear">
              
            <fieldset class="group_1">
                <span class="point_num">1</span>
                <h3>Кто подает заявление</h3>
            
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_1" checked="checked" class="switcher_group" data-for="v_1" /><label for="f_1">Отец</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_2" class="switcher_group" data-for="v_1" /><label for="f_2">Мать</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_3" class="switcher_group" data-for="v_1" /><label for="f_3">Ребенок</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_4" class="switcher_group" data-for="v_1"/><label for="f_4">Представитель</label></em>
                    
                <div class="fields_cover">
                    <em class="wrapper l_100"><input type="radio" name="g_1_1n" id="f_1_1_1" class="switcher_group" data-for="v_2" /><label for="f_1_1_1" >законный представитель, опекун или попечитель несовершеннолетнего или недееспособного лица</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1n" id="f_1_1_2" class="switcher_group" data-for="v_3" /><label for="f_1_1_2">организация, на которую возложено исполнение обязанностей опекуна или попечителя</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1n" id="f_1_1_3"/><label for="f_1_1_3">доверенное лицо</label></em>
                </div>
            </fieldset>

            <div class="switcher_n">
                <fieldset class="group_2">
                    <span class="point_num">2</span>            
                    <h3>Ваши персональные данные <span class="fr">
                    <a href="#0" tabindex="-1">Изменить данные</a> <i class="q">?
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
                </fieldset>
                
                <fieldset class="group_2_1">
                    <span class="point_num">2*</span>            
                    <h3>Наименование и юридический адрес организации</h3>
                
                    <em class="wrapper l_100"><input type="text" placeholder="Наименование организации" class="big" /></em>
                
                    <em class="wrapper l_100">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Выберите регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                </fieldset>
                
                <fieldset class="group_3">
                    <span class="point_num">3</span>
                    <h3>Ваши паспортные данные <span class="fr">
                    <a href="#0" tabindex="-1">Изменить данные</a> <i class="q">?
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
                            <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                    
                    <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
                </fieldset>
                
                <fieldset class="group_4">
                    <span class="point_num">4</span>
                    <h3>Вы хотите получить сертификат на материнский (семейный) капитал или дубликат ранее выданного сертификата?</h3>
                
                    <em class="wrapper l_100"><input type="radio" name="g_1" id="с_1" checked="checked" /><label for="с_1">Российской федерации</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1" id="с_2"/><label for="с_2">Иного государства</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1" id="с_2_2"/><label for="с_2_2">Я лицо без государства</label></em>
                </fieldset>
                
                <fieldset class="group_5">
                    <span class="point_num">5</span>
                    <h3>Укажите адрес вашей постоянной регистрации, как в паспорте</h3>
                
                    <em class="wrapper l_75">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                
                    <em class="wrapper l_100">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                
                    <em class="wrapper l_50">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em><em class="wrapper l_50">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                
                    <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Квартира" class="big" /></em>
                </fieldset>
                
                <fieldset class="group_6">
                    <span class="point_num">6</span>
                    <h3>Сведения о документе, подтверждающем полномочия представителя</h3>
                    
                    <em class="wrapper l_50"><input type="text" placeholder="Документ" class="big" />
                    </em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                    </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" /></em>
                    
                    </em><em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
                </fieldset>
                
                <fieldset class="group_7">
                    <span class="point_num">7</span>
                    <h3>На каком основании выдается сертификат</h3>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
                
                    <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
                    </em><em class="wrapper l_16"><input type="radio" name="sex_4" id="s_1" /><label for="s_1">Мужской</label>
                    </em><em class="wrapper l_16"><input type="radio" name="sex_4" id="s_2" /><label for="s_2">Женский</label></em><br/>
                
                    <em class="wrapper l_33"><input type="text" placeholder="СНИЛС" class="big" /></em><br/>
                
                    <em class="wrapper l_50"><input type="email" placeholder="Адрес электронной почты" class="big" /></em>
                    <em class="wrapper l_33"><input type="tel" placeholder="Контактный телефон" class="big" /></em>
                </fieldset>
                
                <fieldset class="group_8">
                    <span class="point_num">8</span>
                    <h3>Персональные данные ребенка</h3>
                
                    <em class="wrapper l_66">
                        <select class="select_choice">
                            <option value="0" selected="selected" class="selected_one">Очередность рождения или усыновления</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </em>
                    
                    <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
                
                    <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
                    </em><em class="wrapper l_16"><input type="radio" name="sex_2" id="f_4" /><label for="f_4">Мужской</label>
                    </em><em class="wrapper l_16"><input type="radio" name="sex_2" id="f_5" /><label for="f_5">Женский</label></em><br/>
                
                    <em class="wrapper l_66">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                
                    <em class="wrapper l_66">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Гражданство" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em><br/>
                    
                    <em class="wrapper l_25"><input type="text" placeholder="Дата усыновления" class="big" /><i class="not">необязательно</i></em>
                
                    <h4>Данные свидетельства о рождении ребенка</h4>
                
                    <em class="wrapper l_100"><input type="radio" name="g_2" id="с_3" checked="checked" /><label for="с_3">Российской федерации</label></em>
                    <div class="fields_cover">
                        <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                        </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
                        </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em>
                        
                        <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
                    </div>
                    <em class="wrapper l_100"><input type="radio" name="g_2" id="с_4"/><label for="с_4">Иного государства</label></em>
                    <div class="fields_cover">
                        <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                        </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
                        </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em>
                        
                        <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
                    </div>
                
                </fieldset>
                
                <fieldset class="group_9">
                    <span class="point_num">9</span>
                    <h3>Лишались ли вы родительских прав в отношении ребенка (детей)?</h3>
                    <em class="wrapper l_100"><input type="radio" name="g_3" id="с_5" checked="checked" /><label for="с_5">Да</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_3" id="с_6" /><label for="с_6">Нет</label></em>
                    <em class="wrapper l_100"><input type="checkbox" name="g_4" id="с_7"/><label for="с_7">Умышленных преступления, относящихся к преступлениям против личности, в отношении своего ребенка (детей) не совершал</label></em>
                    
                    <em class="wrapper l_100"><input type="checkbox" name="g_4" id="с_8" /><label for="с_8">Об ответственности за достоверность представленных сведений предупреждена (предупрежден)</label></em>
                </fieldset>
                
                <fieldset class="group_10">
                    <span class="point_num">10</span>
                    <h3>Государственный сертификат на материнский (семейный) капитал прошу выдать</h3>
                
                    <em class="wrapper l_100"><input type="radio" name="g_5" id="с_9" checked="checked" /><label for="с_9">в отделении Пенсионного фонда РФ</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_5" id="с_10" /><label for="с_10">по почте</label></em>
                </fieldset>
                
                <fieldset class="group_11">
                    <span class="point_num">11</span>
                    <h3>Государственный сертификат на материнский (семейный) капитал прошу</h3>
                
                    <em class="wrapper l_100"><input type="radio" name="g_6" checked="checked" id="c_9"/><label for="c_9">по месту постоянной регистрации, как в паспорте</label></em>
                    <div class="fields_cover">
                        <em class="wrapper l_75">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_100">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_50">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em><em class="wrapper l_50">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Квартира" class="big" /></em>
                    </div>
                
                    <em class="wrapper l_100"><input type="radio" name="g_6" id="c_10"/><label for="c_10">по месту временного нахождения</label></em>
                
                    <div class="fields_cover">
                        <em class="wrapper l_75">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_100">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_50">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em><em class="wrapper l_50">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Квартира" class="big" /></em>
                    </div>
                
                    <em class="wrapper l_100"><input type="radio" name="g_6" id="c_11"/><label for="c_11">по месту временной регистрации</label></em>
                
                    <div class="fields_cover">
                        <em class="wrapper l_75">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_100">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_50">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Район" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em><em class="wrapper l_50">
                            <div class="search_inp-block">
                                <input type="search" placeholder="Населенный пункт" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                                <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                                <div class="selction_ajax-placeholder"></div>
                            </div>
                        </em>
                
                        <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" />
                        </em><em class="wrapper l_16"><input type="text" placeholder="Квартира" class="big" /></em>
                    </div>
                
                    <h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
                    
                    <div class="map_cover">
                        <div class="map_block" id="map"></div>
                        <div class="map_nav">
                            <h4 class="map_nav_h">Доступны подразделения:</h4>
                            <ul class="map_list">
                                <li class="map_list_item">
                                    <div class="left">
                                        <p><a href="#0"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
                                        <p>Москва, Неглинная, 23</p>
                                    </div>
                                    <div class="right">
                                      <input type="checkbox"/>    
                                    </div>
                                </li>
                                <li class="map_list_item">
                                    <div class="left">
                                        <p><a href="#0"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                                        <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
                                    </div>
                                    <div class="right">
                                      <input type="checkbox"/>    
                                    </div>
                                </li>
                                <li class="map_list_item">
                                    <div class="left">
                                        <p><a href="#0"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
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
                
                <fieldset class="group_12">
                    <h3>Согласие на обработку персональных данных</h3>
                    
                    <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Согласен на обработку персональных данных</label></em>
                    
                    <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_40" /><label for="f_40">Об ответственности за предоставление заведомо ложных сведений,
                    либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>
                </fieldset>
            </div>

            <div class="switcher_n">
                <fieldset class="group_2">
                    <span class="point_num">2</span>            
                    <h3>Ваши персональные данные <span class="fr">
                    <a href="#0" tabindex="-1">Изменить данные</a> <i class="q">?
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
                </fieldset>
            </div>

            <div class="switcher_n">
                <fieldset class="group_2">
                    <span class="point_num">2</span>            
                    <h3>Наименование и юридический адрес организации</h3>
                    
                    <em class="wrapper l_100"><input type="text" placeholder="Наименование организации" class="big" /></em>
                    
                    <em class="wrapper l_100">
                        <div class="search_inp-block">
                            <input type="search" placeholder="Выберите регион" name="country" class="big search_inp search_inp-ajax"/><input type="button" tabindex="-1" class="search_btn" value="P">
                            <input type="search" name="country" id="#autocomplete-ajax-x" tabindex="-1" class="big search_inp search_inp-ajax-x" />
                            <div class="selction_ajax-placeholder"></div>
                        </div>
                    </em>
                </fieldset>
            </div>

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