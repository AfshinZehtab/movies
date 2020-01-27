<?php
/**
 * Created by Afshin Zehtab.
 * User: Afshin Zehtab
 * Date: 29.07.2019
 * Time: 17:37
 */

include_once __DIR__.'/ext/imdb.class.php';


if(isset($_REQUEST['submit'] ))
{
    $result = new movies();
    $result->getInput($_GET['search']);
}

/**
 * Class movies
 * Get all movie information from IMDB API, that
 * searched by user
 */
class movies
{
    public $title, $writer, $year, $img, $rating, $ratingCount, $director, $genre, $language, $stars, $seasons, $plot, $trailer;
    public function getInput()
    {
        $getInput = $_GET["search"];
        $this->getSearch($getInput);
    }

    private function getSearch($searchInput)
    {
        $IMDB = new IMDB($searchInput);
        if ($IMDB->isReady)
        {
            $this->title = $IMDB->getTitle();
            $this->writer = $IMDB->getWriter();
            $this->year = $IMDB->getYear();
            $this->img = $IMDB->getPoster();
            $this->rating = $IMDB->getRating();
            $this->ratingCount = $IMDB->getRatingCount();
            $this->director = $IMDB->getDirector();
            $this->genre = $IMDB->getGenre();
            $this->language = $IMDB->getLanguage();
            $this->stars = $IMDB->getCastAndCharacterAsUrl($iLimit = 5, $bMore = true, $sTarget = '');
            $this->seasons = $IMDB->getSeasonsAsUrl();
            $this->plot = $IMDB->getPlot($iLimit = 250);
            $this->trailer = $IMDB->getTrailerAsUrl();

        }
        else 
        {
            $_GET['search'] = '';
        }
    }
}