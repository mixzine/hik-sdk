<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class ResourceParam
{
    public static $resource = [
        'getResourcesByParams' => [
            'name' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'regionIndexCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'isSubRegion' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'resourceType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    'region',
                    'org',
                    'acsDevice',
                    'door',
                    'reader',
                    'encodeDevice',
                    'camera',
                    'ioIn',
                    'ioOut',
                    'iasDevice',
                    'subSys',
                    'defence',
                    'visDeviceInDoor',
                    'visDeviceOutDoor',
                    'visDeviceWallDoor',
                    'visDeviceManager',
                    'ecsDevice',
                    'ladderCardReader',
                    'floor',
                    'pemsIoOut',
                    'transducer',
                    'sensor',
                ],
            ],
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'authCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'capabilitySet' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'orderBy' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'orderType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    'desc',
                    'asc',
                ],
            ],
            'expressions' => [
                'default' => '',
                'required' => false,
                'value' => [
                    [
                        'key' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                        ],
                        'operator' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                            'enum' => [
                                0,
                                1,
                                2,
                                3,
                                4,
                                5,
                                6,
                                7,
                                8,
                            ],
                        ],
                        'values' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                        ],
                    ],
                ],
            ],
        ],
        'getSubResources' => [
            'regionIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'authCodes' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'resourceType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'region',
                    'org',
                    'acsDevice',
                    'door',
                    'reader',
                    'encodeDevice',
                    'camera',
                    'ioIn',
                    'ioOut',
                    'iasDevice',
                    'subSys',
                    'defence',
                    'visDeviceInDoor',
                    'visDeviceOutDoor',
                    'visDeviceWallDoor',
                    'visDeviceManager',
                    'ecsDevice',
                    'ladderCardReader',
                    'floor',
                    'pemsIoOut',
                    'transducer',
                    'sensor',
                ],
            ],
        ],
        'getResources' => [
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'resourceType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'region',
                    'org',
                    'acsDevice',
                    'door',
                    'reader',
                    'encodeDevice',
                    'camera',
                    'ioIn',
                    'ioOut',
                    'iasDevice',
                    'subSys',
                    'defence',
                    'visDeviceInDoor',
                    'visDeviceOutDoor',
                    'visDeviceWallDoor',
                    'visDeviceManager',
                    'ecsDevice',
                    'ladderCardReader',
                    'floor',
                    'pemsIoOut',
                    'transducer',
                    'sensor',
                ],
            ],
        ],
        'getResourcesByTimeRange' => [
            'startTime' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'endTime' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'resourceType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'region',
                    'org',
                    'acsDevice',
                    'door',
                    'reader',
                    'encodeDevice',
                    'camera',
                    'ioIn',
                    'ioOut',
                    'iasDevice',
                    'subSys',
                    'defence',
                    'visDeviceInDoor',
                    'visDeviceOutDoor',
                    'visDeviceWallDoor',
                    'visDeviceManager',
                    'ecsDevice',
                    'ladderCardReader',
                    'floor',
                    'pemsIoOut',
                    'transducer',
                    'sensor',
                ],
            ],
        ],
        'getResourceInfo' => [
            'resourceType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'region',
                    'org',
                    'acsDevice',
                    'door',
                    'reader',
                    'encodeDevice',
                    'camera',
                    'ioIn',
                    'ioOut',
                    'iasDevice',
                    'subSys',
                    'defence',
                    'visDeviceInDoor',
                    'visDeviceOutDoor',
                    'visDeviceWallDoor',
                    'visDeviceManager',
                    'ecsDevice',
                    'ladderCardReader',
                    'floor',
                    'pemsIoOut',
                    'transducer',
                    'sensor',
                ],
            ],
            'resourceIndexCodes' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
