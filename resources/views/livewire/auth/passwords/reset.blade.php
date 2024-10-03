<div>
    {{-- Be like water. --}}

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

    <section>
        <div class="d-flex justify-content-center my-2">
            <div class="card text-center" style="width: 300px;">
                <div class="card-header h5 text-white bg-success">Password Reset</div>
                <div class="card-body px-5">
                    <form wire:submit='save'>
                        <p class="card-text py-2">
                            Introduzca su dirección de correo electrónico y le enviaremos una clave de restablecimiento
                            de
                            contraseña.
                        </p>
                        <div data-mdb-input-init class="form-outline">
                            <input wire:model='form.email' type="form.email" id="email" class="form-control my-3" />
                            <label class="form-label" for="email">Email</label>
                        </div>
                        @error('form.email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-success w-100">
                            Reset password
                        </button>

                        @if (session()->has('message'))
                            <div class="alert alert-success mt-3">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="my-1" wire:loading>
                            <div class="spinner-grow text-primary" role="status">
                            </div>
                            <div class="spinner-grow text-secondary" role="status">
                            </div>
                            <div class="spinner-grow text-success" role="status">
                            </div>
                        </div>

                    </form>

                    <div class="d-flex justify-content-between mt-4">
                        <a class="" href="{{ route('login') }}">Login</a>
                        <a class="" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
