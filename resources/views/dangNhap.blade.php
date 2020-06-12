<!DOCTYPE html>
<html lang="en">
<head>
    <title> Đăng nhập </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body style="background-color: gray">
    <div class="ndnhanvien">
        <div class="noidungthemmoi">
            <h3 class="display-4 text-xs-center">Đăng nhập</h3>

            <form method="POST" action=" {{ url('nvdangnhap') }}">
                {{ csrf_field()}}

                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label">Mật khẩu</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                        </div>
                    </div>
                </fieldset>
                @if(session('tkthatbai'))
                    <div class="alert alert-danger text-xs-center">{{session('tkthatbai')}}</div>
                @elseif(session('mkthatbai'))
                    <div class="alert alert-danger text-xs-center">{{session('mkthatbai')}}</div>
                @endif
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('vendor/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
