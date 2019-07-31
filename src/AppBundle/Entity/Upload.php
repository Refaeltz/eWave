<?php
/**
 * Created by PhpStorm.
 * User: Refael-laptop
 * Date: 31/07/2019
 * Time: 20:07
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="uploads")
 */
class Upload
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $user_id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $media_sha;

	/**
	 * @return mixed
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * @param mixed $user_id
	 */
	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}

	/**
	 * @return mixed
	 */
	public function getMediaSha()
	{
		return $this->media_sha;
	}

	/**
	 * @param mixed $media_sha
	 */
	public function setMediaSha($media_sha)
	{
		$this->media_sha = $media_sha;
	}

	/**
	 * @return mixed
	 */
	public function getLastUpdate()
	{
		return $this->last_update;
	}

	/**
	 * @param mixed $last_update
	 */
	public function setLastUpdate($last_update)
	{
		$this->last_update = $last_update;
	}

	/**
	 * @ORM\Column(type="integer")
	 */
	private $last_update;

}