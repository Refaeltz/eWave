<?php
/**
 * Created by PhpStorm.
 * User: Refael-laptop
 * Date: 31/07/2019
 * Time: 18:40
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Upload;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UploadController extends Controller
{
	/**
	 * @Route("/upload/", name="uploadPage")
	 */
	public function showLoginPage($userId)
	{
		$em = $this->getDoctrine()->getManager();
		$qb = $em->getRepository(Upload::class);
		$fileListArr = $qb->findBy(array('user_id' => $_SESSION['user_id']), null, 10);

		return $this->render('pages/upload_page.twig', array(
			'userId' => $userId,
			'userFilesArr' => $fileListArr
		));
		//return new Response($html);
	}
}