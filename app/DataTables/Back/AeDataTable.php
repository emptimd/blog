<?php

namespace App\DataTables\Back;

use App\Models\Back\Ae;
use Form;
use Yajra\Datatables\Services\DataTable;

class AeDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'back.aes.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $aes = Ae::query();

        return $this->applyScopes($aes);
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
            ->addAction(['width' => '11%'])
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
            'name' => ['name' => 'name', 'data' => 'name'],
            'path' => ['name' => 'path', 'data' => 'path']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'aes';
    }
}
