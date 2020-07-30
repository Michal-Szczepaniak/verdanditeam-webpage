<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Device;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DeviceController extends Controller
{
    /**
     * @Route("/device/list", name="list")
     * @Template()
     */
    public function list()
    {
        $devices = $this->getDoctrine()->getRepository(Device::class)->findAllByOrder();

        return ['devices' => $devices];
    }

    /**
     * @Route("/device/{name}", name="device")
     * @Template()
     */
    public function index($name)
    {
        $device = $this->getDoctrine()->
            getRepository(Device::class)->
            findOneBy(['name' => $name]);

        return ['device' => $device];
    }
}
