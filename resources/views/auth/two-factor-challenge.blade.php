<x-guest-layout>
    
    <div class="col-md-5">

        <div class="banner-center-box text-center text-white">
            <div class="cta-subscribe cta-subscribe-2 box-form">
                <div class="box-title text-white">
                    <h3 class="title">Andien - Kejari</h3>
                    <p>Silahkan masukkan kode otentikasi dari google auth di gawai anda.</p>
                    <img class="svg" src="{{ asset('assets/img/rounded.svg') }}" alt="">
                </div><!-- .box-title end -->
                <div class="box-content">
                    <form id="loginform" action="{{ route('two-factor.login') }}" method="POST" id="form-cta-subscribe-2" class="form-inline" style="min-height: 300px;">
                        @csrf
                        
                        <x-jet-validation-errors class="alert-danger" style="padding-bottom:20px"/>

                        @if (session('status'))
                        <div class="box-content">
                            <div class="alert-danger" style="padding-bottom:20px">
                                {{ session('status') }}
                            </div>
                        </div>
                        @endif
                        
                        <div class="form-group" >
                            <label for="code" value="{{ __('Code') }}">Code</label>
                            <input type="text" id="code" inputmode="numeric" name="code" class="form-control" autofocus x-ref="code" autocomplete="one-time-code">
                        </div><!-- .form-group end -->

                        <div class="form-group">
                            <input type="submit" class="form-control" value="Login">

                        </div><!-- .form-group end -->
                    </form><!-- #form-cta-subscribe-2 end -->
                </div><!-- .box-content end -->
            </div><!-- .box-form end -->
        </div><!-- .banner-center-box end -->

    </div><!-- .col-md-5 end -->

        {{-- <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Silahkan masukkan kode otentikasi dari google auth di gawai anda.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            {{-- <x-jet-validation-errors class="mb-4" /> --}}

            {{-- <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input id="code" class="block mt-1 w-full" type="text"  name="code"  />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code"  autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card> --}}
</x-guest-layout>
