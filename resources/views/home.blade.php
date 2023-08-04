<?php
    $db = new PDO("mysql:host=localhost;dbname=final1", "root", "");

    $info = [];

    if ($query = $db->query("SELECT * FROM contacts")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);

    } else {
        print_r($db->errorInfo());
    }

?>
@extends('layouts/app')

@section('title')Главная@endsection

@section('header')
    @include('header')
@endsection


@section('content')
    <div id="ul-content">
        <div id="ul-id-202-0" data-floating="" data-custom-classes="[]" data-theme="g-theme-block-0"
             data-theme-block="{'desktop':'g-theme-block-1','tablet':'g-theme-block-1','phone':'g-theme-block-1'}"
             data-device-hidden="{'desktop':false,'tablet':false,'phone':false}" data-vertical-align="0"
             data-bgtype="color" data-auto_height="true" data-position-desktop="LT"
             data-position-tablet="LT" data-position-phone="LT"
             class="ul-container hidden-elements-device js-hidden-device-element   g-theme-block-0 g-theme-block-1 srcset-block-97b25f8f872f5a18f847beb392b88976">
            <div class="ul-shadow-block-overlay js-block-shadow"></div>
            <div class=" ul-container-no-padding container-fluid js-block-container">
                <div id="ul-id-202-1" class="row ul-row">
                    <div id="ul-id-202-2" class="col ul-col col-xs-12 col-sm-12 col-md-12 ">
                        <div id="ul-content">
                            <div class="owl-carousel owl-theme ">
                                <div class="ul-type-slider item">
                                    <link itemprop="contentUrl"
                                          href="/templates/nogtevoi_design_1/img/full_D7zJQqRI.jpg">
                                    <div>
                                        <div>
                                            <h2>Маникюр от Алёны Лапиной</h2>
                                            <p>Ухоженные ногти, с красивым рисунком украсят и разнообразят
                                                Ваш образ, внесут в него новизну.</p>
                                        </div>
                                        <div class="ul-slider-item-btn"></div>
                                    </div>
                                </div>
                                <div class="ul-type-slider item">
                                    <link itemprop="contentUrl"
                                          href="/templates/nogtevoi_design_1/img/full_D7zJQqRI.jpg">
                                    <div>
                                        <div></div>
                                        <div>
                                            <h2>Маникюр от Алёны Лапиной</h2>
                                            <p>Ухоженные ногти, с красивым рисунком украсят и разнообразят
                                                Ваш образ, внесут в него новизну.</p>
                                        </div>
                                        <div class="ul-slider-item-btn"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ul-id-209-0" data-floating="" data-custom-classes="[]" data-theme="g-theme-block-3"
             data-theme-block="{'desktop':'g-theme-block-3','tablet':'g-theme-block-3','phone':'g-theme-block-3'}"
             data-device-hidden="{'desktop':false,'tablet':false,'phone':false}" data-vertical-align="0"
             data-bgtype="color" data-auto_height="true" data-position-desktop="LT"
             data-position-tablet="LT" data-position-phone="LT"
             class="ul-container hidden-elements-device js-hidden-device-element   g-theme-block-3 srcset-block-ff8ccf029bc3cb23ab90c1449433448c">
            <div class="ul-shadow-block-overlay js-block-shadow"></div>
            <div class=" container js-block-container">
                <div id="ul-id-209-1" class="row ul-row">
                    <div id="ul-id-209-2" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-209-3" class="ul-widget  " type="uSpacer"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1">
                                .jwvWke.uspacer {
                                    height: 50px;
                                }

                                @media (max-width: 992px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                @media (max-width: 480px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                data-styled.g6[id="sc-AxgMl"] {
                                    content: "jwvWke,"
                                }
                            </style>
                            <div class="sc-AxgMl jwvWke  uspacer"></div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-209-4" class="row ul-row">
                    <div id="ul-id-209-5" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-209-6" class="ul-widget  " type="wysiwyg"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1"></style>
                            <div id="ul-id-209-6"
                                 class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                                <h2 style="text-align: center;">СКИДКА -15% ПРИ ПЕРВОМ ПОСЕЩЕНИИ</h2></div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-209-7" class="row ul-row">
                    <div id="ul-id-209-8" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-209-9" class="ul-widget  " type="wysiwyg"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1"></style>
                            <div id="ul-id-209-9"
                                 class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                                <p style="text-align: center;">Красивые руки женщины начинаются с ногтей,
                                    ведь у каждой леди есть что-то общее с кошкой - движения рук женщины с
                                    красивыми ногтями – грациозны и пленительны! О ногах тоже забывать не
                                    следует: кроме того, что приятно показать аккуратные ногти в любой
                                    обуви, забота о ногах – это еще и здоровье, защита от всевозможных
                                    неприятных заболеваний.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-209-10" class="row ul-row">
                    <div id="ul-id-209-11" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-209-12" class="ul-widget ul-w-button text-center"
                             data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                             data-widget="button" data-controls="mer"><a class="normal ul-w-button1 middle"
                                                                         target="_self" href="/singUp">записаться</a>
                        </div>
                    </div>
                </div>
                <div id="ul-id-209-13" class="row ul-row">
                    <div id="ul-id-209-14" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-209-15" class="ul-widget  " type="uSpacer"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1">
                                .jwvWke.uspacer {
                                    height: 50px;
                                }

                                @media (max-width: 992px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                @media (max-width: 480px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                data-styled.g6[id="sc-AxgMl"] {
                                    content: "jwvWke,"
                                }
                            </style>
                            <div class="sc-AxgMl jwvWke  uspacer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ul-id-202-4" data-floating="" data-custom-classes="[]" data-theme="g-theme-block-1"
             data-theme-block="{'desktop':'g-theme-block-1','tablet':'g-theme-block-1','phone':'g-theme-block-1'}"
             data-device-hidden="{'desktop':false,'tablet':false,'phone':false}" data-vertical-align="0"
             data-bgtype="color" data-auto_height="true" data-position-desktop="LT"
             data-position-tablet="LT" data-position-phone="LT"
             class="ul-container hidden-elements-device js-hidden-device-element   g-theme-block-1 srcset-block-94ccc2b18a28e8dea07becf651988249">
            <div class="ul-shadow-block-overlay js-block-shadow"></div>
            <div class=" container js-block-container">
                <div id="ul-id-221-0" class="row ul-row">
                    <div id="ul-id-221-1" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-221-2" class="ul-widget  " type="uSpacer"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1">
                                .jwvWke.uspacer {
                                    height: 50px;
                                }

                                @media (max-width: 992px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                @media (max-width: 480px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                data-styled.g6[id="sc-AxgMl"] {
                                    content: "jwvWke,"
                                }
                            </style>
                            <div class="sc-AxgMl jwvWke  uspacer"></div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-202-8" class="row ul-row">
                    <div id="ul-id-202-9" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-202-10" class="ul-widget  " type="wysiwyg"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1"></style>
                            <div id="ul-id-202-10"
                                 class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                                <h1 style="text-align: center;"><span class="g-color-text-1">Услуги</span>
                                </h1></div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-202-11" class="row ul-row">
                    <div id="ul-id-202-12" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-202-13" class="ul-widget  " type="uSpacer"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1">
                                .daOtji.uspacer {
                                    height: 36px;
                                }

                                @media (max-width: 992px) {
                                    .daOtji.uspacer {
                                        height: 36px;
                                    }
                                }

                                @media (max-width: 480px) {
                                    .daOtji.uspacer {
                                        height: 36px;
                                    }
                                }

                                data-styled.g6[id="sc-AxgMl"] {
                                    content: "daOtji,"
                                }
                            </style>
                            <div class="sc-AxgMl daOtji  uspacer"></div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-202-14" class="row ul-row">
                    <div id="ul-id-202-15" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                        <div data-is-icon-shown="false" data-icon-set="" id="ul-id-202-16"
                             class="ul-widget ul-widget-goods ul-goods-layout tariff ul-goods-layout-html2"
                             data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                             data-widget="goods" data-controls="mer">
                            <div class="ul-goods-view-item js-goods-item-linkPopover" itemscope
                                 itemtype="http://schema.org/Product">
                                <div class="ul-goods-view-image-wrap js-goods-image-wrap ">
                                    <div class="ul-goods-view-image-wrap2 js-goods-image-changebtn-wrapper">
                                        <div
                                            class="ul-goods-view-image srcset-widget-825446cdc064d539d38e3e87591519c9"></div>
                                        <img data-src="/templates/nogtevoi_design_1/img/full_FIYvh0Z8.jpg"
                                             alt="Наращивание и коррекция"
                                             style="width: 0; height: 0; opacity: 0;"
                                             class="ul-goods-view-image-tag"/>
                                        <a href="/contacts"
                                           class="js-goods-popup-link ul-goods-view-link"></a>
                                    </div>
                                </div>
                                <div class="ul-goods-view-details">
                                    <div class="ul-goods-view-title" data-field-name="title">
                                        <div class="js-goods-contenteditable h4" itemprop="name">Наращивание
                                            и коррекция
                                        </div>
                                    </div>
                                    <div class="ul-goods-view-price" itemscope
                                         itemtype="http://schema.org/Offer" itemprop="offers"> <span
                                            class="ul-goods-view-price-val" data-field-name="price.value">
                        <div class="js-goods-contenteditable price-small" onKeypress=""
                             placeholder="00.00">1800 руб.</div>
                    </span>
                                        <meta itemprop="price" content="1800">
                                        <meta itemprop="priceCurrency" content="USD">
                                    </div>
                                    <div class="ul-goods-view-descr" data-field-name="description.data">
                                        <div class="note js-goods-contenteditable js-goods-descr"
                                             itemprop="description">Наращивание и коррекция арочных ногтей
                                            гель-лаком.
                                        </div>
                                    </div>
                                    <div
                                        class="js-goods-view-button ul-goods-view-button UL js-goods-view-button"
                                        data-field-name="button.title"><a href="/contacts"
                                                                          class="middle js-goods-popup-link ul-goods-view-button-link ">записаться</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ul-id-202-17" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                        <div data-is-icon-shown="false" data-icon-set="" id="ul-id-202-18"
                             class="ul-widget ul-widget-goods ul-goods-layout tariff ul-goods-layout-html2"
                             data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                             data-widget="goods" data-controls="mer">
                            <div class="ul-goods-view-item js-goods-item-linkPopover" itemscope
                                 itemtype="http://schema.org/Product">
                                <div class="ul-goods-view-image-wrap js-goods-image-wrap ">
                                    <div class="ul-goods-view-image-wrap2 js-goods-image-changebtn-wrapper">
                                        <div
                                            class="ul-goods-view-image srcset-widget-8d229fbce1bc8ce89ad371e8e98abd27"></div>
                                        <img data-src="/templates/nogtevoi_design_1/img/full_D7zJQqRI.jpg"
                                             alt="Покрытие Шеллаком"
                                             style="width: 0; height: 0; opacity: 0;"
                                             class="ul-goods-view-image-tag"/>
                                        <a href="/contacts"
                                           class="js-goods-popup-link ul-goods-view-link"></a>
                                    </div>
                                </div>
                                <div class="ul-goods-view-details">
                                    <div class="ul-goods-view-title" data-field-name="title">
                                        <div class="js-goods-contenteditable h4" itemprop="name">Покрытие
                                            Шеллаком
                                        </div>
                                    </div>
                                    <div class="ul-goods-view-price" itemscope
                                         itemtype="http://schema.org/Offer" itemprop="offers"> <span
                                            class="ul-goods-view-price-val" data-field-name="price.value">
                        <div class="js-goods-contenteditable price-small" onKeypress=""
                             placeholder="00.00">2300 руб.</div>
                    </span>
                                        <meta itemprop="price" content="2300">
                                        <meta itemprop="priceCurrency" content="USD">
                                    </div>
                                    <div class="ul-goods-view-descr" data-field-name="description.data">
                                        <div class="note js-goods-contenteditable js-goods-descr"
                                             itemprop="description">Покрытие ногтей гель-лаком shellac и
                                            lechat.
                                        </div>
                                    </div>
                                    <div
                                        class="js-goods-view-button ul-goods-view-button UL js-goods-view-button"
                                        data-field-name="button.title"><a href="/contacts"
                                                                          class="middle js-goods-popup-link ul-goods-view-button-link ">ЗАПИСАТЬСЯ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ul-id-202-19" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                        <div data-is-icon-shown="false" data-icon-set="" id="ul-id-202-20"
                             class="ul-widget ul-widget-goods ul-goods-layout tariff ul-goods-layout-html2"
                             data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                             data-widget="goods" data-controls="mer">
                            <div class="ul-goods-view-item js-goods-item-linkPopover" itemscope
                                 itemtype="http://schema.org/Product">
                                <div class="ul-goods-view-image-wrap js-goods-image-wrap ">
                                    <div class="ul-goods-view-image-wrap2 js-goods-image-changebtn-wrapper">
                                        <div
                                            class="ul-goods-view-image srcset-widget-6576dbf8083ad7cd90418d2b98af70ae"></div>
                                        <img data-src="/templates/nogtevoi_design_1/img/full_6XSnSAG2.jpg"
                                             alt="Маникюр/Педикюр" style="width: 0; height: 0; opacity: 0;"
                                             class="ul-goods-view-image-tag"/>
                                        <a href="/contacts"
                                           class="js-goods-popup-link ul-goods-view-link"></a>
                                    </div>
                                </div>
                                <div class="ul-goods-view-details">
                                    <div class="ul-goods-view-title" data-field-name="title">
                                        <div class="js-goods-contenteditable h4" itemprop="name">
                                            Маникюр/Педикюр
                                        </div>
                                    </div>
                                    <div class="ul-goods-view-price" itemscope
                                         itemtype="http://schema.org/Offer" itemprop="offers"> <span
                                            class="ul-goods-view-price-val" data-field-name="price.value">
                        <div class="js-goods-contenteditable price-small" onKeypress=""
                             placeholder="00.00">1500 руб.</div>
                    </span>
                                        <meta itemprop="price" content="1500">
                                        <meta itemprop="priceCurrency" content="USD">
                                    </div>
                                    <div class="ul-goods-view-descr" data-field-name="description.data">
                                        <div class="note js-goods-contenteditable js-goods-descr"
                                             itemprop="description">Все виды маникюра и педикюра для мужчин
                                            и женщин.
                                        </div>
                                    </div>
                                    <div
                                        class="js-goods-view-button ul-goods-view-button UL js-goods-view-button"
                                        data-field-name="button.title"><a href="/contacts"
                                                                          class="middle js-goods-popup-link ul-goods-view-button-link ">ЗАПИСАТЬСЯ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-221-3" class="row ul-row">
                    <div id="ul-id-221-4" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-221-5" class="ul-widget  " type="uSpacer"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1">
                                .jwvWke.uspacer {
                                    height: 50px;
                                }

                                @media (max-width: 992px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                @media (max-width: 480px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                data-styled.g6[id="sc-AxgMl"] {
                                    content: "jwvWke,"
                                }
                            </style>
                            <div class="sc-AxgMl jwvWke  uspacer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ul-id-202-25" data-floating="" data-custom-classes="[]" data-theme="g-theme-block-5"
             data-theme-block="{'desktop':'g-theme-block-5','tablet':'g-theme-block-5','phone':'g-theme-block-5'}"
             data-device-hidden="{'desktop':false,'tablet':false,'phone':false}" data-vertical-align="0"
             data-bgtype="image" data-auto_height="true" data-position-desktop="LT"
             data-position-tablet="LT" data-position-phone="LT"
             class="ul-container hidden-elements-device js-hidden-device-element   g-theme-block-5 srcset-block-6ca675445d6bab150787065638ba5e1b">
            <div class="ul-background-block-overlay js-background-overlay"></div>
            <div class="ul-shadow-block-overlay js-block-shadow"></div>
            <div class=" container js-block-container">
                <div id="ul-id-221-6" class="row ul-row">
                    <div id="ul-id-221-7" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div id="ul-id-221-8" class="ul-widget  " type="uSpacer"
                             data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                            <style data-styled="true" data-styled-version="5.0.1">
                                .jwvWke.uspacer {
                                    height: 50px;
                                }

                                @media (max-width: 992px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                @media (max-width: 480px) {
                                    .jwvWke.uspacer {
                                        height: 50px;
                                    }
                                }

                                data-styled.g6[id="sc-AxgMl"] {
                                    content: "jwvWke,"
                                }
                            </style>
                            <div class="sc-AxgMl jwvWke  uspacer"></div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-202-29" class="row ul-row">
                    <div id="ul-id-202-30" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                        <div data-goals-data={
                        "yandex":{ "isEnabled":false, "name": "", "identifier": "click-icon", "goalId": "",
                        "worth":1, "action": "Action", "category": "Buttons"}, "google":{ "isEnabled":false,
                        "name": "", "identifier": "click-icon", "goalId": "", "worth":1, "action": "Action",
                        "category": "Buttons"}} id="ul-id-202-31" class="ul-widget " type="uIcon"
                        data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .fmogpZ.u-icon {
                                position: relative;
                                display: -webkit-box;
                                display: -webkit-flex;
                                display: -ms-flexbox;
                                display: flex;
                                -webkit-box-pack: center;
                                -webkit-justify-content: center;
                                -ms-flex-pack: center;
                                justify-content: center;
                            }

                            .fmogpZ.u-icon .u-icon__wrapper {
                                line-height: 0;
                                padding: 6px;
                                width: 76px;
                                height: 76px;
                            }

                            .fmogpZ.u-icon .u-icon__icon {
                                -webkit-text-decoration: none;
                                text-decoration: none;
                                color: rgba(70, 201, 170, 1) !important;
                                opacity: 1;
                            }

                            data-styled.g7[id="sc-AxheI"] {
                                content: "fmogpZ,"
                            }
                        </style>
                        <div class="sc-AxheI fmogpZ  u-icon">
                            <div class="u-icon__wrapper"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ul-id-202-32" class="row ul-row">
                <div id="ul-id-202-33" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-202-34" class="ul-widget  " type="uSpacer"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .daOtji.uspacer {
                                height: 36px;
                            }

                            @media (max-width: 992px) {
                                .daOtji.uspacer {
                                    height: 36px;
                                }
                            }

                            @media (max-width: 480px) {
                                .daOtji.uspacer {
                                    height: 36px;
                                }
                            }

                            data-styled.g6[id="sc-AxgMl"] {
                                content: "daOtji,"
                            }
                        </style>
                        <div class="sc-AxgMl daOtji  uspacer"></div>
                    </div>
                </div>
            </div>
            <!---<div id="ul-id-202-35" class="row ul-row">
                <div id="ul-id-202-36" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-202-37" class="ul-widget  " type="wysiwyg"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1"></style>
                        <div id="ul-id-202-37" class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                            <h2 style="text-align: center;"><span class="g-color-text-2">Подарочные сертификаты</span>
                            </h2>
                            <h4 style="text-align: center;"><span class="g-color-text-2">Самый лучший подарок – это возможность уделить несколько минут себе, своему здоровью и своей красоте. Теперь дарить заботу на много проще с сертификатами студии. Приобретая подарочные сертификаты Вы сможете порадовать своих родных и близких, а мы в свою очередь гарантируем качество предоставления услуг и заряд позитивных эмоций.&nbsp;</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ul-id-202-38" class="row ul-row">
                <div id="ul-id-202-39" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                    <div id="ul-id-202-40" class="ul-widget  " type="wysiwyg"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1"></style>
                        <div id="ul-id-202-40" class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                            <h1 style="text-align: center;">1500 руб.</h1></div>
                    </div>
                </div>
                <div id="ul-id-202-41" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                    <div id="ul-id-202-42" class="ul-widget  " type="wysiwyg"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1"></style>
                        <div id="ul-id-202-42" class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                            <h1 style="text-align: center;">2000 РУБ.</h1></div>
                    </div>
                </div>
                <div id="ul-id-202-43" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                    <div id="ul-id-202-44" class="ul-widget  " type="wysiwyg"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1"></style>
                        <div id="ul-id-202-44" class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                            <h1 style="text-align: center;">2500 РУБ.</h1></div>
                    </div>
                </div>
            </div>
            <div id="ul-id-202-45" class="row ul-row">
                <div id="ul-id-202-46" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-202-47" class="ul-widget  " type="uSpacer"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .daOtji.uspacer {
                                height: 36px;
                            }

                            @media (max-width: 992px) {
                                .daOtji.uspacer {
                                    height: 36px;
                                }
                            }

                            @media (max-width: 480px) {
                                .daOtji.uspacer {
                                    height: 36px;
                                }
                            }

                            data-styled.g6[id="sc-AxgMl"] {
                                content: "daOtji,"
                            }
                        </style>
                        <div class="sc-AxgMl daOtji  uspacer"></div>
                    </div>
                </div>
            </div>
            <div id="ul-id-202-48" class="row ul-row">
                <div id="ul-id-202-49" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-202-50" class="ul-widget ul-w-button text-center"
                         data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                         data-widget="button" data-controls="mer"><a class="normal ul-w-button2 middle"
                                                                     target="_self" href="/contacts">заказать</a>
                    </div>
                </div>
            </div>-->
            <div id="ul-id-202-51" class="row ul-row">
                <div id="ul-id-202-52" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-202-53" class="ul-widget  " type="uSpacer"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .jwvWke.uspacer {
                                height: 50px;
                            }

                            @media (max-width: 992px) {
                                .jwvWke.uspacer {
                                    height: 50px;
                                }
                            }

                            @media (max-width: 480px) {
                                .jwvWke.uspacer {
                                    height: 50px;
                                }
                            }

                            data-styled.g6[id="sc-AxgMl"] {
                                content: "jwvWke,"
                            }
                        </style>
                        <div class="sc-AxgMl jwvWke  uspacer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ul-id-204-0" data-floating="" data-custom-classes="[]" data-theme="g-theme-block-1"
         data-theme-block="{'desktop':'g-theme-block-1','tablet':'g-theme-block-1','phone':'g-theme-block-1'}"
         data-device-hidden="{'desktop':false,'tablet':false,'phone':false}" data-vertical-align="0"
         data-bgtype="color" data-auto_height="true" data-position-desktop="LT" data-position-tablet="LT"
         data-position-phone="LT"
         class="ul-container hidden-elements-device js-hidden-device-element   g-theme-block-1 srcset-block-9b105f86f7032dfedb5592a3326157ba">
        <div class="ul-shadow-block-overlay js-block-shadow"></div>
        <div class=" container js-block-container">
            <div id="ul-id-221-9" class="row ul-row">
                <div id="ul-id-221-10" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-221-11" class="ul-widget  " type="uSpacer"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .jwvWke.uspacer {
                                height: 50px;
                            }

                            @media (max-width: 992px) {
                                .jwvWke.uspacer {
                                    height: 50px;
                                }
                            }

                            @media (max-width: 480px) {
                                .jwvWke.uspacer {
                                    height: 50px;
                                }
                            }

                            data-styled.g6[id="sc-AxgMl"] {
                                content: "jwvWke,"
                            }
                        </style>
                        <div class="sc-AxgMl jwvWke  uspacer"></div>
                    </div>
                </div>
            </div>
            <div id="ul-id-204-4" class="row ul-row">
                <div id="ul-id-204-5" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-204-6" class="ul-widget  " type="wysiwyg"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1"></style>
                        <div id="ul-id-204-6" class="sc-AxjAm StDqM ul-widget-wysivig ul-wysivig-editor ">
                            <h1 style="text-align: center;"><span class="g-color-text-1">Отзывы</span></h1>
                            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                <?php foreach ($info as $data):      ?>
                                <div id="ul-id-204-11" class="col ul-col col-xs-12 col-sm-12 col-md-4 ul-type-slider item ul-slider-wysy">

                                    <div id="ul-id-204-12" class="ul-widget ul-w-review"
                                         data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                                         data-widget="review" data-controls="mer">
                                        <div class="ul-w-review-design1 ul-w-review-custom-design1">
                                            <div class="ul-w-review-tabcontent">
                                                <div class="ul-w-review-tabpane active" data-index="0" data-item-id="">
                                                    <div class="ul-w-review-item " itemscope
                                                         itemtype="http://schema.org/Review">
                                                        <link itemprop="url"
                                                              href="//template_nogtevoi_design_1.ulight12.uid.me/#ul-id-204-12"/>
                                                        <meta itemprop="datePublished" content="20201202T051631"/>
                                                        <div itemprop="itemReviewed" itemscope
                                                             itemtype="https://schema.org/Organization">
                                                            <meta itemprop="name" content="Дизайн&nbsp;маникюра"/>
                                                        </div>
                                                        <img src="/templates/nogtevoi_design_1/img/full_LlFOY2vP.jpg"
                                                             class="ul-w-review-avatar"/>
                                                        <div class="ul-w-review-titles" itemprop="author" itemscope
                                                             itemtype="http://schema.org/Person"> <span
                                                                class="ul-w-review-name h4" data-name="name"
                                                                placeholder="Имя..." itemprop="name">
                                                            <?= $data['email']; ?>
                                                        </span></div>
                                                        <div class="ul-w-review-text">
                                                            <h3><?= $data['subject']; ?></h3>
                                                            <div class="ul-w-review-text-paragraph normal"
                                                                 data-name="review" placeholder="Текст отзыва..."
                                                                 itemprop="reviewBody"><?= $data['message']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ul-id-204-7" class="row ul-row">
                <div id="ul-id-204-8" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-204-9" class="ul-widget  " type="uSpacer"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .daOtji.uspacer {
                                height: 36px;
                            }

                            @media (max-width: 992px) {
                                .daOtji.uspacer {
                                    height: 36px;
                                }
                            }

                            @media (max-width: 480px) {
                                .daOtji.uspacer {
                                    height: 36px;
                                }
                            }

                            data-styled.g6[id="sc-AxgMl"] {
                                content: "daOtji,"
                            }
                        </style>
                        <div class="sc-AxgMl daOtji  uspacer"></div>
                    </div>
                </div>
            </div>

           <!--- <div id="ul-id-204-10" class="row ul-row">
                <div id="ul-id-204-11" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                    <div id="ul-id-204-12" class="ul-widget ul-w-review"
                         data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                         data-widget="review" data-controls="mer">
                        <div class="ul-w-review-design1 ul-w-review-custom-design1">
                            <div class="ul-w-review-tabcontent">
                                <div class="ul-w-review-tabpane active" data-index="0" data-item-id="">
                                    <div class="ul-w-review-item " itemscope
                                         itemtype="http://schema.org/Review">
                                        <link itemprop="url"
                                              href="//template_nogtevoi_design_1.ulight12.uid.me/#ul-id-204-12"/>
                                        <meta itemprop="datePublished" content="20201202T051631"/>
                                        <div itemprop="itemReviewed" itemscope
                                             itemtype="https://schema.org/Organization">
                                            <meta itemprop="name" content="Дизайн&nbsp;маникюра"/>
                                        </div>
                                        <img src="/templates/nogtevoi_design_1/img/full_LlFOY2vP.jpg"
                                             class="ul-w-review-avatar"/>
                                        <div class="ul-w-review-titles" itemprop="author" itemscope
                                             itemtype="http://schema.org/Person"> <span
                                                class="ul-w-review-name h4" data-name="name"
                                                placeholder="Имя..." itemprop="name">
                                    Евгения Потапова&nbsp;
                                </span></div>
                                        <div class="ul-w-review-text">
                                            <div class="ul-w-review-text-paragraph normal"
                                                 data-name="review" placeholder="Текст отзыва..."
                                                 itemprop="reviewBody"> Алёна лучший мастер!!!!Любой каприз,
                                                любое желание воплощается в идеале! Более 4 лет я радовалась
                                                красивым рукам. Такого специалиста трудно найти.А педикюр
                                                это просто сказка.Очень рекомендую!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-204-13" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                    <div id="ul-id-204-14" class="ul-widget ul-w-review"
                         data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                         data-widget="review" data-controls="mer">
                        <div class="ul-w-review-design1 ul-w-review-custom-design1">
                            <div class="ul-w-review-tabcontent">
                                <div class="ul-w-review-tabpane active" data-index="0" data-item-id="">
                                    <div class="ul-w-review-item " itemscope
                                         itemtype="http://schema.org/Review">
                                        <link itemprop="url"
                                              href="//template_nogtevoi_design_1.ulight12.uid.me/#ul-id-204-14"/>
                                        <meta itemprop="datePublished" content="20201202T051631"/>
                                        <div itemprop="itemReviewed" itemscope
                                             itemtype="https://schema.org/Organization">
                                            <meta itemprop="name" content="Дизайн&nbsp;маникюра"/>
                                        </div>
                                        <img src="/templates/nogtevoi_design_1/img/yrwkO5wQ.jpg"
                                             class="ul-w-review-avatar"/>
                                        <div class="ul-w-review-titles" itemprop="author" itemscope
                                             itemtype="http://schema.org/Person"> <span
                                                class="ul-w-review-name h4" data-name="name"
                                                placeholder="Имя..." itemprop="name">
                                    Александра&nbsp;Воробьёва
                                </span></div>
                                        <div class="ul-w-review-text">
                                            <div class="ul-w-review-text-paragraph normal"
                                                 data-name="review" placeholder="Текст отзыва..."
                                                 itemprop="reviewBody"> Была на маникюре. Алёна оказалась
                                                приятным человеком, приветливая, чуткая, внимательная,
                                                настоящий профессионал. Мне было очень приятно отдать ей
                                                заботу о своих ручках. Спасибо большое мастер!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ul-id-204-15" class="col ul-col col-xs-12 col-sm-12 col-md-4">
                    <div id="ul-id-204-16" class="ul-widget ul-w-review"
                         data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                         data-widget="review" data-controls="mer">
                        <div class="ul-w-review-design1 ul-w-review-custom-design1">
                            <div class="ul-w-review-tabcontent">
                                <div class="ul-w-review-tabpane active" data-index="0" data-item-id="">
                                    <div class="ul-w-review-item " itemscope
                                         itemtype="http://schema.org/Review">
                                        <link itemprop="url"
                                              href="//template_nogtevoi_design_1.ulight12.uid.me/#ul-id-204-16"/>
                                        <meta itemprop="datePublished" content="20201202T051631"/>
                                        <div itemprop="itemReviewed" itemscope
                                             itemtype="https://schema.org/Organization">
                                            <meta itemprop="name" content="Дизайн&nbsp;маникюра"/>
                                        </div>
                                        <img src="/templates/nogtevoi_design_1/img/oHJUoE1A.jpg"
                                             class="ul-w-review-avatar"/>
                                        <div class="ul-w-review-titles" itemprop="author" itemscope
                                             itemtype="http://schema.org/Person"> <span
                                                class="ul-w-review-name h4" data-name="name"
                                                placeholder="Имя..." itemprop="name">
                                    Вероника&nbsp;Кошелева
                                </span>
                                            <div class="ul-w-review-extra note" itemprop="jobTitle"
                                                 data-name="extra" placeholder="Дополнительное поле...">
                                                Должность, статус и тп.
                                            </div>
                                        </div>
                                        <div class="ul-w-review-text">
                                            <div class="ul-w-review-text-paragraph normal"
                                                 data-name="review" placeholder="Текст отзыва..."
                                                 itemprop="reviewBody"> Впервую очередь хочу сказать:
                                                СПАСИБО Алёна!!! За чудесный маникюр, за то, что из моих
                                                ногтей ТЫ сделала картинку! Не пожалеете, Алёна — Мастер
                                                своего дела!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --->
            <div id="ul-id-204-17" class="row ul-row">
                <div id="ul-id-204-18" class="col ul-col col-xs-12 col-sm-12 col-md-12">
                    <div id="ul-id-204-19" class="ul-widget  " type="uSpacer"
                         data-device-hidden='{"desktop":false,"phone":false,"tablet":false}'>
                        <style data-styled="true" data-styled-version="5.0.1">
                            .jwvWke.uspacer {
                                height: 50px;
                            }

                            @media (max-width: 992px) {
                                .jwvWke.uspacer {
                                    height: 50px;
                                }
                            }

                            @media (max-width: 480px) {
                                .jwvWke.uspacer {
                                    height: 50px;
                                }
                            }

                            data-styled.g6[id="sc-AxgMl"] {
                                content: "jwvWke,"
                            }
                        </style>
                        <div class="sc-AxgMl jwvWke  uspacer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection

