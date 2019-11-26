@extends('template')

@section('content')
    <div class="container">
        <div class="row contact contDown" id="cont">
            <div class="col-md-12 tel">
                <p class="TableOfContents">КОНТАКТЫ</p>
                <p class="TableOfContentsTwo">По любым вопросам обращаться по телефону:</p>
                <p class="telInto">+7 (951) 686-43-36</p>
            </div>
            <div class="col-md-12 soc">
                <div>
                    <a href="#" title="Telegram"><i class="fab fa-telegram-plane tel"></i></a>
                </div>
                <div>
                    <a href="#" title="Instagram"><i class="fab fa-instagram inst"></i></a>
                </div>
                <div>
                    <a href="#" title="VK"><i class="fab fa-vk vk"></i></a>
                </div>
                <div>
                    <a href="#" title="WhatsApp"><i class="fab fa-whatsapp wats"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="/public/js/contact.js"></script>
@endsection
