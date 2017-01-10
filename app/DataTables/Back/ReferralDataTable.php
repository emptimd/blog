<?php

namespace App\DataTables\Back;

use App\Models\Back\Referral;
use Form;
use Yajra\Datatables\Services\DataTable;

class ReferralDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'back.referrals.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $referrals = Referral::query();

        return $this->applyScopes($referrals);
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
            'user_id' => ['name' => 'user_id', 'data' => 'user_id'],
            'refferal_id' => ['name' => 'refferal_id', 'data' => 'refferal_id'],
            'reff_level' => ['name' => 'reff_level', 'data' => 'reff_level']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'referrals';
    }
}
