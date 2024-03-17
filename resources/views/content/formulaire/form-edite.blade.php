@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Op')

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Edit/</span>op</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit op</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('update-op', $op->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Numero Op</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        name="numero" value="{{ $op->numero }}" aria-label="OP-001"
                                        aria-describedby="basic-icon-default-fullname2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Libelle</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-icon-default-company" class="form-control"
                                        name="libelle" value="{{ $op->libelle }}" aria-label="libelle du op."
                                        aria-describedby="basic-icon-default-company2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">elaboration</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="exampleFormControlSelect1" name="type"
                                    aria-label="Default select example">
                                    <option value="{{ $op->elaboration }}">{{ $op->elaboration }}</option>
                                    <option value="elaboration">elaboration</option>
                                    <option value="elaboration">elaboration</option>
                                    <option value="elaboration">elaboration</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="exampleFormControlSelect1" name="type"
                                    aria-label="Default select example">
                                    <option value="{{ $op->type }}">{{ $op->type }}</option>
                                    <option value="animation">Animation</option>
                                    <option value="animation">Animation</option>
                                    <option value="animation">Animation</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Montant</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                        name="montant" value="{{ $op->montant }}"
                                        aria-describedby="basic-icon-default-phone2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Regellement</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="exampleFormControlSelect1" name="regellement"
                                    aria-label="Default select example">
                                    <option value="{{ $op->regellement }}">{{ $op->regellement }}</option>
                                    <option value="non">Non</option>
                                    <option value="oui">Oui</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
