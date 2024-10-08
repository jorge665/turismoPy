<div>
    <div class="modal fade show d-block" tabindex="-1" role="dialog" aria-labelledby="eventModal" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form wire:submit="save">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $form->event_id ? 'Editar Evento' : 'Crear Nuevo Evento' }}</h5>
                        <button type="button" class="btn-close" wire:click="closeModal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="destino" class="form-label">Destino</label>
                            <select class="form-select form-select-lg @error('form.destination_id') is-invalid @enderror" name="destino" id="destino" wire:model="form.destination_id">
                                <option value="">Seleccione un destino</option>
                                @foreach ($destinos as $destino)
                                    <option value="{{ $destino->id }}">{{ $destino->translations[0]->name }}</option>
                                @endforeach
                            </select>
                            @error('form.destination_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre del Evento</label>
                            <input type="text" id="name" class="form-control @error('form.name') is-invalid @enderror" wire:model="form.name" placeholder="Ingrese el nombre del destino">
                            @error('form.name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descriptionEsp" class="form-label">Descripción en Español</label>
                            <textarea class="form-control @error('form.descriptionEsp') is-invalid @enderror" id="descriptionEsp" wire:model='form.descriptionEsp' rows="4" placeholder="Ingrese la descripción en español"></textarea>
                            @error('form.descriptionEsp')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descriptionEng" class="form-label">Descripción en Inglés</label>
                            <textarea class="form-control @error('form.descriptionEng') is-invalid @enderror" id="descriptionEng" wire:model='form.descriptionEng' rows="4" placeholder="Ingrese la descripción en inglés"></textarea>
                            @error('form.descriptionEng')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="start_date" class="form-label">Inicio</label>
                                <input type="date" class="form-control @error('form.start_date') is-invalid @enderror" id="start_date" wire:model="form.start_date">
                                @error('form.start_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date" class="form-label">Fin</label>
                                <input type="date" class="form-control @error('form.end_date') is-invalid @enderror" id="end_date" wire:model="form.end_date">
                                @error('form.end_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="schedule" class="form-label">Horario</label>
                            <input type="text" class="form-control @error('form.schedule') is-invalid @enderror" id="schedule" wire:model='form.schedule' placeholder="Ingrese el horario">
                            @error('form.schedule')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="number" class="form-control @error('form.price') is-invalid @enderror" step="0.01" id="precio" wire:model='form.price' placeholder="Ingrese el precio">
                            @error('form.price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">{{ $form->event_id ? 'Actualizar' : 'Crear' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
</div>
