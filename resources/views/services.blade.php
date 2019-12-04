@extends('template')

@section('content')
    <div class="container servDown" id="serv">
{{--    start Modal    --}}
        <div class="disNonWin" id="modWin">
            <i class="fa fa-times-circle closeServer" id="closeServerWin" aria-hidden="true"></i>
            <form action="#" method="post" name="services">
                <div>
                    <label>Укажите страну встречи с моделью <br/>
                        Specify the country of the model
                    </label><input class="valid" required
                                   placeholder="Страна / Country" maxlength="10" id="Country" type="text">
                    <p class="answerCountry"></p>
                </div>
                <div>

                    <label>Укажите город встречи с моделью <br/>
                        Indicate the city of the meeting with the model
                    </label>
                    <input class="valid" required
                           placeholder="Город / City" maxlength="20" id="City" type="text">
                    <p class="answerCity"></p>
                </div>
                <div>
                    <label>Дата встречи<br/>
                        Date of meeting
                    </label>
                    <input class="valid" required
                           placeholder="Дата / Date" id="Date" type="date">
                </div>
                <div>
                    <label>Количество часов<br/>
                        Hours
                    </label>
                    <input placeholder="Часов / Hours" id="Hours" type="number">
                    <p class="answerHours"></p>
                </div>
                <div>
                    <label>Место встречи<br/>
                        Meeting point
                    </label>
                    <select id="Meeting">
                        <option value="Event">Мероприятие / Event</option>
                        <option value="Carriage">Путушуствие / Carriage</option>
                        <option value="Hotel">Отель / Hotel</option>
                    </select>
                </div>
                <div>
                    <label>укажите примерный бюджет заказа в $ <br/>
                        Indicate approximate order budget in $
                    </label>
                    <input maxlength="7" placeholder="Бюджет / Budget" id="Money" type="text">
                    <p class="answerBudget"></p>
                </div>
                <div>
                    <button id="but" type="submit">
                        отправить
                    </button>
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
                        2. <a href="/public/models">Выбрать модели из каталога</a><br/>
                        Более подробная информация у администратора
                        <a href="https://wa.me/79190477597?text=%D0%A1%D0%B0%D1%88%D0%B0+%D0%BB%D0%BE%D1%85">
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
                        началом действий Модели . Онлайн или наличными на руки .
                        <br/>
                        Так же вы можете указать дополнительные пожелания администратору на WhatsApp . Все не
                        продолжительные встречи происходят в отеле, <strong>отель оплачивает клиент</strong>.
                        При заказе Модели из другой страны <strong>транспортные расходы и проживание Модели оплачивает
                            клиент</strong>.
                        Мы сотрудничаем как c начинающими моделями ( с не раскрученным рейтингом , так и с топ моделями
                        ) <strong>бюджет каждой из них индивидуален</strong>
                        от уровня её популярности. <br/>
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
