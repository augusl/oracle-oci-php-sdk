<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class InstanceShapeConfig extends DataTypes
{
    private $baselineOcpuUtilization;
    private $gpuDescription;
    private $gpus;
    private $localDiskDescription;
    private $localDisks;
    private $localDisksTotalSizeInGBs;
    private $maxVnicAttachments;
    private $memoryInGBs;
    private $networkingBandwidthInGbps;
    private $ocpus;
    private $processorDescription;
}
