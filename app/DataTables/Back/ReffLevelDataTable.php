<?php

namespace App\DataTables\Back;

use App\Models\Back\ReffLevel;
use Form;
use Yajra\Datatables\Services\DataTable;

class ReffLevelDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'back.reff_levels.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $reffLevels = ReffLevel::query();

        return $this->applyScopes($reffLevels);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => 'auto'])
            ->ajax('')
            ->parameters([
                'order' => [[0,'desc']],
//                'dom' => 'Bfrtip',
                'language' => [
                    'lengthMenu' => '_MENU_',
                    'searchPlaceholder' => 'Search',
                    'search' => "_INPUT_",
                ],
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'id' => ['name' => 'id', 'data' => 'id'],
            'reff_level' => ['name' => 'reff_level', 'data' => 'reff_level'],
            'value' => ['name' => 'value', 'data' => 'value']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'reffLevels';
    }
}
