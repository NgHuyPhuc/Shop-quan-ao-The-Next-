@extends('frontend/master/master')
@section('title', 'Chi tiết sản phẩm')
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
                    / Chi tiết sản phẩm /
                </li>
            </ul>
        </div>
    </div>

    <div class="details__form">
        <div class="grid">
            <div class="details__form-product">
                <h2 class="details__form-title">Chi tiết sản phẩm</h2>
                <div class="modal1-container ">
                    <div class="modal__img">
                        <div id="main-img">
                            <img src="../uploads/{{$shirt[0]['Image']}}" alt="Áo thun Assassin's Creed Valhalla "
                                id="modal__img-big">
                        </div>

                        <ul class="modal__img-list">
                            <l><img class="modal__img-small" src="../uploads/{{$shirt[0]['Image2']}}"
                                    alt="Áo thun Assassin's Creed Valhalla" onclick="changeImage('one')" id="one"></l>
                            <l><img class="modal__img-small" src="../uploads/{{$shirt[0]['Image3']}}"
                                    alt="Áo thun Assassin's Creed Valhalla" onclick="changeImage('two')" id="two"></l>
                        </ul>
                        <script src="./asset/js/img.js"></script>
                    </div>

                    <div class="modal__content">
                        <h3 class="modal__content-title">{{$shirt[0]['Name']}}</h3>
                        <p class="modal__content-trademark">Thương hiệu: <span href=""
                                style="color:var(--primary-color);">Next Level</span> |
                            Mã sản phẩm:{{$shirt[0]['Code']}} <span href="" style="color:var(--primary-color);">Đang cập nhật</span>
                        </p>

                        <div class="modal__price">
                            <div class="modal__price_new">{{number_format($shirt[0]['Price'])}}đ</div>
                            <div class="modal__price_old">300.000đ</div>
                        </div>

                        <div class="modal-size">
                            <ul class="modal-size-list">
                                <h3 class="modal-size-title">Kích thước:</h3>
                                <li class="modal-size-item">S</li>
                                <li class="modal-size-item">M</li>
                                <li class="modal-size-item">L</li>
                                <li class="modal-size-item">XL</li>
                                <li class="modal-size-item modal-size-active">XXL</li>
                                <li class="modal-size-item">3XL</li>
                                <li class="modal-size-item">4XL</li>
                                <li class="modal-size-item">5XL</li>
                            </ul>
                        </div>

                        <div class="modal__shirt-color">
                            <h3 class="modal__shirt-color-title">Màu sắc:</h3>
                            <div class="modal__shirt-color-black modal__shirt-color-active"></div>
                            <div class="modal__shirt-color-white"></div>
                        </div>

                        <div class="modal-reduce">
                            <h3 class="modal-reduce-text">Số Lượng:</h3>
                            <input aria-label="quantity" class="input-qty" max="999" min="1" name=""
                                type="number" value="1">
                        </div>

                        <div class="modal__add-cart">
                            <input type="button" value="Thêm vào giỏ hàng" id="btn-modal-add">
                            <script language="javascript">
                                var button = document.getElementById("btn-modal-add");
                                button.onclick = function() {
                                    swal("Xác nhận!", "Thêm sản phẩm thành công");
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="description">
        <div class="grid">
            <div class="description__form">
                <h2 class="description__form-title">Mô tả sản phẩm</h2>
                <div class="description__form-desc">
                    <p class="description__form-text">{{$shirt[0]['Describer']}}</p>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
