<?php

namespace MyApp\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=500, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=500, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=500, nullable=false)
     */
    private $reponse;


}
