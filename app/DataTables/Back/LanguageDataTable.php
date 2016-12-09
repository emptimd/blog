<?php

namespace App\DataTables\Back;

use App\Models\Back\Language;
use Form;
use Yajra\Datatables\Services\DataTable;

class LanguageDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'back.languages.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $languages = Language::query();

        return $this->applyScopes($languages);
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
                'pageLength' => 25,
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
            'language_id' => ['name' => 'language_id', 'data' => 'language_id'],
            'language' => ['name' => 'language', 'data' => 'language'],
            'country' => ['name' => 'country', 'data' => 'country'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'name_ascii' => ['name' => 'name_ascii', 'data' => 'name_ascii'],
            'status' => ['name' => 'status', 'data' => 'status']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'languages';
    }
}
