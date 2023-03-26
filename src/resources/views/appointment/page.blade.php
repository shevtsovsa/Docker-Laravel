@extends('main.app')

@section('title')
    Оставить заявку
@endsection
@section('content')
    <section class="blog-section section style-three pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-area style-two">
                        <div class="section-title">
                            <h3>Запись
                                <span>на прием</span>
                            </h3>
                        </div>
                        <form name="contact_form" class="default-form contact-form" action="/appointment/" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="surname" placeholder="Фамилия" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Имя" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lastname" placeholder="Отчество" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="snils" placeholder="СНИЛС" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select name="service">
                                            @foreach($service as $item_service)
                                            <option value="{{ $item_service['id'] }}">{{ $item_service['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="disease">
                                            <option>Укажите вашу болезнь</option>
                                            <option>Ишемия</option>
                                            <option>Стенокардия</option>
                                            <option>Аневризм</option>
                                            <option>Саркидоз</option>
                                            <option>Туберкулез</option>
                                            <option>Панкреатит</option>
                                            <option>Гепатит</option>
                                            <option>Холецистета</option>
                                            <option>Другое</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input id="phone" type="text" name="phone" placeholder="Телефон" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="date" placeholder="Дата" required="" id="datepicker">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="adress" placeholder="Адрес" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="form_message" placeholder="Описание" required=""></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn-style-one">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="appointment-image-holder">
                        <figure>
                            <img src="/images/background/appoinment.jpg" alt="Appointment">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!--team section-->
    {{--<section class="team-section section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Expert
                    <span>Doctors</span>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
                    <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <img src="/images/team/r3.png" alt="doctor" class="img-responsive">
                        <div class="contents text-center">
                            <h4>Dr. Robert Barrethion</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                            <a href="#" class="btn btn-main">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <img src="/images/team/r2.png" alt="doctor" class="img-responsive">
                        <div class="contents text-center">
                            <h4>Dr. Marry Lou</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                            <a href="#" class="btn btn-main">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <img src="/images/team/r1.png" alt="doctor" class="img-responsive">
                        <div class="contents text-center">
                            <h4>Dr. Sansa Stark</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                            <a href="#" class="btn btn-main">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
@endsection
