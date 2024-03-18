@extends('layouts/contentNavbarLayout')

@section('title', 'Tableau - non-paiement- OP')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Tableau /</span>Non paiement
    </h4>


    <div class="card">
        <h5 class="card-header">Tableau non paiement OP</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero Op</th>
                        <th>Libelle</th>
                        <th>Elaboration</th>
                        <th>Type</th>
                        <th>Montant</th>
                        <th>Regellement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($ops as $op)
                        <tr>
                            <td><span class="fw-medium">{{ $op->numero }}</span></td>
                            <td>{{ $op->libelle }}</td>
                            <td><span class="fw-medium">{{ $op->elaboration }}</span></td>
                            <td><span class="fw-medium">{{ $op->type }}</span></td>
                            <td><span class="fw-medium">{{ $op->montant }}DH</span></td>
                            <td>
                                <span
                                    class="badge {{ $op->regellement == 'oui' ? 'bg-label-success' : 'bg-label-danger' }} me-1">
                                    {{ $op->regellement }}
                                </span>
                            </td>
                            <td class="d-flex justify-content-center align-items-center">
                                <a class="dropdown-item" href="{{ route('edit-op', $op->id) }}"><i
                                        class="bx bx-edit-alt"></i></a>
                                <form method="post" action="{{ route('destroy-op', $op->id) }}"
                                    onsubmit="return confirm('Are you sure you want to delete this record?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item"
                                        style="border: none; background: none; cursor: pointer;">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    </div>
@endsection
