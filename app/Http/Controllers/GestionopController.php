<?php

namespace App\Http\Controllers;

use App\Models\ops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class GestionopController extends Controller
{
    public function index()
    {
        $ops = ops::query();

        // Get current sorting column and order from request
        $currentColumn = FacadesRequest::input('column', 'numero'); // Default to 'numero' if not provided
        $currentOrder = FacadesRequest::input('order', 'asc'); // Default to 'asc' if not provided

        // Apply sorting based on the column and order
        if ($currentOrder === 'asc') {
            $ops->orderBy($currentColumn);
        } elseif ($currentOrder === 'desc') {
            $ops->orderByDesc($currentColumn);
        }

        // Fetch the sorted ops
        $ops = $ops->get();

        // Pass ops data and sorting information to your view
        return view('content.tables.table-all', compact('ops', 'currentColumn', 'currentOrder'));
    }

    public function filter_paiement()
    {
        $ops = ops::query();

        // Get current sorting column and order from request
        $currentColumn = FacadesRequest::input('column', 'numero'); // Default to 'numero' if not provided
        $currentOrder = FacadesRequest::input('order', 'asc'); // Default to 'asc' if not provided

        // Apply sorting based on the column and order
        if ($currentOrder === 'asc') {
            $ops->orderBy($currentColumn);
        } elseif ($currentOrder === 'desc') {
            $ops->orderByDesc($currentColumn);
        }

        // Filter non-paiement operations
        $ops->where('regellement', 'oui');

        // Fetch the sorted and filtered ops
        $ops = $ops->get();

        // Pass ops data and sorting information to your view
        return view('content.tables.table-paiement', compact('ops', 'currentColumn', 'currentOrder'));
    }
    public function filter_non_paiement()
    {
        $ops = Ops::query();

        // Get current sorting column and order from request
        $currentColumn = FacadesRequest::input('column', 'numero'); // Default to 'numero' if not provided
        $currentOrder = FacadesRequest::input('order', 'asc'); // Default to 'asc' if not provided

        // Apply sorting based on the column and order
        if ($currentOrder === 'asc') {
            $ops->orderBy($currentColumn);
        } elseif ($currentOrder === 'desc') {
            $ops->orderByDesc($currentColumn);
        }

        // Filter non-paiement operations
        $ops->where('regellement', 'non');

        // Fetch the sorted and filtered ops
        $ops = $ops->get();

        // Pass ops data and sorting information to your view
        return view('content.tables.table-non-paiement', compact('ops', 'currentColumn', 'currentOrder'));
    }
    /**
     * Display a listing of the resource.
     */
    
    public function search(Request $request)
    {
        // Retrieve the value of 'numero' from the request
        $numero = $request->input('numero');
    
        // Initialize the $error variable
        $error = null;
        // Search for ops by 'numero'
        if ($numero) {
            $ops = Ops::where('numero', $numero)->get();
    
            // Check if $ops is empty
            if ($ops->isEmpty()) {
                // If $ops is empty, set error message
                $error = 'No OP found for the provided numero.';
            }else{$error = null;}
        } else {
            // Search by a general query
            $query = $request->input('query');
            $ops = Ops::where('numero', 'like', '%' . $query . '%')
                ->orWhere('libelle', 'like', '%' . $query . '%')
                ->orWhere('elaboration', 'like', '%' . $query . '%')
                ->orWhere('type', 'like', '%' . $query . '%')
                ->orWhere('regellement', 'like', '%' . $query . '%')
                ->orWhere('montant', 'like', '%' . $query . '%')
                ->get();
        }
    
        return view('content.tables.table-search', ['ops' => $ops, 'error' => $error]);
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
