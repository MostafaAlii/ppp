<?php

namespace App\Http\Controllers\Backend\Cms;
use App\Models\{Offer, Image};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Cms\OfferDataTable;
use Illuminate\Support\Facades\{DB, Session};
class OfferController extends Controller {
    public function index(OfferDataTable $offer) {
        return $offer->render('admin.cms.offer.index', ['title' => 'offer']);
    }

    public function store(Request $request) {
        try {
            $offer = Offer::create($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'offer-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $offer->storeImage($request->file('image')->storeAs('offer', $fileName, 'upload_image'), Image::MAIN_TYPE);
            }
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, $id) {
        try {
            $offer = Offer::findOrFail($id);
            $offer->update($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'offer-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $offer->updateImage($request->file('image')->storeAs('offer', $fileName, 'upload_image'));
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
            $offer = Offer::findOrFail($id);
            $offer->delete();
            $offer->deleteImage();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully Example');
    }
}