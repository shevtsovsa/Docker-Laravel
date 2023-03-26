@extends('main.app')

@section('title')
    О нас
@endsection
@section('content')
    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/gallery/1.jpg" class="responsive" alt="story">
                </div>
                <div class="col-md-6">
                    <div class="story-content">
                        <h2>История организации</h2>
                        <h5 class="tagline">Инвалидность не определяет вас..оно определяет, как вы сталкиваетесь с
                            проблемами, которые ставит перед вами инвалидность (Джим Эбботт)</h5>
                        <p>Организация «Люди для людей» была основана 2009 году, является некоммерческой государственной
                            организацией, создана федеральным законом от 22.08.2004 N 122- Ф3. Данная организация
                            проявляет инициативу, направленную на оказание всесторонней помощи и поддержки инвалидам</p>
                        <h6>Наши цели</h6>
                        <p>Одна из основных целей организации это - продвижение идеи интеграции людей инвалидов с
                            обществом, также мы оказываем ряд услуг способствующих облегчению жизни инвалидов. Наши
                            специалисты проводят беседы с инвалидами, чтобы обеспечить им цели на жизни, также мы
                            оказываем помощь в повседневных делах инвалидам</p>
                        <h6>Важность нашей организации</h6>
                        <p>Мы помогаем в организации лечения, предоставляем доступ к новейшим методикам и реабилитации.
                            Очень важным аспектом работы помощи людям с инвалидностью является в широком понимании
                            поддержка в реализации жизненных увлечений.
                            Инвалидность не должна препятствовать осуществлению вашей мечты. Стоит ломать стереотипы,
                            исключающие людей с инвалидностью из многих видов деятельности — это тоже важные цели нашей
                            организации</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Работа наших специалистов
                        </h3>
                        <p>Каждый специалист прикладывает огромные усилия чтобы помочь людям инвалидам</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="/images/gallery/1.jpg" class="img-responsive" alt="gallery-image">
                        <a data-fancybox="images" href="images/gallery/1.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="/images/gallery/2.jpg" class="img-responsive" alt="gallery-image">
                        <a data-fancybox="images" href="images/gallery/2.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="/images/gallery/3.jpg" class="img-responsive" alt="gallery-image">
                        <a data-fancybox="images" href="images/gallery/3.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="/images/gallery/4.jpg" class="img-responsive" alt="gallery-image">
                        <a data-fancybox="images" href="images/gallery/4.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="/images/gallery/5.jpg" class="img-responsive" alt="gallery-image">
                        <a data-fancybox="images" href="images/gallery/5.jpg"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="/images/gallery/6.jpg" class="img-responsive" alt="gallery-image">
                        <a data-fancybox="images" href="images/gallery/6.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="appoinment-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-section">
                        <div class="section-title">
                            <h3>Частые вопросы</h3>
                        </div>
                        <div class="accordion-holder">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Как устанавливается инвалидность?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            При установлении инвалидности учитывается количественная оценка степени
                                            выраженности стойких нарушений функций организма человека при
                                            новообразованиях. Она основывается преимущественно на оценке локальных
                                            факторов прогноза: локализация и размер опухоли, анатомическая форма роста,
                                            темп роста, степень прорастания стенки органа (степень инвазии),
                                            гистологическое строение и степень дифференцировки, степень
                                            злокачественности, характер поражения регионарных лимфатических узлов,
                                            наличие или отсутствие отдаленных метастазов, стадия опухолевого процесса
                                            (по системе TNMG). Учитывается также возможность адаптации и компенсации,
                                            наличие осложнений.

                                            (Приказ Минтруда России от 17.12.2015 N 1024н (ред. от 05.07.2016) "О
                                            классификациях и критериях, используемых при осуществлении медико-социальной
                                            экспертизы граждан федеральными государственными учреждениями
                                            медико-социальной экспертизы" (Зарегистрировано в Минюсте России 20.01.2016
                                            N 40650) Зарегистрировано в Минюсте России 20 января 2016 г. N 40650)
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                               aria-controls="collapseTwo">
                                                Что такое ИПРА инвалида?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            ИПРА инвалида - комплекс оптимальных для инвалида реабилитационных
                                            мероприятий, включающий в себя отдельные виды, формы, объемы, сроки и
                                            порядок реализации медицинских, профессиональных и других реабилитационных
                                            мер, направленных на восстановление, компенсацию нарушенных функций
                                            организма, формирование, восстановление, компенсацию способностей инвалида к
                                            выполнению определенных видов деятельности.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                Какие права имеет инвалид на работе?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            1. Продолжительность рабочего времени инвалидов и оплата их работы - не
                                            более 35 часов в неделю с сохранением полной оплаты труда (для инвалидов I и
                                            II группы);
                                            <br>2. Привлечение инвалидов к сверхурочной работе, работе в выходные,
                                            праздничные дни, а также в ночное время допускается только с их письменного
                                            согласия и при условии, что это не запрещено им по состоянию здоровья в
                                            соответствии с медицинским заключением;
                                            <br>3. Продолжительность ежегодного оплачиваемого отпуска инвалидов
                                            увеличена и должна составлять не менее 30 календарных дней (ч. 5 ст. 23
                                            Закона N 181-ФЗ);
                                            <br>4. Работодатель обязан предоставить работнику-инвалиду по его
                                            письменному заявлению отпуск без сохранения заработной платы
                                            продолжительностью до 60 календарных дней в году (абз. 5 ч. 2 ст. 128 ТК РФ,
                                            письмо Роструда от 16.04.2014 N ПГ/3387-6-1);
                                            <br>5. Работодатель обязан создавать и оснащать (оборудовать) специальные
                                            рабочие места для трудоустройства инвалидов. (ч. 1 ст. 22 Закона N 181-ФЗ.);
                                            6. Установление легкого труда для инвалидов.
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
