<div>
    {{-- Do your work, then step back. --}}
    <section class=" vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 my-2">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro</p>

                                    <form wire:submit='register' class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input wire:model='form.name' type="text" id="name" class="form-control" />
                                                <label class="form-label" for="name">Nombre</label>
                                            </div>
                                        </div>

                                        @error('form.name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input wire:model='form.email' type="email" id="email" class="form-control" />
                                                <label class="form-label" for="email">Email</label>
                                            </div>
                                        </div>

                                        @error('form.email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input wire:model='form.password' type="password" id="password" class="form-control" />
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                        </div>

                                        @error('form.password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input wire:model='form.password_confirmation' type="password" id="password_confirmation" class="form-control" />
                                                <label class="form-label" for="password_confirmation">Repetir tu
                                                    password</label>
                                            </div>
                                        </div>

                                        @error('form.password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <select wire:model='form.idioma_preferencia' class="form-select form-select-lg" name="idioma_preferencia" id="idioma_preferencia">
                                                    <option selected>Selecciona uno</option>
                                                    <option value="es">Español</option>
                                                    <option value="eng">Ingles</option>
                                                </select>
                                                <label for="idioma_preferencia" class="form-label">Idioma de Preferencia</label>
                                            </div>
                                        </div>

                                        @error('form.idioma_preferencia')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-lg">Registrar</button>
                                        </div>

                                        @error('form.error')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 ">

                                    <img src="https://www.abc.com.py/resizer/v2/64P5UNFGFBCR3MTUCLW43FCMGA.jpg?auth=db8dab9191397e2e501664e44a7f70b925f05d2ef86a7b66e0a36309e71f1b8b&width=770&smart=true"
                                        class="img-fluid border rounded" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
