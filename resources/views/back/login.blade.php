@extends('back.layouts.aunth')
@section('content')
@if($message = Session::get('user'))
    <script>
        Swal.fire({
            title: "Warning",
            text: "{{ Session::get('user') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "error"
        });
    </script>
@endif
@if($message = Session::get('registerberhasil'))
    <script>
        Swal.fire({
            title: "DONE",
            text: "{{ Session::get('registerberhasil') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
@if($message = Session::get('signout'))
    <script>
        Swal.fire({
            title: "{{ session::get('signout') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "error"
        });
    </script>
@endif
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="card-header">
                                <div class="text-center  ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  width ="80" height="80" class="mx-auto"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" ></path></svg>
                                    {{-- <img src="{{ asset('image/library.png')}}" > --}}
                                </div>
                               
                                <h3 class="text-center  my-4 text-4xl font-bold text-black">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        @error('login_gagal')
                                            {{-- <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> --}}
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input
                                            class="form-control py-4"
                                            id="inputEmailAddress"
                                            name="username"
                                            type="text"
                                            placeholder="Masukkan Username"/>
                                        @if($errors->has('username'))
                                        <span class="error">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input
                                            class="form-control py-4"
                                            id="inputPassword"
                                            type="password"
                                            name="password"
                                            placeholder="Masukkan Password"/>
                                        @if($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group d-flex align-items-center justify-content-between mt-4 mb-3">
                                        {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                            {{-- <button class="btn w-100  btn-block btn-login" type="submit">Login</button> --}}
                                            <button class="btn w-100  btn-block btn-login bg-blue-900 text-white hover:bg-black hover:text-white font-bold" type="submit">Login</button>
                                       
                                    </div>
                                    <hr>
                                    <a href="{{ url('/') }}" class="mt-5 text-red-600 hover:text-yellow-500 font-bold">< Kembali</a>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small">
                                    {{-- <a href="{{route('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
@endsection