<?php

namespace App\Actions;

class CleanWord
{
    private $stemmerFactory ;
    private $stemmer ;
    private $stopWordRemoverFactory ;
    private $stopword  ;

    public function __construct()
    {
        $this->stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $this->stemmer = $this->stemmerFactory->createStemmer();
        $this->stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $this->stopword = $this->stopWordRemoverFactory->createStopWordRemover();
    }

    public function format($text)
    {
        $text = strtolower($text);
        $text = $this->stemmer->stem($text);
        $text = $this->stopword->remove($text);

        return $text;
    }
}
