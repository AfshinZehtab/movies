<?php
/**
 * Created by Afshin Zehtab.
 * User: Afshin Zehtab
 * Date: 31.07.2019
 * Time: 10:44
 *
 * Subtitle results template
 * including in index
 *
 */
require_once __DIR__.'/ext/Subscene.php';

echo "<h2 class='display-4 mb-5'>Subtitles</h2>";


$subscene = new Subscene('USERNAME', 'PASSWORD');
$movies = $subscene->search($_GET['search']);

$subscene->setLanguages(13,19,46);

// $getSubInput = $_GET['search'];
// // https://subscene.com/subtitles/john-wick

// $subscene = "https://subscene.com/subtitles/" + $getSubInput;
// $c = curl_init('http://stackoverflow.com/questions/ask');
// // curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

// echo $c;

//print_r($movies);
//$subtitle_download_url = $subscene->getDownloadUrl('https://subscene.com/subtitles/fast-five-fast-and-furious-5-the-rio-heist/farsi_persian/1108695');
echo "<ul class='list-group list-group-flush' id='sub-list'>";

foreach ($movies as $item) {
    //$subtitle_download_url = $subscene->getDownload('https://subscene.com/subtitles/fast-five-fast-and-furious-5-the-rio-heist/farsi_persian/1108695', 's');
    echo "<li class='list-group-item pt-3 pb-3 row'>
            <a class='col' href='{$item['url']}' target='_blank'>{$item['title']}</a>
            </li>";
}

    //<a class='col' href='{$subscene->getDownload($item['url'], $item['title'])}></a>
echo "</ul>";
echo "<a href='#' id='myList-toggle' class='mt-3 d-block'>Show the rest</a>";
