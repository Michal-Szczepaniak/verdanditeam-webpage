<?php

namespace App\Controller;

use App\Entity\Device;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ApiController extends Controller
{
    /**
     * @Route("/api/device/{name}", name="device")
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
     * @Route("/api/device/list", name="api_list")
     * @Template()
     */
    public function list() {
        $devices = $this->getDoctrine()->getRepository(Device::class)->findAll();

        return new JsonResponse($devices);
    }
}
