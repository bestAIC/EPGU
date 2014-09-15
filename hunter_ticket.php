<?
$pagename = 'hunter_ticket';
$pagetitle = 'Заявление на оформление охотничего билета';
include('include/head.php');
?>

        <ul class="breadcrumbs">
            <li class="first"><a href="#0" tabindex="-1"><span class="icomoon">7</span>Главная</a></li>
            <li class="last"><span>Заявление на оформление охотничего билета</span></li>
        </ul>
    </div>
</div>

<div id="content">
    <div class="title">
        <span class="icomoon color_3">i</span>
        <h1>Заявление на оформление охотничего билета</h1>
    </div>

<form class="main clear">
    <fieldset class="group_1">
        <span class="point_num">1</span>            
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
        </em><em class="wrapper l_16"><input type="radio" name="sex_1_v_1" disabled="disabled" checked="checked" /><label>Мужской</label>
        </em><em class="wrapper l_16"><input type="radio" name="sex_1_v_1" disabled="disabled" /><label>Женский</label></em><br/>
        
        <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="alexandr_k@bestmail.ru" disabled="disabled"/>
        </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7 912 200-00-02" disabled="disabled"/></em><br/>
    </fieldset>

    <fieldset class="group_2">
        <span class="point_num">2</span>
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
                <input type="search" placeholder="Страна рождения" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                <input type="search" class="big search_inp search_inp-ajax-x" name="country" tabindex="-1"/>
                <div class="selction_ajax-placeholder" name="country"></div>
            </div>
        </em>
        
        <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>
    </fieldset>

    <fieldset class="group_3">
        <span class="point_num">3</span>
        <h3>Загрузите свою фотографию</h3>
        <div class="col_top">
            <h4>Требования к фотографии</h4>
            <ul class="list">
                <li>Черно-белая или цветная фотография формата JPEG. Размер файла 200–500 кБ.</li>
                <li>Фон: белый, светло-голубой или светло-серый.</li>
                <li>Головные уборы допускаются (по религиозным причинам), но они не должны скрывать овал лица.</li>
            </ul>
            <div class="more_info">
                <span class="pseudo popup_link"><em class="popup_technical">Все требования</em></span>
            </div>
        </div>
        <div class="col_left">
            <div class="load_photo">
                <div class="photo_brd">
                    <img src="pic/pic_7.jpg" alt="" width="180" height="236">
                    <div class="load_photo-sub">
                        <div class="sub_wrap">
                            <div class="sub_line sub_line_1"><span class="sub_txt">Голова не должна быть выше этой линии</span></div>
                        </div>
                        <div class="sub_wrap">
                            <div class="sub_line sub_line_2"><span class="sub_txt">Глаза должны быть на уровне этой линии</span></div>
                        </div>
                        <div class="sub_wrap">
                            <div class="sub_line sub_line_3"><span class="sub_txt">Плечи должны быть на уровне этой линии</span></div>
                        </div>
                    </div>
                </div>
                <div class="load_photo-btn">
                    <a class="btn white small" href="#0" tabindex="-1">
                        <b>Загрузить фотографию</b>
                    </a>
                </div>
            </div>
            <!-- При ошибке к классу .advice_upload необходимо добавить класс .error; При успешной загрузке, класс .upload -->
            <div class="advice_upload">
                <div class="advice type_not">
                    <div class="advice_h">
                        <div class="advice_ico"><span class="icomoon">3</span></div>
                        <h2><span>Извините, ваша фотография не подходит</span></h2>
                    </div>
                </div>
                <div class="advice type_ok">
                    <div class="advice_h">
                        <div class="advice_ico"><span class="icomoon">4</span></div>
                        <h2><span>Ваша фотография успшно загружена</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_right">
            <ul class="list edit_list">
                <li><div class="lnk"><button class="icomoon">Q</button><span class="txt">Повернуть по часовой</span></div></li>
                <li><div class="lnk"><button class="icomoon">R</button><span class="txt">Повернуть против часовой</span></div></li>
                <li><div class="lnk"><button class="icomoon">S</button><span class="txt">Обрезать фотографию</span></div></li>
                <li><div class="lnk"><button class="icomoon">T</button><span class="txt">Отменить последнее действие</span></div></li>
            </ul>
        </div>
    </fieldset>

    <fieldset class="group_4">
        <span class="point_num">4</span>
        <h3>Имеется ли у вас ранее выданный охотничий билет?</h3>
        
        <em class="wrapper l_100"><input type="radio" name="g_4" checked="checked" id="p_1"/><label for="p_1">Нет</label></em>
        
        <em class="wrapper l_100"><input type="radio" name="g_4" id="p_2"/><label for="p_2">Да</label></em>
        
        <div class="fields_cover">
            <h4>Данные охотничего билета</h4>
            
            <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
            </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
            
            <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
            </em><br/>
            
        </div>
    </fieldset>

    <fieldset class="group_5">
        <span class="point_num">5</span>
        <h3>Ваш социальный статус</h3>
        
        <em class="wrapper l_100"><input type="radio" name="g_5" checked="checked" id="i_3"/><label for="i_3">Пенсионер</label></em>

        <em class="wrapper l_100"><input type="radio" name="g_5" id="i_4"/><label for="i_4">Неработающий</label></em>

        <em class="wrapper l_100"><input type="radio" name="g_5" id="i_5"/><label for="i_5">Нетрудоспосообный</label></em>
        
        <em class="wrapper l_100"><input type="radio" name="g_5" id="i_6"/><label for="i_6">Работающий</label></em>
        
        <div class="fields_cover">
            <h4>Данные органицации</h4>
            
            <em class="wrapper l_66"><input type="text" placeholder="Наименование организации работодателя" class="big"/>
            </em><em class="wrapper l_100"><input type="text" placeholder="Адрес организации работадателя" class="big" />
            </em><em class="wrapper l_66"><input type="text" placeholder="Ваша должность" class="big" />
            </em><em class="wrapper l_33"><input type="num" placeholder="Контактный телефон" class="big" /></em>
            
        </div>
    </fieldset>

    <fieldset class="group_6">
        <span class="point_num">6</span>
        <h3>Загрузите копии следующих документов</h3>
        
        <ul class="list">
            <li>Разворот паспорта, страницы 2 и 3</li>
            <li>Страницы паспорта с адресом регистрации</li>
            <li>Ранее выданный охотничий билет</li>
        </ul>

        <em class="wrapper l_100 fileupload">
            <div class="file_uploader-block" id="dropzone">
            <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
                <span class="btn-success fileinput-button">
                    <i class="icomoon icomoon-plus"></i>
                    <span class="file_uploader-txt fase well">Перетащите файлы сюда или</span>
                    <span>загрузите вручную</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input class="file_uploader-inp" type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn file_uploader_btn-none btn-primary start">
                    <i class="icomoon icomoon-upload">2</i>
                </button>
                <button type="reset" class="btn file_uploader_btn-none btn-warning cancel">
                    <i class="icomoon icomoon-ban-circle">3</i>
                </button>
                <button type="button" class="btn file_uploader_btn-none btn-danger delete">
                    <i class="icomoon icomoon-trash">(</i>
                    <span>Delete</span>
                </button>
                <!-- The table listing the files available for upload/download -->
                <div role="presentation" class="file_upload-present"><div class="files"></div></div>
            </div>
            <p class="file_uploader-require"><strong>Данный формат для загрузки файлов: pdf, doc, xls, jpg. Размер файла не должен превышать 5000 Kb.</strong></p>
        </em>
    </fieldset>

    <fieldset class="group_7">
        <span class="point_num">7</span>
        <h3>Куда вы будете подавать оригиналы документов?</h3>
        
        <em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="pl_1" /><label for="pl_1">По месту жительства, как в паспорте (срок оказания услуги составит 10 дней)</label></em>
        <div class="fields_cover">
            <em class="wrapper l_100">
                <div class="search_inp-block">
                    <input type="search" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder"></div>
                </div>
            </em>
            
            <em class="wrapper l_50">
                <div class="search_inp-block">
                    <input type="search" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder"></div>
                </div>
            </em><em class="wrapper l_50">
                <div class="search_inp-block">
                    <input type="search" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder" ></div>
                </div>
            </em>
            
            <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
            </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
            </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
            </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
            
        </div>
        
        <em class="wrapper l_100"><input type="radio" name="place" id="pl_2" /><label for="pl_2">По месту пребывания (срок оказания услуги составит до 2-x месяцев)</label></em>
        <div class="fields_cover">
            <em class="wrapper l_100">
                <div class="search_inp-block">
                    <input type="search" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder"></div>
                </div>
            </em>
            
            <em class="wrapper l_50">
                <div class="search_inp-block">
                <input type="search" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                <div class="selction_ajax-placeholder"></div>
            </div>
            </em><em class="wrapper l_50">
                <div class="search_inp-block">
                    <input type="search" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder" ></div>
                </div>
            </em>

            <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
            </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
            </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
            </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
            
        </div>
        
        <em class="wrapper l_100"><input type="radio" name="place" id="pl_3" /><label for="pl_3">По месту фактического проживания (срок оказания услуги составит 2 месяца)</label></em>
        <div class="fields_cover">
            <em class="wrapper l_100">
                <div class="search_inp-block">
                    <input type="search" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder"></div>
                </div>
            </em>
            
            <em class="wrapper l_50">
                <div class="search_inp-block">
                <input type="search" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                <div class="selction_ajax-placeholder"></div>
            </div>
            </em><em class="wrapper l_50">
                <div class="search_inp-block">
                    <input type="search" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                    <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                    <div class="selction_ajax-placeholder" ></div>
                </div>
            </em>

            <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
            </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
            </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
            </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
            
        </div>
        <h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
        
        <div class="map_cover">
            <div class="map_block" id="map"></div>
            <div class="map_nav">
                <h4 class="map_nav_h">Доступны подразделения:</h4>
                <ul class="map_list">
                    <li class="map_list_item">
                        <div class="left">
                            <p><a href="#0" tabindex="-1"><span class="map_num">1</span><span class="map_txt">ИФНС России №1 по г.Москве</span></a></p>
                            <p>Москва, Неглинная, 23</p>
                        </div>
                        <div class="right">
                          <input type="checkbox"/>    
                        </div>
                    </li>
                    <li class="map_list_item">
                        <div class="left">
                            <p><a href="#0" tabindex="-1"><span class="map_num">2</span><span class="map_txt">МИФНС России №46 по г.Москве (Залы обслуживания № 3,4,5)</span></a></p>
                            <p>В составе ИФНС России № 1 по г. Москве. Москва. Походный пр-д, 3, стр. 2</p>
                        </div>
                        <div class="right">
                          <input type="checkbox"/>    
                        </div>
                    </li>
                    <li class="map_list_item">
                        <div class="left">
                            <p><a href="#0" tabindex="-1"><span class="map_num">3</span><span class="map_txt">ИФНС России № 34 по г. Москве</span></a></p>
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