<?php
namespace App\DataTables\Cms;
use App\Models\Faq;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class FaqDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Faq $faq) {
                return view('admin.cms.faq.btn.actions', compact('faq'));
            })
            ->editColumn('created_at', function (Faq $faq) {
                return $faq->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Faq $faq) {
                return $faq->created_at->format('Y-m-d');
            })
            ->rawColumns(['created_at', 'updated_at', 'actions']); 
    }

    public function query(): QueryBuilder {
        return Faq::query();
    }


    public function html() {
		return $this->builder()
            ->setTableId('faq-table')
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
            ['name' => 'question', 'data' => 'question', 'title' => 'Question', 'orderable' => false],
            ['name' => 'answer', 'data' => 'answer', 'title' => 'Answer', 'orderable' => false],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => 'Created At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => 'Update At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
	}

    protected function filename(): string {
        return 'Faq_' . date('YmdHis');
    }
}