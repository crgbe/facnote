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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="type")
     */
    private $clients;


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
     * Set type
     *
     * @param string $type
     *
     * @return TypeClient
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set clients
     *
     * @param \FacnoteBundle\Entity\Client $clients
     *
     * @return TypeClient
     */
    public function setClients(\FacnoteBundle\Entity\Client $clients = null)
    {
        $this->clients = $clients;

        return $this;
    }

    /**
     * Get clients
     *
     * @return \FacnoteBundle\Entity\Client
     */
    public function getClients()
    {
        return $this->clients;
    }
}
