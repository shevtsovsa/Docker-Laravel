@extends('main.app')

@section('title')
    Блог
@endsection
@section('content')
    <section class="blog-section style-four section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="left-side">
                        @foreach($items as $item)
                            <div class="item-holder">
                                <div class="image-box">
                                    <figure>
                                        <a href="/blog/detail?id={{ $item['id'] }}"><img src="{{ $item['image'] }}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="content-text">
                                    <a href="/blog/detail?id={{ $item['id'] }}"><h6>{{ $item['title'] }}</h6></a>
                                    <span>{{$item['created_at'] }}</span>
                                    <p>{{ $item['prefix'] }}</p>
                                    <div class="link-btn">
                                        <a href="/blog/detail?id={{ $item['id'] }}" class="btn-style-one">Узнать больше</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            {{--<div class="styled-pagination">
                <ul>
                    <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                </ul>
            </div>--}}
        </div>
    </section>
@endsection
