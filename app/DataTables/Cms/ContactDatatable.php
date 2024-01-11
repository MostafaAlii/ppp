<?php
namespace App\DataTables\Cms;
use App\Models\Contact;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ContactDatatable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Contact $contact) {
                return view('admin.cms.contact.btn.actions', compact('contact'));
            })
            ->editColumn('created_at', function (Contact $contact) {
                return $contact->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Contact $contact) {
                return $contact->created_at->format('Y-m-d');
            })
            ->addColumn('image', function (Contact $contact) {
                return '<img src="' . $contact->ImagePath() . '" width="100">';
            })
            ->rawColumns(['action', 'created_at', 'updated_at', 'image']); 
    }

    public function query(): QueryBuilder {
        return Contact::query();
    }


    public function html() {
		return $this->builder()
            ->setTableId('contact-table')
		    ->columns($this->getColumns())
			->minifiedAjax()
			->parameters([
				'dom'        => 'Blfrtip',
				'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, 'All Records']],
				'buttons'    => [
					['extend' => 'print', 'className' => 'btn btn-primary', 'text' => 'Print'],
					['extend' => 'csv', 'className' => 'btn btn-info', 'text' => 'Export CSV'],
					['extend' => 'excel', 'className' => 'btn btn-success', 'text' => 'Export EXCEL'],
					['extend' => 'reload', 'className' => 'btn btn-default', 'text' => 'Refresh'],

				],
			]);
	}

    protected function getColumns() {
		return [
            ['name' => 'id', 'data' => 'id', 'title' => '#','searchable' => false,],
            ['name' => 'image', 'data' => 'image', 'title' => 'Image', 'orderable' => false, 'searchable' => false,],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => 'Created At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => 'Update At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
	}

    protected function filename(): string {
        return 'Contact_' . date('YmdHis');
    }
}