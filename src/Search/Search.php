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
     * @return array
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * @param array $classifications
     */
    public function setClassifications($classifications): void
    {
        $this->classifications = $classifications;
    }

    /**
     * @return array
     */
    public function getAnimes()
    {
        return $this->animes;
    }

    /**
     * @param array $animes
     */
    public function setAnimes($animes): void
    {
        $this->animes = $animes;
    }

    /**
     * @return array
     */
    public function getEditors()
    {
        return $this->editors;
    }

    /**
     * @param array $editors
     */
    public function setEditors($editors): void
    {
        $this->editors = $editors;
    }


    /**
     * @return array
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param array $genres
     */
    public function setGenres($genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(?string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @return array
     */
    public function getStatuts()
    {
        return $this->statuts;
    }

    /**
     * @param array $statuts
     */
    public function setStatuts($statuts): void
    {
        $this->statuts = $statuts;
    }


    public function __toString()
    {
        return 'search';
    }
}