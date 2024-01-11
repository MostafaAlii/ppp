<?php

namespace App\DataTables\Cms;

use App\Models\Price;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PriceDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Price $price) {
                return view('admin.cms.price.btn.actions', compact('price'));
            })
            ->editColumn('created_at', function (Price $price) {
                return $price->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Price $price) {
                return $price->created_at->format('Y-m-d');
            })
            ->editColumn('status', function (Price $price) {
                return $price->statusWithLabel();
            })
            ->rawColumns(['created_at', 'updated_at', 'actions', 'status']); 
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Price $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html() {
		return $this->builder()
            ->setTableId('price-table')
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
            ['name' => 'status', 'data' => 'status', 'title' => 'status', 'orderable' => false],
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
        return 'Price_' . date('YmdHis');
    }
}