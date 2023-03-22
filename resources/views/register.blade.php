@extends('welcome')
@section('contents')
    <section class="vh-100" style="background-color: #508bfc;>
    <div class="mask d-flex align-items-center h-100
        gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h3 text-center mb-4>Create an account</h3>

                            <form method="POST" action="/register">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                        name="name" placeholder="Username" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                        name="email" placeholder="E-mail" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg"
                                        name="password" placeholder="Password" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password-confirm" class="form-control form-control-lg"
                                        name="password_confirmation" placeholder="Confirm Password" required />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button id="reg_submit" onclick="CheckPassword()" style="width: 40%"
                                        class="btn btn-primary btn-block gradient-custom-4 text-body">
                                        <p style="color: white; margin-bottom: 0;">Register</p>
                                    </button>
                                </div>

                                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="/"
                                        class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="{{ asset('js/register.js') }}"></script>
@endsection
