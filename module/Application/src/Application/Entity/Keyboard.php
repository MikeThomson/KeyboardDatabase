<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/1/14
 * Time: 7:03 PM
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Keyboard
 * @package Application\Entity
 * @ORM\Entity
 */
class Keyboard {

	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 *
	 * @var string
	 * @ORM\Column(type="string")
	 */
	protected $name;

	/**
	 *
	 * @var decimal
	 * @ORM\Column(type="decimal")
	 */
	protected $price;

	/**
	 *
	 * @var string
	 * @ORM\Column(type="string")
	 */
	protected $backlighting;

	/**
	 *
	 * @var string
	 * @ORM\Column(type="string")
	 */
	protected $switch;

	/**
	 *
	 * @var string
	 * @ORM\Column(type="text")
	 */
	protected $additionalInfo;

	/**
	 * @var \Application\Entity\KeywordEntry[]
	 * @ORM\OneToMany(targetEntity="KeywordEntry", mappedBy="keyboard")
	 */
	protected $keywords;
} 