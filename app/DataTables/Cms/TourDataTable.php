<?php

namespace App\DataTables\Cms;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class TourDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Tour $tour) {
                return view('admin.cms.tour.btn.actions', compact('tour'));
            })
            ->addColumn('image', function (Tour $tour) {
                return '<img src="' . $tour->ImagePath() . '" width="100">';
            })
            ->editColumn('link', function (Tour $tour) {
                return $tour->link
                    ? '<a href="' . $tour->link . '" target="_blank">Click</a>'
                    : '<i class="fa-solid fa-x text-danger"></i>';
            })
            ->editColumn('created_at', function (Tour $tour) {
                return $tour->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Tour $tour) {
                return $tour->created_at->format('Y-m-d');
            })
            ->rawColumns(['created_at', 'updated_at', 'actions', 'image', 'link']); 
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Tour $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html() {
		return $this->builder()
            ->setTableId('tour-table')
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
            ['name' => 'name', 'data' => 'name', 'title' => 'name', 'orderable' => false],
            ['name' => 'type', 'data' => 'type', 'title' => 'type', 'orderable' => false],
            ['name' => 'order', 'data' => 'order', 'title' => 'ordering'],
            ['name' => 'image', 'data' => 'image', 'title' => 'Image', 'orderable' => false, 'searchable' => false,],
            ['name' => 'link', 'data' => 'link', 'title' => 'Link', 'orderable' => false, 'searchable' => false,],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => 'Created At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => 'Update At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
	}

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Tour_' . date('YmdHis');
    }
}