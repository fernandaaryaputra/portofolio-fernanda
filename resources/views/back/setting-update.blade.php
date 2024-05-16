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
                               
                                <h3 class="text-center  my-4 text-4xl font-bold text-black">Update Halaman</h3>
                            </div>
                            <div class="card-body">
                        <form method="post" class="flex justify-center">
                            @csrf
                            <div class="form-group row flex justify-center">
                                <div class="col-md-9 mb-5 ">
                                <label for="">Halaman Awal</label>
                                <input type="text" name="home" id="" class="form-control bg-green-600" placeholder="Masukan Isi Teks untuk halaman Awal" value="{{ (isset($about)) ? $about->home:"" }}">
                                </div>
                                <br>
                                <div class="col-md-9 mb-5">
                                <label for="">Halaman About</label>
                                <input type="text" name="isi" id="" class="form-control bg-green-600" placeholder="Masukan Teks Untuk Halaman About" value="{{ (isset($about)) ? $about->isi:"" }}">
                                </div>
                                <div class="flex justify-center row-md-3">
                                <button class="btn btn-warning">SUBMIT</button>
                                </div>
                            </div>
                            </form>
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