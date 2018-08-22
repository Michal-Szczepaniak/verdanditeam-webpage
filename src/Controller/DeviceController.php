<?php

namespace App\Controller;

use App\Entity\Device;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DeviceController extends Controller
{
    /**
     * @Route("/device/{name}", name="device")
     * @Template()
     */
    public function index($name)
    {
        $device = $this->getDoctrine()->
            getRepository(Device::class)->
            findOneBy(['name' => $name]);

        return array('device' => $device);
    }

    /**
     * @Route("/device/list/", name="list")
     * @Template()
     */
    public function list() {
        $devices = $this->getDoctrine()->getRepository(Device::class)->findAll();

        return array('devices' => $devices);
    }
}
