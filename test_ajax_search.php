<?
$pagename = 'detskiy_sad';
$pagetitle = 'Тестовая страница AJAX autocomplete';
include('include/head.php');
?>

            <ul class="breadcrumbs">
                <li class="first"><a href="#0" tabindex="-1"><span class="icomoon">7</span>Главная</a></li>
                <li class="last"><span>AJAX autocomplete</span></li>
            </ul>
        </div>
    </div>

    <div id="content">
        <div class="title">
            <span class="icomoon color_4">Y</span><h1>Тестовая страница AJAX autocomplete</h1>
        </div>
        
          
        <form class="main clear" id="profileForm">
            <fieldset class="group_1">
            <span class="point_num">1</span>

            <h3>Типы запросов</h3>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Страна" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" class="big search_inp search_inp-ajax-x" tabindex="-1"/>
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Поиск по стране" name="country" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" class="big search_inp search_inp-ajax-x" tabindex="-1"/>
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Населенный пункт" name="cities" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder" ></div>
                    </div>
                </em>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Регион" name="region" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Район" name="areas" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Гражданство" name="nationality" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
                <em class="wrapper l_100">
                    <div class="search_inp-block">
                        <input type="search" placeholder="Поиск по адресу" name="adress" class="big search_inp search_inp-ajax"/><input type="button" class="search_btn" value="P" tabindex="-1">
                        <input type="search" id="autocomplete-ajax-x" class="big search_inp search_inp-ajax-x" tabindex="-1" />
                        <div class="selction_ajax-placeholder"></div>
                    </div>
                </em>
            </fieldset>

            <fieldset class="group_2 form-group">
                <em class="wrapper l_100 form-group">
                    <input type="text" class="big form-control" name="username" placeholder="Имя пользователя" 
                        data-bv-notempty="true"
                        data-bv-regexp="true"
                        data-bv-regexp-regexp="^[a-zA-Z0-9_\.]+$"></em>
                <em class="wrapper l_100 form-group">
                    <input type="text" class="big form-control" name="email" placeholder="email" />
                </em>

                <div class="clear last_btn-block form-group">
                    <span class="fr">
                        <input class="big btn" type="submit" value="Отправить">
                    </span>
                  </div>
            </fieldset>
        </form>
    </div>

<?
include('include/footer.php');
?>       