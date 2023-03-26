@extends('arm.main.app')
@section('title')
    Админ панель | Заявка
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper" style="padding-top: 10px">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="/arm/patients-feedback/detail/" method="post">
                        @csrf
                        <input id="id_doctor" name="id_doctor" hidden
                               value="{{  !empty($item['id']) ? $item['id'] : '' }}">
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="form-control" id="surname" placeholder="Фамилия" name="surname"
                                   value="{{  !empty($item['surname']) ? $item['surname'] : '' }}
">
                        </div>
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" id="name" placeholder="Имя" name="name"
                                   value="{{  !empty($item['name']) ? $item['name'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Отчество</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Отчетсво" name="lastname"
                                   value="{{  !empty($item['lastname']) ? $item['lastname'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Отчество</label>
                            <input type="text" class="form-control" id="email" placeholder="Отчетсво" name="email"
                                   value="{{  !empty($item['email']) ? $item['email'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Снилс</label>
                            <input type="text" class="form-control" id="snils" placeholder="Снилс" name="snils"
                                   value="{{  !empty($item['snils']) ? $item['snils'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Услуга</label>
                            <input type="text" class="form-control" id="service" placeholder="Услуга" disabled
                                   name="service"
                                   value="{{  !empty($item['service']) ? $item['service'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Привязанный врач</label>
                            <input type="text" class="form-control" id="doctor" placeholder="Врач" disabled
                                   name="doctor"
                                   value="{{  !empty($doctor['surname']) ? $doctor['surname'] : '' }} {{  !empty($doctor['name']) ? $doctor['name'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Диагноз</label>
                            <input type="text" class="form-control" id="disaese" placeholder="Диагноз" name="disease"
                                   value="{{  !empty($item['disease']) ? $item['disease'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Телефон</label>
                            <input type="text" class="form-control" id="disaese" placeholder="Телефон" name="disaese"
                                   value="{{  !empty($item['phone']) ? $item['phone'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Адресс</label>
                            <input type="text" class="form-control" id="adress" placeholder="Адресс" name="adress"
                                   value="{{  !empty($item['adress']) ? $item['adress'] : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Дата приема</label>
                            <input type="text" class="form-control" id="date" placeholder="Дата приёма" name="date" disabled
                                   value="{{  !empty($item['date']) ? $item['date'] : '' }}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Cохранить</button>

                        @empty($doctor)
                            <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                    data-target="#exampleModal">Привязать врача
                            </button>
                        @endempty
                        <button class="btn btn-danger" type="button" onclick="location.href='/arm/patients-feedback/'">
                            Назад
                        </button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Привязка врача</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="forms-sample" action="/arm/patients-feedback/detail/doctor/" method="post">
                    <input type="text" class="form-control" id="form_id" hidden name="form_id"
                           value="{{  !empty($item['id']) ? $item['id'] : '' }}">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">Врач | Должность </label>
                            <select class="form-control" id="exampleSelectGender" name="doctor_id">
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor['id'] }}">{{ $doctor['name'] }} {{ $doctor['surname'] }}
                                        | {{ $doctor['position'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
