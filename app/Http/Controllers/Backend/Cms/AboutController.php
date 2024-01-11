<?php

namespace App\Http\Controllers\Backend\Cms;
use App\Models\Advantage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Cms\AboutDataTable;
use App\Models\AboutUs;
use Illuminate\Support\Facades\{DB, Session};
class AboutController extends Controller {
    public function index(AboutDataTable $about) {
        return $about->render('admin.cms.about.index', ['title' => 'about']);
    }

    public function store(Request $request) {
        try {
            $about = AboutUs::create($request->except('_token'));
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, $id) {
        try {
            $about = AboutUs::findorfail($id);
            $about->update($request->except('_token'));
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
            $about = AboutUs::findOrFail($id);
            $about->delete();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully about');
    }
}