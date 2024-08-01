<section>
    <header>
        <h4>Ubah Profil</h4>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}"
                required autofocus autocomplete="name">
            @if ($errors->has('name'))
                <div class="text-danger mt-2">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}"
                required autocomplete="username">
            @if ($errors->has('email'))
                <div class="text-danger mt-2">
                    {{ $errors->first('email') }}
                </div>
            @endif

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-muted">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to re-send the verification email.') }}</button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-muted">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>