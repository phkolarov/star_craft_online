<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 08-Dec-16
 * Time: 9:48 PM
 */

namespace AppBundle\Controller;


use DataBundle\Entity\Galaxies;
use DataBundle\Entity\GalaxiesPlanets;
use DataBundle\Entity\Galaxy;
use DataBundle\Entity\GalaxyPlanet;
use DataBundle\Entity\Planet;
use DataBundle\Entity\Planets;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DataGeneratorController extends Controller
{
    const maxWith = 100000;
    const maxHeight = 100000;


    /**
     * @Route("generator", name="generator")
     */
    function index()
    {

        $galaxies = $this->galaxyGenerator();

        foreach ($galaxies as $galaxy) {
            //var_dump($galaxy['galaxyPlanets']);

            $newGalaxy = new Galaxy();
            $newGalaxy->setName($galaxy['galaxyName']);
            $newGalaxy->setGuidid($galaxy['galaxyId']);


            $em = $this->getDoctrine()->getManager();

            $em->persist($newGalaxy);
            //$em->flush();

            var_dump($galaxy);
            foreach ($galaxy['galaxyPlanets'] as $planet) {

                $newPlanet = new Planet();
                $newPlanet->setName($planet['name']);
                $newPlanet->setX($planet['x']);
                $newPlanet->setY($planet['y']);
                $newPlanet->setMetal($planet['planetResources']['metal']);
                $newPlanet->setMineral($planet['planetResources']['mineral']);
                $newPlanet->setGas($planet['planetResources']['gas']);
                $planetType = $em->getRepository('DataBundle:PlanetTypes')->find($planet['type']);

                $newPlanet->setType($planetType);
                $newPlanet->setImageUri($planet['image']);

                $em->persist($newPlanet);
                //$em->flush();

                $galaxyPlanet = new GalaxyPlanet();
                $galaxyPlanet->setGalaxy($newGalaxy);
                $galaxyPlanet->setPlanet($newPlanet);
                $em->persist($galaxyPlanet);
                //$em->flush();
            }

        }

//        foreach ($galaxies as $galaxy) {
//
//            var_dump(count($galaxy['galaxyPlanets']));
//        }

//        $newGalaxy = new Galaxies();
//        $newGalaxy->setName($galaxyName);
//        $newGalaxy->setGuidid($galaxyId);
//


//        var_dump($newGalaxy->getId());
//       $this->planetCoordinateGenerator();
    }

    function radiator($rad, $pPositionX, $pPositionY, $radius): array
    {
        $chance = 33;
        $p = array();


        if (rand(1, 100) <= $chance) {

            $theta = $rad;
            $theta = pi() * $theta / 180;      // convert to radians.
            $p['x'] = $pPositionX + (cos($theta) * $radius);// ~ 85.36;
            $p['y'] = $pPositionY - (sin($theta) * $radius); //; ~ 14.65;
            return $p;
        }
        return $p;
    }


    function galaxyGenerator()
    {

        $centerX = 500;
        $centerY = 500;

        $galaxyContainer = array();


        for ($i = 0; $i < 300; $i++) {

            $galaxyId = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
            $galaxyName = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 2) . rand(20, 2000) . '-ALX';

            $radiusDegrees = 150;
            $galaxy = array(
                'galaxyName' => $galaxyName,
                'galaxyId' => $galaxyId,
                'galaxyPlanets' => array()
            );

            $planetResources = array();
            $planetResources['metal'] = 100000;
            $planetResources['mineral'] = 100000;
            $planetResources['gas'] = 100000;
            $sunName = substr('GAMA_'.str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 4) . rand(20, 2000) . '-SN';

            $galaxy['galaxyPlanets'][] = array('name' => $sunName, 'x' => $centerX, 'y' => $centerY, 'type' => 4, 'image' => 'sun', 'planetResources' => $planetResources);


//            while ($radiusDegrees < 500) {
//
//                    for ($r = 0; $r < 360; $r += 50) {
//                        $p1 = $this->radiator($r, $centerX, $centerY, $radiusDegrees);
//
//                        if (count($p1) > 0) {
//                            $planetName = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 3) . rand(20, 2000) . '-PLN';
//                            $planetType = rand(1, 3);
//                            $image = '';
//                            $planetResources = array();
//                            switch ($planetType) {
//                                case 1:
//
//                                    $metal = rand(10000, 20000);
//                                    $mineral = rand(50000, 80000);
//                                    $gas = rand(10000, 20000);
//
//                                    $planetResources['metal'] = $metal;
//                                    $planetResources['mineral'] = $mineral;
//                                    $planetResources['gas'] = $gas;
//                                    $image = 'mineral';
//                                    break;
//                                case 2:
//
//                                    $metal = rand(50000, 80000);
//                                    $mineral = rand(20000, 20000);
//                                    $gas = rand(10000, 20000);
//
//                                    $planetResources['metal'] = $metal;
//                                    $planetResources['mineral'] = $mineral;
//                                    $planetResources['gas'] = $gas;
//                                    $image = 'metal';
//
//                                    break;
//                                case 3:
//
//                                    $metal = rand(10000, 20000);
//                                    $mineral = rand(20000, 20000);
//                                    $gas = rand(50000, 80000);
//                                    $planetResources['metal'] = $metal;
//                                    $planetResources['mineral'] = $mineral;
//                                    $planetResources['gas'] = $gas;
//                                    $image = 'gas';
//
//                                    break;
//                            }
//                            $galaxy['galaxyPlanets'][] = array('name' => $planetName, 'x' => $p1['x'], 'y' => $p1['y'], 'type' => $planetType, 'image' => $image, 'planetResources' => $planetResources);
//                        }
//                        // echo '<div id="dot1" style="position: absolute; width: 10px; height: 10px; border: 1px solid black; top:' . $p1['y'] . 'px; left: ' . $p1['x'] . 'px"></div>';
//                    }
//
//                $radiusDegrees += $radiusDegrees * 1.5;
//            }
            $degrees = 150;
            $galaxyContainer[] = $galaxy;
        }


        return $galaxyContainer;
    }

}