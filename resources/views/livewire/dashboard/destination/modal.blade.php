<div class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="destinationModal" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form wire:submit="stored">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $form->destination_id ? 'Editar Destino' : 'Crear Nuevo Destino' }}</h5>
                    <button type="button" class="btn-close" wire:click="closeModal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Destino</label>
                        <input type="text" id="name"
                            class="form-control @error('form.name') is-invalid @enderror" wire:model="form.name">
                        @error('form.name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descriptionEsp" class="form-label">Descripción Español</label>
                        <textarea id="descriptionEsp" class="form-control @error('form.descriptionEsp') is-invalid @enderror"
                            wire:model="form.descriptionEsp" rows="3"></textarea>
                        @error('form.descriptionEsp')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descriptionEng" class="form-label">Descripción Ingles</label>
                        <textarea id="descriptionEng" class="form-control @error('form.descriptionEng') is-invalid @enderror"
                            wire:model="form.descriptionEng" rows="3"></textarea>
                        @error('form.descriptionEng')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Ciudad y Departamento -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="department_id" class="form-label">Departamento</label>
                            <select id="department_id"
                                class="form-select @error('form.department_id') is-invalid @enderror"
                                wire:model.live="form.department_id">
                                <option value="">Selecciona un departamento</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            @error('form.department_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city_id" class="form-label">Ciudad</label>
                            <select id="city_id" class="form-select @error('form.city_id') is-invalid @enderror"
                                wire:model="form.city_id">
                                <option value="">Selecciona una ciudad</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('form.city_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <!-- Coordenadas -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="latitude" class="form-label">Latitud</label>
                            <input type="number" step="any" id="latitude"
                                class="form-control @error('form.latitude') is-invalid @enderror"
                                wire:model="form.latitude">
                            @error('form.latitude')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="longitude" class="form-label">Longitud</label>
                            <input type="number" step="any" id="longitude"
                                class="form-control @error('form.longitude') is-invalid @enderror"
                                wire:model="form.longitude">
                            @error('form.longitude')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Imágenes -->
                    <div class="mb-3">
                        <label for="images" class="form-label">Imágenes</label>
                        <input type="file" id="images"
                            class="form-control @error('form.images.*') is-invalid @enderror" wire:model="form.images"
                            accept="image/*" multiple>
                        @error('form.images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mt-2">
                            @if ($form->images)
                                <div class="row">
                                    @foreach ($form->images as $image)
                                        <div class="col-md-3">
                                            <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail"
                                                alt="Imagen">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="mt-2">
                                @if ($form->storedImages)
                                    <div class="row">
                                        @foreach ($form->storedImages as $image)
                                            <div class="col-md-3">
                                                <img src="{{ Storage::url($image->url) }}" class="img-thumbnail"
                                                    alt="Imagen">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Videos -->
                    <div class="mb-3">
                        <label for="video" class="form-label">Video (URL)</label>
                        <input type="url" id="video"
                            class="form-control @error('form.video') is-invalid @enderror" wire:model="form.video"
                            placeholder="Ingresa la URL del video">
                        @error('form.video')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mt-2">
                            @if ($form->video)
                                <div class="row">
                                    <div class="col-md-3">
                                        <iframe width="100%" height="auto" src="{{ $form->video }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Social links -->
                    <div class="mb-3">
                        <label for="social_links" class="form-label">Redes Sociales</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="url" id="facebook"
                                    class="form-control @error('form.social_link_facebook') is-invalid @enderror"
                                    wire:model="form.social_link_facebook" placeholder="Facebook">
                                @error('form.social_link_facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="url" id="instagram"
                                    class="form-control @error('form.social_link_instagram') is-invalid @enderror"
                                    wire:model="form.social_link_instagram" placeholder="Instagram">
                                @error('form.social_link_instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Estado -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select id="status" class="form-select @error('form.status') is-invalid @enderror"
                            wire:model="form.status">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                        @error('form.status')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancelar</button>
                    <button type="submit"
                        class="btn btn-primary">{{ $form->destination_id ? 'Actualizar' : 'Crear' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
