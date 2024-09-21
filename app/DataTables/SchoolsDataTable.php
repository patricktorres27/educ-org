<?php

namespace App\DataTables;

use App\Models\School;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SchoolsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'schools.action')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(School $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('schools-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->editors([
                Editor::make()
                    ->template('#schoolForm')
                    ->fields([
                        Fields\Text::make('short_name'),
                        Fields\Text::make('name'),
                        Fields\Text::make('address'),
                        Fields\Text::make('number'),
                        Fields\Text::make('website'),
                    ]),
            ])
            ->buttons([
                Button::make('create')->editor('editor'),
                Button::make('edit')->editor('editor'),
                Button::make('remove')->editor('editor'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id'),
            Column::make('short_name'),
            Column::make('name'),
            Column::make('address'),
            Column::make('number'),
            Column::make('website'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Schools_'.date('YmdHis');
    }
}
