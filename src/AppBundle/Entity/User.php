<?php
/**
 * Created by PhpStorm.
 * User: Refael-laptop
 * Date: 31/07/2019
 * Time: 19:00
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
	public $PREFIX = 'eWave_';
	public $SUFFIX = '_exercise';
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $user_name;

	/**
	 * @ORM\Column(type="string")
	 */
	private $password;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $registered_ts;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $last_update;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getUserName()
	{
		return $this->user_name;
	}

	/**
	 * @param mixed $user_name
	 */
	public function setUserName($user_name)
	{
		$this->user_name = $user_name;
	}

	/**
	 * @return mixed
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword($password)
	{
		$this->password = md5($this->PREFIX.$password.$this->SUFFIX);
	}

	/**
	 * @return mixed
	 */
	public function getRegisteredTs()
	{
		return $this->registered_ts;
	}

	/**
	 * @param mixed $registered_ts
	 */
	public function setRegisteredTs($registered_ts)
	{
		$this->registered_ts = $registered_ts;
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
}