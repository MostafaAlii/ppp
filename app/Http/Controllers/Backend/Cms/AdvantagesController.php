<?php

namespace App\Http\Controllers\Backend\Cms;
use App\Models\Advantage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Cms\AdvantageDataTable;
use Illuminate\Support\Facades\{DB, Session};
class AdvantagesController extends Controller {
    public function index(AdvantageDataTable $advantages) {
        return $advantages->render('admin.cms.advantages.index', ['title' => 'advantages']);
    }

    public function store(Request $request) {
        try {
            $advantage = Advantage::create($request->except('_token'));
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, $id) {
        try {
            $advantage = Advantage::findorfail($id);
            $advantage->update($request->except('_token'));
            Session::flash('message', 'data updated success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function destroy(string $id) {
        try {
            DB::beginTransaction();
            $advantage = Advantage::findOrFail($id);
            $advantage->delete();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully advantage');
    }
}