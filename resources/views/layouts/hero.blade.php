<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Kategoriler</span>
                    </div>
                    <ul>
                        @foreach($categories as $category)
                            <li data-filter=".{{$category->name}}"><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Tüm Kategoriler
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="Ne aramak istiyorsun?">
                            <button type="submit" class="site-btn">ARA</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0212 000 00 00</h5>
                            <span>7/24 Destek</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>TAZE ÜRÜNLER</span>
                        <h2>100% Organik<br />Sebze</h2>
                        <p>Ücretsiz Teslimat</p>
                        <a href="#" class="primary-btn">ALIŞVERİŞE BAŞLA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
