
<div class="booknow">

    <!-- BEGIN .booknow-wrapper -->
    <div class="booknow-wrapper">


        <form class="booking-form" name="bookroom" action="#" method="post">

            <div class="select-wrapper">
                <select id="room" name="book_room_type_and_price">
                    <option value="none">Выберите комнату</option>
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

            <div class="calendar">
                <input type="text" id="date_from" class="datepicker input" name="date_from" placeholder="Заезд">
                <input type="text" id="date_to" class="datepicker input" name="date_to" placeholder="Выезд">
                <input type="text" id="number" class="number input" name="number" placeholder="Телефон">
            </div>

            <input type="hidden" name="book_confirm" value="1">
            <input class="bookbutton" type="submit" value="Забронировать">


        </form>

        <div class="corner_left hidden-xs"></div>

        <!-- END .booknow-wrapper -->
    </div>

    <!-- END .booknow -->
</div>
