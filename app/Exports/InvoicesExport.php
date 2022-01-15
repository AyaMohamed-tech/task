<?php

namespace App\Exports;

use App\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // return Invoice::all();
       return Invoice::select('invoice_number','Due_date','product','Amount_collection','Amount_Commission','Discount','Total','Status')->get();
    }
}
