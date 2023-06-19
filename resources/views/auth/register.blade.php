
<x-guest-layout>

    <div class="col-md-5">

        <div class="banner-center-box text-center text-white">
            <div class="cta-subscribe cta-subscribe-2 box-form">
                <div class="box-title text-white">
                    <h3 class="title">Andien - Kejari</h3>
                    <p>Hallo, Silahkan daftar akun</p>
                    <img class="svg" src="{{ asset('assets/img/rounded.svg') }}" alt="">
                </div><!-- .box-title end -->
                <div class="box-content">
                    <form id="loginform" action="{{ route('register') }}" method="POST" id="form-cta-subscribe-2" class="form-inline" style="min-height: 300px;">
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
                            <label for="name" value="{{ __('Name') }}">Nama Lengkap</label>
                            <input type="text" name="name" id="name" class="form-control" required autofocus autocomplete="name">
                        </div><!-- .form-group end -->
                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}">Email</label>
                            <input type="email" name="email" id="email" class="form-control" :value="old('email')" required >
                        </div><!-- .form-group end -->
                        <div class="form-group">
                            <label for="password" value="{{ __('Password') }}">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" required autofocus >
                        </div><!-- .form-group end -->
                        <div class="form-group">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm-Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required autocomplete="new-password" >
                        </div><!-- .form-group end -->

                        <div class="form-group">
                            <input type="submit" class="form-control" value="Daftar">

                        </div>
                    </form><!-- #form-cta-subscribe-2 end -->
                </div><!-- .box-content end -->
            </div><!-- .box-form end -->
        </div><!-- .banner-center-box end -->

    </div><!-- .col-md-5 end -->

</x-guest-layout>