@extends('front.layouts.app')

@section('main')

<section class="section-5">
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Forgot Password</h1>

                    <form action="" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="mb-2">Email Address*</label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="Enter Email">
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">
                            Submit
                        </button>
                    </form>
                </div>

                <div class="mt-4 text-center">
                    <p>
                        <a href="{{ route('account.login') }}">
                            Back to Login
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection