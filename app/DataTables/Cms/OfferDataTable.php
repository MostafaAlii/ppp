<?php

namespace App\DataTables\Cms;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class OfferDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Offer $offer) {
                return view('admin.cms.offer.btn.actions', compact('offer'));
            })
            ->addColumn('image', function (Offer $offer) {
                return '<img src="' . $offer->ImagePath() . '" width="100">';
            })
            ->editColumn('created_at', function (Offer $tour) {
                return $tour->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function (Offer $offer) {
                return $offer->created_at->format('Y-m-d');
            })
            ->rawColumns(['created_at', 'updated_at', 'actions', 'image']); 
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Offer $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html() {
		return $this->builder()
            ->setTableId('offer-table')
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
            ['name' => 'description', 'data' => 'description', 'title' => 'description'],
            ['name' => 'note1', 'data' => 'note1', 'title' => 'note1', 'orderable' => false, 'searchable' => false,],
            ['name' => 'note2', 'data' => 'note2', 'title' => 'note2', 'orderable' => false, 'searchable' => false,],
            ['name' => 'note3', 'data' => 'note3', 'title' => 'note3', 'orderable' => false, 'searchable' => false,],
            ['name' => 'note4', 'data' => 'note4', 'title' => 'note4', 'orderable' => false, 'searchable' => false,],
            ['name' => 'note5', 'data' => 'note5', 'title' => 'note5', 'orderable' => false, 'searchable' => false,],
            ['name' => 'note6', 'data' => 'note6', 'title' => 'note6', 'orderable' => false, 'searchable' => false,],
            ['name' => 'created_at', 'data' => 'created_at', 'title' => 'Created At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'updated_at', 'data' => 'updated_at', 'title' => 'Update At', 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
	}

    protected function filename(): string
    {
        return 'Offer_' . date('YmdHis');
    }
}