<?php

namespace App\Http\Controllers\Backend\Cms;
use App\Models\Privacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Cms\PrivacyDataTable;
use Illuminate\Support\Facades\{DB, Session};
class PrivacyController extends Controller {
    public function index(PrivacyDataTable $privacy) {
        return $privacy->render('admin.cms.privacy.index', ['title' => 'privacy']);
    }

    public function store(Request $request) {
        try {
            $privacy = Privacy::create($request->except('_token'));
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, $id) {
        try {
            $privacy = Privacy::findorfail($id);
            $privacy->update($request->except('_token'));
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
            $privacy = Privacy::findOrFail($id);
            $privacy->delete();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully Privacy');
    }
}