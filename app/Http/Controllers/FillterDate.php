<?php

namespace App\Http\Controllers;

use App\Models\ops; // Replace YourModelName with the actual name of your model
use Illuminate\Http\Request;

class FillterDate extends Controller
{
    public function filterOps(Request $request)
    {
        $filterYear = $request->input('filterYear');

        // Assuming YourModelName is the model representing your operations
        // Filter ops by the year
        $ops = ops::whereYear('created_at', $filterYear)->get();
    
        return view('content.tables.table-all', ['ops' => $ops]);
    }
}
