<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
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


    public function getSuggestions(Request $request)
    {
        $query = $request->get('query');
        $office = $request->get('office');
        $column = $request->get('column');

        $suggestions = Candidate::where($column, 'LIKE', "%$query%")
        ->where('office', $office)
        ->select(DB::raw('MIN(id)'), $column)
        ->groupBy($column)
        ->get('id', $column);

        return response()->json($suggestions);
    }

    public function getCandidate(Request $request)
    {
        $candidate = Candidate::where('name', $request->name)->first();

        return response()->json($candidate);
    }

    public function getPresident(Request $request)
    {
        $candidate = Candidate::where('office', 'LIKE', "%president%")
        ->where('party', $request->party)->get();

        return response()->json($candidate);
    }

    public function showCandidate(Request $request){
        // dd($request->all());

        $query = Candidate::query();

        if ($request->name != null) {
            $query->where('name', 'LIKE', "%{$request->name}%");
        }

        if ($request->state != null) {
            $query->where('state', 'LIKE', "%{$request->state}%");
        }

        if ($request->party != null) {
            $query->where('party', 'LIKE', "%{$request->party}%");
        }

        if ($request->consti != null) {
            $query->where('constituency', 'LIKE', "%{$request->consti}%");
        }

        $query->where('office', $request->office);

        $results = $query->get();

        return view('show-candidate', compact('results'));
    }

}
