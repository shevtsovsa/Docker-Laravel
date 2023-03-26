@extends('arm.main.app')
@section('title')
    Админ панель | Услуги
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title">Услуги</h4>
                                </div>
                                <div class="col-6 text-right">
                                        <button type="button" class="btn btn-success" onclick="location.href='/arm/service/detail/'">Добавить</button>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Цена</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($items)
                                            @foreach($items as $service)
                                                <tr>
                                                    <td class="w-25">{{ $service['name'] }}</td>
                                                    <td class="w-25">{{ $service['price'] }} р.</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="location.href='/arm/service/detail?id={{ $service['id'] }}'">Изменить
                                                        </button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href='/arm/service/detail/delete?id={{ $service['id'] }}'">Удалить
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
