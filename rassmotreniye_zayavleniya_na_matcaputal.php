<?
$pagename = 'mat_capital';
$pagetitle = 'Рассмотрение заявление о выдаче государственного сертификата на материнский (семейный) капитал ';
include('include/head.php');
?>

                <ul class="breadcrumbs">
                    <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>
                    <li class="last"><span>Заявление о выдаче или замене паспорта</span></li>
                </ul>
            </div>
        </div>

        <div id="content">
            <div class="title">
                <span class="icomoon color_4">]</span><h1>Рассмотрение заявление о выдаче государственного сертификата на материнский (семейный) капитал </h1>
            </div>

        <form class="main clear">
              
            <fieldset class="group_1">
                <span class="point_num">1</span>
                <h3>Кто подает заявление</h3>
            
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_1"/><label for="f_1">отец</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_2"/><label for="f_2">мать</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_3"/><label for="f_3">ребенок</label></em>
                    <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_3_n"/><label for="f_3_n">законный представитель</label></em>
            </fieldset>

            <fieldset class="group_2">
                <span class="point_num">2</span>            
                <h3>Ваши персональные данные <span class="fr">
                <a href="#">Изменить данные</a> <i class="q">?
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
                <a href="#">Изменить данные</a> <i class="q">?
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
                        <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                
                <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
            </fieldset>

            <fieldset class="group_4">
                <span class="point_num">4</span>
                <h3>Вы хотите получить сертификат на материнский (семейный) капитал или дубликат ранее выданного сертификата?</h3>

                <em class="wrapper l_100"><input type="radio" name="g_1" checked="checked" id="c_1"/><label for="c_1">сертификат</label></em>
                <div class="fields_cover">
                    <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                    </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
                    </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em>
                    
                    <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
                </div>

                <em class="wrapper l_100"><input type="radio" name="g_1" id="c_2"/><label for="c_2">дубликат сертификата</label></em>

                <div class="fields_cover">
                    <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
                    </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
                    </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em>
                    
                    <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em>
                </div>
            </fieldset>

            <fieldset class="group_5">
                <span class="point_num">5</span>
                <h3>Лишались ли вы родительских прав в отношении данного ребенка (детей)?</h3>

                <em class="wrapper l_100"><input type="radio" name="g_2" checked="checked" id="c_3"/><label for="c_3">да</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_2" id="c_4"/><label for="c_4">нет</label></em>
            </fieldset>

            <fieldset class="group_6">
                <span class="point_num">6</span>
                <h3>Совершали ли вы умышленные преступления, относящиеся к преступлениям против личности, в отношении своего ребенка (детей)</h3>
                
                <em class="wrapper l_100"><input type="radio" name="g_2" checked="checked" id="c_5"/><label for="c_5">да</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_2" id="c_6"/><label for="c_6">нет</label></em>
            </fieldset>

            <fieldset class="group_7">
                <span class="point_num">7</span>
                <h3>На каком основании выдается сертификат</h3>
                
                <em class="wrapper l_100"><input type="radio" name="g_2" checked="checked" id="c_7"/><label for="c_7">рождение ребенка</label></em>
                <em class="wrapper l_100"><input type="radio" name="g_2" id="c_8"/><label for="c_8">усыновление ребенка</label></em>
            </fieldset>

            <fieldset class="group_8">
                <span class="point_num">8</span>
                <h3>Персональные данные ребенка</h3>

                <em class="wrapper l_66">
                    <select class="select_choice">
                        <option value="0" selected="selected" class="selected_one">Очередность усыновления</option>
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

                <em class="wrapper l_66">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>

                <em class="wrapper l_66">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Граждансвто" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em><br/>
                
                <em class="wrapper l_25"><input type="text" placeholder="Дата усыновления" class="big" /></em>
            </fieldset>

            <fieldset class="group_9">
                <span class="point_num">9</span>
                <h3>Сведения о документе, удостоверяющем личность ребенка</h3>

                <em class="wrapper l_66">
                    <select class="select_choice">
                        <option value="0" selected="selected" class="selected_one">Тип документа</option>
                        <option value="1">Паспорт</option>
                        <option value="2">Свидетельство о рождении</option>
                    </select>
                </em>
                
                <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em>
                
                </em><em class="wrapper l_100"><input type="text" placeholder="Отчество" class="big" /></em>

                <em class="wrapper l_66">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>

                <em class="wrapper l_66">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Граждансвто" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P">
                        <input type="search" name="country" id="#autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em><br/>
                
                <em class="wrapper l_25"><input type="text" placeholder="Дата усыновления" class="big" /></em>
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