<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Device;
use App\Entity\DeviceName;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends Controller
{
    /**
     * @Route("/api/device/list", name="api_list")
     */
    public function list(): JsonResponse
    {
        $devices = $this->getDoctrine()->
            getRepository(Device::class)->findAll();

        $devicesPrepared = $this->prepareDevicesList($devices);

        return new JsonResponse($devicesPrepared);
    }

    /**
     * @Route("/api/device/{name}", name="api_device")
     */
    public function device($name): JsonResponse
    {
        $device = $this->getDoctrine()->
        getRepository(Device::class)->
        findOneByName($name);

        $info = $this->getDeviceInfo($device);

        return new JsonResponse($info);
    }

    /**
     * @Route("/api/device/{name}/links", name="api_links")
     */
    public function links($name): JsonResponse
    {
        $device = $this->getDoctrine()->
            getRepository(Device::class)->
            findOneBy(['name' => $name]);

        $links = $this->getLinksFromDevice($device);

        return new JsonResponse($links);
    }

    private function prepareDevicesList(array $devices): array
    {
        $devicesArray = [];

        /** @var Device $device */
        foreach ($devices as $device) {
            $devicesArray[] = [
                'codenames' => $device->getNames()->map(fn (DeviceName $name) => $name->getName())->toArray(),
                'name_pretty' => $device->getNamePretty(),
                'description' => $device->getDescription(),
                'description_long' => $device->getDescriptionLong(),
            ];
        }

        return $devicesArray;
    }

    private function getLinksFromDevice($device): array
    {
        return [
            'cm' => $device->getDownloadCm(),
            'sfos' => $device->getDownloadSFOS(),
            'logo' => $device->getDownloadLogo(),
        ];
    }

    private function getDeviceInfo($device): array
    {
        return [
            'sfos_version' => $device->getSfosVersion(),
            'has_ota' => $device->getHasOta(),
            'has_logo' => $device->getDownloadLogo() !== null,
        ];
    }
}
