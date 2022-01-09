<?php

namespace App\Http\Livewire;

use App\Models\VehicleHistory;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class VehicleHistoriesTable extends DataTableComponent
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
                ])
        ];
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'vehicle.name')
                ->sortable()
                ->searchable(),
            Column::make('Plate', 'vehicle.plate')
                ->sortable()
                ->searchable(),
            Column::make('Keterangan', 'description')
                ->sortable()
                ->searchable(),
            Column::make('Status')
                ->format(function ($value, $column, $row) {
                    return ($value === 'S') ? 'Sukses' : 'Failed';
                }),
            Column::make('Process Date', 'created_at')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return VehicleHistory::with('vehicle')->latest()
            ->when($this->getFilter('date'), fn ($query, $date) => $query->whereDate('created_at', $date));
    }
}
