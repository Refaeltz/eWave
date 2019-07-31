<?php
/**
 * Created by PhpStorm.
 * User: Refael-laptop
 * Date: 30/07/2019
 * Time: 19:22
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class LoginController extends Controller
{

	/**
	 * @Route("login/api/")
	 */
	public function doLogin(){
		$user_name = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		return new Response(json_encode(array($user_name, $password)));

		$em = $this->getDoctrine()->getManager();
		$qb = $em->getRepository(User::class);
		$user = $qb->findOneBy(array('user_name'=>$user_name));


//		$fileListArr = $qb->findOneBy(array('id' => $id, 'password' => $password));
	}


	/**
	 * @Route("/login/new")
	 */
	public function createNewUser(){
		$user = new User();
		$time = time();
		$user->setUserName('rafi');
		$user->setPassword('aa23456');
		$user->setRegisteredTs($time);
		$user->setLastUpdate($time);

		$em = $this->getDoctrine()->getManager();
		$em->persist($user);
		$user_id = $_SESSION['user_id'] = $user->getId();
		$em->flush();

		return new Response('<html><body><p>created user id: '.$user_id.'</p></body></html>');
	}
	/**
	 * Matches /login exactly
	 *
	 * @Route("/login", name="loginPage")
	 */
	public function showLoginPage()
	{
		return $this->render('pages/login_page.twig');
		//return new Response($html);
	}


}