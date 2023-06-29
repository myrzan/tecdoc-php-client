<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing GetVehiclesByVINDataSourceType
 *
 * 
 * XSD Type: getVehiclesByVINDataSource
 */
class GetVehiclesByVINDataSource
{

    /**
     * Data source key
     *
     * @var string $dataSourceKey
     */
    private $dataSourceKey = null;

    /**
     * Gets as dataSourceKey
     *
     * Data source key
     *
     * @return string
     */
    public function getDataSourceKey()
    {
        return $this->dataSourceKey;
    }

    /**
     * Sets a new dataSourceKey
     *
     * Data source key
     *
     * @param string $dataSourceKey
     * @return self
     */
    public function setDataSourceKey($dataSourceKey)
    {
        $this->dataSourceKey = $dataSourceKey;
        return $this;
    }


}

