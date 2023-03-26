@extends('arm.main.app')
@section('title')
    Админ панель | Врачи
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
                                    <h4 class="card-title">Заявки пациентов</h4>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Email</th>
                                            <th>Диагноз</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($items)
                                            @foreach($items as $item)
                                                <tr>
                                                    <td class="w-25">{{ $item['surname'] }}</td>
                                                    <td class="w-25">{{ $item['name'] }}</td>
                                                    <td class="w-25">{{ $item['email'] }}</td>
                                                    <td>{{ $item['disease'] }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="location.href='/arm/patients-feedback/detail?id={{ $item['id'] }}'">Просмотр
                                                        </button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href='/arm/patients-feedback/detail/delete?id={{ $item['id'] }}'">Удалить
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
