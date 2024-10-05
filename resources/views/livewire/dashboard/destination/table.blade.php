<table class="table table-hover mb-0">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Departamento</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($this->destinations as $destination)
            <tr wire:key='destinations-{{$destination->id}}'>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->translations[0]->name }}</td>
                <td>{{ $destination->city->name }}</td>
                <td>{{ $destination->city->department->name }}</td>
                <td>
                    @if ($destination->status)
                        <span class="badge bg-success">Activo</span>
                    @else
                        <span class="badge bg-secondary">Inactivo</span>
                    @endif
                </td>
                <td>
                    <button class="btn btn-sm btn-warning me-2" wire:click="edit({{ $destination->id }})">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $destination->id }})"
                        onclick="confirm('¿Estás seguro de eliminar este destino?') || event.stopImmediatePropagation()">
                        <i class="fas fa-trash"> </i>
                    </button>
                    
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No se encontraron destinos.</td>
            </tr>
        @endforelse
    </tbody>
</table>
