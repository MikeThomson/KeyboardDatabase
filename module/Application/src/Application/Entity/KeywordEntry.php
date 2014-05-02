<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/2/14
 * Time: 12:17 PM
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class KeywordEntry
 * @package Application\Entity
 * @ORM\Entity
 */
class KeywordEntry {

	/**
	 * For now we're using a surrogate key becuase keyword is a varchar, but this may change
	 * @var int
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var \Application\Entity\Keyboard
	 * @ORM\ManyToOne(targetEntity="Keyboard", inversedBy="keywords")
	 */
	protected $keyboard;

	/**
	 *
	 * @var string
	 * @ORM\Column(type="string")
	 */
	protected $keyword;
} 