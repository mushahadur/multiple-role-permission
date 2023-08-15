
@extends('backend.layout.app')
@section('title')
     Roles Page
@endsection

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">All Roles </h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header">
        
                                            <h5 class="card-title mb-0">Table Role Permission</h5>
                                        </div>
                                        <table class="table table-hover my-0">
                                            <thead>
                                                <tr>
                                                    <th>SI No</th>
                                                    <th class="d-none d-xl-table-cell">Role Name</th>
                                                    <th class="d-none d-xl-table-cell">Assign Date</th>
                                                    <th>Status</th>
                                                    <th class="d-none d-md-table-cell">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($roles as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td class="d-none d-xl-table-cell">{{ $item->name }}</td>
                                                        <td class="d-none d-xl-table-cell">{{ $item->created_at->format('d-M-y') }}</td>
                                                        <td><span class="badge bg-success">Done</span></td>
                                                        <td class="d-none d-md-table-cell">-</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
