<?php

namespace App\Services;

use DB;
use wfphpnlp\NaiveBayes;

class NaiveBayesServices
{
    private $result;
    private $dataTrain = [];
    private $class = ['P', 'N'];
    private $ai;
    private $text;

    public function __construct()
    {
        $this->readData();

        $this->ai = new NaiveBayes();

        // mendefinisikan class target sesuai dengan yang ada pada data training.
        $this->ai->setClass($this->class);

        // proses training
        $this->ai->training($this->dataTrain);
    }

    public function predict($text)
    {
        $this->result = $this->ai->predict($text); // output "negatif"

        return $this->result['hasil'];
    }

    public function readData()
    {
        $data = DB::table('responses')->get(['tanggapan as text','sentiment as class']);

        $data->each(function ($item) {
            array_push($this->dataTrain, [
                'text' => $item->text,
                'class' => $item->class,
            ]);
        });

        return $this->dataTrain;
    }
}
