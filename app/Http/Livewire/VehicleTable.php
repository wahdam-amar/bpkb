<?php

namespace App\Http\Livewire;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class VehicleTable extends DataTableComponent
{
    public bool $columnSelect = true;
    public bool $hideBulkActionsOnEmpty = true;

    public array $bulkActions = [
        'deleteSelected' => 'Delete',
    ];

    public function deleteSelected()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            $this->selectedRowsQuery->delete();
        }

        $this->resetAll();
    }

    public function filters(): array
    {
        return [
            'date' => Filter::make('Date')
                ->date([
                    // 'min' => now()->subYear()->format('Y-m-d'), // Optional
                    // 'max' => now()->format('Y-m-d') // Optional
                ]),
        ];
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
                    return '<a href="'.route('vehicle.show', $value).'">Edit</a>';
                })->asHtml(),
        ];
    }

    // Todo add person name who has vehicle

    public function query(): Builder
    {
        return Vehicle::query()->latest()
            ->when($this->getFilter('date'), fn ($query, $date) => $query->whereDate('effective_date', $date));
    }
}
