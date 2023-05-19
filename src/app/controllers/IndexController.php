<?php
namespace MyApp\Controllers;

use Phalcon\Mvc\Controller;
use MyApp\Models\Users;

class IndexController extends Controller
{
    public function indexAction()
    {
        return "HI";
    }

    /**
     * @param int $a
     * @param int $b
     */
    public function addAction(int $a, int $b): int
    {
        return $a + $b;
    }
    
}
