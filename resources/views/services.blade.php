@extends('template')

@section('content')
    <div style="display: none">
        Персонального Онлайн кастинга
        <p>
            Для осущ. онлайн кастинга
            вам необходимо
            зполнить анкуту для точного подбора
            модели под ваши станларты!
        </p>

    </div>
    <div class="container servDown" id="serv">
{{--    start Modal    --}}
        <div class="disNonWin" id="modWin">
            <form>
                <label>Укажите страну встречи с моделью<input type="text"></label>
                <label>Укажите город встречи с моделью<input type="text"></label>
                <label>Дата встречи<input type="date"></label>
                <label>Колво часов или суток<input type="text"></label>
                <label>Место встречи
                <select>
                    <option value="">Мероприятие</option>
                    <option value="">Путушуствие</option>
                    <option value="">Отель</option>
                </select>
                </label>
                <label>цель заказа модели
                <select>
                    <option value="">мероприятие</option>
                    <option value="">Путешествие</option>
                    <option value="">Отель</option>
                </select>
                </label>
                <label>
                    укажите примерный бюджет заказа в $
                    <input type="number">
                </label>
                <button type="submit">
                    отправить
                </button>
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

                </div>
                <div class="ofer_inf">
                    <p>
                        Для подбора спутницы есть 2 варианта:<br/>
                        1. Персональный онлайн кастинг<br/>
                        2. Выбрать модели из каталога<br/>
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
@endsection
