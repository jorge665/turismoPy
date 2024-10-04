<div>
    {{-- Do your work, then step back. --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Tarjeta de Perfil -->
                <div class="card">
                    <div class="card-header">
                        <h4>Mi Perfil</h4>
                    </div>
                    <div class="card-body">
                        @if ($successMessage)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $successMessage }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form wire:submit="save">
                            <!-- Nombre -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" id="name"
                                    class="form-control @error('form.name') is-invalid @enderror" wire:model="form.name">
                                @error('form.name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Correo Electrónico -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" id="email"
                                    class="form-control @error('form.email') is-invalid @enderror" wire:model="form.email">
                                @error('form.email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Contraseña -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" id="password"
                                    class="form-control @error('form.password') is-invalid @enderror"
                                    wire:model="form.password" placeholder="Deja en blanco para mantener la actual">
                                @error('form.password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Confirmar Contraseña -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input type="password" id="password_confirmation"
                                    class="form-control @error('form.password_confirmation') is-invalid @enderror"
                                    wire:model="form.password_confirmation"
                                    placeholder="Deja en blanco si no cambias la contraseña">
                                @error('form.password_confirmation')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="idioma_preferencia" class="form-label">Idioma de Preferencia</label>
                                <select wire:model='form.idioma_preferencia' class="form-select form-select-lg  @error('form.password_confirmation') is-invalid @enderror" name="idioma_preferencia" id="idioma_preferencia">
                                    <option selected>Seleccionar Uno</option>
                                    <option value="es">Español</option>
                                    <option value="eng">Ingles</option>
                                </select>
                                @error('form.idioma_preferencia')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Botón de Actualización -->
                            <button type="submit" class="btn btn-success">Actualizar Perfil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
