<?php

namespace App\Http\Controllers;

use App\Models\Weeding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class WeedingController extends Controller
{
    public function index()
    {
        return view('admin.weeding.index');
    }

    public function store(Request $request)
    {
        $weeding = Weeding::create($request->all());
        return response($weeding);
    }

    public function show(Weeding $weeding)
    {
        return response([
            'data' => $weeding
        ]);
    }

    public function update(Request $request, Weeding $weeding)
    {
        $weeding->update($request->all());
        return response([
            'data' => $weeding
        ]);
    }

    public function destroy(Weeding $weeding)
    {
        $weeding->delete();
        return response([
            'data' => $weeding
        ]);
    }

    public function datatable()
    {
        $data = Weeding::select('*');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('weeding.update', $data) .'`)" class="btn btn-xs btn-info"><i class="mdi mdi-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('weeding.destroy', $data) .'`)" class="btn btn-xs btn-danger"><i class="mdi mdi-trash-can"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
}