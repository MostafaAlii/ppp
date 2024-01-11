<?php
namespace App\Http\Controllers\Backend\Cms;
use App\DataTables\Cms\PriceDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\{Advantage, Price, Image};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Session};
class PriceController extends Controller {
    public function index(PriceDataTable $price) {
        $advantages = Advantage::active()->select('id', 'note')->get();
        return $price->render('admin.cms.price.index', ['title' => 'price', 'advantages' => $advantages]);
    }

    public function store(Request $request) {
        try {
            DB::beginTransaction();
            $price = Price::create([
                'name' => $request->name,
                'status' => $request->status,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $fileName = 'price-gallery_' . Str::random(3) . '_' . time() . '.' . $image->getClientOriginalExtension();
                    $price->storeImage($image->storeAs('price', $fileName, 'upload_image'), Image::GALLERY_TYPE);
                }
            }

            $price->advantages()->attach($request->advantages);
            if ($request->hasFile('image')) {
                $fileName = 'price-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $price->storeImage($request->file('image')->storeAs('price', $fileName, 'upload_image'));
            }
            DB::commit();
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function destroy(string $id) {
        try {
            DB::beginTransaction();
            $price = Price::findOrFail($id);
            $price->delete();
            $price->deleteImage();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully price');
    }
}