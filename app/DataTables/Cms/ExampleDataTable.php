<?php
namespace App\DataTables\Cms;
use App\Models\Example;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
class ExampleDataTable extends DataTable {
    public function dataTable(QueryBuilder $query): EloquentDataTable {
        return (new EloquentDataTable($query))
            ->addColumn('action', function (Example $example) {
                return view('admin.cms.examples.btn.actions', compact('example'));
            })
            ->addColumn('image', function (Example $example) {
                return '<img src="' . $example->ImagePath() . '" width="100">';
            })
            ->rawColumns(['action', 'example', 'image']);
    }

    public function query(Example $model): QueryBuilder {
        return $model->newQuery();
    }

    public function html() {
        return $this->builder()
            ->setTableId('example-table')
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
                'initComplete' => " function () {
		            this.api().columns([1]).every(function () {
		                var column = this;
		                var input = document.createElement(\"input\");
		                $(input).appendTo($(column.footer()).empty())
		                .on('keyup', function () {
		                    column.search($(this).val(), false, false, true).draw();
		                });
		            });
		        }",

            ]);
    }

    protected function getColumns() {
        return [
            ['name' => 'id', 'data' => 'id', 'title' => '#','searchable' => false,],
            ['name' => 'name', 'data' => 'name', 'title' => 'Name',],
            ['name' => 'image', 'data' => 'image', 'title' => 'Image', 'orderable' => false, 'searchable' => false,],
            ['name' => 'action', 'data' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false, 'printable' => false, 'exportable' => false],
        ];
    }

    protected function filename(): string {
        return 'Example_' . date('YmdHis');
    }
}