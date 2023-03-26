@extends('arm.main.app')
@section('title')
    Админ панель | Блог
@endsection
@section('content')
    <div class="container-fluid page-body-wrapper" style="padding-top: 10px">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/arm/blog/detail/" method="post">
                            @csrf
                            <input id="id_item" name="id_item" hidden value="{{  !empty($item['id']) ? $item['id'] : '' }}">
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" id="name" placeholder="Название" name="name" value="{{  !empty($item['title']) ? $item['title'] : '' }}
">
                            </div>
                            <div class="form-group">
                                <label for="prefix">Тизер</label>
                                <input type="text" class="form-control" id="prefix" placeholder="Тизер" name="prefix"
                                value="{{  !empty($item['prefix']) ? $item['prefix'] : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Описание</label>
                                <textarea class="form-control" id="body" name="text" rows="4">{{  !empty($item['body']) ? $item['body'] : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Ссылка на фотографию</label>
                                <input type="text" class="form-control" id="link" placeholder="Сылка" name="link" value="{{  !empty($item['image']) ? $item['image'] : '' }}">
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
                            <button class="btn btn-danger" type="button" onclick="location.href='/arm/blog/'">Назад</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
