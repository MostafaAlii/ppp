<?php
namespace App\Http\Controllers\Backend\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Cms\TourDataTable;
use App\Models\{Tour};
use Illuminate\Support\Facades\{DB, Session};
class TourController extends Controller {
    public function index(TourDataTable $tour) {
        return $tour->render('admin.cms.tour.index', ['title' => 'tour']);
    }
    
    public function store(Request $request) {
        try {
            $tourRequest = $request->validate([
                'name' => 'required',
                'type' => 'required|in:image,video',
                'link' => 'url|nullable',
                'order' => 'required'
            ]);
            $tour = Tour::create($tourRequest);
            if ($request->hasFile('image')) {
                $fileName = 'tour-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $tour->storeImage($request->file('image')->storeAs('tour', $fileName, 'upload_image'));
            }
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, Tour $tour) {
        try {
            $tour->update($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'tour-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $tour->updateImage($request->file('image')->storeAs('tour', $fileName, 'upload_image'));
            }
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
            $tour = Tour::findOrFail($id);
            $tour->delete();
            $tour->deleteImage();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully Slide');
    }
}