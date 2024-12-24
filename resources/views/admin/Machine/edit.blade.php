<x-admin>
    @section('title', 'Edit Machine')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Machine</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.machine.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.machine.update', $machine) }}"
                        method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{ $machine->id }}">
                        <div class="card-body">

                            <!-- Machine Name -->
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Machine Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter machine name" required value="{{ $machine->name }}">
                                <x-error>name</x-error>
                            </div>
                            <!-- Factory Name -->
                            <div class="form-group mb-2">
                                <label for="factory_id" class="form-label">Factory</label>
                                <select name="factory_id" id="factory_id" class="form-control" required>
                                    <option value="" disabled>Select Factory</option>
                                    @foreach ($factories as $factory)
                                        <option value="{{ $factory->id }}"
                                            {{ $machine->factory_id == $factory->id ? 'selected' : '' }}>
                                            {{ $factory->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-error>factory_id</x-error>
                            </div>

                            <!-- Machine Status -->
                            <div class="form-group mb-2">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="working" {{ $machine->status == 'working' ? 'selected' : '' }}>
                                        Working</option>
                                    <option value="non_working"
                                        {{ $machine->status == 'non_working' ? 'selected' : '' }}>Non Working</option>
                                    <option value="repairing" {{ $machine->status == 'repairing' ? 'selected' : '' }}>
                                        Repairing</option>
                                </select>
                                <x-error>status</x-error>
                            </div>


                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>
