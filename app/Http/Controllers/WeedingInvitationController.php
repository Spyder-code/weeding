<?php

namespace App\Http\Controllers;

use App\Models\WeedingInvitation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\InvitationImport;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;

class WeedingInvitationController extends Controller
{
    public function index()
    {
        return view('admin.weedinginvitation.index');
    }

    public function store(Request $request)
    {
        $weedinginvitation = WeedingInvitation::create($request->all());
        return response($weedinginvitation);
    }

    public function show(WeedingInvitation $weedinginvitation)
    {
        return response([
            'data' => $weedinginvitation
        ]);
    }

    public function update(Request $request, WeedingInvitation $weedinginvitation)
    {
        $weedinginvitation->update($request->all());
        return response([
            'data' => $weedinginvitation
        ]);
    }

    public function destroy(WeedingInvitation $weedinginvitation)
    {
        $weedinginvitation->delete();
        return response([
            'data' => $weedinginvitation
        ]);
    }

    public function datatable()
    {
        $data = WeedingInvitation::select('*');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('weedinginvitation.update', $data) .'`)" class="btn btn-xs btn-info"><i class="mdi mdi-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('weedinginvitation.destroy', $data) .'`)" class="btn btn-xs btn-danger"><i class="mdi mdi-trash-can"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function import()
    {
        Excel::import(new InvitationImport(request('weeding_id')), request('file'));
        return back()->with('success', 'All good!');
    }
}
