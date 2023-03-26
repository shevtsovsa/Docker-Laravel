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
                                    <h4 class="card-title">Врачи</h4>
                                </div>
                                <div class="col-6 text-right">
                                        <button type="button" class="btn btn-success" onclick="location.href='/arm/doctors/detail/'">Добавить</button>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Фамилия</th>
                                            <th>Имя</th>
                                            <th>Должность</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($items)
                                            @foreach($items as $blog)
                                                <tr>
                                                    <td class="w-25">{{ $blog['surname'] }}</td>
                                                    <td class="w-25">{{ $blog['name'] }}</td>
                                                    <td class="w-25">{{  !empty($blog['position']) ? $blog['position'] : '' }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" onclick="location.href='/arm/doctors/detail?id={{ $blog['id'] }}'">Изменить
                                                        </button>
                                                        <button type="button" class="btn btn-danger" onclick="location.href='/arm/doctors/detail/delete?id={{ $blog['id'] }}'">Удалить
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
