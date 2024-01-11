<?php
namespace App\Http\Controllers\Backend\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\DataTables\Cms\ContactDatatable;
use Illuminate\Support\Facades\Session;
class ContactController extends Controller {
    public function index(ContactDatatable $contact) {
		return $contact->render('admin.cms.contact.index', ['title' => 'contact']);
	}

    public function store(Request $request) {
        try {
            $contact = Contact::create($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'contact-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $contact->storeImage($request->file('image')->storeAs('contact', $fileName, 'upload_image'));
            }
            Session::flash('message', 'data create success');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
    }

    public function update(Request $request, Contact $contact) {
        try {
            $contact->update($request->input());
            if ($request->hasFile('image')) {
                $fileName = 'contact-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $contact->updateImage($request->file('image')->storeAs('contact', $fileName, 'upload_image'));
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
            $contact = Contact::findOrFail($id);
            $contact->delete();
            $contact->deleteImage();
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Try again later Something went wrong');
        }
        Session::flash('message', 'data Deleted success');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->back()->with('success', 'Delete Successfully Icon');
    }
}
