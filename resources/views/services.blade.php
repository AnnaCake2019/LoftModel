@extends('template')

@section('content')
    <div class="container servDown" id="serv">
{{--    start Modal    --}}
        <div class="disNonWin" id="modWin">
            <i class="fa fa-times-circle closeServer" id="closeServerWin" aria-hidden="true"></i>
            <div class="headForm">
                <h4>Анкета для персонального кастинга</h4>
            </div>
            <form action="#" method="post" name="services">
                <div>
                    <label>Укажите страну встречи с моделью
                    </label><input class="valid" required
                                   placeholder="Страна" maxlength="10" id="Country" type="text">
                </div>
                <div>

                    <label>Укажите город встречи с моделью</label>
                    <input class="valid" required
                           placeholder="Город" maxlength="20" id="City" type="text">
                </div>
                <div>
                    <label>Дата встречи
                    </label>
                    <input  required
                            id="Date" type="date">
                </div>
                <div>
                    <label>Укажите примерный бюджет заказа в $</label>
                    <input maxlength="7" placeholder="Бюджет" id="Money" type="text">
                </div>
                <div>
                    <button id="but" type="submit">
                        <a id="sendFormWhatsApp">
                            отправить
                        </a>
                    </button>
                </div>
                <div class="sendForm">
                    <p id="allError"></p>
                </div>
            </form>
        </div>
{{--    end Modal    --}}
        <div class="serv">
            <div class="col-md-12">
                <h1>Loft model</h1>
            </div>
            <div>
                <p></p>
            </div>
            <div class="col-md-12">
                <div class="ofer_inf">
                    <p>
                        Для подбора спутницы есть 2 варианта:<br/>
                        1. <a id="linkOW" href="#">Персональный онлайн кастинг</a><br/>
                        2. <a href="/public/Models">Выбрать модели из каталога</a><br/>
                        Более подробная информация у администратора
                        <a href="https://wa.me/79190477597?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5,%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BF%D0%BE%D0%B4%D1%80%D0%BE%D0%B1%D0%BD%D0%B0%D1%8F%20%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F%20%D0%BF%D0%BE%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%D0%BC%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0.">
                            WhatsApp
                        </a>
                        или в разделе условия заказа <a href="#">Условия Заказа/Order Terms</a>
                        Все заказы строго конфиденциальны.<br/>
                    </p>
                </div>
                <div class="ofer_inf">

                    <p>
                        Как осуществляется оплата:<br/>
                        Определяемся с выбором Модели , осуществляется первая встреча . Оплата происходит сразу перед
                        началом работы Модели . Онлайн или наличными на руки .
                        <br/>
                        Так же вы можете указать дополнительные пожелания администратору на WhatsApp . Все не
                        продолжительные встречи происходят в отеле, <strong>отель оплачивает клиент</strong>.
                        При заказе Модели из другой страны <strong>транспортные расходы и проживание Модели оплачивает
                            клиент</strong>.
                        Мы сотрудничаем как c начинающими моделями ( с не раскрученным рейтингом ) , так и с топ-моделями ,
                         <strong>бюджет каждой из них индивидуален</strong>
                        от уровня её популярности и от условий заказа. <br/>
                        Бюджет уточнять у администратора.
                    </p>
                </div>
                <div class="ofer_inf">
                    <button id="buttonOW">
                        Заказать
                    </button>
                </div>
           </div>
       </div>
   </div>
    <script src="/public/js/modelWindow.js"></script>
    <script src="/public/js/services.js"></script>
@endsection
