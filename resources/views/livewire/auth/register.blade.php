<div>
    {{-- Do your work, then step back. --}}
    <section class="vh-100">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-lg" style="border-radius: 15px;">
                        <div class="card-body p-3">
                            <h3 class="text-center mb-4">Registro</h3>
                            <form wire:submit='register'>

                                <!-- Nombre -->
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nombre</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input wire:model='form.name' type="text" id="name" class="form-control" placeholder="Ingresa tu nombre" />
                                    </div>
                                    @error('form.name')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input wire:model='form.email' type="email" id="email" class="form-control" placeholder="Ingresa tu email" />
                                    </div>
                                    @error('form.email')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input wire:model='form.password' type="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" />
                                    </div>
                                    @error('form.password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Confirmar Password -->
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label">Repetir tu contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        <input wire:model='form.password_confirmation' type="password" id="password_confirmation" class="form-control" placeholder="Repite tu contraseña" />
                                    </div>
                                    @error('form.password_confirmation')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Idioma de Preferencia -->
                                <div class="mb-4">
                                    <label for="idioma_preferencia" class="form-label">Idioma de Preferencia</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-language"></i></span>
                                        <select wire:model='form.idioma_preferencia' class="form-select" id="idioma_preferencia">
                                            <option value="" disabled selected>Selecciona uno</option>
                                            <option value="es">Español</option>
                                            <option value="eng">Inglés</option>
                                        </select>
                                    </div>
                                    @error('form.idioma_preferencia')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Botón de Registro -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg">Registrar</button>
                                </div>

                                <!-- Link a Login -->
                                <div class="text-center mt-3">
                                    <p class="text-muted
                                    ">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-dark">Inicia Sesión</a></p>
                                </div>

                                <!-- Error General -->
                                @error('form.error')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Imagen Lateral (Solo en pantallas grandes) -->
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://www.abc.com.py/resizer/v2/64P5UNFGFBCR3MTUCLW43FCMGA.jpg?auth=db8dab9191397e2e501664e44a7f70b925f05d2ef86a7b66e0a36309e71f1b8b&width=770&smart=true"
                        class="img-fluid rounded shadow-lg" alt="Imagen de Registro" style="filter: brightness(90%);">
                </div>
            </div>
        </div>
    </section>
</div>
