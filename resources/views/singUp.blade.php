@extends('layouts/app')

@section('header')
    @include('header')
@endsection


@section('content')
    <div class="section3">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div
                data-options="{'name':{'kind':'name','title':'','show':false,'required':false,'placeholder':'','selectList':[]},'email':{'kind':'email','title':'','show':true,'required':true,'placeholder':'','selectList':[]},'theme':{'kind':'theme','title':'','show':false,'required':false,'placeholder':'','selectList':[]},'phone':{'kind':'phone','title':'','show':true,'required':true,'placeholder':'','selectList':[]},'message':{'kind':'large','title':'','show':false,'required':false,'placeholder':'','selectList':[]},'attachments':{'title':'','show':false,'required':false,'placeholder':''},'captcha':{'kind':'small','title':'','show':false,'required':false,'placeholder':'','selectList':[]},'userAgreement':{'isActive':false,'isAutoChecked':false,'label':''},'orientation':'vertical','header':{'show':true,'title':'Записаться на приём'},'afterMail':'Спасибо !','style':'simple','design':'default','inputs':[{'kind':'name','title':'','show':false,'required':false,'placeholder':'','selectList':[],'_id':'5dfac287ac0ddd65b0958d3c'},{'kind':'email','title':'','show':true,'required':true,'placeholder':'','selectList':[],'_id':'5dfac287ac0ddd65b0958d3d'},{'kind':'theme','title':'','show':false,'required':false,'placeholder':'','selectList':[],'_id':'5dfac287ac0ddd65b0958d3e'},{'kind':'phone','title':'','show':true,'required':true,'placeholder':'','selectList':[],'_id':'5dfac287ac0ddd65b0958d3f'},{'kind':'large','title':'','show':false,'required':false,'placeholder':'','selectList':[],'_id':'5dfac287ac0ddd65b0958d40'}],'submitCaption':'отправить','version':2}"
                data-goals-data="" id="ul-id-feedBack-footerform"
                class="ul-widget ul-widget-feedBack clearfix default ul-widget-feedBack-vertical"
                data-device-hidden="{'desktop':false,'phone':false,'tablet':false}"
                data-widget="feedBack" data-controls="e">
                <form class="feedBack" action="/api/feedBack" method="post" role="form"
                      data-version="2" data-css-version="2">
                    <input type="hidden" ul-model="_id" name="_id"
                           value="55b9dfd0aa733d29306f1b50"/>
                    <div
                        class="ul-widget-feedBack-form-group ul-widget-feedBack-header has-feedback">
                        <div class="ul-w-feedBack-editable ul-w-feedBack-title h3"
                             data-name="header.title">Записаться на приём
                        </div>
                    </div>
                    <div class="ul-widget-feedBack-wrapper" data-inputs-count="2">
                        <div
                            class="ul-widget-feedBack__items-wrapper ul-widget-feedBack__items-wrapper-inputs">
                            <div class="ul-widget-feedBack-form-group has-feedback">
                                <!-- htmlmin:ignore -->
                                <!--noindex-->
                                <!--googleoff: all-->
                                <div
                                    class="ul-w-feedBack-control-label ul-w-feedBack-editable normal"
                                    data-i="1">E-mail
                                </div>
                                <!--googleon: all-->
                                <!--/noindex-->
                                <!-- htmlmin:ignore -->
                                <div class="ul-widget-feedBack-form-control-wrapper">
                                    <input class="ul-widget-feedBack-form-control normal"
                                           type="text" name="inputs.field1" placeholder="E-mail"
                                           ul-model="inputs.1" data-kind="email" data-index="1"
                                           required/> <span
                                        class="ul-widget-feedBack-required-indicator normal">*</span>
                                </div>
                            </div>
                            <div class="ul-widget-feedBack-form-group has-feedback">
                                <!-- htmlmin:ignore -->
                                <!--noindex-->
                                <!--googleoff: all-->
                                <div
                                    class="ul-w-feedBack-control-label ul-w-feedBack-editable normal"
                                    data-i="3">Телефон
                                </div>
                                <!--googleon: all-->
                                <!--/noindex-->
                                <!-- htmlmin:ignore -->
                                <div class="ul-widget-feedBack-form-control-wrapper">
                                    <input class="ul-widget-feedBack-form-control normal"
                                           type="text" name="inputs.field3"
                                           placeholder="+1 (234) 567 89 99" ul-model="inputs.3"
                                           data-kind="phone" data-index="3" required/> <span
                                        class="ul-widget-feedBack-required-indicator normal">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="ul-widget-feedBack-form-group button-wrapper">
                            <button type="submit"
                                    class="ul-w-button1 ul-w-downloadFile-showButton ul-w-feedBack-submit middle"
                                    disabled data-name="submitTitle"> Отправить
                            </button>
                        </div>
                        <div class="alert ul-widget-feedBack-responce note" style="display: none;"
                             role="alert" data-error-email="Неверно введён адрес E-mail."
                             data-error-phone="Неверно введён номер телефона."></div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
