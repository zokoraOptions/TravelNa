<?php

namespace Travel\TravelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport
 *
 * @ORM\Table(name="transport")
 * @ORM\Entity(repositoryClass="Travel\TravelBundle\Repository\TransportRepository")
 */
class Transport
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
     * @ORM\Column(name="transit", type="string", length=255)
     */
    private $transit;

    /**
     * @var string
     *
     * @ORM\Column(name="comission", type="decimal", precision=10, scale=0)
     */
    private $comission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transport", type="date")
     */
    private $dateTransport;

    /**
    * @ORM\ManyToOne(targetEntity="Travel\TravelBundle\Entity\Client")
    * @ORM\JoinColumn(nullable=false,onDelete="cascade")
    */
    private $client;

    /**
    * @ORM\ManyToOne(targetEntity="Travel\TravelBundle\Entity\Camion")
    * @ORM\JoinColumn(nullable=false)
    */
    private $camion;

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
     * Set transit
     *
     * @param string $transit
     *
     * @return Transport
     */
    public function setTransit($transit)
    {
        $this->transit = $transit;

        return $this;
    }

    /**
     * Get transit
     *
     * @return string
     */
    public function getTransit()
    {
        return $this->transit;
    }

    /**
     * Set comission
     *
     * @param string $comission
     *
     * @return Transport
     */
    public function setComission($comission)
    {
        $this->comission = $comission;

        return $this;
    }

    /**
     * Get comission
     *
     * @return string
     */
    public function getComission()
    {
        return $this->comission;
    }

    /**
     * Set dateTransport
     *
     * @param \DateTime $dateTransport
     *
     * @return Transport
     */
    public function setDateTransport($dateTransport)
    {
        $this->dateTransport = $dateTransport;

        return $this;
    }

    /**
     * Get dateTransport
     *
     * @return \DateTime
     */
    public function getDateTransport()
    {
        return $this->dateTransport;
    }

    /**
     * Set client
     *
     * @param \Travel\TravelBundle\Entity\Client $client
     *
     * @return Transport
     */
    public function setClient(\Travel\TravelBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Travel\TravelBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set camion
     *
     * @param \Travel\TravelBundle\Entity\Camion $camion
     *
     * @return Transport
     */
    public function setCamion(\Travel\TravelBundle\Entity\Camion $camion)
    {
        $this->camion = $camion;

        return $this;
    }

    /**
     * Get camion
     *
     * @return \Travel\TravelBundle\Entity\Camion
     */
    public function getCamion()
    {
        return $this->camion;
    }
}
