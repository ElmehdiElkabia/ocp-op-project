<?php

namespace App\Exports;

use App\Models\ops;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class OpExport implements FromCollection, WithHeadings
{
    protected $ops;

    public function __construct(Collection $ops)
    {
        $this->ops = $ops;
    }

    public function headings(): array
    {
        return [
            'Numero',
            'Libelle',
            'Elaboration',
            'Type',
            'Montant',
            'Regellement'
        ];
    }

    public function collection()
    {
        $data = [];

        foreach ($this->ops as $op) {
            $data[] = [
                'Numero' => $op->numero,
                'Libelle' => $op->libelle,
                'Elaboration' => $op->elaboration,
                'Type' => $op->type,
                'Montant' => $op->montant,
                'Regellement' => $op->regellement,
            ];
        }

        return collect($data);
    }
}
