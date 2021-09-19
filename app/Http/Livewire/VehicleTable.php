<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class VehicleTable extends DataTableComponent
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
            Column::make('Brand')
                ->sortable()
                ->searchable(),
            Column::make('Plate')
                ->sortable()
                ->searchable(),
            Column::make('Due Date', 'effective_date')
                ->sortable()
                ->searchable(),
            Column::make('Action', 'id')
                ->format(function ($value, $column, $row) {
                    return '<a href="' . route('vehicle.edit', $value) . '">Edit</a>';
                })->asHtml(),
        ];
    }

    public function query(): Builder
    {
        return Vehicle::query()->latest();
    }
}
