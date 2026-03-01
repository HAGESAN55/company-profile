<section id="auth" class="section-padding">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="auth-box">

                    <div class="mb-4 text-center">
                        <img 
                            src="{{ asset('assets/logo-cp.png') }}" 
                            alt="Logo Perusahaan"
                            width="50%"
                            class="auth-logo">
                    </div>
                    <!-- Header -->
                    <div class="text-center mb-4">
                        <h3 class="fw-bold" id="formTitle">Masuk</h3>
                        <p class="text-muted" id="formDesc">
                            Masuk ke akun Anda
                        </p>
                    </div>

                    <!-- LOGIN -->
                    <div id="loginForm" class="form-box active">

                        <form method="POST" action="#">
                            @csrf

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="d-grid mb-3">
                                <button class="btn btn-primary">
                                    Login
                                </button>
                            </div>

                        </form>

                        <p class="text-center">
                            Belum punya akun?
                            <a href="#" onclick="showRegister()">Daftar</a>
                        </p>

                    </div>


                    <!-- REGISTER -->
                    <div id="registerForm" class="form-box">

                        <form method="POST" action="#">
                            @csrf

                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="d-grid mb-3">
                                <button class="btn btn-success">
                                    Daftar
                                </button>
                            </div>

                        </form>

                        <p class="text-center">
                            Sudah punya akun?
                            <a href="#" onclick="showLogin()">Masuk</a>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    
    </div>
</section>