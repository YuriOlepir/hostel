<?php
include "header.php";
?>
<?php
include "booking-form.php";
?>
<?php
include "nav.php";
?>
    <div class="container booking_number contacts">
        <div class="row row_cotacts_wrap">
            <div class="contacts_header maps_header">
                <h2>Контакты</h2></div>
            <div class="col-md-8 col-sm-8 rooms_container contacts_cont">
                <h4>г. Харьков, ул. Площадь 3 <br>
                    (050) 555 55 55<br>
                    (067) 777 77 77<br>
                    sale@bunker-light.com.ua</h4>
                <section class="section_maps">

                    <div class="maps_wrapper">
                        <div class="maps_container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7903429.466027205!2d-90.73747802935453!3d14.707139096763143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6a751a73b731cf%3A0x7ed1de82b6fb8264!2z0JPQvtC90LTRg9GA0LDRgQ!5e0!3m2!1sru!2sua!4v1459773920795" width="960" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col-md-4 col-sm-4 number_booknow_wrapper contacts_cont">
                <h3>Обратная связь</h3>

                <form action="#" id="commentform" class="feedback_form" method="post">

                    <div class="field-row">
                        <label for="contact_name">Имя
                        </label><br>
                        <input type="text" name="contact_name" id="contact_name" class="text_input" value="">
                    </div>

                    <div class="field-row">
                        <label for="email">Ваш Email
                        </label><br>
                        <input type="text" name="email" id="email" class="text_input" value="">
                    </div>
                    <div class="field-row">
                        <label for="email">Ваш Телефон
                        </label><br>
                        <input type="text" name="phone" id="phone" class="text_input" value="">
                    </div>

                    <div class="field-row">
                        <label for="message_text">Ваше сообщение:<br>
                        </label>

                        <textarea name="message" id="message_text" class="text_input" cols="60" rows="5"></textarea>
                    </div>

                    <input class="button2" type="submit" value="Отправить" name="submit">
                    <input type="hidden" name="sent" value="true">

                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>