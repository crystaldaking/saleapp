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
            <div class="authorization authorization--registration">
                <!-- this is demo, remove div class row and div's class col -->
                <div class="row">
                    <div class="col col--md-auto">
                        <div class="text--center">
                            <a class="site-logo" href="{{route('dashboard')}}">
                                <img class="img-responsive" width="175" height="42" src="img/site_logo_2.png" alt="demo">
                            </a>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="authorization__form">
                            @csrf
                            <h3 class="__title">Sign Up</h3>
                            <div class="input-wrp">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="name" name="name" style="border-radius: 5px;" class="textfield" type="text" value="{{old('name')}}" placeholder="Name" />
                            </div>

                            <div class="input-wrp">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="email" name="email" style="border-radius: 5px;" class="textfield" type="email" value="{{old('email')}}" placeholder="Email" />
                            </div>

                            <div class="input-wrp">
                                <i class="textfield-ico fontello-eye"></i>
                                <input id="password" name="password" style="border-radius: 5px;" class="textfield" type="password" value="{{old('password')}}" placeholder="Password" />
                            </div>

                            <div class="input-wrp">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="textfield-ico fontello-eye"></i>
                                <input id="password-confirm" name="password_confirmation"  style="border-radius: 5px;" class="textfield" type="password" value="" placeholder="Confirm Password" />
                            </div>

                            <p>
                                <label class="checkbox">
                                    <input name="p1" type="checkbox" value="ok" required />
                                    <i class="fontello-check"></i><span>I agree with <a href="#" style="color: #F57500;">Terms of Services</a></span>
                                </label>

                                <button style="border-radius: 5px;" class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>
                            </p>
                        </form>
                    </div>

                </div>
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
