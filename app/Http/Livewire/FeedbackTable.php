<?php

namespace App\Http\Livewire;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class FeedbackTable extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('name')
            ->sortable()
            ->searchable()
            ->format(function ($value) {
                return ucfirst($value);
            }),
            Column::make('content')
            ->sortable()
            ->searchable()
            ->format(function ($value) {
                return ucfirst($value);
            }),
            Column::make('sentiment')
            ->sortable()
            ->searchable()
            ->format(function ($value) {
                return  view('components.badge')->with('value', $value == 'P' ? 'Positive' : 'Negative');
            }),
        ];
    }

    public function query(): Builder
    {
        return Feedback::query();
    }
}
