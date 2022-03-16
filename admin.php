<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="header__top">
                <img src="img/logo.png" alt="logo" class="header__logo">
                <div class="header__addres">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 header__svg" fill="none" viewBox="0 0 24 24" stroke="#f00">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p>Вокзальная улица, Чайковский</p>
                </div>
                <div class="header__phone">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 header__svg" fill="none" viewBox="0 0 24 24" stroke="#f00">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <a href="tel:+79223892211">+7 922-389-2211</a>
                </div>

            </div>
            <div class="header__bot">
                <nav class="header__nav">
                    <ul>
                        <li><a href="index.html" class="active">Главная</a></li>
                        <li><a href="school.html">Школа Юного пилота</a></li>
                        <li><a href="price.html">Цены</a></li>
                        <li><a href="certificate.html">Сертификаты</a></li>
                        <li><a href="trace.html">Трасса</a></li>
                        <li><a href="kart.html">Карты</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>







    <main>
        <div class="content">
            <div id="tabs">
                <div class="tabs__title">
                    <h1>Админ-панель</h1>
                </div>
                <ul>
                    <li><a href="#tabs-1">Настройка цен</a></li>
                    <li><a href="#tabs-2">Настройка контактов</a></li>
                </ul>
                <div id="tabs-1">
                    <div class="adminpanel">
                        <div class="adminpanel__container">
                            <div class="adminpanel__price">
                                <div class="price__title">
                                    <h2>Цены:</h2>
                                </div>
                                <form action="php/panel.php" method="POST">
                                    <div class="admin__kart65">
                                        <div class="admin__title">
                                            <h3>Цены на прокат:</h3>
                                        </div>
                                        <div class="admin__kart65">
                                            <div class="kart65__title">
                                                <h4>Прокат карта 6.5 л.с.:</h4>  
                                            </div>
                                            <div class="kart65__5">
                                                <span>5 минут</span>
                                                <input type="text" name="price_kart_65_5" id="">
                                            </div>
                                            <br>
                                            <div class="kart65__10">
                                                <span>10 минут</span>
                                                <input type="text" name="price_kart_65_10" id="">
                                            </div>
                                        </div>
                                        <div class="admin__kart9">
                                            <div class="kart9__title">
                                                <h4>Прокат карта 9 л.с.:</h4>
                                            </div>
                                            <div class="kart9__5">
                                                <span>5 минут</span>
                                                <input type="text" name="price_kart_9_5" id="">
                                            </div>
                                            <br>
                                            <div class="kart9__10">
                                                <span>10 минут</span>
                                                <input type="text" name="price_kart_9_10" id="">
                                            </div>
                                        </div>
                                        <div class="kart__double">
                                            <div class="double__title">
                                                <h4>Прокат двухместного карта:</h4>
                                            </div>
                                            <div class="double__do14">
                                                <div class="do14__title">
                                                    <h4>- взрослый + ребенок (до 14 лет):</h4>
                                                </div>
                                                <div class="do14__5">
                                                    <span>5 минут</span>
                                                    <input type="text" name="price_kart_double_do14_5" id="">
                                                </div>
                                                <br>
                                                <div class="do14__10">
                                                    <span>10 минут</span>
                                                    <input type="text" name="price_kart_double_do14_10" id="">
                                                </div>
                                            </div>
                                            <div class="double__posle14">
                                                <div class="posle14__title">
                                                    <h4>- взрослый + взрослый (старше 14 лет):</h4>
                                                </div>
                                                <br>
                                                <div class="posle14__5">
                                                    <span>5 минут</span>
                                                    <input type="text" name="price_kart_double_posle14_5" id="">
                                                </div>
                                                <br>
                                                <div class="posle14__10">
                                                    <span>10 минут</span>
                                                    <input type="text" name="price_kart_double_posle14_10" id="">
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="admin__contacts">
                                        <div class="contacts__tel">
                                            <div class="tel__title">
                                                <h3>Номер телефона:</h3>
                                            </div>
                                            <div class="tel__form">
                                                <input type="tel" name="tel" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__submit">
                                        <input type="submit" value="Сохранить">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-2">
                    <div class="adminpanel">
                        <div class="adminpanel__contacts">
                            <div class="contacts__title">
                                <h2>Контакты</h2>
                            </div>
                            <form action="">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>
</body>

</html>