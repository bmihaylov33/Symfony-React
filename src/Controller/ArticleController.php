<?php

namespace App\Controller;

use DateTime;
use SimpleXMLElement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig');
    }

    /**
     * @Route("/api/articles", name="articles")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getArticles($order = 'asc', $ofset = 0, $perPage = 10)
    {
        $dataArticles = file_get_contents('http://feeds.bbci.co.uk/news/rss.xml');
        $a            = new SimpleXMLElement($dataArticles);
        $articles     = [];

        foreach($a->channel->item as $entry) {
            $article = [];

            $article['link']        = (string) $entry->link;
            $article['title']       = (string) $entry->title;
            $article['description'] = (string) $entry->description;
            $article['id']          = (string) $entry->guid;
            $article['date']        = (string) date_create($entry->pubDate, timezone_open('UTC'))->format('Y/m/d H:i');;
            $article['created_at']  = $this->showDate('UTC',(string) $entry->pubDate, "Y/m/d H:i");
            $article['type']        = 'article';

            $articles[] = $article;
        }

        $dataEarthquakes = file_get_contents('https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2022-05-26&endtime=2022-05-27');
        $obj = json_decode($dataEarthquakes, true);

        foreach($obj['features'] as $entry) {
            $earthquake = [];

            $earthquake['link']        = (string) $entry['properties']['url'];
            $earthquake['title']       = (string) 'Earthquake: ' . $entry['properties']['title'];
            $earthquake['description'] = (string) 'Place: ' . $entry['properties']['place'] . ' | Magnitude: ' . $entry['properties']['mag'];
            $earthquake['id']          = (string) $entry['id'];
            $earthquake['date']        = (string) date('Y/m/d H:i', $entry['properties']['time']/1000);
            $earthquake['created_at']  = (string) date('Y/m/d H:i', $entry['properties']['time']/1000);
//            $earthquake['created_at']  = $this->showDate('UTC', date('d/m/Y H:i:s',(string) $entry['properties']['time']/1000), "Y/m/d H:i");
            $earthquake['type']        = 'earthquake';

            $articles[] = $earthquake;
        }

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        if ($order == 'desc') {
            $articles = array_reverse($articles);
        }

        $response->setContent(json_encode(array_slice($articles, $ofset, $perPage)));

        return $response;
    }

    function showDate($timeZone = 'UTC', $objectTime = '', $outputFormat = 'Y-m-d H:i:s', $auto_format = true): string
    {
        $date = date_create($objectTime, timezone_open($timeZone));
        $date = date_timezone_set($date, timezone_open($timeZone));

        $dTime   = $date->getTimestamp();
        $dOffset = $date->diff(new DateTime($timeZone));
        $resDate = $date->format($outputFormat);

        if($auto_format) {
            if($dTime >= $date->getTimestamp() && $dOffset->invert != 1 && $dOffset->days < 1){

                if($dOffset->h > 0) {
                    $resDate =  $dOffset->h." hr".(($dOffset->h > 1)? "s" : "")." ago";
                }elseif($dOffset->i > 0) {
                    $resDate = $dOffset->i." min".(($dOffset->i > 1)? "s" : "")." ago";
                }elseif( $dOffset->s > 0) {
                    $resDate = $dOffset->s." sec".(($dOffset->s > 1)? "s" : "")." ago";
                }
                else {
                    $resDate = "Just now";
                }
            }
        }
        return $resDate;
    }
}
