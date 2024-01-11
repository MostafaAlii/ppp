<?php

namespace App\Http\Controllers\Backend\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\Cms\ExampleDataTable;
use App\Models\{Example, ExampleImage, Image};
use Illuminate\Support\Facades\{DB, Session};
class ExampleController extends Controller {
    public function index(ExampleDataTable $orderService) {
        return $orderService->render('admin.cms.examples.index', ['title' => 'Examples']);
    }

    public function store(Request $request) {
        try {
            $example = Example::create($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'example-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $example->storeImage($request->file('image')->storeAs('example', $fileName, 'upload_image'), Image::MAIN_TYPE);
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
            $example = Example::findOrFail($id);
            $example->update($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'example-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $example->updateImage($request->file('image')->storeAs('example', $fileName, 'upload_image'));
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
            $service = Example::findOrFail($id);
            $service->delete();
            $service->deleteImage();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully Example');
    }


    public function addImages($example_id){
        return view('admin.cms.examples.media')->with('id', $example_id);
    }

    public function saveExampleImages(Request $request ){
        $file = $request->file('dzfile');
        $filename = uploadImage('example', $file);
        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function saveExampleImagesDB(Request $request){
        try {
            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {      
                    ExampleImage::create([
                        'example_id' => $request->example_id,
                        'photo' => $image,
                    ]);
                }
            }
            return redirect()->route('admin.example')->with(['success' => 'تم التحديث بنجاح']);
         }catch(\Exception $ex){
             return redirect()->route('admin.example')->with([$ex]);
         }
    }

    public function destroyMedia($example_id, $image_id) {
        $image = ExampleImage::where('example_id', $example_id)->find($image_id);
        if (!$image) 
            return redirect()->route('admin.example.images', ['id' => $example_id])->with('error', 'the image not found');
        $image->delete();
        return redirect()->route('admin.example.images', ['id' => $example_id])->with('success', 'Image Delete Successfully');
    }
}
