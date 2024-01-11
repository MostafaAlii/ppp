<?php

namespace App\Http\Controllers\Backend\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Cms\FaqDataTable;
use App\Models\{Faq};
use Illuminate\Support\Facades\{DB, Session};
class FaqController extends Controller {
    public function index(FaqDataTable $faq) {
        return $faq->render('admin.cms.faq.index', ['title' => 'faq']);
    }

    public function store(Request $request) {
        try {
            Faq::create($request->input());
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, $id) {
        try {
            $faq = Faq::findorfail($id);
            $faq->update($request->input());
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
            $faq = Faq::findOrFail($id);
            $faq->delete();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete FAQ Successfully');
    }
}
