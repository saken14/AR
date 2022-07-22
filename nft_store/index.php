<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('title', "NFT Store");
$APPLICATION->SetPageProperty('description', "");
require('./ajax.php');
if(!empty($_GET['email'])) getEmail($_GET['email']);
?>
    <main role="main" class="plugStore-page">
        <section class="plug-first">
            <div class="container">
                <div class="plug-content">
                    <div class="plug-first-left">
                        <h3 class="plug-first__title-1">Comming Soon! <i class="icon icon-smileEyes"></i> </h3>
                        <h3 class="plug-first__title-2">Первый <span>NFT</span> Store</h3>
                        <h3 class="plug-first__title-3"><i class="icon iconSmirkingFace"></i> в Казахстане  </h3>
                        <div class="bg-plug-first"></div>
                    </div>
                    <div class="wrapper des">
                        <h2 class="plug-fos-title">Хочу подписаться, чтобы узнать о запуске! </h2>
                        <form class="form subscribe_form">
                            <input type="hidden" name="action" value="form.subscribe">
                            <div class="row mx-n-15">
                                <div class="col px-15">
                                    <div class="form__group">
                                        <input class="input" name="name" placeholder="ФИО*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-n-15">
                                <div class="col px-15">
                                    <div class="form__group">
                                        <input class="input" name="email" placeholder="E-mail*" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-n-15">
                                <div class="col px-15">
                                    <div class="form__group">
                                        <input class="input input_tel" name="phone" placeholder="Телефон*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-n-15 justify-content-end">
                                <div class="col-btn col px-15 ml-a">
                                    <button class="btn btn_submit">Подписаться <span class="btn-circle"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="plug-main-left ns__bd-decor des"></div>
            <div class="plug-main-center ns__bd-decor"></div>
            <div class="plug-main-right ns__bd-decor"></div>
        </section>
        <section class="ns-fifth">
            <div class="container">
                <div class="ns-fifth__content">
                    <div class="ns-fifth__left">
                        <h3 class="ns-fifth__title">Хочу заранее подготовиться <br> к покупке NFT! <i class="icon iconSwag"></i> </h3>
                        <div class="text-wrapper">
                            <p class="ns-fifth-text">Мы подготовили для тебя <br class="mob"> подробную инструкцию о том, <br class="mob"> как создать виртуальный
                                кошелек, <br class="mob"> купить крипты и приобрести NFT.</p>
                        </div>
                    </div>
                    <div class="ns-fifth__right des">
                        <div class="ns__bd-decor fifth-right"></div>
                        <a href="<?= SITE_TEMPLATE_PATH ?>/img/instruction.pdf" target="_blank"><p class="ns-fifth__text"><span>Хочу <br> инструкцию</span></p></a>
                    </div>
                    <a href="<?= SITE_TEMPLATE_PATH ?>/img/instruction.pdf" target="_blank"><div class="plug-link mob">Хочу инструкцию</div></a>
                    <div class="fos-wrapper mob">
                        <h2 class="plug-fos-title">Хочу подписаться, <br> <span> чтобы узнать о запуске!</span></h2>
                        <form class="form subscribe_form">
                            <input type="hidden" name="action" value="form.subscribe">
                            <div class="row mx-n-15">
                                <div class="col px-15">
                                    <div class="form__group">
                                        <input class="input" name="name" placeholder="ФИО*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-n-15">
                                <div class="col px-15">
                                    <div class="form__group">
                                        <input class="input" name="email" placeholder="E-mail*" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-n-15">
                                <div class="col px-15">
                                    <div class="form__group">
                                        <input class="input input_tel" name="phone" placeholder="Телефон*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-n-15 justify-content-end">
                                <div class="col-btn col px-15 ml-a">
                                    <button class="btn btn_submit">Подписаться <span class="btn-circle"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="plug-second-left ns__bd-decor"></div>
            <div class="plug-second-right ns__bd-decor mob"></div>
        </section>



        <!--Поп ап об успешной отправке-->
        <div class="remodal remodal-fos-sent-plug" data-remodal-id="fos-sent-plug" data-remodal-options="hashTracking: false, closeOnOutsideClick: true">
            <div class="remodal-content">
                <button data-remodal-action="close" class="remodal-close"></button>
                <div class="sent-content">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/mail.svg" alt="mail" class="sent-img">
                    <h3 class="sent-title">Огонь, круто! </h3>
                    <p class="sent-text">Теперь ты в white list.</p>
                </div>
            </div>
        </div>
        <!--Поп ап об успешной отписке-->
        <div class="remodal remodal-unsubscribe" data-remodal-id="unsubscribe" data-remodal-options="hashTracking: true, closeOnOutsideClick: true">
            <div class="remodal-content">
                <button data-remodal-action="close" class="remodal-close"></button>
                <div class="unsubscribe-content">
                    <h3 class="sent-title">Вы успешно отписаны! </h3>
                </div>
            </div>
        </div>
    </main>
    <script>
    </script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

