<?
$pagename = 'snatie_s_registracii';
$pagetitle = 'Снятие с регистрационного учета';
include('include/head.php');
?>

      <div id="content">
        <div class="title">
          <span class="icomoon color_3">G</span><h1>Снятие с регистрационного учёта</h1>
          <h2>по месту жительства</h2>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">         
            <span class="point_num">1</span>
            <h3>Тип заявителя</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_1" id="f_1" checked="checked" /><label for="f_1">Я подаю заявление за самого себя, мне есть 18 лет</label></em>  
            <em class="wrapper l_100"><input type="radio" name="g_1" id="f_2"/><label for="f_2">Я подаю заявление за самого себя, мне нет 18 лет (14-18)</label></em>                         
            <em class="wrapper l_100"><input type="radio" name="g_1" id="f_3"/><label for="f_3">Я - законный представитель несовершеннолетнего</label></em>            
            <div class="fields_cover">
              <h4>Кем вы приходитесь получателю услуги?</h4>                            
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_4"/><label for="f_4">Отец</label></em>              
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_5"/><label for="f_5">Мать</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_6"/><label for="f_6">Опекун</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_7"/><label for="f_7">Попечитель</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_8"/><label for="f_8">Иное</label></em>
              <em class="wrapper l_100"><input type="text" placeholder="Ваш вариант" class="big" disabled="disabled"/></em>
            </div>            
            <em class="wrapper l_100"><input type="radio" name="g_1" id="f_9"/><label for="f_9">Я - законный представитель недееспособного, либо иного лица</label></em>
            <div class="fields_cover">
              <h4>Кем вы приходитесь получателю услуги?</h4>                            
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_10"/><label for="f_10">Отец</label></em>              
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_11"/><label for="f_11">Мать</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_12"/><label for="f_12">Опекун</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_13"/><label for="f_13">Попечитель</label></em>
              <em class="wrapper l_100"><input type="radio" name="g_1_1" id="f_14"/><label for="f_14">Иное</label></em>
              <em class="wrapper l_100"><input type="text" placeholder="Ваш вариант" class="big" disabled="disabled"/></em>
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
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big"  disabled="disabled"/>
            </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" checked="checked" /><label>Мужской</label>
            </em><em class="wrapper l_16"><input type="radio" name="sex_2" disabled="disabled" /><label>Женский</label></em><br/>            
            
            <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" value="test@test.ru" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" value="+7(926)867 09 09" disabled="disabled"/></em><br/>                                 
          </fieldset>
          
          <fieldset class="group_3">                     
            <span class="point_num">3</span>
            <h3>Ваши паспортные данные</h3>          
            <em class="wrapper l_16"><input type="text" placeholder="Серия" value="1100" class="big" disabled="disabled"/>
            </em><em class="wrapper l_25"><input type="text" placeholder="Номер" value="1100111000" class="big" disabled="disabled"/>
            </em><em class="wrapper l_33"><input type="text" placeholder="Код подразд-я" value="111-000" class="big" disabled="disabled"/>            
            </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" value="01.01.2014" disabled="disabled"/></em><br/>
            
            <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" value="Отделением УФМС России" disabled="disabled"/>
            </em>                                    
          </fieldset>
          
          <fieldset class="group_4">                      
            <span class="point_num">4</span>
            <h3>Персональные данные получателя услуги</h3>          
            <em class="wrapper l_33"><input type="text" placeholder="Фамилия"  class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Имя" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Отчество" class="big" /></em><br/>
            
            <em class="wrapper l_25"><input type="text" placeholder="Дата рождения" class="big" />
            </em><em class="wrapper l_16"><input type="radio" name="sex_1" checked="checked" /><label>Мужской</label>
            </em><em class="wrapper l_16"><input type="radio" name="sex_1" /><label>Женский</label></em><br/>
            
            <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" />
            </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em><br/>                                                             
          </fieldset> 
          
          <fieldset class="group_5">                      
            <span class="point_num">5</span>
            <h3>Документ, удостоверяющий личность получателя услуги</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_2" id="f_15" checked="checked" /><label for="f_15">Паспорт</label></em>
            <div class="fields_cover">
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Код подразд-я" class="big" />            
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдан" class="big" /></em> 
              
              <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>                          
            </div>               
            <em class="wrapper l_100"><input type="radio" name="g_2" id="f_16"/><label for="f_16">Свидетельство о рождении</label></em>                                  
            <div class="fields_cover">
              <em class="wrapper l_16"><input type="text" placeholder="Серия" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Номер" class="big" />
              </em><em class="wrapper l_33"><input type="text" placeholder="Номер акт. записи" class="big" />            
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em><br/>
              
              <em class="wrapper l_100"><input type="text" placeholder="Кем выдано" class="big" /></em> 
              
              <em class="wrapper l_100"><input type="text" placeholder="Место рождения" class="big" /></em>                            
            </div>                                         
          </fieldset> 
          
          <fieldset class="group_6">                      
            <span class="point_num">6</span>
            <h3>Старый адрес постоянной регистрации получателя услуги</h3>          
              <em class="wrapper l_100">
                <select>            
                  <option>Выберете регион</option>
                </select>                  
              </em>                  
          </fieldset>                    
                              
          <fieldset class="group_7">                      
            <span class="point_num">7</span>
            <h3>Имеет ли получатель услуги постоянную регистрацию?</h3>          
            <em class="wrapper l_100"><input type="radio" name="g_3" id="f_17" checked="checked"/><label for="f_17">Да</label></em>
            <div class="fields_cover">
              <h4>Адрес текущего места постоянной регистрации <i class="q">?
              <div class="bg_c3 q_hover">
                <h4>Тест</h4>
                <p>тест</p>                               
              </div></i></h4>                            
              <em class="wrapper l_100"><input type="text" placeholder="Выберите регион" class="big" /></em>
              
              <em class="wrapper l_25"><input type="text" placeholder="Дата регистрации" class="big" /></em> 
            </div>           
            <em class="wrapper l_100"><input type="radio" name="g_3" id="f_18"/><label for="f_18">Нет</label></em>                   
          </fieldset>                    
          
          <fieldset class="group_8">                      
            <span class="point_num">8</span>
            <h3>Причина снятия с учёта</h3>             
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_19"/><label for="f_19">Призыв на срочную военную службу</label></em>                                   
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_20"/><label for="f_20">Осуждение к лишению свободы</br>
            <i class="remark">В этом случае основанием должно являться вступившее в законную силу решение суда</i></label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_50"><input type="text" placeholder="Номер документа" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em> 
            </div> 
                          
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_21"/><label for="f_21">Признание безвестно отсутствующим</br>
            <i class="remark">В этом случае основанием должно являться вступившее в законную силу решение суда</i></label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_50"><input type="text" placeholder="Номер документа" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em> 
            </div>
                        
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_22"/><label for="f_22">Смерть или объявление решением суда умершим</br>
            <i class="remark">В этом случае основанием должно являться свидетельство о смерти, оформленное в установленном порядке</i></label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_50"><input type="text" placeholder="Номер документа" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em> 
            </div>            
            
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_23"/><label for="f_23">В связи с выселением из занимаемого жилого помещения или признанием утратившим (не приобретшим) права пользования жилым помещением</br>
            <i class="remark">В этом случае основанием должно являться вступившее в законную силу решение суда</i></label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_50"><input type="text" placeholder="Номер документа" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em> 
            </div>            
            
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_24"/><label for="f_24">Обнаружение несоответствующих действительности сведений или документов, послуживших основанием для регистрации, а также неправомерных действий должностных лиц при решении вопроса о регистрации</br>
            <i class="remark">В этом случае основанием должно являться вступившее в законную силу решение суда</i></label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_50"><input type="text" placeholder="Номер документа" class="big" />
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата выдачи" class="big" /></em> 
            </div>            
            
            <em class="wrapper l_100"><input type="radio" name="g_4" id="f_25"/><label for="f_25">Иное</label></em>
            <div class="fields_cover">                           
              <em class="wrapper l_100"><input type="text" placeholder="Укажите причину" class="big" /></em> 
            </div>                                       
          </fieldset>                     
          
          <fieldset class="group_9">                      
            <span class="point_num">9</span>
            <h3>Есть или было ли у вас гражданство другого государства?</h3>                      
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_8" id="f_30"/><label for="f_30">Нет, я никогда не имел гражданство другого государства</label></em>            
            <em class="wrapper l_100"><input type="radio" name="g_8" id="f_31"/><label for="f_31">Да, у меня имеется по настоящее время гражданство другого государства</label></em>
            <div class="fields_cover">
              <h4>Укажите страну, и дату получения другого гражданства</h4>              
              <em class="wrapper l_66">
                <select>
                  <option>Гражданство</option>                
                  <option>Белоруссия</option>
                  <option>Украина</option>
                </select>                  
              </em><em class="wrapper l_33"><input type="text" placeholder="Дата вступления" class="big" /></em><br/>              
              <em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>               
              <h4>Укажите дату вступления в гражданство РФ</h4>              
              <em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" /></em>                         
            </div>            
                                    
            <em class="wrapper l_100"><input type="radio" name="g_8" id="f_32" /><label for="f_32">Да, ранее у меня имелось гражданство другого государства</label></em>
            <div class="fields_cover">
              <h4>Укажите страну, и дату получения другого гражданства</h4>              
              <em class="wrapper l_75">
                <select>
                  <option>Гражданство</option>                
                  <option>Белоруссия</option>
                  <option>Украина</option>
                </select>                  
              </em><em class="wrapper l_25"><input type="text" placeholder="Дата" class="big" /></em><br/>              
              <em class="wrapper l_100"><a class="btn white plus" href="#"><span class="icomoon">8</span><b>Добавить данные</b></a></em>              
              <h4>Укажите дату вступления в гражданство РФ</h4>              
              <em class="wrapper l_25"><input type="text" placeholder="Дата вступления" class="big" /></em>                           
            </div>
                        
            <em class="wrapper l_100"><input type="radio" name="g_8" id="f_33" /><label for="f_33">Я являюсь лицом без гражданства</label></em>                                          
          </fieldset> 

          <fieldset class="group_10">                      
            <span class="point_num">10</span>
            <h3>Ваши дополнительные данные</h3>  
            <em class="wrapper l_100">
              <select>
                <option>Основная причина переселения</option>                
              </select>                  
            </em>
            <h4>Информация о работе</h4>
            <em class="wrapper l_100">
              <select>
                <option>Сфера деятельности по последнему месту жительства</option>                
              </select>                  
            </em>
            <em class="wrapper l_100">
              <select>
                <option>Вид занятости</option>                
              </select>                  
            </em>
            <h4>Социальное обеспечение</h4>
            <em class="wrapper l_100">
              <select>
                <option>Вид соцобеспечения по последнему месту жительства</option>                
              </select>                  
            </em>
            <h4>Личная информация</h4>
            <em class="wrapper l_50">
              <select>
                <option>Образование</option>                
              </select>                  
            </em><em class="wrapper l_50">
              <select>
                <option>Состояние в браке</option>                
              </select>                  
            </em><br/>
            <em class="wrapper l_100">
              <select>
                <option>Если до переселения проживал с семьёй, то прибыл</option>                
              </select>
              <i class="not">необязательно</i>                  
            </em>                         
          </fieldset> 

          <fieldset class="group_11">                      
            <span class="point_num">11</span>
            <h3>Часть семьи получателя услуги уже проживает по этому адресу?</h3>
            <em class="wrapper l_100"><input type="radio" name="g_9" id="f_34" checked="checked"/><label for="f_34">Да</label></em> 
            <em class="wrapper l_100"><input type="radio" name="g_9" id="f_35" /><label for="f_35">Нет</label></em>               
          </fieldset> 

          <fieldset class="group_12">                      
            <span class="point_num">12</span>
            <h3>Куда вы будете подавать оригиналы документов?</h3>                      
            <em class="wrapper l_100"><input type="radio" checked="checked" name="g_10" id="f_36" /><label for="f_36">по месту жительства (как в паспорте), срок оказания услуги составит 10 дней</label></em>
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>            
            </div>            
            
            <em class="wrapper l_100"><input type="radio" name="g_10" id="f_37" /><label for="f_37">по месту пребывания, срок оказания услуги составит до 2-x месяцев</label></em>                        
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>            
            </div>
            
            <em class="wrapper l_100"><input type="radio" name="g_10" id="f_38" /><label for="f_38">по месту фактического проживания, срок оказания услуги составит 2 месяца</label></em> 
            <div class="fields_cover">
              <em class="wrapper l_100"><input type="text" placeholder="Регион" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Район" class="big" />
              </em><em class="wrapper l_50"><input type="text" placeholder="Населенный пункт" class="big" /></em><br/>
              
              <em class="wrapper l_50"><input type="text" placeholder="Улица" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Дом" class="big" />
              </em><em class="wrapper l_16"><input type="text" placeholder="Корпус" class="big" /><i class="not">необязательно</i>
              </em><em class="wrapper l_16"><input type="text" placeholder="Кв-ра" class="big" /><i class="not">необязательно</i></em>            
            </div>
            
            <h4>Просим вас выбрать удобное подразделение для подачи документов</h4>
            <div class="map_cover clear">
              <div class="find_result">
                <h4>Доступные подразделения</h4>
                <ul>
                  <li>
                    <span class="list_num">1</span>
                    <h5>ИФНС России №1 по г.Москве</h5>
                    <p>Москва, Ниглинная, 23</p>
                  </li>
                  <li>
                    <span class="list_num">2</span>
                    <h5>ИФНС России №1 по г.Москве</h5>
                    <p>Москва, Ниглинная, 23</p>
                  </li>
                  <li>
                    <span class="list_num">3</span>
                    <h5>ИФНС России №1 по г.Москве</h5>
                    <p>Москва, Ниглинная, 23</p>
                  </li>                                    
                </ul>
              </div>
            </div>
                                                 
          </fieldset> 


          
          <fieldset class="group_13">                      

            <h3>Согласие на обработку персональных данных</h3>          
            
            <em class="wrapper l_100"><input type="checkbox" checked="checked" /><label>Согласен на обработку персональных данных</label></em>
            
            <em class="wrapper skew l_100"><input type="checkbox" checked="checked" /><label>Об ответственности за предоставление заведомо ложных сведений,
             либо подложных документов, в&nbsp;соответствии с&nbsp;законодательством Российской Федерации предупрежден</label></em>           
                                                   
          </fieldset>                                                                                               
          
          <span class="fr">
              <input class="big btn" type="submit" value="Отправить">
          </span>                     
                             
        </form>                      
        
      </div>

<?
include('include/footer.php');
?> 