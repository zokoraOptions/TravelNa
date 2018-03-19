<?php

namespace Travel\TravelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Camion
 *
 * @ORM\Table(name="camion")
 * @ORM\Entity(repositoryClass="Travel\TravelBundle\Repository\CamionRepository")
 */
class Camion
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
     * @ORM\Column(name="plaque_immatriculation", type="string", length=255)
     */
    private $plaqueImmatriculation;

    /**
     * @var bool
     *
     * @ORM\Column(name="tierce", type="boolean")
     */
    private $tierce;

    /**
    * @ORM\ManyToOne(targetEntity="Travel\TravelBundle\Entity\Conducteur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $conducteur;

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
     * Set plaqueImmatriculation
     *
     * @param string $plaqueImmatriculation
     *
     * @return Camion
     */
    public function setPlaqueImmatriculation($plaqueImmatriculation)
    {
        $this->plaqueImmatriculation = $plaqueImmatriculation;

        return $this;
    }

    /**
     * Get plaqueImmatriculation
     *
     * @return string
     */
    public function getPlaqueImmatriculation()
    {
        return $this->plaqueImmatriculation;
    }

    /**
     * Set tierce
     *
     * @param boolean $tierce
     *
     * @return Camion
     */
    public function setTierce($tierce)
    {
        $this->tierce = $tierce;

        return $this;
    }

    /**
     * Get tierce
     *
     * @return bool
     */
    public function getTierce()
    {
        return $this->tierce;
    }

    /**
     * Set conducteur
     *
     * @param \Travel\TravelBundle\Entity\Conducteur $conducteur
     *
     * @return Camion
     */
    public function setConducteur(\Travel\TravelBundle\Entity\Conducteur $conducteur)
    {
        $this->conducteur = $conducteur;

        return $this;
    }

    /**
     * Get conducteur
     *
     * @return \Travel\TravelBundle\Entity\Conducteur
     */
    public function getConducteur()
    {
        return $this->conducteur;
    }

    public function __toString()
    {
        return $this->plaqueImmatriculation;
    }
}
