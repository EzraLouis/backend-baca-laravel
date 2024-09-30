<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRenunganRequest;
use App\Http\Requests\UpdateRenunganRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Models\Renungan;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $renungans = DB::table('renungans')
            ->when($request->input('title'), function ($query, $title) {
                return $query->where('title', 'like', '%' . $title . '%');
            })
            ->select('id', 'title', 'bacaan', 'ayat_kunci', 'kalimat_prinsip', 'kalimat_renung',
            DB::raw('DATE_FORMAT(date_renungan, "%d %M %Y") as date_renungan'), 'content',
            'penerapan1', 'penerapan2', 'penerapan3', 'doa')
            ->orderBy('id', 'desc')
            ->paginate(25);
        return view('pages.renungans.index', compact('renungans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.renungans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRenunganRequest $request)
    {
        Renungan::create([
            'title' => $request['title'],
            'bacaan' => $request['bacaan'],
            'ayat_kunci' => $request['ayat_kunci'],
            'kalimat_prinsip' => $request['kalimat_prinsip'],
            'kalimat_renung' => $request['kalimat_renung'],
            'date_renungan' => $request['date_renungan'],
            'content' => $request['content'],
            'penerapan1' => $request['penerapan1'],
            'penerapan2' => $request['penerapan2'],
            'penerapan3' => $request['penerapan3'],
            'doa' => $request['doa'],
        ]);

        return redirect(route('renungan.index'))->with('success', 'New Renungan Successfully');
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
    public function edit(Renungan $renungan)
    {
        //
        return view('pages.renungans.edit')->with('renungans', $renungan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRenunganRequest $request, Renungan $renungan)
    {
        //
        $validate = $request->validated();
        $renungan->update($validate);
        return redirect()->route('renungan.index')->with('success', 'Edit Renungan Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renungan $renungan)
    {
        //
        $renungan->delete();
        return redirect()->route('renungan.index')->with('success', 'Delete Renungan Successfully');
    }

    // Method untuk mengambil semua renungan
    public function getAllRenungan()
    {
        $renungan = Renungan::orderBy('date_renungan', 'desc')->get(); // Mengurutkan berdasarkan date_renungan descending

        if ($renungan->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada renungan yang tersedia'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $renungan
        ]);
    }
}
