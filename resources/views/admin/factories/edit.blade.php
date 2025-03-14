<x-admin>
    @section('title', 'Edit Factory')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Factory</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.factories.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.factories.update', $factory) }}"
                        method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{ $factory->id }}">
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">Factory Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter factory name" required value="{{ $factory->name }}">
                                <x-error>name</x-error>
                            </div>
                            <div class="form-group mb-2">
                                <label for="location" class="form-label">Factory Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Enter factory location" required value="{{ $factory->location }}">
                                <x-error>location</x-error>
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
