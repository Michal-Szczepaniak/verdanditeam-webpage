<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class DeviceName
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $name;

    #[ORM\Column(type: "string", length: 255)]
    private string $namePretty;

    #[ORM\ManyToOne(targetEntity: "App\Entity\Device", cascade: ["all"], fetch: "EAGER")]
    private Device $device;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNamePretty(): ?string
    {
        return $this->namePretty;
    }

    public function setNamePretty(?string $namePretty): void
    {
        $this->namePretty = $namePretty;
    }

    public function getDevice(): Device
    {
        return $this->device;
    }

    public function setDevice(Device $device): void
    {
        $this->device = $device;
    }
}
