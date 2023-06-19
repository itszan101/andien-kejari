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
                    <form id="loginform" action="{{ route('verification.send') }}" method="POST" id="form-cta-subscribe-2" class="form-inline" style="min-height: 300px;">
                        @csrf

                        <x-jet-validation-errors class="alert-danger" style="padding-bottom:20px"/>

                        @if (session('status') == 'verification-link-sent')
                        <div class="box-content">
                            <div style="padding-bottom:20px">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <p>Terimakasih sudah mendaftar! sebelum memulai, mohon konfirmasi alamat email anda dengan klik alamat tautan yang kami kirimkan ke email anda.</p>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control" value="Kirim Ulang Email Verifikasi">
                        </div><!-- .form-group end -->

                        <a href="{{ url('/') }}">Kembali ke halaman Login</a>

                    </form><!-- #form-cta-subscribe-2 end -->
                    
                </div><!-- .box-content end -->
            </div><!-- .box-form end -->
        </div><!-- .banner-center-box end -->

    </div><!-- .col-md-5 end -->
</x-guest-layout>


{{-- </x-guest-layout>


    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout> --}}
