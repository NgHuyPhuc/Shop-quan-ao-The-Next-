@extends('frontend/master/master')
@section('title', 'Trang chủ')
@section('main')
    <div class="header-row">
        <div class="grid">
            <ul class="header-row-list">
                <li class="header-row-item ">
                    <a href="./Home.html" class="header-row-link hover-primary-color">
                        Trang chủ
                    </a>
                </li>
                <li class="header-row-item ">
                    <a href="./sanpham.html" class="header-row-link hover-primary-color">
                        / Danh mục
                    </a>
                </li>
                <li class="header-row-item">
                    / Hoodie mới nhất /
                </li>
            </ul>
        </div>
    </div>

    <div class="content-product">
        <div class="grid">
            <div class="grid-row">
                <div class="grid__column-2">
                    <nav class="category" style="padding-bottom: 44px;">
                        <h3 class="category-heading">Thương hiệu</h3>
                        <div class="category-list border-bottom">
                            <input type="checkbox" id="nextlv" class="category-input">
                            <label for="nextlv"> Next Level</label><br>
                            <input type="checkbox" id="lvwibu" class="category-input">
                            <label for="lvwibu"> Next Level Wibu</label><br>
                            <input type="checkbox" id="goty2020" class="category-input">
                            <label for="goty2020"> GOTY2020</label><br>
                            <input type="checkbox" id="HSBT" class="category-input">
                            <label for="HSBT"> HSBT</label><br>
                        </div>

                        <h3 class="category-heading">Mức giá</h3>
                        <div class="category-list border-bottom">
                            <input type="checkbox" id="price-min" class="category-input">
                            <label for="price-min"> Dưới 100.000đ</label><br>
                            <input type="checkbox" id="min-second" class="category-input">
                            <label for="min-second"> 100.000đ-200.000đ</label><br>
                            <input type="checkbox" id="min-third" class="category-input">
                            <label for="min-third"> 200.000đ-300.000đ</label><br>
                            <input type="checkbox" id="price-medium" class="category-input">
                            <label for="price-medium"> 300.000đ-500.000đ</label><br>
                            <input type="checkbox" id="nearest" class="category-input">
                            <label for="nearest"> 500.000đ-1.000.000đ</label><br>
                            <input type="checkbox" id="max" class="category-input">
                            <label for="max"> Trên 1.000.000đ</label><br>
                        </div>

                        <div class="product-care">
                            <div class="product-title">
                                <h3>Có thể bạn quan tâm</h3>
                            </div>
                            @foreach ($randomproducts as $item)
                                <div class="product-care-hot">
                                    <a href="../detail/{{ $item->id }}">
                                        <img src="../uploads/{{$item->Image}}" alt="{{ $item->Name }}"
                                            class="product-care-hot-img">
                                    </a>
                                    <div class="product-care-profile">
                                        <a href="../detail/{{ $item->id }}">
                                            <p class="product-care-name hover-primary-color">{{ $item->Name }}</p>

                                        </a>
                                        <div class="product-care-price">
                                            <p class="product-care-new-price">{{ number_format($item->Price) }}đ</p>
                                            <p class="product-care-old-price">290.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            {{-- <div class="product-care-hot">
                                <img src="   img/carehot2.jpg" alt="Áo thun Hades Chibi" class="product-care-hot-img">
                                <div class="product-care-profile">
                                    <p class="product-care-name hover-primary-color">Áo thun Hades Chibi</p>
                                    <div class="product-care-price">
                                        <p class="product-care-new-price">220.000đ</p>
                                        <p class="product-care-old-price">290.000đ</p>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </nav>
                </div>

                <div class="grid__column-10 product-main">
                    <div class="home-filter border-bottom">
                        <h2 class="home-filter-title">Hoodie mới nhất</h2>
                        <span class="home-filter__label">Sắp xếp:</span>
                        <button class="Home-filter__btn">Tên A
                            <i class="home-filter-icon ti-arrow-right"></i> Z</button>
                        <button class="Home-filter__btn">Tên Z
                            <i class="home-filter-icon ti-arrow-right"></i> A</button>
                        <button class="Home-filter__btn">Giá tăng dần</button>
                        <button class="Home-filter__btn">Giá giảm dần</button>
                        <button class="Home-filter__btn">Hàng mới</button>
                    </div>

                    <div class="home-product">
                        <div class="grid-row">
                            @foreach ($allproducts as $item)
                                <div class="grid__column-5 new-shirt-list">
                                    <div href="" alt="{{ $item->Name }}" class="new-shirt-item">
                                        <div class="new-shirt-item-img"
                                            style="background-image: url('../uploads/{{ $item->Image }}');">
                                            <span class="new-shirt-search">
                                                <a href="../detail/{{ $item->Slug }}" class="ti-search "></a>
                                            </span>
                                        </div>
                                        <div class="new-shirt-item__price">
                                            <h4 class="new-shirt-item-name hover-primary-color">{{ $item->Name }}</h4>
                                            <span class="new-shirt-item__price-current">{{number_format( $item->Price) }}đ</span>
                                            <span class="new-shirt-item__price-old">450,000đ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            {{-- <div class="grid__column-5 new-shirt-list">
                                <div href="" alt="Hoodie The Next Level" class="new-shirt-item">
                                    <div class="new-shirt-item-img"
                                        style="background-image: url('   img/homeproduct0.jpg');">
                                        <span class="new-shirt-search">
                                            <a href="./chitiet.html" class="ti-search "></a>
                                        </span>
                                    </div>
                                    <div class="new-shirt-item__price">
                                        <h4 class="new-shirt-item-name hover-primary-color">Hoodie The Next Level</h4>
                                        <span class="new-shirt-item__price-current">410,000đ</span>
                                        <span class="new-shirt-item__price-old">450,000đ</span>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>

                    {{-- <div class="home-number-page">

                    </div> --}}
                    <div style="font-size: 20px;">
                        {{ $allproducts->links('pagination::bootstrap-4') }}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
