<?php

namespace Application\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\EntityRepository\Device")
 *
 * Class Device
 * @package Application\Entity
 */
class Device extends AbstractDevice
{
    /**
     * Device name
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    protected $name;

    /**
     * DeviceStatus
     * @var DeviceStatus
     *
     * @ORM\Column(name="statusId", type="integer")
     * @ORM\ManyToOne(targetEntity="\Application\Entity\DeviceStatus", fetch="LAZY")
     */
    protected $status;

    /**
     * Device banks
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Application\Entity\Bank", fetch="LAZY", cascade={"persist"}, mappedBy="device")
     */
    protected $banks;

    /**
     * Device Ip address
     * @var string
     *
     * @ORM\Column(name="ip", type="string", nullable=false)
     */
    protected $ip;

    /**
     * Device port
     * @var string
     *
     * @ORM\Column(name="port", type="string", nullable=false)
     */
    protected $port;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Device
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return DeviceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param DeviceStatus $status
     * @return Device
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getBanks()
    {
        return $this->banks;
    }

    /**
     * @param ArrayCollection $banks
     * @return Device
     */
    public function setBanks($banks)
    {
        $this->banks = $banks;
        return $this;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $port
     * @return Device
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return Device
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }
}
