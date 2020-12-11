@extends('layouts.master')

@section('hero')
    @include('layouts.hero')
@endsection

@section('categories')
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($categories as $category)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/{{$category->photo}}">
                                <h5><a href="#">{{$category->name}}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('featured')
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Öne Çıkan Ürünler</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Hepsi</li>
                            @foreach($categories->take(5) as $category)
                                <li data-filter=".{{$category->name}}">{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">

                @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix {{$product->get_Category->name}}">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/{{$product->photo}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>

                            <div class="featured__item__text">
                                <h6><a href="#">{{$product->productName}}</a></h6>
                                <h5>{{$product->price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <form action="{{route('product.export')}}" method="get">
                <button type="submit" class="btn btn-primary">Ürünleri İndir</button>
            </form>
        </div>
    </section>
@endsection

@section('banner')
    <div class="banner">
        <div class="container">
            <div class="row">
                @foreach($banners as $banner)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{asset('img/banner/').'/'.$banner->photo}}" alt="banner">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('latest')
    <section class="latest-product spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Son Eklenenler</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach($products->slice(21,3) as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/').'/'.$product->photo}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$product->productName}}</h6>
                                            <span>{{$product->price}} TL</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                            <div class="latest-prdouct__slider__item">
                                @foreach($products->slice(18,3) as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/').'/'.$product->photo}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$product->productName}}</h6>
                                            <span>{{$product->price}} TL</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>En Beğenilenler</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach($products->slice(12,3) as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/').'/'.$product->photo}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$product->productName}}</h6>
                                            <span>{{$product->price}} TL</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach($products->slice(9,3) as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/').'/'.$product->photo}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$product->productName}}</h6>
                                            <span>{{$product->price}} TL</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>En Çok Yorum Alanlar</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach($products->slice(0,3) as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/').'/'.$product->photo}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$product->productName}}</h6>
                                            <span>{{$product->price}} TL</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach($products->slice(6,3) as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{asset('img/latest-product/').'/'.$product->photo}}" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{$product->productName}}</h6>
                                            <span>{{$product->price}} TL</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('blog')
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Blog Yazıları</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{asset('img/blog/').'/'.$blog->thumbnail}}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> {{$blog->created_at->format('d/m/Y')}}</li>
                                    <li><i class="fa fa-comment-o"></i> {{$blog->comment}}</li>
                                </ul>
                                <h5><a href="#">{{$blog->head}}</a></h5>
                                <p>{{$blog->content}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
