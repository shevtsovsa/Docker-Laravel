@extends('arm.main.app')
@section('title')
    Админ панель | Услуга
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper" style="padding-top: 10px">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/arm/service/detail/" method="post">
                            @csrf
                            <input id="id_doctor" name="id" hidden value="{{  !empty($item['id']) ? $item['id'] : '' }}">
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" id="name" placeholder="Название" name="name"
                                value="{{  !empty($item['name']) ? $item['name'] : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Цена</label>
                                <input type="number" class="form-control" id="price" placeholder="Цена" name="price"
                                       value="{{  !empty($item['price']) ? $item['price'] : '' }}">
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
                            <button class="btn btn-danger" type="button" onclick="location.href='/arm/service/'">Назад</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
