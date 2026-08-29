@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="card-body p-0">

                    <div class="row">

                        {{-- Bagian kiri --}}
                        <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-gradient-primary">

                            <div class="text-center text-white px-5">

                                <i class="fas fa-book-open fa-5x mb-4"></i>

                                <h1 class="h2 font-weight-bold">
                                    PERPUSTAKAAN
                                </h1>

                                <p class="mb-0">
                                    Sistem Informasi Perpustakaan
                                </p>

                                <hr class="bg-white">

                                <p class="small">
                                    Kelola data pengunjung, buku,
                                    peminjaman, pengembalian,
                                    perpanjangan, dan jadwal sif
                                    dengan mudah.
                                </p>

                            </div>

                        </div>

                        {{-- Bagian kanan --}}
                        <div class="col-lg-6">

                            <div class="p-5">

                                {{-- Judul --}}
                                <div class="text-center">

                                    <i class="fas fa-book-open fa-3x text-primary mb-3"></i>

                                    <h1 class="h4 text-gray-900 mb-2">
                                        LOGIN
                                    </h1>

                                    <p class="small text-gray-600 mb-4">
                                        Masuk ke Sistem Informasi Perpustakaan
                                    </p>

                                </div>

                                {{-- Pesan error --}}
                                @if ($errors->any())

                                    <div class="alert alert-danger small">
                                        {{ $errors->first() }}
                                    </div>

                                @endif

                                {{-- Form --}}
                                <form
                                    class="user"
                                    method="POST"
                                    action="{{ route('login.process') }}"
                                >

                                    @csrf

                                    {{-- Email --}}
                                    <div class="form-group">

                                        <input
                                            type="email"
                                            class="form-control form-control-user @error('login') is-invalid @enderror"
                                            id="login"
                                            name="login"
                                            value="{{ old('login') }}"
                                            placeholder="Masukkan email..."
                                            autocomplete="email"
                                            required
                                            autofocus
                                        >

                                        @error('login')
                                            <div class="text-danger small mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    {{-- Password --}}
                                    <div class="form-group">

                                        <div class="input-group">

                                            <input
                                                type="password"
                                                class="form-control form-control-user"
                                                id="password"
                                                name="password"
                                                placeholder="Masukkan password..."
                                                autocomplete="current-password"
                                                required
                                            >

                                            <div class="input-group-append">

                                                <button
                                                    type="button"
                                                    class="btn btn-light"
                                                    onclick="togglePassword()"
                                                    style="border-radius: 0 50rem 50rem 0;"
                                                >
                                                    <i
                                                        class="fas fa-eye"
                                                        id="eyeIcon"
                                                    ></i>
                                                </button>

                                            </div>

                                        </div>

                                        @error('password')
                                            <div class="text-danger small mt-1">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    {{-- Remember --}}
                                    <div class="form-group">

                                        <div class="custom-control custom-checkbox small">

                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="remember"
                                                name="remember"
                                            >

                                            <label
                                                class="custom-control-label"
                                                for="remember"
                                            >
                                                Ingat saya
                                            </label>

                                        </div>

                                    </div>

                                    {{-- Tombol --}}
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-user btn-block"
                                    >
                                        <i class="fas fa-sign-in-alt mr-2"></i>
                                        LOGIN
                                    </button>

                                </form>

                                <hr>

                                <div class="text-center">

                                    <small class="text-muted">
                                        Sistem Informasi Perpustakaan
                                    </small>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

function togglePassword() {

    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (password.type === 'password') {

        password.type = 'text';

        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');

    } else {

        password.type = 'password';

        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');

    }

}

</script>

@endsection