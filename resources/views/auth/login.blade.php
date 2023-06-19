<x-guest-layout>

    <div class="col-md-5">

        <div class="banner-center-box text-center text-white">
            <div class="cta-subscribe cta-subscribe-2 box-form">
                <div class="box-title text-white">
                    <h3 class="title">Andien - Kejari</h3>
                    <p>Silahkan masuk menggunakan akun anda</p>
                    <img class="svg" src="{{ asset('assets/img/rounded.svg') }}" alt="">
                </div><!-- .box-title end -->
                <div class="box-content">
                    <form id="loginform" action="{{ route('login') }}" method="POST" id="form-cta-subscribe-2" class="form-inline" style="min-height: 300px;">
                        @csrf

                        <x-jet-validation-errors class="alert-danger" style="padding-bottom:20px"/>

                        @if (session('status'))
                        <div class="box-content">
                            <div class="alert-danger" style="padding-bottom:20px">
                                {{ session('status') }}
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="" required autofocus >
                        </div><!-- .form-group end -->
                        <div class="form-group">
                            <label for="password" value="{{ __('Password') }}">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="" required autocomplete="current-password" >
                        </div><!-- .form-group end -->

                        <div class="form-group">
                            <input type="submit" class="form-control" value="Login">

                        </div><!-- .form-group end -->
                    </form><!-- #form-cta-subscribe-2 end -->
                </div><!-- .box-content end -->
            </div><!-- .box-form end -->
        </div><!-- .banner-center-box end -->

    </div><!-- .col-md-5 end -->

</x-guest-layout>
