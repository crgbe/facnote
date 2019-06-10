<?php

namespace FacnoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeClient
 *
 * @ORM\Table(name="type_client")
 * @ORM\Entity(repositoryClass="FacnoteBundle\Repository\TypeClientRepository")
 */
class TypeClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_type", type="string", length=255)
     */
    private $nomType;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomType
     *
     * @param string $nomType
     *
     * @return TypeClient
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;

        return $this;
    }

    /**
     * Get nomType
     *
     * @return string
     */
    public function getNomType()
    {
        return $this->nomType;
    }
}
