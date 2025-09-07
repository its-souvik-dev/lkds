<?php

namespace App\Exports;

use App\Models\Candidate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CandidateExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Select only the fields you want in Excel
        return Candidate::select('registration', 'name', 'section', 'remarks')->get();
    }

    public function headings(): array
    {
        return ["Reg No", "Name", "Section", "Remark"];
    }
}
