<?php

namespace FacnoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FacnoteBundle\FacnoteBundle;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="FacnoteBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="nom_client", type="string", length=255)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_client", type="string", length=255, nullable=true)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_client", type="string", length=255, nullable=true)
     */
    private $adrClient;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_client", type="string", length=255, nullable=true)
     */
    private $telClient;

    /**
     * @var FacnoteBundle\Entity\TypeClient
     * @ORM\ManyToOne(targetEntity="TypeClient")
     * @ORM\JoinColumn(name="id_type", referencedColumnName="id")
     */
    private $idType;


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
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     *
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set adrClient
     *
     * @param string $adrClient
     *
     * @return Client
     */
    public function setAdrClient($adrClient)
    {
        $this->adrClient = $adrClient;

        return $this;
    }

    /**
     * Get adrClient
     *
     * @return string
     */
    public function getAdrClient()
    {
        return $this->adrClient;
    }

    /**
     * Set telClient
     *
     * @param string $telClient
     *
     * @return Client
     */
    public function setTelClient($telClient)
    {
        $this->telClient = $telClient;

        return $this;
    }

    /**
     * Get telClient
     *
     * @return string
     */
    public function getTelClient()
    {
        return $this->telClient;
    }

    /**
     * Set idType
     *
     * @param \FacnoteBundle\Entity\TypeClient $idType
     *
     * @return Client
     */
    public function setIdType(\FacnoteBundle\Entity\TypeClient $idType = null)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return \FacnoteBundle\Entity\TypeClient
     */
    public function getIdType()
    {
        return $this->idType;
    }
}
