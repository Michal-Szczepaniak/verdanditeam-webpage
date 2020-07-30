<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Device;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends Controller
{
    /**
     * @Route("/api/device/list", name="api_list")
     */
    public function list()
    {
        $devices = $this->getDoctrine()->
            getRepository(Device::class)->findAll();

        $devicesPrepared = $this->prepareDevicesList($devices);

        return new JsonResponse($devicesPrepared);
    }

    /**
     * @Route("/api/device/{name}", name="api_device")
     */
    public function device($name)
    {
        $device = $this->getDoctrine()->
        getRepository(Device::class)->
        findOneBy(['name' => $name]);

        $info = $this->getDeviceInfo($device);

        return new JsonResponse($info);
    }

    /**
     * @Route("/api/device/{name}/links", name="api_links")
     */
    public function links($name)
    {
        $device = $this->getDoctrine()->
            getRepository(Device::class)->
            findOneBy(['name' => $name]);

        $links = $this->getLinksFromDevice($device);

        return new JsonResponse($links);
    }

    /**
     * Create array with limited device properties
     *
     * @return array
     */
    private function prepareDevicesList(array $devices)
    {
        $devicesArray = [];

        /** @var Device $device */
        foreach ($devices as $device) {
            $devicesArray[] = [
                'codename' => $device->getName(),
                'name_pretty' => $device->getNamePretty(),
                'description' => $device->getDescription(),
                'description_long' => $device->getDescriptionLong(),
            ];
        }

        return $devicesArray;
    }

    /**
     * Get download links
     *
     * @param $device Device
     *
     * @return array
     */
    private function getLinksFromDevice($device)
    {
        $links = [
            'cm' => $device->getDownloadCm(),
            'sfos' => $device->getDownloadSFOS(),
            'logo' => $device->getDownloadLogo(),
        ];

        return $links;
    }

    /**
     * Get device info
     *
     * @param $device Device
     *
     * @return array
     */
    private function getDeviceInfo($device)
    {
        $info = [
            'sfos_version' => $device->getSfosVersion(),
            'has_ota' => $device->getHasOta(),
            'has_logo' => $device->getDownloadLogo() !== null,
        ];

        return $info;
    }
}
