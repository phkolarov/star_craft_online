<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 08-Dec-16
 * Time: 9:48 PM
 */

namespace AppBundle\Controller;


use DataBundle\Entity\Galaxies;
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

        $galaxyId = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
        $galaxyName = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 2) . rand(20, 2000).'-ALX';

        $newGalaxy = new Galaxies();
        $newGalaxy->setName($galaxyName);
        $newGalaxy->setGuidid($galaxyId);

        $em = $this->getDoctrine()->getManager();
        $em->persist($newGalaxy);
        $em->flush();



        var_dump($newGalaxy->getId());
//       $this->planetCoordinateGenerator();
    }

    function radiator($rad, $pPositionX, $pPositionY, $radius): array
    {
        $chance = 35;
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


    function planetCoordinateGenerator()
    {

        $centerX = 500;
        $centerY = 500;

        $degrees = 150;

        while ($degrees < 1000) {
            for ($i = 0; $i < 360; $i += 50) {
                $p1 = radiator($i, $centerX, $centerY, $degrees);

                echo '<div id="center" style="width: 10px; height: 10px; border: 1px solid black; position: absolute; left: ' . $centerX . 'px; top: ' . $centerY . 'px; background-color: red"></div>';

                if (count($p1) > 0)
                    echo '<div id="dot1" style="position: absolute; width: 10px; height: 10px; border: 1px solid black; top:' . $p1['y'] . 'px; left: ' . $p1['x'] . 'px"></div>';
            }

            $degrees += $degrees * 1.5;
        }
    }

}