
@extends('backend.layout.app')
@section('title')
     Roles Create Page
@endsection

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create Roles </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Create a new role</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.store') }}" method="POST">
                                @csrf
                                <input type="text" name="name" class="form-control" placeholder="Enter Role">
                                @error('name')
                                    <div class="alert text-danger m-3">{{ $message }}</div>
                                @enderror
                                <h4 class="m-3">Permissions</h4>
                                @foreach ($permissions as $item)
                                    <div class="form-group m-2">
                                    <label class="form-check"> 
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="{{ $item->name }}">
                                        <span class="form-check-label"> {{ $item->name }}</span>
                                    </label>
                                </div>
                                @endforeach
                                <button class="btn btn-primary mt-3" type="submit"> Save Role</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
