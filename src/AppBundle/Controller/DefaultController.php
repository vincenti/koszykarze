<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /*
     * A
     */
    /**
 * @Route("/jordan.html", name="jordan")
 */
public function  jordanAction()
{
    return $this->render('default/jordan.html.twig');
}
    /*
     * B
     */

    /*
     * C
     */
     /**
 * @Route("/russell.html", name="russell")
 */
public function russellAction()
{
    return $this->render('default/russell.html.twig');
}

    /*
     * D
     */
/**
 * @Route("/bryant.html", name="bryant")
 */
public function bryantAction()
{
    return $this->render('default/bryant.html.twig');
}

    /*
     * E
     */

    /*
     * F
     */

    /*
     * G
     */

    /*
     * H
     */

    /*
     * I
     */

    /*
     * J
     */
    /**
 * @Route("/Wade.html", name="Wade")
 */
public function WadeAction()
{
    return $this->render('default/Wade.html.twig');
}
    /*
     * K
     */

    /*
     * L
     */

    /*
     * M
     */

    /*
     * N
     */

    /*
     * O
     */

    /*
     * P
     */

    /*
     * Q
     */

    /*
     * R
     */

    /*
     * S
     */

    /*
     * T
     */

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */

    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */


}
