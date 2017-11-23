<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioCategiria
 *
 * @ORM\Table(name="usuario_categiria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioCategiriaRepository")
 */
class UsuarioCategiria
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
     * @var int
     *
     * @ORM\Column(name="usuarioId", type="integer")
     */
    private $usuarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="categoriaId", type="integer")
     */
    private $categoriaId;

    /**
     * @var string
     *
     * @ORM\Column(name="CategoriaTicket", type="string", length=255)
     */
    private $categoriaTicket;


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
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return UsuarioCategiria
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     *
     * @return UsuarioCategiria
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return int
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set categoriaTicket
     *
     * @param string $categoriaTicket
     *
     * @return UsuarioCategiria
     */
    public function setCategoriaTicket($categoriaTicket)
    {
        $this->categoriaTicket = $categoriaTicket;

        return $this;
    }

    /**
     * Get categoriaTicket
     *
     * @return string
     */
    public function getCategoriaTicket()
    {
        return $this->categoriaTicket;
    }
}

