@extends('auth.layouts.app')
@section('title', 'Reset Page')

@section('content')

    <div class="form_side col-md-6">
        <div class="logo">
            <img src="{{ asset('frontend/assets/img/logo/DEB-Grean-Logo.png') }}" alt="">
        </div>

        <h2>Reset Password</h2>
       @include('auth.layouts.status')

        <form  method="POST" action="{{ route('passwordResetSubmit') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <input type="hidden" name="email" value="{{ $email }}">
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Conform Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn">Submit</button>

        </form>




    </div>
    <div class="content_side col-md-6">
        <h2 class="welcome">Welcome to Deb</h2>
        <div class="achive">
            <div class="login_about">
                <div class="login_about_content">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, eveniet porro adipisci
                        itaque perferendis, dolorem asperiores suscipit omnis magni dignissimos ex quo quasi
                        voluptatum nesciunt recusandae molestiae voluptatem perspiciatis odit.</p>
                </div>
                <div class="login_about_video d-flex justify-content-center">
                    <div class="video_box">
                        <div class="play_btn">
                            <i class="fa-solid fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="achive_item">
                <div class="row">
                    <div class="col-md-6">
                        <h2>What do you learn?</h2>
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>How can speak in english</li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>Convertion with other pepole
                            </li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>Solve your main problem</li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>You get help for you career</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>What do you learn?</h2>
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>How can speak in english</li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>Convertion with other pepole
                            </li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>Solve your main problem</li>
                            <li><i class="fa-sharp fa-solid fa-arrow-right"></i>You get help for you career</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
