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

            <!-- <fieldset class="group_2 form-group">
                <em class="wrapper l_100 form-group">
                    <input type="text" class="big form-control" name="username" placeholder="Имя пользователя" 
                        data-bv-notempty="true"
                        data-bv-regexp="true"
                        data-bv-regexp-regexp="^[a-zA-Z0-9_\.]+$"></em>
                <em class="wrapper l_100 form-group">
                    <input type="text" class="big form-control" name="email" placeholder="email" />
                </em>

                
            </fieldset> -->

            <fieldset class="group_6 fileupload">
                <span class="point_num">6</span>
                <h3>Загрузите копии следующих документов</h3>
                
                <ul class="list file_uploader-list">
                    <li class="file_uploader-item">Разворот паспорта, страницы 2 и 3</li>
                    <li class="file_uploader-item">Страницы паспорта с адресом регистрации</li>
                    <li class="file_uploader-item">Ранее выданный охотничий билет</li>
                </ul>

                <em class="wrapper l_100">
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

            <div class="clear last_btn-block form-group">
                <span class="fr">
                    <input class="big btn" type="submit" value="Отправить">
                </span>
              </div>
        </form>
    </div>

<?
include('include/footer.php');
?>       