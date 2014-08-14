<?
$pagename = 'oplata_uniteller';
$pagetitle = 'Оплата услуги';
include('include/head.php');
?>

          <ul class="breadcrumbs">
            <li class="first"><a href="#"><span class="icomoon">7</span>Главная</a></li>       
            <li class="last"><span>Штрафы ГИБДД</span></li>                                       
          </ul>          
        </div>
      </div>

      <div id="content">
        <div class="title">
          <span class="icomoon color_1">B</span><h1>Оплата услуги с помощью системы uniteller</h1>
        </div>
        
          
        <form class="main clear">
              
          <fieldset class="group_1">         
            <span class="point_num">1</span>
            <h3>Информация о платеже</h3>          
            <em class="wrapper l_100"> 
            <div class="ticket">
              <dl>
                <dt>Наименование оплачиваемой услуги</dt>
                <dd>Штрафы ГИБДД</dd>
              </dl>
              <dl>
              </dl>  
                <dt>Номер платежа</dt>
                <dd>2014-08-11-799490</dd>
              </dl>
              <dl>
                <dt>Дата платежа</dt>
                <dd>11.08.2014</dd>
              </dl>
              <dl>                
                <dt>Сумма к оплате</dt>
                <dd><b>3 301</b><nobr class="rouble">p</nobr></dd>
              </dl>
            </div>
            </em>
            
          </fieldset> 

          
          <fieldset class="group_2 last">                     
            <span class="point_num">2</span>
            <div class="cover_info_title">
              <h3>Укажите реквизиты банковской карты и ваши контактные данные</h3>
              <br/>
            </div>  
              <img src="img/pay_card_bg.png" alt="" class="pay_card_bg"/>
              <em class="wrapper l_50">
                <em class="wrapper l_100"><input type="text" placeholder="Введите номер карты" class="big" /></em>
                <em class="wrapper l_33">Срок действия
                </em><em class="wrapper l_33">
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">ММ</option>
                    <option value="1">01</option>            
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </em><i class="slash">/</i><em class="wrapper l_33">
                  <select class="select_choice">
                    <option value="0" selected="selected" class="selected_one">ГГ</option>
                    <option value="1">14</option>            
                    <option value="2">15</option>
                    <option value="3">16</option>
                    <option value="4">17</option>
                    <option value="5">18</option>
                    <option value="6">19</option>
                    <option value="7">20</option>
                  </select>
                </em>
                <em class="wrapper l_100"><input type="text" placeholder="Фамилия, имя как на карте" class="big" /></em>            
              </em><em class="wrapper l_50">
                  <em class="wrapper l_50 fr"><input type="text" placeholder="CW2/CVC2" class="big cw_cvc" /></em>
              </em><br/>
              <em class="wrapper l_100"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39">Сохранить данные для этой карты</label></em><br/>
              <em class="wrapper l_50"><input type="text" placeholder="Адрес электронной почты" class="big" />
                </em><em class="wrapper l_33"><input type="text" placeholder="Контактный телефон" class="big" /></em>
          </fieldset>                             
        </form>
        
        
        <div class="clear">
          <a href="#" class="btn fr"><b>Оплатить</b></a>
        </div>        
        
      </div>

<?
include('include/footer.php');
?>    