@extends('layouts/contentNavbarLayout')

@section('title', 'Tableau - Tout- OP')

@section('content')
    <style>
        .libelle-tooltip .truncated-text {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .libelle-tooltip:hover .truncated-text {
            max-width: none;
            overflow: visible;
            white-space: normal;
            word-wrap: break-word;
        }
    </style>

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Tableau /</span> Tout
    </h4>

    <div class="card">
        <h5 class="card-header">Tableau tout OP</h5>
        <div class="table-responsive">
            <div class="row mb-3">
                <div class="col-md-7">

                </div>
                
                <div class="col-md-3">
                    <input type="text" id="filterYear" name="filterYear" class="form-control" min="1900" max="2100" placeholder='filtrer par années' ">
                </div>
                <div class="col-md-2">
                    <button id="filterBtn" class="btn btn-success"> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Libelle</th>
                        <th>Type</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Regellement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalOperations = count($ops);
                        $totalMontant = 0;
                    @endphp
                      @forelse ($ops as $op)
            @php
                $totalMontant += $op->montant;
            @endphp
            <tr>
                <td><span class="fw-medium">{{ $op->numero }}</span></td>
                <td>
                    <div class="libelle-tooltip" title="{{ $op->libelle }}">
                        <span class="truncated-text"
                            style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $op->libelle }}</span>
                    </div>
                </td>
                <td><span class="truncated-text"
                        style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $op->type }}</span>
                </td>
                <td><span class="fw-medium">{{ $op->montant }}DH</span></td>

                <td><span class="fw-medium">{{ $op->created_at->format('Y-m-d') }}</span></td>
                <td>
                    <span
                        class="badge  bg-label-success me-1">
                        {{ $op->regellement }}
                    </span>
                </td>
                <td class="d-flex justify-content-center align-items-center">
                    <a class="dropdown-item" href="{{ route('edit-op', $op->id) }}"><i class="bx bx-edit-alt"></i></a>
                    @if ($op->pdf_file_path)
                        <a class="dropdown-item" href="{{ route('download-op-pdf', $op->id) }}"><i class="bx bx-download"></i></a>
                    @endif
                    <form method="post" action="{{ route('destroy-op', $op->id) }}" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" style="border: none; background: none; cursor: pointer;">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                </td>
                
                </td>

            </tr>
        @empty
            <tr>
                <td colspan="6">No operations found.</td>
            </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total Operations: {{ $totalOperations }}</th>
                    <th colspan="2">Total Montant: {{ $totalMontant }} DH</th>
                </tr>
            </tfoot>

            </table>
        </div>
    </div>

    <script>
        document.getElementById('filterBtn').addEventListener('click', function() {
            var filterYear = document.getElementById('filterYear').value;
            window.location.href = "{{ route('filter-ops') }}?filterYear=" + filterYear;
        });
    </script>
@endsection
