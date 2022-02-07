<?php

namespace App\Http\Livewire;

use App\Actions\CleanWord;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class FeedbackTable extends DataTableComponent
{
    private $cleanWords;

    public function __construct()
    {
        parent::__construct();
        $this->cleanWords = new CleanWord();
    }

    public function formatText($text)
    {
        $text = strtolower($text);
        $text = $this->stemmer->stem($text);
        $text = $this->stopword->remove($text);

        return $text;
    }

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
            Column::make('formated', 'content')
            ->sortable()
            ->searchable()
            ->format(function ($value) {
                return $this->cleanWords->format($value);
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
