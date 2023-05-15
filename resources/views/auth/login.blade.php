<x-guest-layout>
    <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
              <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
            </div>
            <form id="frmLogin" class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
              <span class="login100-form-title">
                <x-jet-authentication-card-logo />
              </span>
              <x-jet-validation-errors class="mb-3 rounded-0" />

              <div class="wrap-input100 validate-input" data-validate="Validar Correo Requerido: ex@abc.xyz">
                <input class="inputlogin input100" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" autocomplete="on" type="email"  required name="email" :value="old('email')" placeholder="Correo Electrónico" />
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
              </div>

              <div class="wrap-input100 validate-input " data-validate="Contraseña es requerida">
                <input class="inputlogin input100" autocomplete="current-password" type="password" autocomplete="off" name="password" placeholder="Contraseña">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </div>
              <div class="mb-3">
                <div class="custom-control custom-checkbox">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <label class="custom-control-label" for="remember_me">
                        {{ __('Recordarme') }}
                    </label>
                </div>
            </div>

              <div class="container-login100-form-btn">
                <button class="button login100-form-btn">
                  Iniciar
                </button>
              </div>

              <div class="text-center p-t-12">
                <span class="txt1">
                  ¿Olvidó
                </span>
                <a class="txt2" href="forgot-password">
                  Usuario / Contraseña?
                </a>
              </div>

              <!-- <div class="text-center p-t-80">
                <a class="txt2" href="#">
                  Create your Account
                  <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
            <div class="alert alert-success mb-3 rounded-0" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                        <a class="text-muted me-3" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-jet-button>
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card> --}}
</x-guest-layout>
