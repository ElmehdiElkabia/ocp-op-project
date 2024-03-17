<?php

namespace App\Http\Controllers;

use App\Models\ops;
use Illuminate\Http\Request;

class GestionopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ops = ops::all();
        return view('content.tables.table-all', compact('ops'));
    }

    public function filter_paiement()
    {
        $ops = ops::where('regellement', 'oui')->get();
        return view('content.tables.table-paiement', compact('ops'));
    }
    public function filter_non_paiement()
    {
        $ops = ops::where('regellement', 'non')->get();
        return view('content.tables.table-non-paiement', compact('ops'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $ops = ops::where('numero', 'like', '%' . $query . '%')
            ->orWhere('libelle', 'like', '%' . $query . '%')
            ->orWhere('elaboration', 'like', '%' . $query . '%')
            ->orWhere('type', 'like', '%' . $query . '%')
            ->orWhere('regellement', 'like', '%' . $query . '%')
            ->orWhere('montant', 'like', '%' . $query . '%')
            ->get();

        return view('content.tables.table-search', ['ops' => $ops]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.form-layout.form-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $op = $request->all();
        ops::create($op);
        return redirect(route("table-all"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $op = ops::find($id);
        return view('content.form-layout.form-edite', compact('op'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $op = ops::find($id);
        $input = $request->all();
        $op->update($input);
        // $op->numero = $request->input('numero');
        // $op->libelle = $request->input('libelle');
        // $op->elaboration = $request->input('elaboration');
        // $op->type = $request->input('type');
        // $op->regellement = $request->input('regellement');
        // $op->montant = $request->input('montant');
        // $op->update();
        return redirect(route("table-all"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $op = ops::find($id);
        $op->delete();
        return redirect(route("table-all"));
    }
}
