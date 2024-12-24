<x-admin>
    @section('title', 'Create Machine')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Machine</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.machine.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.machine.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Machine Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter machine name" required value="{{ old('name') }}">
                                <x-error>name</x-error>
                            </div>

                            <!-- Machine Location - ChoiceBox with Factory Locations -->
                            <div class="form-group mb-2">
                                <label for="factory_id" class="form-label">Machine Location</label>
                                <select class="form-control" id="factory_id" name="factory_id" required>
                                    <option value="" disabled selected>Select Factory Location</option>
                                    @foreach ($factories as $factory)
                                        <option value="{{ $factory->id }}"
                                            {{ old('factory_id') == $factory->id ? 'selected' : '' }}>
                                            {{ $factory->location }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-error>factory_id</x-error>
                            </div>

                            <!-- Machine Status - ChoiceBox -->
                            <div class="form-group mb-2">
                                <label for="status" class="form-label">Machine Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="" disabled selected>Select Machine Status</option>
                                    <option value="working" {{ old('status') == 'working' ? 'selected' : '' }}>Working
                                    </option>
                                    <option value="non_working" {{ old('status') == 'non_working' ? 'selected' : '' }}>
                                        Non Working</option>
                                    <option value="repairing" {{ old('status') == 'repairing' ? 'selected' : '' }}>
                                        Repairing</option>
                                </select>
                                <x-error>status</x-error>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>
