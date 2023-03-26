@extends('main.app')

@section('title')
    Клиника
    @endsection
    @section('content')
        <div class="hero-slider">
            <!-- Slider Item -->
            <div class="slider-item slide1" style="background-image:url(images/slider/1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Slide Content Start -->
                            <div class="content style text-center">
                                <h2 class="text-white text-bold mb-2">Наша миссия</h2>
                                <p class="tag-text mb-5">Дать каждому ребенку и взрослому почувствовать себя значимым, не смотря на обстоятельства</p>
                                <a href="/about/" class="btn btn-main btn-white">О нас</a>
                            </div>
                            <!-- Slide Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="slider-item" style="background-image:url(images/slider/slider-bg-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Slide Content Start-->
                            <div class="content style text-center">
                                <h2 class="text-white">Задай вопрос</h2>
                                <p class="tag-text">Не стой в стороне, наши люди всегда помогут</p>
                                <a href="/contact/" class="btn btn-main btn-white">Наши контакты</a>
                            </div>
                            <!-- Slide Content End-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Slide Content Start -->
                            <div class="content text-center style">
                                <h2 class="text-white text-bold mb-2">Наши проекты</h2>
                                <p class="tag-text mb-5">Помогая преодолеть барьеры тем кому сложно сделать это в одиночку<br>мы делаем мир доступным для всех</p>
                                <a href="/blog/" class="btn btn-main btn-white">Наш блог</a>
                            </div>
                            <!-- Slide Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====  End of Page Slider  ====-->

        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cta-block">
                            <div class="emmergency item">
                                <i class="fa fa-phone"></i>
                                <h2>Круглосуточный телефон</h2>
                                <a href="#">+79878527318</a>
                                <p></p>
                            </div>
                            <div class="top-doctor item">
                                <i class="fa fa-stethoscope"></i>
                                <h2>24 часовое обслуживание</h2>
                                <p></p>
                            </div>
                            <div class="working-time item">
                                <i class="fa fa-hourglass-o"></i>
                                <h2>Рабочее время</h2>
                                <ul class="w-hours">
                                    <li>Пон - Пят  - <span>8:00 - 17:00</span></li>
                                    <li>Пон - Пят  - <span>8:00 - 17:00</span></li>
                                    <li>Пон - Пят  - <span>8:00 - 17:00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--about section-->
        <section class="feature-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="image-content">
                            <div class="section-title text-center">
                                <h3>Необходимые врачи на каждый день</h3>
                                <p>К нам можно записать через сайт или по звонку горячей линии</p>
                            </div>
                            <div class="row">
                                <div class="row col-md-12 col-sm-6">
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <div class="icon-box">
                                                <figure>
                                                    <a href="#">
                                                        <img src="/images/resource/1.png" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <h6>Терапевт</h6>
                                            <p>Врач осуществляет первичную диагностику и лечению внутренних заболеваний. При наличии показаний он выдает пациенту направление на консультацию узкого специалиста.  </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <div class="icon-box">
                                                <figure>
                                                    <a href="#">
                                                        <img src="/images/resource/2.png" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <h6>Офтальмолог</h6>
                                            <p>Врач специализируется на диагностике, лечении и профилактике болезней и травм глаз, а также органов зрительной системы</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 row col-sm-6">
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <div class="icon-box">
                                                <figure>
                                                    <a href="#">
                                                        <img src="/images/resource/3.png" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <h6>Психолог</h6>
                                            <p>Врач психолог проводит инвидуальные и групповые профилактические беседы для пациентов склонных не интересу жизни</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <div class="icon-box">
                                                <figure>
                                                    <a href="#">
                                                        <img src="/images/resource/4.png" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <h6>Гематолог</h6>
                                            <p>Врач занимается профилактикой, диагностикой и лечением заболеваний крови и органов кроветворения.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End about section-->

        <!--Start about us area-->
        <section class="service-tab-section section">
            <div class="outer-box clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nav tabs -->
                            <div class="tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#dormitory"  data-toggle="tab">Хирург</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#orthopedic" data-toggle="tab">Уролог</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sonogram" data-toggle="tab">Лор</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#x-ray" data-toggle="tab">АФК</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#diagnostic" data-toggle="tab">ЛФК</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Start single tab content-->
                            <div class="tab-content">
                                <div class="service-box tab-pane fade in active row" id="dormitory">
                                    <div class="col-md-6">
                                        <img class="img-responsive" src="/images/services/service-one.jpg" alt="service-image">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contents">
                                            <div class="section-title">
                                                <h3>dormitory</h3>
                                            </div>
                                            <div class="text">
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a
                                                    dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a dental
                                                    prosthetic is added.then a dental pros- thetic is added.</p>
                                            </div>
                                            <ul class="content-list">
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--End single tab content-->
                                <!--Start single tab content-->
                                <div class="service-box tab-pane fade in" id="orthopedic">
                                    <div class="col-md-6">
                                        <img class="img-responsive" src="/images/services/service-two.jpg" alt="service-image">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contents">
                                            <div class="section-title">
                                                <h3>orthopedic</h3>
                                            </div>
                                            <div class="text">
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                            </div>
                                            <ul class="content-list">
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                            </ul>
                                            <a href="#" class="btn btn-style-one">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End single tab content-->
                                <!--Start single tab content-->
                                <div class="service-box tab-pane fade in" id="sonogram">
                                    <div class="col-md-6">
                                        <img class="img-responsive" src="/images/services/service-three.jpg" alt="service-image">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contents">
                                            <div class="section-title">
                                                <h3>sonogram</h3>
                                            </div>
                                            <div class="text">
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                            </div>
                                            <ul class="content-list">
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                            </ul>
                                            <a href="#" class="btn btn-style-one">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End single tab content-->
                                <!--Start single tab content-->
                                <div class="service-box tab-pane fade in" id="x-ray">
                                    <div class="col-md-6">
                                        <img class="img-responsive" src="/images/services/service-four.jpg" alt="service-image">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contents">
                                            <div class="section-title">
                                                <h3>x-ray</h3>
                                            </div>
                                            <div class="text">
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                            </div>
                                            <ul class="content-list">
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                            </ul>
                                            <a href="#" class="btn btn-style-one">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End single tab content-->
                                <!--Start single tab content-->
                                <div class="service-box tab-pane fade in" id="diagnostic">
                                    <div class="col-md-6">
                                        <img class="img-responsive" src="/images/services/service-five.jpg" alt="service-image">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contents">
                                            <div class="section-title">
                                                <h3>diagnostic</h3>
                                            </div>
                                            <div class="text">
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                    then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                            </div>
                                            <ul class="content-list">
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                <li>
                                                    <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                            </ul>
                                            <a href="#" class="btn btn-style-one">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End single tab content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End about us area-->

        <!--Service Section-->
        <section class="service-section bg-gray section">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Наши
                        <span>Услуги</span>
                    </h3>
                    <p>Наша клиника предоставляет множество услуг как от узких специалистов, так и обычных терапевтов.</p>
                </div>
                <div class="row items-container clearfix">
                    @foreach($services as $servers)
                    <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <a href="/service/">
                                    <img src="{{ $servers['image']  }}" alt="images" class="img-responsive">
                                </a>
                            </div>
                            <div class="image-content text-center">
                                <span>{{ $servers['name']  }}</span>
                                <a href="/service/">
                                    <h6>{{ $servers['price']  }}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--End Service Section-->

        <!-- Contact Section -->
        <section class="appoinment-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="accordion-section">
                            <div class="section-title">
                                <h3>FAQ</h3>
                            </div>
                            <div class="accordion-holder">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Why Should I choose Medical Health
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                   aria-controls="collapseTwo">
                                                    What are the Centre’s visiting hours?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                   aria-controls="collapseThree">
                                                    How many visitors are allowed?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
