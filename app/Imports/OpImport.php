<?php

namespace App\Imports;

use App\Models\ops;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OpImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Validate the row data
        $validator = Validator::make($row, [
            'numero' => 'required',
            'libelle' => 'required',
            'elaboration' => 'required',
            'type' => 'required',
            'montant' => 'required|numeric',
            'regellement' => Rule::in(['non', 'oui']), // Assuming regellement can only be 'non' or 'oui'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // Handle validation errors
            // For example, you can log the errors or skip the row
            return null;
        }

        // If validation passes, create and return a new Ops model instance
        return new ops([
            'numero' => $row['numero'],
            'libelle' => $row['libelle'],
            'elaboration' => $row['elaboration'],
            'type' => $row['type'],
            'montant' => $row['montant'],
            'regellement' => $row['regellement'],
        ]);
    }
}
