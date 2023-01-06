@extends('/backend/master/master');
@section('title', 'Sửa User');
@section('main')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa Thành viên</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - {{$user->Username." id:".$user->id}}</div>
                    <div class="panel-body">
                        <form action="/admin/useradmin/update/{{$user->id}}" enctype="multipart/form-data" method="post">
                            <div class="row justify-content-center" style="margin-bottom:40px">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="Username" class="form-control" value="{{$user->Username}}">
                                        <div class="alert alert-danger" role="alert">
                                            <strong>email đã tồn tại!</strong>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>password</label>
                                        <input type="text" name="Password" class="form-control" value="{{$user->Password}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" class="form-control" value="">
                                            <option @if ($user->Accrole == 1 ) selected @endif value="1">admin</option>
                                            <option @if ($user->Accrole == 2 ) selected @endif value="2">user</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input id="img" type="file" name="image" class="form-control hidden"
                                            onchange="changeImg(this)">
                                        <img style="margin: 0 auto" id="avatar" class="thumbnail" width="50%" height="350px"
                                            src="/uploads/{{$user->Anh}}">   
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                        <button class="btn btn-success" type="submit">Sửa thành viên</button>
                                        <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
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
