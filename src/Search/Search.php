<?php

namespace App\Search;

class Search
{
    private ?string $keyword = null;
    private $statuts;
    private $genres;
    private $classifications;
    private $animes;
    private $editors;

    /**
     * @return mixed
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * @param mixed $classifications
     */
    public function setClassifications($classifications): void
    {
        $this->classifications = $classifications;
    }

    /**
     * @return mixed
     */
    public function getAnimes()
    {
        return $this->animes;
    }

    /**
     * @param mixed $animes
     */
    public function setAnimes($animes): void
    {
        $this->animes = $animes;
    }

    /**
     * @return mixed
     */
    public function getEditors()
    {
        return $this->editors;
    }

    /**
     * @param mixed $editors
     */
    public function setEditors($editors): void
    {
        $this->editors = $editors;
    }


    /**
     * @return mixed
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param mixed $genres
     */
    public function setGenres($genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return mixed
     */
    public function getStatuts()
    {
        return $this->statuts;
    }

    /**
     * @param mixed $Statuts
     */
    public function setstatuts($statuts): void
    {
        $this->statuts = $statuts;
    }

}