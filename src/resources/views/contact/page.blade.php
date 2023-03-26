@extends('main.app')

@section('title')
    Контакты
@endsection
@section('content')
    <section class="section contact">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- address start -->
                    <div class="address-block">
                        <!-- Location -->
                        <div class="media">
                            <i class="fa fa-map-o"></i>
                            <div class="media-body">
                                <h3>Местоположение</h3>
                                <p>Россия, Оренбург, Сакмара
                                    <br>ул. Новая, дом 12</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="media">
                            <i class="fa fa-phone"></i>
                            <div class="media-body">
                                <h3>Телефон</h3>
                                <p>
                                    +79878527318
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="media">
                            <i class="fa fa-envelope-o"></i>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p>
                                    sakmara_ludi56@mail.ru
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- address end -->
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <!-- contact form start -->
                        <form action="#" class="row">
                            <!-- name -->
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control main" placeholder="Фамилия" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="name1" class="form-control main" placeholder="Отчество" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="name2" class="form-control main" placeholder="Имя" required>
                            </div>
                            <!-- email -->
                            <div class="col-md-6">
                                <input type="email" class="form-control main" placeholder="Email" required>
                            </div>
                            <!-- phone -->
                            <div class="col-md-12">
                                <input type="text" class="form-control main" placeholder="Phone" required>
                            </div>
                            <!-- message -->
                            <div class="col-md-12">
                                <textarea name="message" rows="15" class="form-control main" placeholder="Описание"></textarea>
                            </div>
                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                                <button class="btn btn-style-one" type="submit">Отправить</button>
                            </div>
                        </form>
                        <!-- contact form end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
@endsection
