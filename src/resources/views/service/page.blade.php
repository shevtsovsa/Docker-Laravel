@extends('main.app')

@section('title')
    Сервис
@endsection
@section('content')
    <section class="service-overview section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-block">
                        <h2>Медецинские услуги</h2>
                        <p>Организация предлагает большой перечень услуг врачей разных специализаций доступных для людей инвалидов бесплатно.
                        </p>
                        <ul>
                            <li><i class="fa fa-caret-right"></i>Терапевт</li>
                            <li><i class="fa fa-caret-right"></i>Офтальмолог</li>
                            <li><i class="fa fa-caret-right"></i>Гематолог</li>
                            <li><i class="fa fa-caret-right"></i>Психолог</li>
                            <li><i class="fa fa-caret-right"></i>Уролог</li>
                            <li><i class="fa fa-caret-right"></i>Отоларинголог</li>
                        </ul>
                       {{-- <a href="#" class="btn btn-style-one">Смотреть все услуги</a>--}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-section">
                        <div class="accordion-holder">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Как мне узнать, свободен ли врач в этот день?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Вы можете записаться на определенную дату, а также мы можем предложить нужного вам врача. Если есть еще вопросы, задайте их нам на вкладке "Контакты"
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                               aria-controls="collapseTwo">
                                                Не смогли записаться к врачу
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Проверьте свою почту, возможно вы получили от нас ответ...
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                Через сколько мне придет ответ по заявке
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Наш оператор ответит вам в ближайшие время, время ожидания 4 часа. Если вы не получили ответ, напишите нам обратную связь
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-box col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="/images/services/service-one.jpg" alt="service-image">
                        </div>
                        <div class="col-md-6">
                            <div class="contents">
                                <div class="section-title">
                                    <h3>Социальные услуги</h3>
                                    <p>Жизнь человека инвалида непроста, мы организовали отряды волонтеров, которые помогут вам с бытовыми трудностями.
                                        Не бойтесь обращаться за помощью, наши социальные работники всегда вам помогут! </p>
                                </div>
                                <ul class="content-list">
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Социально-бытовые</li>
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Социально-медицинские</li>
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Социально-педагогические</li>
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Социально-трудовые</li>
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Социально-правовые</li>
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Реабилитационные</li>
                                    <li>
                                        <i class="fa fa-check-circle-o"></i>Абилитационные</li>
                                </ul>
                                {{--<a href="#" class="btn btn-style-one">Смотреть все услуги</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Service Section-->
    <section class="service-section bg-gray section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Услуги
                    <span>Врачей</span>
                </h3>
                <h4>Уважайте труд человека, который хочет вам помочь и делайте все возможное и тогда вам станет лучше. Все в ваших руках!</h4>
            </div>
            <div class="row items-container clearfix">
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="/service/">
                                <img src="/images/gallery/1.jpg" alt="images" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">
                            <a href="/service/">
                                <h6>Терапевт</h6>
                            </a>
                            <p>Запишитесь на осмотр к терапевту и мы найдем причину плохого самочувствия.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="/service/">
                                <img src="/images/services/1.jpg" alt="images" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">
                            <span></span>
                            <a href="/service/">
                                <h6>Офтальмолог</h6>
                            </a>
                            <p>Женщины чувствуют, если мужчина, глядя в её глаза, видит другую. Лечите глаза..</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="/service/">
                                <img src="/images/gallery/3.jpg" alt="images" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">

                            <a href="/service/">
                                <h6>Психолог</h6>
                            </a>
                            <p>Жизнь даст еще много трудностей, инвалидность это начало, дальше будет хуже.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="/service/">
                                <img src="/images/services/2.jpg" alt="images" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">
                            <span></span>
                            <a href="/service/">
                                <h6>Гематолог</h6>
                            </a>
                            <p>Кровь говорит о многом, а грязную лучше не приносить</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="/service/">
                                <img src="/images/gallery/2.jpg" alt="images" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">
                            <span></span>
                            <a href="/service/">
                                <h6>Нерволог</h6>
                            </a>
                            <p>Береги свои нервы и не стань инвалидам из-за JohnCena.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="inner-box">
                        <div class="img_holder">
                            <a href="/service/">
                                <img src="/images/gallery/3.jpg" alt="images" class="img-responsive">
                            </a>
                        </div>
                        <div class="image-content text-center">
                            <span></span>
                            <a href="/service/">
                                <h6>Оталаринголог</h6>
                            </a>
                            <p>УХО-ГОРЛО-НОС</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
