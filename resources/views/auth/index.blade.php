<!doctype html>
<html lang="en">

<head>
    <title>MyBook | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets') }}/bootstrap/css/style.css">
    <script src="{{ asset('assets') }}/swal/sweetalert2.js"></script>
</head>

<body style="background: #2CA58D;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Welcome To MyBook app</h3>
                                    <h5 class="mb-4">Masuk</h5>
                                </div>
                            </div>
                            <form action="{{ route('login-login') }}" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group mt-3">
                                    <input name="username" type="text" class="form-control" value="{{ old('username') }}" autofocus required>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
								@error('username')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                                <div class="form-group mt-2">
                                    <input name="password" id="password-field" type="password" class="form-control"
                                        required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
								@error('password')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                                </div>
                            </form>
                            <p class="text-center">Belum memiliki akun? <a data-toggle="tab" href="{{ route('register') }}">Daftar disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets') }}/swal/sweetalert2.js"></script>
</body>
</html>

@if(session('success-register'))
<script>
    Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Yeay Kamu Berhasil Mendaftarkan Akun, Silahkan Login',
  showConfirmButton: false,
  timer: 2000
})
</script>
@endif

@if(session('error-login'))
<script>
    Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Username atau Password Salah',
  showConfirmButton: false,
  timer: 3000
})
</script>
@endif