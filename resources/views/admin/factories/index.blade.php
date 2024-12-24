<x-admin>
    @section('title', 'Factories')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Factory Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.factories.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="factoryTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $factory)
                        <tr>
                            <td>{{ $factory->name }}</td>
                            <td>{{ $factory->location }}</td>
                            <td><a href="{{ route('admin.factories.edit', $factory->id) }}"
                                    class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('admin.factories.destroy', $factory->id) }}" method="POST"
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
                $('#factoryTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "responsive": true,
                });
            });
        </script>
    @endsection
</x-admin>
