@extends('arm.main.app')
@section('title')
    Админ панель | Врач
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper" style="padding-top: 10px">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/arm/doctors/detail/" method="post">
                            @csrf
                            <input id="id_doctor" name="id_doctor" hidden value="{{  !empty($item['id']) ? $item['id'] : '' }}">
                            <div class="form-group">
                                <label for="surname">Фамилия</label>
                                <input type="text" class="form-control" id="surname" placeholder="Фамилия" name="surname" value="{{  !empty($item['surname']) ? $item['surname'] : '' }}
">
                            </div>
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" id="name" placeholder="Имя" name="name"
                                value="{{  !empty($item['name']) ? $item['name'] : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Отчество</label>
                                <input type="text" class="form-control" id="middle_name" placeholder="Отчетсво" name="middle_name"
                                       value="{{  !empty($item['middle_name']) ? $item['middle_name'] : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="position">Должность</label>
                                <input type="text" class="form-control" id="position" placeholder="Должность" name="position"
                                       value="{{  !empty($item['position']) ? $item['position'] : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Ссылка на фотографию</label>
                                <input type="text" class="form-control" id="image" placeholder="Сылка" name="image" value="{{  !empty($item['image']) ? $item['image'] : '' }}">
                            </div>
                            {{--   <div class="form-group">
                                   <label>Изображение</label>
                                   <input type="file" name="img[]" class="file-upload-default">
                                   <div class="input-group col-xs-12">
                                       <input type="text" class="form-control file-upload-info" disabled
                                              placeholder="Upload Image">
                                       <span class="input-group-append">
                                 <button class="file-upload-browse btn btn-primary" type="button">Загрузить</button>
                               </span>
                                   </div>
                               </div>--}}
                            <button type="submit" class="btn btn-primary mr-2">Cохранить</button>
                            <button class="btn btn-danger" type="button" onclick="location.href='/arm/doctors/'">Назад</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
