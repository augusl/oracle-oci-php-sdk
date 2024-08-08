<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class LaunchInstanceShapeConfigDetails extends DataTypes
{

    private string $baselineOcpuUtilization;
    private $memoryInGBs;
    private $ocpus;


    public function setBaselineOcpuUtilization(string $baselineOcpuUtilization): LaunchInstanceShapeConfigDetails
    {
        $this->baselineOcpuUtilization = $baselineOcpuUtilization;
        return $this;
    }

    /**
     * @param mixed $memoryInGBs
     * @return LaunchInstanceShapeConfigDetails
     */
    public function setMemoryInGBs($memoryInGBs): LaunchInstanceShapeConfigDetails
    {
        $this->memoryInGBs = $memoryInGBs;
        return $this;
    }

    /**
     * @param mixed $ocpus
     * @return LaunchInstanceShapeConfigDetails
     */
    public function setOcpus($ocpus): LaunchInstanceShapeConfigDetails
    {
        $this->ocpus = $ocpus;
        return $this;
    }

    public function getBaselineOcpuUtilization(): string
    {
        return $this->baselineOcpuUtilization;
    }
    /**
     * @return mixed
     */
    public function getOcpus()
    {
        return $this->ocpus;
    }

    /**
     * @return mixed
     */
    public function getMemoryInGBs()
    {
        return $this->memoryInGBs;
    }
}

