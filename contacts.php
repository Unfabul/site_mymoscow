<?php 
    $title = 'Контакты';
    $headerPic = 'contacts-img';
    $h1 = 'MyMoscow';
    $header_p = 'агентство интересных маршрутов';
    $header_p2 = '-Контакты-';
    include('header.php');
?>

    <div class="contact-text wrapper">
        <h2 class="title-h2">Контакты</h2>
        <p>Мы - команда тех, кто любит историю и любит Москву.</p>
        <p>Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.</p>
        <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
    </div>
    <div class="team wrapper">
        <div class="team-item">
            <div class="team-item-img team-img1"></div>
            <div class="team-item-text">
                <div class="team-item-text-name">
                    <h3>Александр Рыбаков</h3>
                    <p>директор</p>
                </div>
                <div class="team-item-text-post">
                    <p>По всем вопросам пишите на почту:</p>
                    <p><a href="mailto:rybakov@mymoscow.ru">rybakov@mymoscow.ru</a></p>
                </div>
                <div class="team-item-text-line"></div>
            </div>
        </div>
        <div class="team-item">
            <div class="team-item-img team-img2"></div>
            <div class="team-item-text">
                <div class="team-item-text-name">
                    <h3>Елена Белкина</h3>
                    <p>руководитель корпоративного отдела</p>
                </div>
                <div class="team-item-text-post">
                    <p>По всем вопросам пишите на почту:</p>
                    <p><a href="mailto:belkina@mymoscow.ru">belkina@mymoscow.ru</a></p>
                </div>
                <div class="team-item-text-line"></div>
            </div>
        </div>
    </div>
    <div class="contact wrapper">
        <div class="contact-contacts">
            <div class="contact-contacts-item">
                <div class="contact-contacts-item-icon icon-1"></div>
                <div class="contact-contacts-item-name"><p>Москва,<br>Большая Спасская 12</p></div>
            </div>
            <div class="contact-contacts-item">
                <div class="contact-contacts-item-icon icon-2"></div>
                <div class="contact-contacts-item-name"><p>E-mail:<br><a href="mailto:info@mymoscow.ru">info@mymoscow.ru</a></p></div>
            </div>
            <div class="contact-contacts-item">
                <div class="contact-contacts-item-icon icon-3"></div>
                <div class="contact-contacts-item-name"><p>Телефон:<br>8 (495) 626-46-00</p></div>
            </div>
        </div>
        <form method="POST" action="form.php">
            <p>Напишите нам</p>
            <p class="contact-error">Заполните все необходимые поля</p>
            <p class="contact-send">Сообщение отправлено</p>
            <input type="text" name="fio" placeholder="ФИО">
            <input type="email" name="email" placeholder="E-mail">
            <textarea name="message" placeholder="Ваше сообщение"></textarea>
            <button type="submit">отправить</button>
        </form>
    </div>
    <div class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A73e09aaf99556917fb3c93f55ce9fc8357125fe5dc6670e26e11f376d4ea4cef&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

<?php 
    include('footer.php');
?>