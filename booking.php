<?php
include "header.php";
?>
<?php
include "nav.php";
?>
<div class="booking_main">
    <h2>Бронирование номеров on-line</h2>

    <div class="container">
        <div class="row">
<div class="col-xs-1"></div>
    <form class="form-horizontal col-sm-12 col-xs-10">



        <div class="form-group">
            <label for="date_from" class="col-sm-4  control-label">Дата заезда</label>
            <div class="col-sm-3">
                <input type="text" class="form-control datepicker" id="date_from" placeholder="Заезд">
            </div>
        </div>



        <div class="form-group">

            <label for="date_to" class="col-sm-4 control-label">Дата выезда</label>
            <div class="col-sm-3">
                <input type="text" class="form-control datepicker" id="date_to" placeholder="Выезд">
            </div>
</div>



            <div class="form-group">
                <label for="room_select" class="col-sm-4 control-label">Выберите комнату </label>
                <div class="col-sm-3">
                    <select class="form-control" id="room_select">
                         <option>Общий номер №1 на 6 персон 110грн</option>
                        <option>Номер №2 на 2 персони 400грн</option>
                        <option>Номер №2 на 3-4 персони 450грн</option>
                        <option>Общий номер №3 на 6 персон 110грн</option>
                        <option>Общий номер №4 на 8 персон 110грн</option>
                          <option>Номер №5 на 2 персони 400грн</option>
                        <option>Номер №5 на 4 персони 450грн</option>
                        <option>Номер №6 на 2 персони 450грн</option>
                        <option>Номер №6 на 3-4 персони 500грн</option> Номер</option>
                    </select>
                </div>
                </div>



                <div class="form-group">

                    <label for="numb_people" class="col-sm-4 col-xs-7 control-label">Количество человек</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control " id="numb_people" placeholder="Кол-во человек">
                    </div>
                </div>

        <div class="form-group">

            <label for="contact_name" class="col-sm-4 control-label">Контактное лицо</label>
            <div class="col-sm-4">
                <input type="name" class="form-control " id="contact_name" placeholder="Имя Фамилия">
            </div>
        </div>


        <div class="form-group">
            <label for="room_select" class="col-sm-4 control-label">Форма оплаты</label>
            <div class="col-sm-3">
                <select class="form-control" id="room_select">
                    <option>Наличные</option>
                    <option>Кредитная карта</option>
                    <option>Предоплата</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="contact_number" class="col-sm-4 control-label">Номер телефона</label>
            <div class="col-sm-4">
                <input type="number" class="form-control " id="contact_number" placeholder="Номер телефона">
            </div>
        </div>

        <div class="form-group">
            <label for="contact_email" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-4">
                <input type="email" class="form-control " id="contact_email" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-1"></div>

            <label for="info" class="col-sm-3 control-label">Дополнительная информация</label>
            <div class="col-sm-4">
        <textarea class="form-control" rows="3"></textarea>
</div>
<div class="row"></div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 ">
                <button type="submit" class="btn_booking_page btn-default">Отправить</button>
            </div>
        </div>
    </form>
        </div>

    </div>

</div>
<?php
include "footer.php";
?>