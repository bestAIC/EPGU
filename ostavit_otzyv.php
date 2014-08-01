<?
$pagename = 'ostavit_otzyv';
$pagetitle = 'Оставить отзыв';
include('include/head.php');
?>
          <ul class="breadcrumbs">
            <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>       
            <li class="last"><span>Оставить отзыв</span></li>
          </ul>          
        </div>
      </div>

      <div id="content">
        <div class="title">
          <img src="img/ico_gibdd.png" alt=""/><h1>Оставить отзыв</h1>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">
            <em class="wrapper l_100">
              <textarea placeholder="Сообщение"></textarea>
            </em>
             
            <em class="wrapper l_100">             
              <div id="drop_zone">
                <h4>Перетащите файлы сюда или <a href="#">загрузите вручную</a> (суммарно не больше 10Мб)</h4>
                <p>Загруженные файлы<nobr>.pdf</nobr><b class="file_progress_line"><span style="width:40%"></span></b></p>
                <p>Загруженные файлы<nobr>.pdf</nobr><span class="file_error">Ошибка загрузки</span></p>
                <p>Загруженные файлы<nobr>.pdf</nobr><span class="file_done">2,78 Мб</span></p>
              </div> 
            </em>
            
            <h3>Для получения ответа оставьте контактные данные</h3>
            <em class="wrapper l_50"><input type="text" placeholder="ФИО" class="big" />
            </em><em class="wrapper l_25"><input type="text" placeholder="E-mail" class="big" />
            </em><em class="wrapper l_25"><input type="text" placeholder="Телефон" class="big" /></em><br/>
            
            
            <div class="clear">
              <span class="fr"><input class="big btn" type="submit" value="Отправить"></span>
            </div>             
            
          </fieldset>          
                             
        </form>                       
        
      </div>
    </div>  
    <div id="footer">
      <ul class="col_cover">
        <li class="left">
          <p>Официальный интернет-портал<br/>Российской Федерации, 2014 г.</p>
        </li>
        <li class="right">
          <span class="phones">
            8 800 100-70-10<br/>
            +7 499 550-18-39
          </span>
          <div class="foot_lnk">
            <a href="#">support@gosuslugi.ru</a><br/>
            <a href="#">Оставить отзыв</a>
          </div>
        </li>
      </ul>
    </div>  
  </div>
  
<script src="js/jquery.placeholders.min.js"></script>  
</body>
</html>