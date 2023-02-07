<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{

    public function uploadCSV(Request $request)
    {
        if ($request->hasFile('csv_file')) {
            $path = $request->file('csv_file')->store('temp');
            $file = fopen(storage_path('app/'.$path), "r");

            $skipFirstRow = true;
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                if ($skipFirstRow) {
                    $skipFirstRow = false;
                    continue;
                }

                $name = $column[0];
                if (DB::table('candidates')->where('name', $name)->doesntExist()) {
                    DB::table('candidates')->insert([
                        'name' => $name,
                        'state' => $column[1],
                        'party' => $column[2],
                        'constituency' => $column[3],
                        'age' => $column[4],
                        'age_check' => $column[5],
                        'educational_check' => $column[6],
                        'health_check' => $column[7],
                        'credibility_check' => $column[8],
                        'office' => $column[9],
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }

            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'File not uploaded properly');
        }
    }

}
