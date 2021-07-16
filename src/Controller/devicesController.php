<?php
namespace App\Controller;
use App\container;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//require_once 'src/bootstrap.php';
class devicesController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage");
     */
    public function mainpage()
    {
        /*require_once 'src/bootstrap.php';
        $configuration = array(
            'db_dsn'  => 'mysql:host=devicesdb;dbname=devicesdb',
            'db_user' => 'root',
            'db_password' => '1234',
        );
        $pdo=new \PDO(
            $configuration['db_dsn'],
            $configuration['db_user'],
            $configuration['db_password'],
        );
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        dd($pdo); */
        //return new Response('Witam na stronie');
        return $this->render('homepage.html.twig');
    }
}