<?
$pagename = 'detskiy_sad';
$pagetitle = 'Запись в детский сад';
include('include/head.php');
?>

                <ul class="breadcrumbs">
                    <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
                    <li class="last"><span>Постановка на регистрацию</span></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="title">
                <span class="icomoon color_4">]</span><h1>Распоряжение материнским (семейным) капиталом</h1>
            </div>

        <form class="main clear">
              
            <fieldset class="group_1">
                <span class="point_num">1</span>
                <h3>Кто подает заявление</h3>
            
                <em class="wrapper l_100"><input type="radio" name="g_1" checked="checked" id="c_1"/><label for="c_1">Лично</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_1"/><label for="f_1">мать</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_2"/><label for="f_2">отец</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_3"/><label for="f_3">ребенок</label></em>
                </div>
                
                <em class="wrapper l_100"><input type="radio" name="g_1" id="c_2"/><label for="c_2">Я представитель</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_4"/><label for="f_4">мать</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_5"/><label for="f_5">отец</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_6"/><label for="f_6">ребенок</label></em>
                </div>
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

            <fieldset class="group_4">
                <span class="point_num">4</span>
                <h3>Реквизиты государственного сертификата</h3>
                
                <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
                </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em>
                
                <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
            </fieldset>

            <fieldset class="group_5">
                <span class="point_num">5</span>
                <h3>Персональные данные ребенкка</h3>
                
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em>
                
                <em class="wrapper l_33"><input type="text" placeholder="Дата рождения (усыновления)" class="big" />
                </em><em class="wrapper l_16"><input type="radio" name="sex_2" id="f_7" /><label for="f_7">Мужской</label>
                </em><em class="wrapper l_16"><input type="radio" name="sex_2" id="f_8" /><label for="f_8">Женский</label></em>
            </fieldset>

            <fieldset class="group_6">
                <span class="point_num">6</span>            
                <h3>Прошу предостваить часть средств материнского капитала</h3>
                
                <em class="wrapper l_100"><input type="radio" name="g_2" checked="checked" id="c_3"/><label for="c_3">на улучшение жилищных условий</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_25"><input type="text" placeholder="Сумма" class="big" /></em>

                    <h4>Наименование организации</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>

                    <h4>Банковские реквизиты организации</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="ИНН" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="БИК" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="КПП" class="big" /></em>

                    <em class="wrapper l_50"><input type="text" placeholder="Расчетный счет" class="big" />
                    </em><em class="wrapper l_50"><input type="text" placeholder="Кор. счет" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="ОКАТО" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="ОКТМО" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="КБК" class="big" /></em>
                </div>
                
                <em class="wrapper l_100"><input type="radio" name="g_2" id="c_4"/><label for="c_4">на получения образования</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_25"><input type="text" placeholder="Сумма" class="big" /></em>

                    <h4>Договор на обучение</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>

                    <h4>Банковские реквизиты учебного заведения</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="ИНН" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="БИК" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="КПП" class="big" /></em>

                    <em class="wrapper l_50"><input type="text" placeholder="Расчетный счет" class="big" />
                    </em><em class="wrapper l_50"><input type="text" placeholder="Кор. счет" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="ОКАТО" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="ОКТМО" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="КБК" class="big" /></em>
                </div>

                <em class="wrapper l_100"><input type="radio" name="g_2" id="c_5"/><label for="c_5">на формирование накопительной пенсии</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_25"><input type="text" placeholder="Сумма" class="big" /></em>

                    <h4>Наименование пенсионного фонда</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>

                    <h4>Банковские реквизиты пенсионного фонда</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="ИНН" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="БИК" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="КПП" class="big" /></em>

                    <em class="wrapper l_50"><input type="text" placeholder="Расчетный счет" class="big" />
                    </em><em class="wrapper l_50"><input type="text" placeholder="Кор. счет" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="ОКАТО" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="ОКТМО" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="КБК" class="big" /></em>
                </div>
            </fieldset>

            <fieldset class="group_7">
                <span class="point_num">7</span>            
                <h3>Вы являетесь владельцем жилого помещеиня</h3>
                
                <em class="wrapper l_100"><input type="radio" name="g_3" id="c_6" checked="checked" /><label for="c_6">да</label></em>
                <div class="fields_cover">
                    <h4>Персональные данные владельца жилого помещения</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Фамилия" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em>

                    <em class="wrapper l_33"><input type="text" placeholder="Дата рождения (усыновления)" class="big" />
                    </em><em class="wrapper l_16"><input type="radio" name="sex_3" id="f_9" /><label for="f_9">Мужской</label>
                    </em><em class="wrapper l_16"><input type="radio" name="sex_3" id="f_10" /><label for="f_10">Женский</label></em>
                </div>

                <em class="wrapper l_100"><input type="radio" name="g_3" id="c_7"/><label for="c_7">нет</label></em>
                <div class="fields_cover">
                    <h4>Договор на обучение</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Введите название" class="big" /></em>

                    <h4>Персональные данные владельца жилого помещения</h4>
                    <em class="wrapper l_100"><input type="text" placeholder="Фамилия" class="big" /></em>
                    <em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                    </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em>

                    <em class="wrapper l_33"><input type="text" placeholder="Дата рождения (усыновления)" class="big" />
                    </em><em class="wrapper l_16"><input type="radio" name="sex_4" id="f_11" /><label for="f_11">Мужской</label>
                    </em><em class="wrapper l_16"><input type="radio" name="sex_4" id="f_12" /><label for="f_12">Женский</label></em>
                </div>
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