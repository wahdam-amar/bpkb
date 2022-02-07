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
        'deleteSelected' => 'Delete',
    ];

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

    public function deleteSelected()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            $this->selectedRowsQuery->delete();
        }

        $this->resetAll();
    }

    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable()
                ->format(function ($value) {
                    return ucfirst($value);
                }),
            Column::make('Job')
                ->sortable()
                ->searchable(),
            Column::make('Verified', 'birthdate')
                ->sortable(),
            Column::make('Action', 'id')
                ->format(function ($value, $column, $row) {
                    return '<a href="'.route('person.show', $value).'">Detail</a>';
                })->asHtml(),
        ];
    }

    public function query(): Builder
    {
        return Person::query()->latest()
            ->when($this->getFilter('date'), fn ($query, $date) => $query->whereDate('birthdate', $date));
    }
}
