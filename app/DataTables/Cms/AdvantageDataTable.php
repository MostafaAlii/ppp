<?php
namespace App\DataTables\Cms;
use App\Models\Advantage;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class AdvantageDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Advantage $advantage) {
                return view('admin.cms.advantages.btn.actions', compact('advantage'));
            })
            ->editColumn('created_at', function (Advantage $advantage) {
                return $advantage->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Advantage $advantage) {
                return $advantage->created_at->format('Y-m-d');
            })
            ->editColumn('status', function (Advantage $advantage) {
                return $advantage->statusWithLabel();
            })
            ->rawColumns(['created_at', 'updated_at', 'actions', 'status']); 
    }

    public function query(): QueryBuilder {
        return Advantage::query();
    }


    public function html() {
		return $this->builder()
            ->setTableId('advantages-table')
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
            ['name' => 'note', 'data' => 'note', 'title' => 'note', 'orderable' => false],
            ['name' => 'status', 'data' => 'status', 'title' => 'status', 'orderable' => false],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => 'Created At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => 'Update At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
	}

    protected function filename(): string {
        return 'Advantage_' . date('YmdHis');
    }
}