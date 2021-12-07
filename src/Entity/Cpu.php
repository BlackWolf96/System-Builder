<?php

namespace App\Entity;

use App\Repository\CpuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CpuRepository::class)
 */
class Cpu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $producer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socket;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $oc;

    /**
     * @ORM\Column(type="integer")
     */
    private $vcores;

    /**
     * @ORM\Column(type="integer")
     */
    private $tdp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProducer(): ?string
    {
        return $this->producer;
    }

    public function setProducer(string $producer): self
    {
        $this->producer = $producer;

        return $this;
    }

    public function getSocket(): ?string
    {
        return $this->socket;
    }

    public function setSocket(string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getOc(): ?string
    {
        return $this->oc;
    }

    public function setOc(string $oc): self
    {
        $this->oc = $oc;

        return $this;
    }

    public function getVcores(): ?int
    {
        return $this->vcores;
    }

    public function setVcores(int $vcores): self
    {
        $this->vcores = $vcores;

        return $this;
    }

    public function getTdp(): ?int
    {
        return $this->tdp;
    }

    public function setTdp(int $tdp): self
    {
        $this->tdp = $tdp;

        return $this;
    }
}
