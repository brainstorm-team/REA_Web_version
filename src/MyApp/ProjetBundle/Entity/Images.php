<?php

namespace MyApp\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity
 */
class Images
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
     * @ORM\Column(name="images", type="blob", nullable=true)
     */
    private $images;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_offre", type="integer", nullable=true)
     */
    private $idOffre;


}
