<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <!-- Section: Design Block -->

    @push('styles')
        <style>
            .bg-image {
                background-size: cover;
                background-position: center;
            }

            body{
                background-image: url('https://mopc.gov.py/uplmoo9eib8eefou3ooze4y/2024/09/IMG-20240924-WA0033.jpg');
                height: 300px;
            }

        </style>
        
    @endpush

    <section class="text-center">

        <div class="d-flex justify-content-center">
            <div class="my-2 card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary"
                style="backdrop-filter: blur(30px); width:50%;">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Sign up now</h2>
                            <form wire:submit='submit'>

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input wire:model='form.email' type="email" id="email" class="form-control" />
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                @error('form.email')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input wire:model='form.password' type="password" id="password"
                                        class="form-control" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                @error('form.password')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" wire:model='form.remember' type="checkbox"
                                        value="" id="remember" checked />
                                    <label class="form-check-label" for="remember">
                                        Remember
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-success btn-block mb-4">
                                    Sign up
                                </button>
                                <br>
                                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>

                                @error('form.notmatch')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
