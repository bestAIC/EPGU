<?
$pagename = 'zamena_psporta_pol';
$pagetitle = 'Замена паспорта';
include('include/head.php');
?>

      <div id="content">
        <div class="title">
          <span class="icomoon color_3">G</span><h1>Замена паспорта гражданина Российской Федерации</h1>
          <h2>В&nbsp;связи с&nbsp;изменением пола</h2>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">         
            <span class="point_num">1</span>
            <h3>Ваши прежние персональные данные <span class="fr">
            <a href="#">Изменить данные</a> <i class="q">?
                <div class="bg_c3 q_hover">
                  <p>Изменение личных данных будет происходить в личном кабинете.</p>
                </div></i>
              </span></h3>          
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
            </em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" checked="checked" /><label>Мужской</label>
            </em><em class="wrapper l_16"><input type="radio" name="sex_1" disabled="disabled" /><label>Женский</label></em><br/>
            
            <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/> 
                                                     
          </fieldset>
                     
          <fieldset class="group_2">
            <ul class="info_column">           
              <li class="info_block type_1">
                <h4>Обратите внимание!</h4>
                <p>Заявление на&nbsp;получение паспорта гражданина&nbsp;РФ будет формироваться от&nbsp;лица гражданина, имеющего данные, указываемые вами в&nbsp;блоке 2. 
                Пожалуйста заполняйте только те&nbsp;данные, которые изменились. 
                Остальные данные будут взяты из&nbsp;блока&nbsp;1</p>
              </li>
            </ul>                      
            <span class="point_num">2</span>

            <h3>Заполните данные, которые хотите изменить</h3>          
            <em class="wrapper l_33"><input name="name_1"  type="text" placeholder="Фамилия" class="big" />
            </em><em class="wrapper l_33"><input name="name_2" type="text" placeholder="Имя" class="big" />
            </em><em class="wrapper l_33"><input name="name_3" type="text" placeholder="Отчество" class="big" /></em><br/>
            
            <em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" /><label>Мужской</label>
            </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label>Женский</label></em><br/>
            
            <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>                                   
          </fieldset>
          
          <fieldset class="group_3">                     
            <span class="point_num">3</span>
            <h3>Загрузите фотографию</h3>          
            <div class="col_left">            
              <div class="load_photo">
                <div class="photo_brd">
                  <img src="img/empty_photo.png" alt=""/>
                </div>
                <a class="btn white small" href="#">
                  <b>Загрузить фотографию</b>
                </a>            
                
              </div>
            </div>
            <div class="col_right">                         
              <h4>Технические требования к фотографии</h4>
              <ul class="list">
                <li>Формат файла: JPEG</li>
                <li>Максимальный размер файла: 300 Кб</li>
                <li>Размеры фотографии 350 х 450 пикселей (ширина к высоте)</li>
                <li>Соотношение сторон фотографии 35 х 45 (не более 12%)</li>
              </ul>
            </div>                                    
          </fieldset>
          
          <fieldset class="group_4">                      
            <span class="point_num">4</span>

            <h3>Сведения о паспорте, подлежащем замене</h3>          
            
            <em class="wrapper l_16"><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
            </em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
            </em><em class="wrapper l_25"><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>            
            </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big"/>
            </em><br/>
            
            <em class="wrapper l_100"><input type="text" placeholder="Место рождения как в паспорте" value="город Москва" class="big" disabled="disabled"/></em>                                       
          </fieldset> 
          
          <fieldset class="group_5">                      
            <span class="point_num">5</span>

            <h3>Имеется ли у вас действующий в настоящий момент загранпаспорт?</h3>          
            
            <em class="wrapper l_100"><input type="radio" name="pass" checked="checked" id="p_1"/><label for="p_1">Нет</label></em>  
                        
            <em class="wrapper l_100"><input type="radio" name="pass" id="p_2"/><label for="p_2">Да</label></em>
            
            <div class="fields_cover">
              <h4>Данные вашего загранпаспорта</h4>
              
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big"/>
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" />
              </em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Действителен до" class="big" /></em>
            
            </div>
                             
          </fieldset>          
                    
          
          <fieldset class="group_6">                      
            <span class="point_num">6</span>

            <h3>Есть или было ли у вас гражданство другого государства?</h3>          
            
            <em class="wrapper l_100"><input type="radio" checked="checked" name="citizenship" id="c_1"/><label for="c_1">Нет, я никогда не имел гражданство другого государства</label></em>
            
            <em class="wrapper l_100"><input type="radio" name="citizenship" id="c_2"/><label for="c_2">Да, у меня имеется по настоящее время гражданство другого государства</label></em>
            <div class="fields_cover">
              <h4>Укажите страну, и дату получения другого гражданства</h4>
              
              <em class="wrapper l_66">
                <select>
                  <option value="" disabled="disabled">Гражданство</option>
                  <option value="1">Белоруссия</option>            
                  <option value="2">Белоруссия</option>
                  <option value="3">Украина</option>
                </select>                  
              </em><em class="wrapper l_33">
                <input type="text" placeholder="Дата вступления" class="big" />  
              </em><br/>
              
              <a class="btn white plus" href="#">
                <span class="icomoon">8</span>
                <b>Добавить данные</b>
              </a>
              
              <h4>Укажите дату вступления в гражданство РФ</h4>
              
              <em class="wrapper l_33">
                <input type="text" placeholder="Дата вступления" class="big" />  
              </em>             
            
            </div>            
            
            
            <em class="wrapper l_100"><input type="radio" name="citizenship" id="c_3" /><label for="c_3">Да, ранее у меня имелось гражданство другого государства</label></em>
            <div class="fields_cover">
              <h4>Укажите страну, и дату получения другого гражданства</h4>
              
              <em class="wrapper l_75">
                <select>
                  <option>Гражданство</option>                
                  <option>Белоруссия</option>
                  <option>Украина</option>
                </select>                  
              </em><em class="wrapper l_25">
                <input type="text" placeholder="Дата" class="big" />  
              </em><br/>
              
              <a class="btn white plus" href="#">
                <span class="icomoon">8</span>
                <b>Добавить данные</b>
              </a>
              
              <h4>Укажите дату вступления в гражданство РФ</h4>
              
              <em class="wrapper l_33">
                <input type="text" placeholder="Дата вступления" class="big" />  
              </em>               
            
            </div>
            
            <em class="wrapper l_100"><input type="radio" name="citizenship" id="c_4" /><label for="c_4">Я являюсь лицом без гражданства</label></em>           
                               
          </fieldset> 
          
          
          <fieldset class="group_7">                      
            <span class="point_num">7</span>

            <h3>Семейное положение <i class="q">?
              <div class="bg_c3 q_hover">
                <h4>Пример свидетельства о заключении брака и свидетельства о расторжении брака.</h4>
                <p>Красным цветом выделена информация, которая поможет вам заполнить формы.</p>
                <img src="img/doc_group_3.png" alt=""/>                                
              </div></i>
            </h3> 
            
            <em class="wrapper l_100"><input type="radio" name="family_status" checked="checked" id="f_s_1"/><label for="f_s_1">Никогда не был женат</label></em>                     
            
            <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_2"/><label for="f_s_2">Женат</label></em>
            <div class="fields_cover">
              <h4>Персональные данные супруга</h4>
              
              <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
              </em>
              
              <h4>Сведения о документе, подтверждающем ваше семейное положение</h4>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата вступления в брак" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Актовая запись" class="big" /></em><br/>
              <em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" />
              </em><em class="wrapper l_66"><input type="text" placeholder="Кем выдан" class="big" />
              </em>             
            
            </div>                        
            
            <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_3"/><label for="f_s_3">Вдовец</label></em>
            <div class="fields_cover">
              <h4>Персональные данные супруга</h4>
              
              <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
              </em>          
            
            </div>              

            <em class="wrapper l_100"><input type="radio" name="family_status" id="f_s_4"/><label for="f_s_4">Разведен</label></em>
            <div class="fields_cover">
              <h4>Персональные данные супруга</h4>
              
              <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
              </em>
              
              <h4>Сведения о документе, подтверждающем ваше семейное положение</h4>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата вступления в брак" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Актовая запись" class="big" /></em><br/>
              <em class="wrapper l_33"><input type="text" placeholder="Дата выдачи" class="big" />
              </em><em class="wrapper l_66"><input type="text" placeholder="Кем выдан" class="big" />
              </em>             
            
            </div>             
                               
          </fieldset>
          
          <fieldset class="group_8">                      
            <span class="point_num">8</span>

            <h3>Есть ли у вас несовершеннолетние дети?</h3> 
            
            <em class="wrapper l_100"><input type="radio" checked="checked" name="chaild" id="ch_1"/><label for="ch_1">Нет</label></em>                       
            
            <em class="wrapper l_100"><input type="radio" name="chaild" id="ch_2"/><label for="ch_2">Да</label></em>
            
            <div class="fields_cover">
              <h4>Укажите страну ФИО ребенка</h4>
              
              <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
              
              <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
              </em><em class="wrapper l_16"><input type="radio" checked="checked" name="chaild_sex" /><label>Мужской</label>
              </em><em class="wrapper l_16"><input type="radio" name="chaild_sex" /><label>Женский</label></em><br/>
              
              <a class="btn white plus" href="#">
                <span class="icomoon">8</span>
                <b>Добавить данные</b>
              </a>
            
            </div>
                             
          </fieldset>                     
          
          <fieldset class="group_9">                    
            <span class="point_num">9</span>
            <h3>Укажите данные родителей как в свидетельстве о рождении <i class="q">?
              <div class="bg_c3 q_hover">
                <h4>Пример свидетельства о рождении</h4>
                <p>Красным цветом выделена информация, которая поможет вам заполнить формы.</p>
                <img src="img/doc_group_2.png" alt=""/>
                                
              </div></i>
            </h3>
            
            <h4>Сведения об отце</h4>         
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
            
            <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
            </em><br/>

            <h4>Сведения о матери</h4>         
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /><i class="not">необязательно</i></em><br/>
            
            <em class="wrapper l_33"><input type="text" placeholder="Дата рождения" class="big" />
            </em>            
                                                
          </fieldset> 
                    
                   
          
          <fieldset class="group_10">                      
            <span class="point_num">10</span>

            <h3>Куда вы будете подавать оригиналы документов?</h3>          
            
            <em class="wrapper l_100"><input type="radio" checked="checked" name="place" id="pl_1" /><label for="pl_1">по месту жительства (как в паспорте), срок оказания услуги составит 10 дней</label></em>
            <div class="fields_cover">

              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
            
            </div>            
            
            <em class="wrapper l_100"><input type="radio" name="place" id="pl_2" /><label for="pl_2">по месту пребывания, срок оказания услуги составит до 2-x месяцев</label></em>                        
            <div class="fields_cover">

              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
            
            </div>
            
            <em class="wrapper l_100"><input type="radio" name="place" id="pl_3" /><label for="pl_3">по месту фактического проживания, срок оказания услуги составит 2 месяца</label></em> 
            <div class="fields_cover">

              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>
            
            </div>             
                                                      
          </fieldset>
          
          <fieldset class="group_11">                      
            <span class="point_num">11</span>

            <h3>Для подачи заявления необходимо выбрать отделение УФМС</h3>                               
            
            <div class="map_cover clear">
            
              <div class="col_left"> 
                <ul>
                  <li>
                    <p><b>Межрайонный отдел УФМС России по Влад...</b></p>
                    <p>г. Александров, Первомайская, 68</p>
                  </li>                
                </ul>
              </div>
              <div class="col_right"> 
                <img src="img/map_2.jpg" width="415" height="415" alt=""/>
              </div>           
            
            </div>
                             
          </fieldset> 
          
          <fieldset class="group_12">                      

            <h3>Согласие на обработку персональных данных</h3>          
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" /><label>Согласен на обработку персональных данных</label></em>
            
            <em class="wrapper skew l_100"><input type="checkbox" checked="checked" /><label>Об ответственности за предоставление заведомо ложных сведений,
             либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>           
                                                   
          </fieldset>                                                                                               
          
          <span class="fr">
            <a class="btn big" href="presentation_step_4.html"><b>Отправить</b></a>
              <!-- <input class="big btn" type="submit" value="Отправить">
               -->
          </span>                     
                             
        </form>                      
        
      </div>

<?
include('include/footer.php');
?> 