@extends('frontend/master/master')
@section('title', 'Trang chủ')
@section('main')
    <div class="grid slide-form">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="./wibu.html" class="slide-link">
                        <img src=" img/slider_3.jpg" class="d-block w-100" alt="Wibu">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./t_shirt.html" class="slide-link">
                        <img src=" img/slider_nhen.jpg" class="d-block w-100" alt="Nhện">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="./cyberpunk.html" class="slide-link">
                        <img src=" img/slider_cbpunk.jpg" class="d-block w-100" alt="Cyberpunk">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class=" ti-angle-left slide-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class=" ti-angle-right slide-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

        <!-- Content Type -->
        <div class="content-type">
            <ul class="content-type-list">
                <li class="content-type-item">
                    <a href="./wibu.html" class="content-type-item-link">
                        <img src=" img/brand_1.jpg" alt="Wibu" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">Wibu</p>
                </li>
                <li class="content-type-item">
                    <a href="./cyberpunk.html" class="content-type-item-link">
                        <img src=" img/brand_2.jpg" alt="Cyberpunk 2077" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">Cyberpunk 2077</p>
                </li>
                <li class="content-type-item">
                    <a href="./lol.html" class="content-type-item-link">
                        <img src=" img/brand_3.jpg" alt="LoL" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">LoL</p>
                </li>
                <li class="content-type-item">
                    <a href="" class="content-type-item-link">
                        <img src=" img/brand_4.jpg" alt="Dark Souls" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">Dark Souls</p>
                </li>
                <li class="content-type-item">
                    <a href="" class="content-type-item-link">
                        <img src=" img/brand_5.jpg" alt="The Witcher" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">The Witcher</p>
                </li>
                <li class="content-type-item">
                    <a href="" class="content-type-item-link">
                        <img src=" img/brand_6.jpg" alt="Pokémon" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">Pokémon</p>
                </li>
                <li class="content-type-item">
                    <a href="" class="content-type-item-link">
                        <img src=" img/brand_7.jpg" alt="Hollow Knight" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">Hollow Knight</p>
                </li>
                <li class="content-type-item">
                    <a href="" class="content-type-item-link">
                        <img src=" img/brand_8.jpg" alt="Animal Crossing" class="content-type-item-img">
                    </a>
                    <p class="content-type-item-text hover-primary-color">Animal Crossing</p>
                </li>
            </ul>
        </div>
        <!--New Shirt  -->
        <div class="new-shirt">
            <a class="new-shirt-content hover-primary-color">Những mẫu áo mới nhất</a>
            <div class="grid-row">
                @foreach ($newshirts as $item)
                    <div class="grid__column-5 new-shirt-list">
                        <div href="../detail/{{ $item->Slug }}.html" alt="{{ $item->Name }}" class="new-shirt-item">

                            <div class="new-shirt-item-img"
                                style="background-image: url('../uploads/{{ $item->Image }}');">
                                <span class="new-shirt-search">
                                    <a href="../detail/{{ $item->Slug }}.html" class="ti-search "></a>
                                </span>
                            </div>
                            <div class="new-shirt-item__price">
                                <a href='../detail/{{ $item->Slug }}.html'
                                    class="new-shirt-item-name hover-primary-color">{{ $item->Name }}</a>
                                <span class="new-shirt-item__price-current">{{ number_format($item->Price) }}đ</span>
                                <span class="new-shirt-item__price-old">290,000đ</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="new-shirt-full">
                <a href="" class="new-shirt-full-text">Xem tất cả
                    <i class="ti-angle-right"></i>
                </a>
            </div>
        </div>

        <!-- Banner -->
        <div class="content-banner">
            <a href="./sale.html" class="content-banner-link">
                {{-- <div class="content-banner-img"></div> --}}
                <img src="img/banner.jpg" style="object-fit:contain;width:100%;">
            </a>

        </div>

        <div class="random-sale">
            <div class="random-sale-padding">
                <div class="random-sale-title">
                    <a href="./sale.html" class="random-sale-big-text hover-primary-color">Random Sale</a>
                    <p class="random-sale-small-text">Chương trình đã kết thúc</p>
                </div>

                <div class="grid-row ">
                    @foreach ($randomsales as $item)
                        <div class="grid__column-5 new-shirt-list">
                            <div href="../detail/{{ $item->Slug }}.html" alt="{{ $item->Name }}"
                                class="new-shirt-item">

                                <div class="new-shirt-item-img"
                                    style="background-image: url('../uploads/{{ $item->Image }}');">
                                    <span class="new-shirt-search">
                                        <a href="../detail/{{ $item->Slug }}.html" class="ti-search "></a>
                                    </span>
                                </div>
                                <div class="new-shirt-item__price">
                                    <a href='../detail/{{ $item->Slug }}.html'
                                        class="new-shirt-item-name hover-primary-color">{{ $item->Name }}</a>
                                    <span class="new-shirt-item__price-current">{{ number_format($item->Price) }}đ</span>
                                    <span class="new-shirt-item__price-old">290,000đ</span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

                <div class="new-shirt-full">
                    <a href="" class="new-shirt-full-text">Xem tất cả
                        <i class="ti-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Wibu shirt -->
        <div class="wibu-shirt float-clear">
            <a href="./wibu.html" class="wibu-shirt-text hover-primary-color">Áo Wibu</a>
            <div class="grid-row wibu-shirt-list   ">

                @foreach ($wibu as $item)
                    <div class="grid__column-5 new-shirt-list">
                        <div href="../detail/{{ $item->Slug }}.html" alt="{{ $item->Name }}"
                            class="new-shirt-item">

                            <div class="new-shirt-item-img"
                                style="background-image: url('../uploads/{{ $item->Image }}');">
                                <span class="new-shirt-search">
                                    <a href="../detail/{{ $item->Slug }}.html" class="ti-search "></a>
                                </span>
                            </div>
                            <div class="new-shirt-item__price">
                                <a href='../detail/{{ $item->Slug }}.html'
                                    class="new-shirt-item-name hover-primary-color">{{ $item->Name }}</a>
                                <span class="new-shirt-item__price-current">{{ number_format($item->Price) }}đ</span>
                                <span class="new-shirt-item__price-old">290,000đ</span>
                            </div>
                        </div>
                    </div>
                @endforeach



                <div class="wibu-banner">
                    <a href="./wibu.html" class="wibu-banner-link">
                        <img src=" img/wibu_banner.jpg" alt="Quảng cáo áo Wibu" class="wibu-banner-img">
                    </a>
                </div>
            </div>
            <div class="new-shirt-full wibu-shirt-all">
                <a href="" class="new-shirt-full-text">Xem tất cả
                    <i class="ti-angle-right"></i>
                </a>
            </div>
        </div>

        <!-- Game Shirt -->
        <div class="game-shirt">
            <a href="./cyberpunk.html" class="wibu-shirt-text hover-primary-color">Áo Game</a>
            <div class="grid-row game-shirt-list">
                <div class="game-banner">
                    <a href="./cyberpunk.html" class="game-banner-link">
                        <img src=" img/game_shirt_banner.jpg" alt="Quảng cáo áo game" class="game-banner-img">
                    </a>
                </div>

                @foreach ($game as $item)
                <div class="grid__column-5 new-shirt-list">
                    <div href="../detail/{{ $item->Slug }}.html" alt="{{ $item->Name }}"
                        class="new-shirt-item">

                        <div class="new-shirt-item-img"
                            style="background-image: url('../uploads/{{ $item->Image }}');">
                            <span class="new-shirt-search">
                                <a href="../detail/{{ $item->Slug }}.html" class="ti-search "></a>
                            </span>
                        </div>
                        <div class="new-shirt-item__price">
                            <a href='../detail/{{ $item->Slug }}.html'
                                class="new-shirt-item-name hover-primary-color">{{ $item->Name }}</a>
                            <span class="new-shirt-item__price-current">{{ number_format($item->Price) }}đ</span>
                            <span class="new-shirt-item__price-old">290,000đ</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="new-shirt-full wibu-shirt-all">
                <a href="" class="new-shirt-full-text">Xem tất cả
                    <i class="ti-angle-right"></i>
                </a>
            </div>
        </div>

        <!-- Banner Home -->
        <div class="banner-home">
            <div class="grid-row banner-home-list">
                <div class="grid__column-3 banner-home-item">
                    <a href="" class="banner-home-link">
                        <img src=" img/banner_coll_1.jpg" alt="" class="banner-home-img">
                    </a>
                </div>

                <div class="grid__column-3 banner-home-item">
                    <a href="" class="banner-home-link">
                        <img src=" img/banner_coll_2.jpg" alt="" class="banner-home-img">
                    </a>
                </div>

                <div class="grid__column-3 banner-home-item">
                    <a href="" class="banner-home-link">
                        <img src=" img/banner_coll_3.jpg" alt="" class="banner-home-img">
                    </a>
                </div>
            </div>
        </div>

        <!-- The HP Shirt -->
        <div class="HP-shirt">
            <div class="Hp-shirt-title">
                <a href="" class="wibu-shirt-text hover-primary-color">Áo Game</a>
                <ul class="Hp-shirt-title-list">
                    <li class="Hp-shirt-item Hp-shirt-item-active">
                        <a href=""class="Hp-shirt-item-link Hp-shirt-item-active">Áo dài tay</a>
                    </li>
                    <li class="Hp-shirt-item">
                        <a href="" class="Hp-shirt-item-link">Sweater</a>
                    </li>
                    <li class="Hp-shirt-item">
                        <a href="" class="Hp-shirt-item-link">Hoodie</a>
                    </li>
                </ul>
            </div>
            <div class="grid-row">
                <div class="grid__column-5 new-shirt-list">
                    <div href="" alt="Áo thun dài tay Snorlax Đừng Làm Phiền" class="new-shirt-item">
                        <div class="new-shirt-item-img" style="background-image: url(' img/banner1.jpg');">
                            <span class="new-shirt-search">
                                <a href="./chitiet.html" class="ti-search "></a>
                            </span>
                        </div>
                        <div class="new-shirt-item__price">
                            <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Snorlax Đừng Làm Phiền</h4>
                            <span class="new-shirt-item__price-current">280,000đ</span>
                            <span class="new-shirt-item__price-old">320,000đ</span>
                        </div>
                    </div>
                </div>

                <div class="grid__column-5 new-shirt-list">
                    <div href="" alt="Áo thun dài tay Dark Souls 3-Soul of Cinder" class="new-shirt-item">
                        <div class="new-shirt-item-img" style="background-image: url(' img/banner2.jpg');">
                            <span class="new-shirt-search">
                                <a href="./chitiet.html" class="ti-search "></a>
                            </span>
                        </div>
                        <div class="new-shirt-item__price">
                            <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Dark Souls 3-Soul of Cinder
                            </h4>
                            <span class="new-shirt-item__price-current">280,000đ</span>
                            <span class="new-shirt-item__price-old">320,000đ</span>
                        </div>
                    </div>

                </div>

                <div class="grid__column-5 new-shirt-list">
                    <div href="" alt="Áo thun dài tay Yasuo & Yone" class="new-shirt-item">
                        <div class="new-shirt-item-img" style="background-image: url(' img/banner3.jpg');">
                            <span class="new-shirt-search">
                                <a href="./chitiet.html" class="ti-search "></a>
                            </span>
                        </div>
                        <div class="new-shirt-item__price">
                            <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Yasuo & Yone</h4>
                            <span class="new-shirt-item__price-current">280,000đ</span>
                            <span class="new-shirt-item__price-old">320,000đ</span>
                        </div>
                    </div>

                </div>

                <div class="grid__column-5 new-shirt-list">
                    <div href="" alt="Áo thun dài tay Dark Souls-Game Là Dễ" class="new-shirt-item">
                        <div class="new-shirt-item-img" style="background-image: url(' img/banner4.jpg');">
                            <span class="new-shirt-search">
                                <a href="./chitiet.html" class="ti-search "></a>
                            </span>
                        </div>
                        <div class="new-shirt-item__price">
                            <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Dark Souls-Game Là Dễ</h4>
                            <span class="new-shirt-item__price-current">280,000đ</span>
                            <span class="new-shirt-item__price-old">320,000đ</span>
                        </div>
                    </div>
                </div>

                <div class="grid__column-5 new-shirt-list">
                    <div href="" alt="Áo thun dài tay Chạy đi T-Rex" class="new-shirt-item">
                        <div class="new-shirt-item-img" style="background-image: url(' img/banner5.jpg');">
                            <span class="new-shirt-search">
                                <a href="./chitiet.html" class="ti-search "></a>
                            </span>
                        </div>
                        <div class="new-shirt-item__price">
                            <h4 class="new-shirt-item-name hover-primary-color">Áo thun dài tay Chạy đi T-Rex</h4>
                            <span class="new-shirt-item__price-current">280,000đ</span>
                            <span class="new-shirt-item__price-old">320,000đ</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="new-shirt-full wibu-shirt-all">
                <a href="" class="new-shirt-full-text">Xem tất cả
                    <i class="ti-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection
