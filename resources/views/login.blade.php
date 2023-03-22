@extends('welcome')
@section('contents')
    {{-- <div class="container"> --}}
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-4">Login</h3>
                            <form method="POST" action="/login">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg"
                                        name="email" placeholder="E-mail" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                        name="password" placeholder="Password" required />
                                </div>
                                <button style="width: 50%;" class="btn btn-primary btn btn-block"
                                    type="submit">Login</button>
                            </form>
                            <p class="text-center text-muted mt-3 mb-0">Dont have an account? <a href="/register"
                                    class="fw-bold text-body"><u>Register here</u></a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- </div> --}}
@endsection
