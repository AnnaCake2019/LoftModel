@extends('template')

@section('content')
    <div class="container servDown" id="serv">
        {{--    start Modal    --}}
        <div class="disNonWin" id="modWin">
            <i class="fa fa-times-circle closeServer" id="closeServerWin" aria-hidden="true"></i>
            <div class="headForm">
                <h4>Application for personal casting</h4>
            </div>
            <form action="#" method="post" name="services">
                <div>
                    <label>Specify the country of the model
                    </label><input class="valid" required
                                   placeholder="Country" maxlength="10" id="Country" type="text">
                </div>
                <div>

                    <label>Indicate the city of the meeting with the model
                    </label>
                    <input class="valid" required
                           placeholder="City" maxlength="20" id="City" type="text">
                </div>
                <div>
                    <label>Date of meeting
                    </label>
                    <input  required
                            id="Date" type="date">
                </div>
                <div>
                    <label>Indicate approximate order budget in $
                    </label>
                    <input maxlength="7" placeholder="Budget" id="Money" type="text">
                </div>
                <div>
                    <button id="but" type="submit">
                        <a id="sendFormWhatsApp">
                            Send
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
                        For the selection of girls there are 2 options:<br/>
                        1. <a id="linkOW" href="#">Personal online casting</a><br/>
                        2. <a href="/public/EnServices">Choose a model from the catalog</a><br/>
                        For more information, please contact the administrator in
                        <a href="https://wa.me/79516864336?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5,%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BF%D0%BE%D0%B4%D1%80%D0%BE%D0%B1%D0%BD%D0%B0%D1%8F%20%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D1%8F%20%D0%BF%D0%BE%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%D0%BC%20%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0.">
                            WhatsApp
                        </a>
                        or in the <a href="#">Order Terms</a> section.
                        All orders are strictly confidential..<br/>
                    </p>
                </div>
                <div class="ofer_inf">

                    <p>
                        How payment is made:<br/>
                        We are determined with the choice of a girl , you have a first meeting with her .
                        Payment is made immediately before the start work of the Model.
                        Online transfer or cash in the hands of the girl .
                        <br/>
                        You can also specify additional wishes to the administrator on WhatsApp. All non-long meetings take place at the hotel
                        , <strong> the hotel is paid by the client</strong>.
                        If you order a Model from another country <strong> the transport costs and accommodation of the Model are paid by the
                            client</strong>.
                        We cooperate as novice models ( with a small rating ), and work with top models,
                        <strong>the budget of each of them is individual</strong>
                        depends on the level of its popularity and the terms of the order. <br/>
                        Budget check with the administrator.
                    </p>
                </div>
                <div class="ofer_inf">
                    <button id="buttonOW">
                        Order
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="/public/js/modelWindow.js"></script>
    <script src="/public/js/services.js"></script>
@endsection

