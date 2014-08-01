<?
$pagename = 'mobile_proverka_sudebnyh_zadoljennostey';
$pagetitle = 'Проверка судебных задолженнностей';
include('include/mobile_head.php');
?>

            <div id="content">
                <div class="title">
                  <div class="limiter">
                    <span class="icomoon color_2">C</span><h1>Cудебная задолженность</h1>
                  </div>
                </div>

                <form action="#" class="main clear big_inp-form bt">
                    <fieldset class="group_1">
                    <div class="limiter">
                      <span class="point_num">1</span>
                      <h3>Персональные данные</h3>
                    </div>
                    <div class="limiter">            
                      <em class="wrapper l_33"><label for="">Фамилия</label><input type="text" placeholder="Фамилия" value="Константинопольский" class="big" disabled="disabled"/>
                      </em><em class="wrapper l_33"><label for="">Имя</label><input type="text" placeholder="Имя" class="big" disabled="disabled"/>
                      </em><em class="wrapper l_33"><label for="">Отчество</label><input type="text" placeholder="Отчество" class="big" disabled="disabled"/></em>
                      
                      <em class="wrapper l_33"><label for="">Дата рождения</label><input type="text" placeholder="Дата рождения" class="big" value="09.09.1989" disabled="disabled"/>
                      </em>
          
                    <div class="clear"><em class="wrapper l_100"><span class="fr btn_field"><input class="big btn white" type="submit" value="Изменить данные" /></span></em></div>
                     </div>
                    </fieldset>



                    <fieldset class="group_2">
                      <div class="limiter">                  
                        <span class="point_num">2</span>
                        <h3>Ваши задолженности</h3>

                        <div class="cover_info_title">          
                          <p>Общая сумма задолженностей составляет: <b>150 000</b> <strong class="rouble">p</strong></p>  
                        </div>
                       </div> 
                       <div class="limiter">
                       
                        <div class="info-block_wrap">
                            <div class="info_block type_1">
                                <p class="info-block_h"><b>Внимание!</b></p>
                                <p>Возможно полное совпадение ФИО и даты рождения с другими людьми, для уточнения наличия задолженностей обратитесь к судебному приставу – исполнителю по делу.</p>
                                <span class="icomoon">"</span>
                            </div>
                        </div>
                       </div> 
                        <div class="ticket">
                          <div class="limiter">
                          <div class="sub_title clear"><span class="fl">Исп. производство: 77090714454/1/04/55 от 15.11.2016</span><span class="money fr">15 000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
                          <dl>
                            <dd>Штраф иного органа</dd>
                          </dl>
                          <div class="more_info">
                            <span class="pseudo">Узнать больше о штрафе</span>
                          </div>
                         </div>               
                        </div>
            
                        <div class="ticket">
                        <div class="limiter">
                          <div class="sub_title clear"><span class="fl">Исп. производство: 77090714454/1/04/55 от 15.11.2016</span><span class="status processing">В обработке</span></div>
                          <dl>
                            <dd>Штраф иного органа</dd>
                          </dl>
                          <div class="more_info">
                            <span class="pseudo">Узнать больше о штрафе</span>
                          </div>
                          </div>              
                        </div>
                        
                        <div class="ticket">
                        <div class="limiter">
                          <div class="sub_title clear"><span class="fl">Исп. производство: 77090714454/1/04/55 от 15.11.2016</span><span class="money fr">15 000&nbsp;<nobr class="rouble">p</nobr></span> <span class="btn_cover_r"><input class="small btn" type="submit" value="Оплатить" /></span></div>
                          <dl>
                            <dd>Штраф иного органа</dd>
                          </dl>
                          <div class="more_info">
                            <span class="pseudo">Узнать больше о штрафе</span>
                          </div>
                          </div>              
                        </div>                                                 
                    </fieldset>
                </form>
                
                
                <div class="switcher_cont">
                  <div class="limiter">
                    <div class="brd">
                      <h4 class="switcher_h">Информер</h4>
                      <em>
                        <div class="switcher active">
                          <div class="cover">
                            <div class="left active">Вкл</div>
                            <div class="movable"></div>                  
                            <div class="right">Откл</div>
                          </div>
                        </div>
                      </em>
                      <div class="switcher_txt">
                          <p>Включите, чтобы всегда видеть штрафы на главной странице</p>
                      </div>
                     </div> 
                   </div> 
                </div>                
                <!-- switcher_cont -->

                <div class="social_wrap-b">
                <div class="limiter">
                    <div class="social">
                        <b>Поделись удобным сервисом с друзьями</b>
                        <div class="social-ico_cont">
                            <a href="#"><span class="icomoon">#</span></a>
                            <a href="#"><span class="icomoon">$</span></a>
                            <a href="#"><span class="icomoon">%</span></a>
                            <a href="#"><span class="icomoon">&</span></a>
                        </div>
                    </div>
                   </div> 
                </div>

            </div><!-- content -->

<?
include('include/mobile_footer.php');
?>