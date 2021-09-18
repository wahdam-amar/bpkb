<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class PeopleTable extends DataTableComponent
{
    public bool $columnSelect = true;
    public bool $hideBulkActionsOnEmpty = true;

    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];

    public function exportSelected()
    {
        // Do something with the selected rows.
    }

    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('Job')
                ->sortable()
                ->searchable(),
            Column::make('Verified', 'birthdate')
                ->sortable(),
            Column::make('Action', 'id')
                ->format(function ($value, $column, $row) {
                    return '<a href="' . $value . '">Edit</a>';
                })->asHtml(),
        ];
    }

    public function query(): Builder
    {
        return Person::query()->latest();
    }
}
