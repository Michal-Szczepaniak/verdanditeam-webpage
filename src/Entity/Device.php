<?php

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

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sfos_version;

    /**
     * @ORM\Column(type="boolean")
     */
    private $have_ota;

    /**
     * @ORM\Column(type="text")
     */
    private $xda_link;

    /**
     * @ORM\Column(type="text")
     */
    private $broken_list;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_pretty;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $working_list;

    /**
     * @ORM\Column(type="text")
     */
    private $install_description;

    /**
     * @ORM\Column(type="text")
     */
    private $download_cm;

    /**
     * @ORM\Column(type="text")
     */
    private $download_sfos;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $download_logo;

    /**
     * @ORM\Column(type="text")
     */
    private $install_preparations;

    /**
     * @ORM\Column(type="text")
     */
    private $install_instructions;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ota_description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ota_instructions;

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
        return $this->sfos_version;
    }

    public function setSfosVersion(string $sfos_version): self
    {
        $this->sfos_version = $sfos_version;

        return $this;
    }

    public function getHaveOta(): ?bool
    {
        return $this->have_ota;
    }

    public function setHaveOta(bool $have_ota): self
    {
        $this->have_ota = $have_ota;

        return $this;
    }

    public function getXdaLink(): ?string
    {
        return $this->xda_link;
    }

    public function setXdaLink(string $xda_link): self
    {
        $this->xda_link = $xda_link;

        return $this;
    }

    public function getBrokenList(): ?array
    {
        return json_decode($this->broken_list,true);
    }

    public function setBrokenList(string $broken_list): self
    {
        $this->broken_list = $broken_list;

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

    public function getWorkingList(): ?array
    {
        return json_decode($this->working_list,true);
    }

    public function setWorkingList(string $working_list): self
    {
        $this->working_list = $working_list;

        return $this;
    }

    public function getInstallDescription(): ?string
    {
        return $this->install_description;
    }

    public function setInstallDescription(string $install_description): self
    {
        $this->install_description = $install_description;

        return $this;
    }

    public function getDownloadCm(): ?array
    {
        return json_decode($this->download_cm,true);
    }

    public function setDownloadCm(string $download_cm): self
    {
        $this->download_cm = $download_cm;

        return $this;
    }

    public function getDownloadSfos(): ?array
    {
        return json_decode($this->download_sfos,true);
    }

    public function setDownloadSfos(string $download_sfos): self
    {
        $this->download_sfos = $download_sfos;

        return $this;
    }

    public function getDownloadLogo(): ?string
    {
        return $this->download_logo;
    }

    public function setDownloadLogo(string $download_logo): self
    {
        $this->download_logo = $download_logo;

        return $this;
    }

    public function getInstallPreparations(): ?array
    {
        return json_decode($this->install_preparations,true);
    }

    public function setInstallPreparations(string $install_preparations): self
    {
        $this->install_preparations = $install_preparations;

        return $this;
    }

    public function getInstallInstructions(): ?array
    {
        return json_decode($this->install_instructions,true);
    }

    public function setInstallInstructions(string $install_instructions): self
    {
        $this->install_instructions = $install_instructions;

        return $this;
    }

    public function getOtaDescription(): ?string
    {
        return $this->ota_description;
    }

    public function setOtaDescription(?string $ota_description): self
    {
        $this->ota_description = $ota_description;

        return $this;
    }

    public function getOtaInstructions(): ?array
    {
        return json_decode($this->ota_instructions, true);
    }

    public function setOtaInstructions(?string $ota_instructions): self
    {
        $this->ota_instructions = $ota_instructions;

        return $this;
    }
}
