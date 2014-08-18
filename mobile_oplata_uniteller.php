<?
$pagename = 'mobile_oplata_uniteller';
$pagetitle = 'Оплата услуги';
include('include/mobile_head.php');
?>
    <div id="content">
        <div class="title">
          <div class="limiter">
            <span class="icomoon color_1">B</span><h1>Оплата услуги с помощью системы uniteller</h1>
          </div>                  
        </div>

        <form action="#" class="main clear big_inp-form bt">
              
          <fieldset class="group_1">
            <div class="limiter">                   
              <span class="point_num">1</span>
              <h3>Информация о платеже</h3>
            </div>
            <div class="limiter">          
              <em class="wrapper l_100"> 
              <div class="ticket">
                <dl>
                  <dt>Наименование оплачиваемой услуги</dt>
                  <dd>Штрафы ГИБДД</dd>
                </dl>
                <dl>
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
            </div>
          </fieldset> 

          
          <fieldset class="group_2 last">
            <div class="limiter">                     
              <span class="point_num">2</span>
              <div class="cover_info_title">
                <h3>Укажите реквизиты банковской карты и ваши контактные данные</h3>
                <br/>
              </div> 
            </div>
            
            <div class="blue_cover">
              <div class="limiter">
                <em class="wrapper l_66"><label>Введите номер карты</label><input type="text" placeholder="Введите номер карты" class="big" /></em><br/>
                <em class="wrapper l_25" style="padding: 0 20px 0 0;">
                  <label>ММ</label>
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
                </em><i class="slash">/</i><em class="wrapper l_25" style="padding: 0 20px 0 0;">
                  <label>ГГ</label>
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
                <em class="wrapper l_66"><label>Фамилия, имя как на карте</label><input type="text" placeholder="Фамилия, имя как на карте" class="big" /></em><br/>            

                <em class="wrapper l_25"><label>CW2/CVC2</label><input type="text" placeholder="CW2/CVC2" class="big" /></em><br/>
              </div>
            </div>
            <div class="limiter">
              <em class="wrapper l_66"><input type="checkbox" checked="checked" id="f_39"/><label for="f_39" style="display:inline-block; padding-left: 15px; width:85%;">Сохранить данные для этой карты</label></em><br/>
              <em class="wrapper l_66"><label>Адрес электронной почты</label><input type="text" placeholder="Адрес электронной почты" class="big" /></em>
              <em class="wrapper l_66"><label>Контактный телефон</label><input type="text" placeholder="Контактный телефон" class="big" /></em>
            </div>    
          </fieldset>                             
        </form>
        
        <div class="limiter">
          <em class="wrapper l_66"><a href="/mobile_gibdd_shtrafy.php" class="btn fr"><b>Оплатить</b></a></em>
        </div>
       
        
      </div>

<?
include('include/mobile_footer.php');
?>   