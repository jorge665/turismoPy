<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-header">
            <input type="text" class="form-control" placeholder="Buscar Destinos..."
                wire:model.live.debounce.300ms="search">
        </div>
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Evento</th>
                        <th>Destino</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse( $this->events as $event)
                        <tr wire:key='event-{{ $event->id }}'>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->translations[0]->name }}</td>
                            <td>{{ $event->destination->translations[0]->name }}</td>
                            <td>{{ $event->start_date }}</td>
                            <td>{{ $event->end_date }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning me-2" wire:click="edit({{ $event->id }})">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" wire:click="delete({{ $event->id }})"
                                    onclick="confirm('¿Estás seguro de eliminar este evento?') || event.stopImmediatePropagation()">
                                    <i class="fas fa-trash"> </i>
                                </button>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No se encontraron eventos.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $this->events->links() }}
        </div>
    </div>
</div>
