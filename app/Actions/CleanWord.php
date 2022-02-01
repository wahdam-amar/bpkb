<?php

namespace App\Actions;

use Illuminate\Support\Str;

class CleanWord
{
    protected $word;

    public function __construct($word = null)
    {
        $this->word = $word;
    }

    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    public function build()
    {
        $str = Str::of($this->word)->trim()->lower();

        return preg_replace('/[^a-z ]/i', '', $str);
    }
}
