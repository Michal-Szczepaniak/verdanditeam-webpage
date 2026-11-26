<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: "App\Repository\DeviceRepository")]
class Device
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\OneToMany(
        mappedBy: "device",
        targetEntity: "App\Entity\DeviceName",
        cascade: ["persist", "remove"],
        orphanRemoval: true)
    ]
    private Collection $names;

    #[ORM\Column(type: "integer")]
    private ?int $order = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $sfosVersion = null;

    #[ORM\Column(type: "boolean")]
    private ?bool $hasOta = null;

    #[ORM\Column(type: "text")]
    private ?string $xdaLink = null;

    #[ORM\Column(type: "json")]
    private ?array $brokenList = null;

    #[ORM\Column(type: "text")]
    private ?string $author = null;

    #[ORM\Column(type: "text")]
    private ?string $authorEmail = null;

    #[ORM\Column(type: "text")]
    private ?string $description = null;

    #[ORM\Column(type: "text")]
    private ?string $descriptionLong = null;

    #[ORM\Column(type: "json")]
    private ?array $workingList = null;

    #[ORM\Column(type: "text")]
    private ?string $installDescription = null;

    #[ORM\Column(type: "json")]
    private ?array $downloadCm = null;

    #[ORM\Column(type: "json")]
    private ?array $downloadSFOS = null;

    #[ORM\Column(type: "json", nullable: true)]
    private ?array $downloadLogo = null;

    #[ORM\Column(type: "json")]
    private ?array $installPreparations = null;

    #[ORM\Column(type: "json")]
    private ?array $installInstructions = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $otaDescription = null;

    #[ORM\Column(type: "json", nullable: true)]
    private ?array $otaInstructions = null;

    public function __construct()
    {
        $this->names = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNames(): Collection
    {
        return $this->names;
    }

    public function addName(string $name): self
    {
        if (!$this->hasName($name)) {
            $this->names->add($name);
        }

        return $this;
    }

    public function removeName(string $name): self
    {
        if ($this->hasName($name)) {
            $this->names->removeElement($name);
        }
    }

    public function hasName(string $name): bool
    {
        return $this->names->contains($name);
    }

    public function getSfosVersion(): ?string
    {
        return $this->sfosVersion;
    }

    public function setSfosVersion(string $sfosVersion): self
    {
        $this->sfosVersion = $sfosVersion;

        return $this;
    }

    public function getHasOta(): ?bool
    {
        return $this->hasOta;
    }

    public function setHasOta(bool $hasOta): self
    {
        $this->hasOta = $hasOta;

        return $this;
    }

    public function getXdaLink(): ?string
    {
        return $this->xdaLink;
    }

    public function setXdaLink(string $xdaLink): self
    {
        $this->xdaLink = $xdaLink;

        return $this;
    }

    public function getBrokenList(): ?array
    {
        return $this->brokenList;
    }

    public function setBrokenList(?array $brokenList): self
    {
        $this->brokenList = $brokenList;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    public function getAuthorEmail(): ?string
    {
        return $this->authorEmail;
    }

    public function setAuthorEmail(?string $authorEmail): void
    {
        $this->authorEmail = $authorEmail;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionLong(): ?string
    {
        return $this->descriptionLong;
    }

    public function setDescriptionLong(string $descriptionLong): self
    {
        $this->descriptionLong = $descriptionLong;

        return $this;
    }

    public function getWorkingList(): ?array
    {
        return $this->workingList;
    }

    public function setWorkingList(?array $workingList): self
    {
        $this->workingList = $workingList;

        return $this;
    }

    public function getInstallDescription(): ?string
    {
        return $this->installDescription;
    }

    public function setInstallDescription(string $installDescription): self
    {
        $this->installDescription = $installDescription;

        return $this;
    }

    public function getDownloadCm(): ?array
    {
        return $this->downloadCm;
    }

    public function setDownloadCm(?array $downloadCm): self
    {
        $this->downloadCm = $downloadCm;

        return $this;
    }

    public function getDownloadSFOS(): ?array
    {
        return $this->downloadSFOS;
    }

    public function setDownloadSFOS(?array $downloadSFOS): self
    {
        $this->downloadSFOS = $downloadSFOS;

        return $this;
    }

    public function getDownloadLogo(): ?array
    {
        return $this->downloadLogo;
    }

    public function setDownloadLogo(array $downloadLogo): self
    {
        $this->downloadLogo = $downloadLogo;

        return $this;
    }

    public function getInstallPreparations(): ?array
    {
        return $this->installPreparations;
    }

    public function setInstallPreparations(?array $installPreparations): self
    {
        $this->installPreparations = $installPreparations;

        return $this;
    }

    public function getInstallInstructions(): ?array
    {
        return $this->installInstructions;
    }

    public function setInstallInstructions(?array $installInstructions): self
    {
        $this->installInstructions = $installInstructions;

        return $this;
    }

    public function getOtaDescription(): ?string
    {
        return $this->otaDescription;
    }

    public function setOtaDescription(?string $otaDescription): self
    {
        $this->otaDescription = $otaDescription;

        return $this;
    }

    public function getOtaInstructions(): ?array
    {
        return $this->otaInstructions;
    }

    public function setOtaInstructions(?array $otaInstructions): self
    {
        $this->otaInstructions = $otaInstructions;

        return $this;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): void
    {
        $this->order = $order;
    }
}
