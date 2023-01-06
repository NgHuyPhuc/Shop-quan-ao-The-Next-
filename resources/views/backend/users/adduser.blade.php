@extends('/backend/master/master');
@section('title', 'Thêm mới user');
@section('main')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm Thành viên</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Thêm thành viên</div>
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <form action="../admin/useradmin/insert" enctype="multipart/form-data" method="post">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $item)
                                        <div class="alert alert-danger">{{$item}}</div>
                                        @endforeach
                                    @endif
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="{{old('email')}}" type="text" name="Username" class="form-control">
                                        <div class="alert alert-danger" role="alert">
                                            <strong>email đã tồn tại!</strong>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input value="{{old('password')}}" type="text" name="Password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" class="form-control">
                                            <option @if (old('level')==1) selected @endif value="1">admin</option>
                                            <option @if (old('level')==2) selected @endif selected value="2">user</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input required id="img" type="file" name="image" class="form-control hidden"
                                            onchange="changeImg(this)">
                                        <img style="margin: 0 auto" id="avatar" class="thumbnail" width="50%" height="350px"
                                            src="img/import-img.png">   
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">

                                        <button class="btn btn-success" type="submit">Thêm thành viên</button>
                                        <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>

        <!--/.row-->
    </div>

    <!--end main-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function() {
                $('#img').click();
            });
        });
    </script>



@endsection
