<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    @include('chunks.head')
</head>

<body>
<!-- start main -->
<main role="main">
    <!-- start section -->
    <section class="section section--no-pt section--no-pb section--light-bg">
        <div class="grid grid--container">
            <div class="authorization authorization--login">
                <a class="site-logo" href="#">
                    <img class="img-responsive" width="175" height="42" src="{{asset('img/site_logo_2.png')}}" alt="demo">
                </a>

                <form method="POST" class="authorization__form" action="{{route('login')}}">
                    @csrf
                    <h3 class="__title">Sign In</h3>

                    <div class="input-wrp">
                        <input name="email" id="email" type="email" style="border-radius: 5px;" class="textfield" value="{{old('email')}}" placeholder="Email" />

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-wrp">
                        <input name="password" id="password" type="password" style="border-radius: 5px;" class="textfield" placeholder="Password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <p>
                        <button class="custom-btn custom-btn--medium custom-btn--style-2 wide" style="border-radius: 5px;" type="submit" role="button">	<a  style="color:white">Submit</a></button>
                    </p>

                    <p class="text--center" ><a href="sign_up.html" style="color: #F57500;">Sign Up</a> if you don’t have an account</p>
                </form>
            </div>
        </div>
    </section>
    <!-- end section -->
</main>
<!-- end main -->

<div id="btn-to-top-wrap">
    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
</div>

@include('chunks.scripts')
</body>
</html>
