@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Table /</span> All
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table All OP</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Numero Op</th>
                    <th>Libelle</th>
                    <th>Montant</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td> <span class="fw-medium">OP-001</span></td>
                    <td>Albert Cook</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">OP-002</span>
                    </td>
                    <td>Barry Hunter</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-success me-1">Completed</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">OP-003</span></td>
                    <td>Trevor Baker</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">OP-004</span></td>
                    <td>Trevor Baker</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">OP-005</span></td>
                    <td>Jerry Milton</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-warning me-1">Pending</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">OP-006</span></td>
                    <td>Trevor Baker</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">OP-007</span></td>
                    <td>Trevor Baker</td>
                    <td>
                        <span class="fw-medium">10.000 DH</span>
                    </td>
                    <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



</div>
@endsection