<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeviceRepository")
 */
class Device
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /** @ORM\Column(type="string", length=255) */
    private $name;

    /** @ORM\Column(type="integer") */
    private $order;

    /** @ORM\Column(type="string", length=255) */
    private $sfosVersion;

    /** @ORM\Column(type="boolean") */
    private $hasOta;

    /** @ORM\Column(type="text") */
    private $xdaLink;

    /** @ORM\Column(type="text") */
    private $brokenList;

    /** @ORM\Column(type="string", length=255) */
    private $name_pretty;

    /** @ORM\Column(type="text") */
    private $description;

    /** @ORM\Column(type="text") */
    private $descriptionLong;

    /** @ORM\Column(type="text") */
    private $workingList;

    /** @ORM\Column(type="text") */
    private $installDescription;

    /** @ORM\Column(type="text") */
    private $downloadCm;

    /** @ORM\Column(type="text") */
    private $downloadSFOS;

    /** @ORM\Column(type="text", nullable=true) */
    private $downloadLogo;

    /** @ORM\Column(type="text") */
    private $installPreparations;

    /** @ORM\Column(type="text") */
    private $installInstructions;

    /** @ORM\Column(type="text", nullable=true) */
    private $otaDescription;

    /** @ORM\Column(type="text", nullable=true) */
    private $otaInstructions;

    public function getId()
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
        return json_decode($this->brokenList, true);
    }

    public function setBrokenList(string $brokenList): self
    {
        $this->brokenList = $brokenList;

        return $this;
    }

    public function getNamePretty(): ?string
    {
        return $this->name_pretty;
    }

    public function setNamePretty(string $name_pretty): self
    {
        $this->name_pretty = $name_pretty;

        return $this;
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
        return json_decode($this->workingList, true);
    }

    public function setWorkingList(string $workingList): self
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
        return json_decode($this->downloadCm, true);
    }

    public function setDownloadCm(string $downloadCm): self
    {
        $this->downloadCm = $downloadCm;

        return $this;
    }

    public function getDownloadSFOS(): ?array
    {
        return json_decode($this->downloadSFOS, true);
    }

    public function setDownloadSFOS(string $downloadSFOS): self
    {
        $this->downloadSFOS = $downloadSFOS;

        return $this;
    }

    public function getDownloadLogo(): ?string
    {
        return $this->downloadLogo;
    }

    public function setDownloadLogo(string $downloadLogo): self
    {
        $this->downloadLogo = $downloadLogo;

        return $this;
    }

    public function getInstallPreparations(): ?array
    {
        return json_decode($this->installPreparations, true);
    }

    public function setInstallPreparations(string $installPreparations): self
    {
        $this->installPreparations = $installPreparations;

        return $this;
    }

    public function getInstallInstructions(): ?array
    {
        return json_decode($this->installInstructions, true);
    }

    public function setInstallInstructions(string $installInstructions): self
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
        return json_decode($this->otaInstructions, true);
    }

    public function setOtaInstructions(?string $otaInstructions): self
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
