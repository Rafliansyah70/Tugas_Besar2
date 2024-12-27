<x-admin>
    @section('title', 'Machine')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Machine Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.machine.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="machineTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Status Change Time</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($machines as $machine)
                        <tr>
                            <td>{{ $machine->name }}</td>
                            <td>{{ $machine->factory->location }}</td> <!-- Lokasi pabrik -->
                            <td>{{ $machine->status }}</td> <!-- Status mesin -->
                            <td>
                                {{ $machine->updated_at ? $machine->updated_at->format('Y-m-d H:i') : '-' }}
                                <!-- Waktu perubahan status -->
                            </td>
                            <td>
                                <a href="{{ route('admin.machine.edit', $machine->id) }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.machine.destroy', $machine->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure want to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @section('js')
        <script>
            $(function() {
                // Inisialisasi DataTable
                $('#machineTable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    responsive: true,
                });
            });
        </script>
    @endsection
</x-admin>
    