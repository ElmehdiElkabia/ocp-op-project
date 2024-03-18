<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OpImport;
use App\Exports\OpExport;
use App\Models\ops; // Update namespace to reference the Ops model

class ExcelController extends Controller
{
    public function excel()
    {
        return view("Excel.import");
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
    
        // Check if the validation passes
        if ($request->file('file')->isValid()) {
            // Proceed with importing the Excel file
            Excel::import(new OpImport, $request->file('file'));
            return redirect()->back()->with('success', 'File imported successfully.');
        } else {
            // If the file is not valid, redirect back with an error message
            return redirect()->back()->with('error', 'The uploaded file is not valid.');
        }
    }
    
    public function exportall()
    {
        $ops = ops::all();
        
        if ($ops->isNotEmpty()) {
            return Excel::download(new OpExport($ops), 'All_Ops.xlsx');
        } else {
            return redirect()->back()->with('error', 'No records found.');
        }
    }
    
}
