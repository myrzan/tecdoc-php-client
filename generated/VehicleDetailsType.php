<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VehicleDetailsType
 *
 * 
 * XSD Type: vehicleDetails
 */
class VehicleDetailsType extends VehicleDetailsSrcType
{

    /**
     * @var string $abiCode
     */
    private $abiCode = null;

    /**
     * @var string $aisCarCode
     */
    private $aisCarCode = null;

    /**
     * @var int $aisInfo
     */
    private $aisInfo = null;

    /**
     * @var string $aisProductionDate
     */
    private $aisProductionDate = null;

    /**
     * @var string $aisVehicleType
     */
    private $aisVehicleType = null;

    /**
     * @var int $approvalnumber
     */
    private $approvalnumber = null;

    /**
     * @var int $artKodeDK
     */
    private $artKodeDK = null;

    /**
     * @var int $assetRefNr
     */
    private $assetRefNr = null;

    /**
     * @var string $awd
     */
    private $awd = null;

    /**
     * @var string $axleCode
     */
    private $axleCode = null;

    /**
     * @var string $axleCount
     */
    private $axleCount = null;

    /**
     * @var string $bodyCode
     */
    private $bodyCode = null;

    /**
     * @var string $bodyName
     */
    private $bodyName = null;

    /**
     * @var string $bodyStyle
     */
    private $bodyStyle = null;

    /**
     * @var string $bodyTypeOfRegistrationCard
     */
    private $bodyTypeOfRegistrationCard = null;

    /**
     * @var string $bodyTypeOfVehicle
     */
    private $bodyTypeOfVehicle = null;

    /**
     * @var int $carDKType
     */
    private $carDKType = null;

    /**
     * @var string $carName
     */
    private $carName = null;

    /**
     * @var int $carType
     */
    private $carType = null;

    /**
     * @var string $chassisDetails
     */
    private $chassisDetails = null;

    /**
     * @var string $chassisNumber
     */
    private $chassisNumber = null;

    /**
     * @var int $co2Rating
     */
    private $co2Rating = null;

    /**
     * @var string $colour
     */
    private $colour = null;

    /**
     * @var string $colourCode
     */
    private $colourCode = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $cylinders
     */
    private $cylinders = null;

    /**
     * @var string $dVLABodyPlanCode
     */
    private $dVLABodyPlanCode = null;

    /**
     * @var string $dVLABodyPlanDescription
     */
    private $dVLABodyPlanDescription = null;

    /**
     * @var string $dataSource
     */
    private $dataSource = null;

    /**
     * @var string $dateOfEndOfSales
     */
    private $dateOfEndOfSales = null;

    /**
     * @var string $dateOfFirstRegistraionInAbroad
     */
    private $dateOfFirstRegistraionInAbroad = null;

    /**
     * @var string $dateOfFirstRegistraionInItaly
     */
    private $dateOfFirstRegistraionInItaly = null;

    /**
     * @var string $dateOfFirstRegistration
     */
    private $dateOfFirstRegistration = null;

    /**
     * @var string $dateOfLastLawInspecition
     */
    private $dateOfLastLawInspecition = null;

    /**
     * @var string $dateOfLatestApproval
     */
    private $dateOfLatestApproval = null;

    /**
     * @var string $dateOfLatestRegistration
     */
    private $dateOfLatestRegistration = null;

    /**
     * @var string $dateOfMiscData
     */
    private $dateOfMiscData = null;

    /**
     * @var string $dateOfNextInspection
     */
    private $dateOfNextInspection = null;

    /**
     * @var string $dateOfRegistration
     */
    private $dateOfRegistration = null;

    /**
     * @var string $dateOfStartOfSales
     */
    private $dateOfStartOfSales = null;

    /**
     * @var string $dateOfUnregistration
     */
    private $dateOfUnregistration = null;

    /**
     * @var string $depollution
     */
    private $depollution = null;

    /**
     * @var string $displacement
     */
    private $displacement = null;

    /**
     * @var string $doorPlan
     */
    private $doorPlan = null;

    /**
     * @var string $driveType
     */
    private $driveType = null;

    /**
     * @var string $emission
     */
    private $emission = null;

    /**
     * @var string $emissions
     */
    private $emissions = null;

    /**
     * @var string $empat
     */
    private $empat = null;

    /**
     * @var string $energy
     */
    private $energy = null;

    /**
     * @var string $engineCapacity
     */
    private $engineCapacity = null;

    /**
     * @var string $engineCode
     */
    private $engineCode = null;

    /**
     * @var string[] $engineCodes
     */
    private $engineCodes = [
        
    ];

    /**
     * @var string $engineCoolingType
     */
    private $engineCoolingType = null;

    /**
     * @var string $engineNumber
     */
    private $engineNumber = null;

    /**
     * @var string $engineOutputInHP
     */
    private $engineOutputInHP = null;

    /**
     * @var string $engineOutputInTaxationHP
     */
    private $engineOutputInTaxationHP = null;

    /**
     * @var string $enginePower
     */
    private $enginePower = null;

    /**
     * @var int $engineSize
     */
    private $engineSize = null;

    /**
     * @var string $engineVolume
     */
    private $engineVolume = null;

    /**
     * @var string $enquiryNumber
     */
    private $enquiryNumber = null;

    /**
     * @var string $euTypeNumber
     */
    private $euTypeNumber = null;

    /**
     * @var string $euroEmissionsStandard
     */
    private $euroEmissionsStandard = null;

    /**
     * @var string $exportDate
     */
    private $exportDate = null;

    /**
     * @var string $firstCharacterInDanish
     */
    private $firstCharacterInDanish = null;

    /**
     * @var string $firstUsingDate
     */
    private $firstUsingDate = null;

    /**
     * @var string $frontTyre
     */
    private $frontTyre = null;

    /**
     * @var string $frontTyreDimension
     */
    private $frontTyreDimension = null;

    /**
     * @var int $frontWheelSpacing
     */
    private $frontWheelSpacing = null;

    /**
     * @var string $fuel
     */
    private $fuel = null;

    /**
     * @var string $fuelCode
     */
    private $fuelCode = null;

    /**
     * @var string $fuelCode2
     */
    private $fuelCode2 = null;

    /**
     * @var int $fuelType
     */
    private $fuelType = null;

    /**
     * @var string $gearBoxType
     */
    private $gearBoxType = null;

    /**
     * @var string $gearbox
     */
    private $gearbox = null;

    /**
     * @var string $groupCode
     */
    private $groupCode = null;

    /**
     * @var string $guaranteeLevel
     */
    private $guaranteeLevel = null;

    /**
     * @var string $importDateNi
     */
    private $importDateNi = null;

    /**
     * @var string $importFlag
     */
    private $importFlag = null;

    /**
     * @var string $importMarkerNi
     */
    private $importMarkerNi = null;

    /**
     * @var string $importVrmNi
     */
    private $importVrmNi = null;

    /**
     * @var string $imported
     */
    private $imported = null;

    /**
     * @var string $injectionType
     */
    private $injectionType = null;

    /**
     * @var int $inspectionRateCode
     */
    private $inspectionRateCode = null;

    /**
     * @var string $inspectionRateCodeDescription
     */
    private $inspectionRateCodeDescription = null;

    /**
     * @var string $isVehicleRegisteredAbroad
     */
    private $isVehicleRegisteredAbroad = null;

    /**
     * @var string $kTypeDataMatchLevel
     */
    private $kTypeDataMatchLevel = null;

    /**
     * @var string $kTypeDataStatus
     */
    private $kTypeDataStatus = null;

    /**
     * @var int[] $kTypeNumbers
     */
    private $kTypeNumbers = [
        
    ];

    /**
     * @var string $keepers
     */
    private $keepers = null;

    /**
     * @var string $kerbWeight
     */
    private $kerbWeight = null;

    /**
     * @var int $kid
     */
    private $kid = null;

    /**
     * @var string $kindOfVehicle
     */
    private $kindOfVehicle = null;

    /**
     * @var string $kindOfVehicleCG
     */
    private $kindOfVehicleCG = null;

    /**
     * @var string $kprChange
     */
    private $kprChange = null;

    /**
     * @var string $kw1
     */
    private $kw1 = null;

    /**
     * @var string $kw2
     */
    private $kw2 = null;

    /**
     * @var string $kw3
     */
    private $kw3 = null;

    /**
     * @var string $lastInspectionDate
     */
    private $lastInspectionDate = null;

    /**
     * @var string $lastPreviousColourCode
     */
    private $lastPreviousColourCode = null;

    /**
     * @var string $lastPreviousColourCodeDesc
     */
    private $lastPreviousColourCodeDesc = null;

    /**
     * @var string $lastRegistrationCardDate
     */
    private $lastRegistrationCardDate = null;

    /**
     * @var string $length
     */
    private $length = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * @var string $makeCode
     */
    private $makeCode = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $manufacturerCode
     */
    private $manufacturerCode = null;

    /**
     * @var string $manufacturingDate
     */
    private $manufacturingDate = null;

    /**
     * @var string $mark
     */
    private $mark = null;

    /**
     * @var int $massInService
     */
    private $massInService = null;

    /**
     * @var string $maxLast
     */
    private $maxLast = null;

    /**
     * @var string $maxSpeed
     */
    private $maxSpeed = null;

    /**
     * @var int $maximumNetPower
     */
    private $maximumNetPower = null;

    /**
     * @var int $maximumTechnicalMass
     */
    private $maximumTechnicalMass = null;

    /**
     * @var int $maximumTrailerBraked
     */
    private $maximumTrailerBraked = null;

    /**
     * @var int $maximumTrailerUnbraked
     */
    private $maximumTrailerUnbraked = null;

    /**
     * @var string $mfrYear
     */
    private $mfrYear = null;

    /**
     * @var string $model
     */
    private $model = null;

    /**
     * @var string $modelCode
     */
    private $modelCode = null;

    /**
     * @var int $modelId
     */
    private $modelId = null;

    /**
     * @var string $modelManufacturedFrom
     */
    private $modelManufacturedFrom = null;

    /**
     * @var string $modelManufacturedTo
     */
    private $modelManufacturedTo = null;

    /**
     * @var int $modelYear
     */
    private $modelYear = null;

    /**
     * @var string $modelYearString
     */
    private $modelYearString = null;

    /**
     * @var string $mvrisModelVariantCode
     */
    private $mvrisModelVariantCode = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $nettoWeight
     */
    private $nettoWeight = null;

    /**
     * @var int $numberOfCylinders
     */
    private $numberOfCylinders = null;

    /**
     * @var int $numberOfEngineValves
     */
    private $numberOfEngineValves = null;

    /**
     * @var int $numberOfGear
     */
    private $numberOfGear = null;

    /**
     * @var string $numberOfPreviousColours
     */
    private $numberOfPreviousColours = null;

    /**
     * @var int $numberOfSeat
     */
    private $numberOfSeat = null;

    /**
     * @var int $numberOfVolumes
     */
    private $numberOfVolumes = null;

    /**
     * @var string $originalColourCode
     */
    private $originalColourCode = null;

    /**
     * @var string $originalColourDesc
     */
    private $originalColourDesc = null;

    /**
     * @var string $placementOfTypePlate
     */
    private $placementOfTypePlate = null;

    /**
     * @var string $plant
     */
    private $plant = null;

    /**
     * @var int $power
     */
    private $power = null;

    /**
     * @var string $powerSupplyType
     */
    private $powerSupplyType = null;

    /**
     * @var string $powerUnit
     */
    private $powerUnit = null;

    /**
     * @var int $powerWeightRatio
     */
    private $powerWeightRatio = null;

    /**
     * @var string $prevColour
     */
    private $prevColour = null;

    /**
     * @var string $prevColourCode
     */
    private $prevColourCode = null;

    /**
     * @var string $prevColourDate
     */
    private $prevColourDate = null;

    /**
     * @var string $previousKeeperAcquisitionDate
     */
    private $previousKeeperAcquisitionDate = null;

    /**
     * @var string $previousKeeperDisposalDate
     */
    private $previousKeeperDisposalDate = null;

    /**
     * @var string $productCode
     */
    private $productCode = null;

    /**
     * @var int $prt
     */
    private $prt = null;

    /**
     * @var string $rearTyre
     */
    private $rearTyre = null;

    /**
     * @var string $rearTyreDimension
     */
    private $rearTyreDimension = null;

    /**
     * @var int $rearWheelSpacing
     */
    private $rearWheelSpacing = null;

    /**
     * @var string $recordStatus
     */
    private $recordStatus = null;

    /**
     * @var string $registrationDate
     */
    private $registrationDate = null;

    /**
     * @var string $registrationDateString
     */
    private $registrationDateString = null;

    /**
     * @var string $registrationNumber
     */
    private $registrationNumber = null;

    /**
     * @var string $scrapDate
     */
    private $scrapDate = null;

    /**
     * @var int $seatCapacity
     */
    private $seatCapacity = null;

    /**
     * @var int $smmtDoorPlanCode
     */
    private $smmtDoorPlanCode = null;

    /**
     * @var int $smmtDoorPlanDescription
     */
    private $smmtDoorPlanDescription = null;

    /**
     * @var string $smmtMake
     */
    private $smmtMake = null;

    /**
     * @var string $smmtMakeDesc
     */
    private $smmtMakeDesc = null;

    /**
     * @var string $smmtMarketSector
     */
    private $smmtMarketSector = null;

    /**
     * @var string $smmtModel
     */
    private $smmtModel = null;

    /**
     * @var string $smmtModelDesc
     */
    private $smmtModelDesc = null;

    /**
     * @var string $smmtTrim
     */
    private $smmtTrim = null;

    /**
     * @var int $soundDriveBy
     */
    private $soundDriveBy = null;

    /**
     * @var int $soundEngine
     */
    private $soundEngine = null;

    /**
     * @var int $soundStationary
     */
    private $soundStationary = null;

    /**
     * @var string $sourceOfData
     */
    private $sourceOfData = null;

    /**
     * @var string $specialScheme
     */
    private $specialScheme = null;

    /**
     * @var int $subapprovalnumber
     */
    private $subapprovalnumber = null;

    /**
     * @var string $summarySession
     */
    private $summarySession = null;

    /**
     * @var string $summaryVehRegd
     */
    private $summaryVehRegd = null;

    /**
     * @var int $surface
     */
    private $surface = null;

    /**
     * @var string $taxClass
     */
    private $taxClass = null;

    /**
     * @var string $tecDocEngineCode
     */
    private $tecDocEngineCode = null;

    /**
     * @var int $tecDocManufacturerID
     */
    private $tecDocManufacturerID = null;

    /**
     * @var int $tecDocModNr
     */
    private $tecDocModNr = null;

    /**
     * @var string $tecDocNumber
     */
    private $tecDocNumber = null;

    /**
     * @var string $tecDocType
     */
    private $tecDocType = null;

    /**
     * @var string $tjVikt
     */
    private $tjVikt = null;

    /**
     * @var int $totalWeight
     */
    private $totalWeight = null;

    /**
     * @var string $trailerCoupling
     */
    private $trailerCoupling = null;

    /**
     * @var string $trailerWeight
     */
    private $trailerWeight = null;

    /**
     * @var int $transmissionCode
     */
    private $transmissionCode = null;

    /**
     * @var string $transmissionType
     */
    private $transmissionType = null;

    /**
     * @var string $typeCode
     */
    private $typeCode = null;

    /**
     * @var string $typeOfLinksDescription
     */
    private $typeOfLinksDescription = null;

    /**
     * @var string $typeOfRegistrationRecord
     */
    private $typeOfRegistrationRecord = null;

    /**
     * @var string $typeOfVehicle
     */
    private $typeOfVehicle = null;

    /**
     * @var string $typeVinCG
     */
    private $typeVinCG = null;

    /**
     * @var string $tyres
     */
    private $tyres = null;

    /**
     * @var string $variant
     */
    private $variant = null;

    /**
     * @var string $vehicleDoors
     */
    private $vehicleDoors = null;

    /**
     * @var string $vehicleEngineWithTurbo
     */
    private $vehicleEngineWithTurbo = null;

    /**
     * @var int $vehicleHeigth
     */
    private $vehicleHeigth = null;

    /**
     * @var int $vehicleLength
     */
    private $vehicleLength = null;

    /**
     * @var string $vehicleMark
     */
    private $vehicleMark = null;

    /**
     * @var string $vehicleModelDescription
     */
    private $vehicleModelDescription = null;

    /**
     * @var string $vehicleName
     */
    private $vehicleName = null;

    /**
     * @var string $vehiclePropulsionType
     */
    private $vehiclePropulsionType = null;

    /**
     * @var string $vehicleSerialNumber
     */
    private $vehicleSerialNumber = null;

    /**
     * @var string $vehicleType
     */
    private $vehicleType = null;

    /**
     * @var int $vehicleWidth
     */
    private $vehicleWidth = null;

    /**
     * @var string $vehilceBodyMark
     */
    private $vehilceBodyMark = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $vin
     */
    private $vin = null;

    /**
     * @var int $vinVrmIndicator
     */
    private $vinVrmIndicator = null;

    /**
     * @var string $wheelplan
     */
    private $wheelplan = null;

    /**
     * @var string $wheelplanCode
     */
    private $wheelplanCode = null;

    /**
     * @var string $width
     */
    private $width = null;

    /**
     * @var string $year
     */
    private $year = null;

    /**
     * @var string $yearFrom
     */
    private $yearFrom = null;

    /**
     * Gets as abiCode
     *
     * @return string
     */
    public function getAbiCode()
    {
        return $this->abiCode;
    }

    /**
     * Sets a new abiCode
     *
     * @param string $abiCode
     * @return self
     */
    public function setAbiCode($abiCode)
    {
        $this->abiCode = $abiCode;
        return $this;
    }

    /**
     * Gets as aisCarCode
     *
     * @return string
     */
    public function getAisCarCode()
    {
        return $this->aisCarCode;
    }

    /**
     * Sets a new aisCarCode
     *
     * @param string $aisCarCode
     * @return self
     */
    public function setAisCarCode($aisCarCode)
    {
        $this->aisCarCode = $aisCarCode;
        return $this;
    }

    /**
     * Gets as aisInfo
     *
     * @return int
     */
    public function getAisInfo()
    {
        return $this->aisInfo;
    }

    /**
     * Sets a new aisInfo
     *
     * @param int $aisInfo
     * @return self
     */
    public function setAisInfo($aisInfo)
    {
        $this->aisInfo = $aisInfo;
        return $this;
    }

    /**
     * Gets as aisProductionDate
     *
     * @return string
     */
    public function getAisProductionDate()
    {
        return $this->aisProductionDate;
    }

    /**
     * Sets a new aisProductionDate
     *
     * @param string $aisProductionDate
     * @return self
     */
    public function setAisProductionDate($aisProductionDate)
    {
        $this->aisProductionDate = $aisProductionDate;
        return $this;
    }

    /**
     * Gets as aisVehicleType
     *
     * @return string
     */
    public function getAisVehicleType()
    {
        return $this->aisVehicleType;
    }

    /**
     * Sets a new aisVehicleType
     *
     * @param string $aisVehicleType
     * @return self
     */
    public function setAisVehicleType($aisVehicleType)
    {
        $this->aisVehicleType = $aisVehicleType;
        return $this;
    }

    /**
     * Gets as approvalnumber
     *
     * @return int
     */
    public function getApprovalnumber()
    {
        return $this->approvalnumber;
    }

    /**
     * Sets a new approvalnumber
     *
     * @param int $approvalnumber
     * @return self
     */
    public function setApprovalnumber($approvalnumber)
    {
        $this->approvalnumber = $approvalnumber;
        return $this;
    }

    /**
     * Gets as artKodeDK
     *
     * @return int
     */
    public function getArtKodeDK()
    {
        return $this->artKodeDK;
    }

    /**
     * Sets a new artKodeDK
     *
     * @param int $artKodeDK
     * @return self
     */
    public function setArtKodeDK($artKodeDK)
    {
        $this->artKodeDK = $artKodeDK;
        return $this;
    }

    /**
     * Gets as assetRefNr
     *
     * @return int
     */
    public function getAssetRefNr()
    {
        return $this->assetRefNr;
    }

    /**
     * Sets a new assetRefNr
     *
     * @param int $assetRefNr
     * @return self
     */
    public function setAssetRefNr($assetRefNr)
    {
        $this->assetRefNr = $assetRefNr;
        return $this;
    }

    /**
     * Gets as awd
     *
     * @return string
     */
    public function getAwd()
    {
        return $this->awd;
    }

    /**
     * Sets a new awd
     *
     * @param string $awd
     * @return self
     */
    public function setAwd($awd)
    {
        $this->awd = $awd;
        return $this;
    }

    /**
     * Gets as axleCode
     *
     * @return string
     */
    public function getAxleCode()
    {
        return $this->axleCode;
    }

    /**
     * Sets a new axleCode
     *
     * @param string $axleCode
     * @return self
     */
    public function setAxleCode($axleCode)
    {
        $this->axleCode = $axleCode;
        return $this;
    }

    /**
     * Gets as axleCount
     *
     * @return string
     */
    public function getAxleCount()
    {
        return $this->axleCount;
    }

    /**
     * Sets a new axleCount
     *
     * @param string $axleCount
     * @return self
     */
    public function setAxleCount($axleCount)
    {
        $this->axleCount = $axleCount;
        return $this;
    }

    /**
     * Gets as bodyCode
     *
     * @return string
     */
    public function getBodyCode()
    {
        return $this->bodyCode;
    }

    /**
     * Sets a new bodyCode
     *
     * @param string $bodyCode
     * @return self
     */
    public function setBodyCode($bodyCode)
    {
        $this->bodyCode = $bodyCode;
        return $this;
    }

    /**
     * Gets as bodyName
     *
     * @return string
     */
    public function getBodyName()
    {
        return $this->bodyName;
    }

    /**
     * Sets a new bodyName
     *
     * @param string $bodyName
     * @return self
     */
    public function setBodyName($bodyName)
    {
        $this->bodyName = $bodyName;
        return $this;
    }

    /**
     * Gets as bodyStyle
     *
     * @return string
     */
    public function getBodyStyle()
    {
        return $this->bodyStyle;
    }

    /**
     * Sets a new bodyStyle
     *
     * @param string $bodyStyle
     * @return self
     */
    public function setBodyStyle($bodyStyle)
    {
        $this->bodyStyle = $bodyStyle;
        return $this;
    }

    /**
     * Gets as bodyTypeOfRegistrationCard
     *
     * @return string
     */
    public function getBodyTypeOfRegistrationCard()
    {
        return $this->bodyTypeOfRegistrationCard;
    }

    /**
     * Sets a new bodyTypeOfRegistrationCard
     *
     * @param string $bodyTypeOfRegistrationCard
     * @return self
     */
    public function setBodyTypeOfRegistrationCard($bodyTypeOfRegistrationCard)
    {
        $this->bodyTypeOfRegistrationCard = $bodyTypeOfRegistrationCard;
        return $this;
    }

    /**
     * Gets as bodyTypeOfVehicle
     *
     * @return string
     */
    public function getBodyTypeOfVehicle()
    {
        return $this->bodyTypeOfVehicle;
    }

    /**
     * Sets a new bodyTypeOfVehicle
     *
     * @param string $bodyTypeOfVehicle
     * @return self
     */
    public function setBodyTypeOfVehicle($bodyTypeOfVehicle)
    {
        $this->bodyTypeOfVehicle = $bodyTypeOfVehicle;
        return $this;
    }

    /**
     * Gets as carDKType
     *
     * @return int
     */
    public function getCarDKType()
    {
        return $this->carDKType;
    }

    /**
     * Sets a new carDKType
     *
     * @param int $carDKType
     * @return self
     */
    public function setCarDKType($carDKType)
    {
        $this->carDKType = $carDKType;
        return $this;
    }

    /**
     * Gets as carName
     *
     * @return string
     */
    public function getCarName()
    {
        return $this->carName;
    }

    /**
     * Sets a new carName
     *
     * @param string $carName
     * @return self
     */
    public function setCarName($carName)
    {
        $this->carName = $carName;
        return $this;
    }

    /**
     * Gets as carType
     *
     * @return int
     */
    public function getCarType()
    {
        return $this->carType;
    }

    /**
     * Sets a new carType
     *
     * @param int $carType
     * @return self
     */
    public function setCarType($carType)
    {
        $this->carType = $carType;
        return $this;
    }

    /**
     * Gets as chassisDetails
     *
     * @return string
     */
    public function getChassisDetails()
    {
        return $this->chassisDetails;
    }

    /**
     * Sets a new chassisDetails
     *
     * @param string $chassisDetails
     * @return self
     */
    public function setChassisDetails($chassisDetails)
    {
        $this->chassisDetails = $chassisDetails;
        return $this;
    }

    /**
     * Gets as chassisNumber
     *
     * @return string
     */
    public function getChassisNumber()
    {
        return $this->chassisNumber;
    }

    /**
     * Sets a new chassisNumber
     *
     * @param string $chassisNumber
     * @return self
     */
    public function setChassisNumber($chassisNumber)
    {
        $this->chassisNumber = $chassisNumber;
        return $this;
    }

    /**
     * Gets as co2Rating
     *
     * @return int
     */
    public function getCo2Rating()
    {
        return $this->co2Rating;
    }

    /**
     * Sets a new co2Rating
     *
     * @param int $co2Rating
     * @return self
     */
    public function setCo2Rating($co2Rating)
    {
        $this->co2Rating = $co2Rating;
        return $this;
    }

    /**
     * Gets as colour
     *
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Sets a new colour
     *
     * @param string $colour
     * @return self
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
        return $this;
    }

    /**
     * Gets as colourCode
     *
     * @return string
     */
    public function getColourCode()
    {
        return $this->colourCode;
    }

    /**
     * Sets a new colourCode
     *
     * @param string $colourCode
     * @return self
     */
    public function setColourCode($colourCode)
    {
        $this->colourCode = $colourCode;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as cylinders
     *
     * @return string
     */
    public function getCylinders()
    {
        return $this->cylinders;
    }

    /**
     * Sets a new cylinders
     *
     * @param string $cylinders
     * @return self
     */
    public function setCylinders($cylinders)
    {
        $this->cylinders = $cylinders;
        return $this;
    }

    /**
     * Gets as dVLABodyPlanCode
     *
     * @return string
     */
    public function getDVLABodyPlanCode()
    {
        return $this->dVLABodyPlanCode;
    }

    /**
     * Sets a new dVLABodyPlanCode
     *
     * @param string $dVLABodyPlanCode
     * @return self
     */
    public function setDVLABodyPlanCode($dVLABodyPlanCode)
    {
        $this->dVLABodyPlanCode = $dVLABodyPlanCode;
        return $this;
    }

    /**
     * Gets as dVLABodyPlanDescription
     *
     * @return string
     */
    public function getDVLABodyPlanDescription()
    {
        return $this->dVLABodyPlanDescription;
    }

    /**
     * Sets a new dVLABodyPlanDescription
     *
     * @param string $dVLABodyPlanDescription
     * @return self
     */
    public function setDVLABodyPlanDescription($dVLABodyPlanDescription)
    {
        $this->dVLABodyPlanDescription = $dVLABodyPlanDescription;
        return $this;
    }

    /**
     * Gets as dataSource
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * Sets a new dataSource
     *
     * @param string $dataSource
     * @return self
     */
    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    /**
     * Gets as dateOfEndOfSales
     *
     * @return string
     */
    public function getDateOfEndOfSales()
    {
        return $this->dateOfEndOfSales;
    }

    /**
     * Sets a new dateOfEndOfSales
     *
     * @param string $dateOfEndOfSales
     * @return self
     */
    public function setDateOfEndOfSales($dateOfEndOfSales)
    {
        $this->dateOfEndOfSales = $dateOfEndOfSales;
        return $this;
    }

    /**
     * Gets as dateOfFirstRegistraionInAbroad
     *
     * @return string
     */
    public function getDateOfFirstRegistraionInAbroad()
    {
        return $this->dateOfFirstRegistraionInAbroad;
    }

    /**
     * Sets a new dateOfFirstRegistraionInAbroad
     *
     * @param string $dateOfFirstRegistraionInAbroad
     * @return self
     */
    public function setDateOfFirstRegistraionInAbroad($dateOfFirstRegistraionInAbroad)
    {
        $this->dateOfFirstRegistraionInAbroad = $dateOfFirstRegistraionInAbroad;
        return $this;
    }

    /**
     * Gets as dateOfFirstRegistraionInItaly
     *
     * @return string
     */
    public function getDateOfFirstRegistraionInItaly()
    {
        return $this->dateOfFirstRegistraionInItaly;
    }

    /**
     * Sets a new dateOfFirstRegistraionInItaly
     *
     * @param string $dateOfFirstRegistraionInItaly
     * @return self
     */
    public function setDateOfFirstRegistraionInItaly($dateOfFirstRegistraionInItaly)
    {
        $this->dateOfFirstRegistraionInItaly = $dateOfFirstRegistraionInItaly;
        return $this;
    }

    /**
     * Gets as dateOfFirstRegistration
     *
     * @return string
     */
    public function getDateOfFirstRegistration()
    {
        return $this->dateOfFirstRegistration;
    }

    /**
     * Sets a new dateOfFirstRegistration
     *
     * @param string $dateOfFirstRegistration
     * @return self
     */
    public function setDateOfFirstRegistration($dateOfFirstRegistration)
    {
        $this->dateOfFirstRegistration = $dateOfFirstRegistration;
        return $this;
    }

    /**
     * Gets as dateOfLastLawInspecition
     *
     * @return string
     */
    public function getDateOfLastLawInspecition()
    {
        return $this->dateOfLastLawInspecition;
    }

    /**
     * Sets a new dateOfLastLawInspecition
     *
     * @param string $dateOfLastLawInspecition
     * @return self
     */
    public function setDateOfLastLawInspecition($dateOfLastLawInspecition)
    {
        $this->dateOfLastLawInspecition = $dateOfLastLawInspecition;
        return $this;
    }

    /**
     * Gets as dateOfLatestApproval
     *
     * @return string
     */
    public function getDateOfLatestApproval()
    {
        return $this->dateOfLatestApproval;
    }

    /**
     * Sets a new dateOfLatestApproval
     *
     * @param string $dateOfLatestApproval
     * @return self
     */
    public function setDateOfLatestApproval($dateOfLatestApproval)
    {
        $this->dateOfLatestApproval = $dateOfLatestApproval;
        return $this;
    }

    /**
     * Gets as dateOfLatestRegistration
     *
     * @return string
     */
    public function getDateOfLatestRegistration()
    {
        return $this->dateOfLatestRegistration;
    }

    /**
     * Sets a new dateOfLatestRegistration
     *
     * @param string $dateOfLatestRegistration
     * @return self
     */
    public function setDateOfLatestRegistration($dateOfLatestRegistration)
    {
        $this->dateOfLatestRegistration = $dateOfLatestRegistration;
        return $this;
    }

    /**
     * Gets as dateOfMiscData
     *
     * @return string
     */
    public function getDateOfMiscData()
    {
        return $this->dateOfMiscData;
    }

    /**
     * Sets a new dateOfMiscData
     *
     * @param string $dateOfMiscData
     * @return self
     */
    public function setDateOfMiscData($dateOfMiscData)
    {
        $this->dateOfMiscData = $dateOfMiscData;
        return $this;
    }

    /**
     * Gets as dateOfNextInspection
     *
     * @return string
     */
    public function getDateOfNextInspection()
    {
        return $this->dateOfNextInspection;
    }

    /**
     * Sets a new dateOfNextInspection
     *
     * @param string $dateOfNextInspection
     * @return self
     */
    public function setDateOfNextInspection($dateOfNextInspection)
    {
        $this->dateOfNextInspection = $dateOfNextInspection;
        return $this;
    }

    /**
     * Gets as dateOfRegistration
     *
     * @return string
     */
    public function getDateOfRegistration()
    {
        return $this->dateOfRegistration;
    }

    /**
     * Sets a new dateOfRegistration
     *
     * @param string $dateOfRegistration
     * @return self
     */
    public function setDateOfRegistration($dateOfRegistration)
    {
        $this->dateOfRegistration = $dateOfRegistration;
        return $this;
    }

    /**
     * Gets as dateOfStartOfSales
     *
     * @return string
     */
    public function getDateOfStartOfSales()
    {
        return $this->dateOfStartOfSales;
    }

    /**
     * Sets a new dateOfStartOfSales
     *
     * @param string $dateOfStartOfSales
     * @return self
     */
    public function setDateOfStartOfSales($dateOfStartOfSales)
    {
        $this->dateOfStartOfSales = $dateOfStartOfSales;
        return $this;
    }

    /**
     * Gets as dateOfUnregistration
     *
     * @return string
     */
    public function getDateOfUnregistration()
    {
        return $this->dateOfUnregistration;
    }

    /**
     * Sets a new dateOfUnregistration
     *
     * @param string $dateOfUnregistration
     * @return self
     */
    public function setDateOfUnregistration($dateOfUnregistration)
    {
        $this->dateOfUnregistration = $dateOfUnregistration;
        return $this;
    }

    /**
     * Gets as depollution
     *
     * @return string
     */
    public function getDepollution()
    {
        return $this->depollution;
    }

    /**
     * Sets a new depollution
     *
     * @param string $depollution
     * @return self
     */
    public function setDepollution($depollution)
    {
        $this->depollution = $depollution;
        return $this;
    }

    /**
     * Gets as displacement
     *
     * @return string
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * Sets a new displacement
     *
     * @param string $displacement
     * @return self
     */
    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
        return $this;
    }

    /**
     * Gets as doorPlan
     *
     * @return string
     */
    public function getDoorPlan()
    {
        return $this->doorPlan;
    }

    /**
     * Sets a new doorPlan
     *
     * @param string $doorPlan
     * @return self
     */
    public function setDoorPlan($doorPlan)
    {
        $this->doorPlan = $doorPlan;
        return $this;
    }

    /**
     * Gets as driveType
     *
     * @return string
     */
    public function getDriveType()
    {
        return $this->driveType;
    }

    /**
     * Sets a new driveType
     *
     * @param string $driveType
     * @return self
     */
    public function setDriveType($driveType)
    {
        $this->driveType = $driveType;
        return $this;
    }

    /**
     * Gets as emission
     *
     * @return string
     */
    public function getEmission()
    {
        return $this->emission;
    }

    /**
     * Sets a new emission
     *
     * @param string $emission
     * @return self
     */
    public function setEmission($emission)
    {
        $this->emission = $emission;
        return $this;
    }

    /**
     * Gets as emissions
     *
     * @return string
     */
    public function getEmissions()
    {
        return $this->emissions;
    }

    /**
     * Sets a new emissions
     *
     * @param string $emissions
     * @return self
     */
    public function setEmissions($emissions)
    {
        $this->emissions = $emissions;
        return $this;
    }

    /**
     * Gets as empat
     *
     * @return string
     */
    public function getEmpat()
    {
        return $this->empat;
    }

    /**
     * Sets a new empat
     *
     * @param string $empat
     * @return self
     */
    public function setEmpat($empat)
    {
        $this->empat = $empat;
        return $this;
    }

    /**
     * Gets as energy
     *
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Sets a new energy
     *
     * @param string $energy
     * @return self
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;
        return $this;
    }

    /**
     * Gets as engineCapacity
     *
     * @return string
     */
    public function getEngineCapacity()
    {
        return $this->engineCapacity;
    }

    /**
     * Sets a new engineCapacity
     *
     * @param string $engineCapacity
     * @return self
     */
    public function setEngineCapacity($engineCapacity)
    {
        $this->engineCapacity = $engineCapacity;
        return $this;
    }

    /**
     * Gets as engineCode
     *
     * @return string
     */
    public function getEngineCode()
    {
        return $this->engineCode;
    }

    /**
     * Sets a new engineCode
     *
     * @param string $engineCode
     * @return self
     */
    public function setEngineCode($engineCode)
    {
        $this->engineCode = $engineCode;
        return $this;
    }

    /**
     * Adds as engineCodes
     *
     * @return self
     * @param string $engineCodes
     */
    public function addToEngineCodes($engineCodes)
    {
        $this->engineCodes[] = $engineCodes;
        return $this;
    }

    /**
     * isset engineCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEngineCodes($index)
    {
        return isset($this->engineCodes[$index]);
    }

    /**
     * unset engineCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEngineCodes($index)
    {
        unset($this->engineCodes[$index]);
    }

    /**
     * Gets as engineCodes
     *
     * @return string[]
     */
    public function getEngineCodes()
    {
        return $this->engineCodes;
    }

    /**
     * Sets a new engineCodes
     *
     * @param string[] $engineCodes
     * @return self
     */
    public function setEngineCodes(array $engineCodes)
    {
        $this->engineCodes = $engineCodes;
        return $this;
    }

    /**
     * Gets as engineCoolingType
     *
     * @return string
     */
    public function getEngineCoolingType()
    {
        return $this->engineCoolingType;
    }

    /**
     * Sets a new engineCoolingType
     *
     * @param string $engineCoolingType
     * @return self
     */
    public function setEngineCoolingType($engineCoolingType)
    {
        $this->engineCoolingType = $engineCoolingType;
        return $this;
    }

    /**
     * Gets as engineNumber
     *
     * @return string
     */
    public function getEngineNumber()
    {
        return $this->engineNumber;
    }

    /**
     * Sets a new engineNumber
     *
     * @param string $engineNumber
     * @return self
     */
    public function setEngineNumber($engineNumber)
    {
        $this->engineNumber = $engineNumber;
        return $this;
    }

    /**
     * Gets as engineOutputInHP
     *
     * @return string
     */
    public function getEngineOutputInHP()
    {
        return $this->engineOutputInHP;
    }

    /**
     * Sets a new engineOutputInHP
     *
     * @param string $engineOutputInHP
     * @return self
     */
    public function setEngineOutputInHP($engineOutputInHP)
    {
        $this->engineOutputInHP = $engineOutputInHP;
        return $this;
    }

    /**
     * Gets as engineOutputInTaxationHP
     *
     * @return string
     */
    public function getEngineOutputInTaxationHP()
    {
        return $this->engineOutputInTaxationHP;
    }

    /**
     * Sets a new engineOutputInTaxationHP
     *
     * @param string $engineOutputInTaxationHP
     * @return self
     */
    public function setEngineOutputInTaxationHP($engineOutputInTaxationHP)
    {
        $this->engineOutputInTaxationHP = $engineOutputInTaxationHP;
        return $this;
    }

    /**
     * Gets as enginePower
     *
     * @return string
     */
    public function getEnginePower()
    {
        return $this->enginePower;
    }

    /**
     * Sets a new enginePower
     *
     * @param string $enginePower
     * @return self
     */
    public function setEnginePower($enginePower)
    {
        $this->enginePower = $enginePower;
        return $this;
    }

    /**
     * Gets as engineSize
     *
     * @return int
     */
    public function getEngineSize()
    {
        return $this->engineSize;
    }

    /**
     * Sets a new engineSize
     *
     * @param int $engineSize
     * @return self
     */
    public function setEngineSize($engineSize)
    {
        $this->engineSize = $engineSize;
        return $this;
    }

    /**
     * Gets as engineVolume
     *
     * @return string
     */
    public function getEngineVolume()
    {
        return $this->engineVolume;
    }

    /**
     * Sets a new engineVolume
     *
     * @param string $engineVolume
     * @return self
     */
    public function setEngineVolume($engineVolume)
    {
        $this->engineVolume = $engineVolume;
        return $this;
    }

    /**
     * Gets as enquiryNumber
     *
     * @return string
     */
    public function getEnquiryNumber()
    {
        return $this->enquiryNumber;
    }

    /**
     * Sets a new enquiryNumber
     *
     * @param string $enquiryNumber
     * @return self
     */
    public function setEnquiryNumber($enquiryNumber)
    {
        $this->enquiryNumber = $enquiryNumber;
        return $this;
    }

    /**
     * Gets as euTypeNumber
     *
     * @return string
     */
    public function getEuTypeNumber()
    {
        return $this->euTypeNumber;
    }

    /**
     * Sets a new euTypeNumber
     *
     * @param string $euTypeNumber
     * @return self
     */
    public function setEuTypeNumber($euTypeNumber)
    {
        $this->euTypeNumber = $euTypeNumber;
        return $this;
    }

    /**
     * Gets as euroEmissionsStandard
     *
     * @return string
     */
    public function getEuroEmissionsStandard()
    {
        return $this->euroEmissionsStandard;
    }

    /**
     * Sets a new euroEmissionsStandard
     *
     * @param string $euroEmissionsStandard
     * @return self
     */
    public function setEuroEmissionsStandard($euroEmissionsStandard)
    {
        $this->euroEmissionsStandard = $euroEmissionsStandard;
        return $this;
    }

    /**
     * Gets as exportDate
     *
     * @return string
     */
    public function getExportDate()
    {
        return $this->exportDate;
    }

    /**
     * Sets a new exportDate
     *
     * @param string $exportDate
     * @return self
     */
    public function setExportDate($exportDate)
    {
        $this->exportDate = $exportDate;
        return $this;
    }

    /**
     * Gets as firstCharacterInDanish
     *
     * @return string
     */
    public function getFirstCharacterInDanish()
    {
        return $this->firstCharacterInDanish;
    }

    /**
     * Sets a new firstCharacterInDanish
     *
     * @param string $firstCharacterInDanish
     * @return self
     */
    public function setFirstCharacterInDanish($firstCharacterInDanish)
    {
        $this->firstCharacterInDanish = $firstCharacterInDanish;
        return $this;
    }

    /**
     * Gets as firstUsingDate
     *
     * @return string
     */
    public function getFirstUsingDate()
    {
        return $this->firstUsingDate;
    }

    /**
     * Sets a new firstUsingDate
     *
     * @param string $firstUsingDate
     * @return self
     */
    public function setFirstUsingDate($firstUsingDate)
    {
        $this->firstUsingDate = $firstUsingDate;
        return $this;
    }

    /**
     * Gets as frontTyre
     *
     * @return string
     */
    public function getFrontTyre()
    {
        return $this->frontTyre;
    }

    /**
     * Sets a new frontTyre
     *
     * @param string $frontTyre
     * @return self
     */
    public function setFrontTyre($frontTyre)
    {
        $this->frontTyre = $frontTyre;
        return $this;
    }

    /**
     * Gets as frontTyreDimension
     *
     * @return string
     */
    public function getFrontTyreDimension()
    {
        return $this->frontTyreDimension;
    }

    /**
     * Sets a new frontTyreDimension
     *
     * @param string $frontTyreDimension
     * @return self
     */
    public function setFrontTyreDimension($frontTyreDimension)
    {
        $this->frontTyreDimension = $frontTyreDimension;
        return $this;
    }

    /**
     * Gets as frontWheelSpacing
     *
     * @return int
     */
    public function getFrontWheelSpacing()
    {
        return $this->frontWheelSpacing;
    }

    /**
     * Sets a new frontWheelSpacing
     *
     * @param int $frontWheelSpacing
     * @return self
     */
    public function setFrontWheelSpacing($frontWheelSpacing)
    {
        $this->frontWheelSpacing = $frontWheelSpacing;
        return $this;
    }

    /**
     * Gets as fuel
     *
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Sets a new fuel
     *
     * @param string $fuel
     * @return self
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * Gets as fuelCode
     *
     * @return string
     */
    public function getFuelCode()
    {
        return $this->fuelCode;
    }

    /**
     * Sets a new fuelCode
     *
     * @param string $fuelCode
     * @return self
     */
    public function setFuelCode($fuelCode)
    {
        $this->fuelCode = $fuelCode;
        return $this;
    }

    /**
     * Gets as fuelCode2
     *
     * @return string
     */
    public function getFuelCode2()
    {
        return $this->fuelCode2;
    }

    /**
     * Sets a new fuelCode2
     *
     * @param string $fuelCode2
     * @return self
     */
    public function setFuelCode2($fuelCode2)
    {
        $this->fuelCode2 = $fuelCode2;
        return $this;
    }

    /**
     * Gets as fuelType
     *
     * @return int
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets a new fuelType
     *
     * @param int $fuelType
     * @return self
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    /**
     * Gets as gearBoxType
     *
     * @return string
     */
    public function getGearBoxType()
    {
        return $this->gearBoxType;
    }

    /**
     * Sets a new gearBoxType
     *
     * @param string $gearBoxType
     * @return self
     */
    public function setGearBoxType($gearBoxType)
    {
        $this->gearBoxType = $gearBoxType;
        return $this;
    }

    /**
     * Gets as gearbox
     *
     * @return string
     */
    public function getGearbox()
    {
        return $this->gearbox;
    }

    /**
     * Sets a new gearbox
     *
     * @param string $gearbox
     * @return self
     */
    public function setGearbox($gearbox)
    {
        $this->gearbox = $gearbox;
        return $this;
    }

    /**
     * Gets as groupCode
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;
        return $this;
    }

    /**
     * Gets as guaranteeLevel
     *
     * @return string
     */
    public function getGuaranteeLevel()
    {
        return $this->guaranteeLevel;
    }

    /**
     * Sets a new guaranteeLevel
     *
     * @param string $guaranteeLevel
     * @return self
     */
    public function setGuaranteeLevel($guaranteeLevel)
    {
        $this->guaranteeLevel = $guaranteeLevel;
        return $this;
    }

    /**
     * Gets as importDateNi
     *
     * @return string
     */
    public function getImportDateNi()
    {
        return $this->importDateNi;
    }

    /**
     * Sets a new importDateNi
     *
     * @param string $importDateNi
     * @return self
     */
    public function setImportDateNi($importDateNi)
    {
        $this->importDateNi = $importDateNi;
        return $this;
    }

    /**
     * Gets as importFlag
     *
     * @return string
     */
    public function getImportFlag()
    {
        return $this->importFlag;
    }

    /**
     * Sets a new importFlag
     *
     * @param string $importFlag
     * @return self
     */
    public function setImportFlag($importFlag)
    {
        $this->importFlag = $importFlag;
        return $this;
    }

    /**
     * Gets as importMarkerNi
     *
     * @return string
     */
    public function getImportMarkerNi()
    {
        return $this->importMarkerNi;
    }

    /**
     * Sets a new importMarkerNi
     *
     * @param string $importMarkerNi
     * @return self
     */
    public function setImportMarkerNi($importMarkerNi)
    {
        $this->importMarkerNi = $importMarkerNi;
        return $this;
    }

    /**
     * Gets as importVrmNi
     *
     * @return string
     */
    public function getImportVrmNi()
    {
        return $this->importVrmNi;
    }

    /**
     * Sets a new importVrmNi
     *
     * @param string $importVrmNi
     * @return self
     */
    public function setImportVrmNi($importVrmNi)
    {
        $this->importVrmNi = $importVrmNi;
        return $this;
    }

    /**
     * Gets as imported
     *
     * @return string
     */
    public function getImported()
    {
        return $this->imported;
    }

    /**
     * Sets a new imported
     *
     * @param string $imported
     * @return self
     */
    public function setImported($imported)
    {
        $this->imported = $imported;
        return $this;
    }

    /**
     * Gets as injectionType
     *
     * @return string
     */
    public function getInjectionType()
    {
        return $this->injectionType;
    }

    /**
     * Sets a new injectionType
     *
     * @param string $injectionType
     * @return self
     */
    public function setInjectionType($injectionType)
    {
        $this->injectionType = $injectionType;
        return $this;
    }

    /**
     * Gets as inspectionRateCode
     *
     * @return int
     */
    public function getInspectionRateCode()
    {
        return $this->inspectionRateCode;
    }

    /**
     * Sets a new inspectionRateCode
     *
     * @param int $inspectionRateCode
     * @return self
     */
    public function setInspectionRateCode($inspectionRateCode)
    {
        $this->inspectionRateCode = $inspectionRateCode;
        return $this;
    }

    /**
     * Gets as inspectionRateCodeDescription
     *
     * @return string
     */
    public function getInspectionRateCodeDescription()
    {
        return $this->inspectionRateCodeDescription;
    }

    /**
     * Sets a new inspectionRateCodeDescription
     *
     * @param string $inspectionRateCodeDescription
     * @return self
     */
    public function setInspectionRateCodeDescription($inspectionRateCodeDescription)
    {
        $this->inspectionRateCodeDescription = $inspectionRateCodeDescription;
        return $this;
    }

    /**
     * Gets as isVehicleRegisteredAbroad
     *
     * @return string
     */
    public function getIsVehicleRegisteredAbroad()
    {
        return $this->isVehicleRegisteredAbroad;
    }

    /**
     * Sets a new isVehicleRegisteredAbroad
     *
     * @param string $isVehicleRegisteredAbroad
     * @return self
     */
    public function setIsVehicleRegisteredAbroad($isVehicleRegisteredAbroad)
    {
        $this->isVehicleRegisteredAbroad = $isVehicleRegisteredAbroad;
        return $this;
    }

    /**
     * Gets as kTypeDataMatchLevel
     *
     * @return string
     */
    public function getKTypeDataMatchLevel()
    {
        return $this->kTypeDataMatchLevel;
    }

    /**
     * Sets a new kTypeDataMatchLevel
     *
     * @param string $kTypeDataMatchLevel
     * @return self
     */
    public function setKTypeDataMatchLevel($kTypeDataMatchLevel)
    {
        $this->kTypeDataMatchLevel = $kTypeDataMatchLevel;
        return $this;
    }

    /**
     * Gets as kTypeDataStatus
     *
     * @return string
     */
    public function getKTypeDataStatus()
    {
        return $this->kTypeDataStatus;
    }

    /**
     * Sets a new kTypeDataStatus
     *
     * @param string $kTypeDataStatus
     * @return self
     */
    public function setKTypeDataStatus($kTypeDataStatus)
    {
        $this->kTypeDataStatus = $kTypeDataStatus;
        return $this;
    }

    /**
     * Adds as kTypeNumbers
     *
     * @return self
     * @param int $kTypeNumbers
     */
    public function addToKTypeNumbers($kTypeNumbers)
    {
        $this->kTypeNumbers[] = $kTypeNumbers;
        return $this;
    }

    /**
     * isset kTypeNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKTypeNumbers($index)
    {
        return isset($this->kTypeNumbers[$index]);
    }

    /**
     * unset kTypeNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKTypeNumbers($index)
    {
        unset($this->kTypeNumbers[$index]);
    }

    /**
     * Gets as kTypeNumbers
     *
     * @return int[]
     */
    public function getKTypeNumbers()
    {
        return $this->kTypeNumbers;
    }

    /**
     * Sets a new kTypeNumbers
     *
     * @param int[] $kTypeNumbers
     * @return self
     */
    public function setKTypeNumbers(array $kTypeNumbers)
    {
        $this->kTypeNumbers = $kTypeNumbers;
        return $this;
    }

    /**
     * Gets as keepers
     *
     * @return string
     */
    public function getKeepers()
    {
        return $this->keepers;
    }

    /**
     * Sets a new keepers
     *
     * @param string $keepers
     * @return self
     */
    public function setKeepers($keepers)
    {
        $this->keepers = $keepers;
        return $this;
    }

    /**
     * Gets as kerbWeight
     *
     * @return string
     */
    public function getKerbWeight()
    {
        return $this->kerbWeight;
    }

    /**
     * Sets a new kerbWeight
     *
     * @param string $kerbWeight
     * @return self
     */
    public function setKerbWeight($kerbWeight)
    {
        $this->kerbWeight = $kerbWeight;
        return $this;
    }

    /**
     * Gets as kid
     *
     * @return int
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * Sets a new kid
     *
     * @param int $kid
     * @return self
     */
    public function setKid($kid)
    {
        $this->kid = $kid;
        return $this;
    }

    /**
     * Gets as kindOfVehicle
     *
     * @return string
     */
    public function getKindOfVehicle()
    {
        return $this->kindOfVehicle;
    }

    /**
     * Sets a new kindOfVehicle
     *
     * @param string $kindOfVehicle
     * @return self
     */
    public function setKindOfVehicle($kindOfVehicle)
    {
        $this->kindOfVehicle = $kindOfVehicle;
        return $this;
    }

    /**
     * Gets as kindOfVehicleCG
     *
     * @return string
     */
    public function getKindOfVehicleCG()
    {
        return $this->kindOfVehicleCG;
    }

    /**
     * Sets a new kindOfVehicleCG
     *
     * @param string $kindOfVehicleCG
     * @return self
     */
    public function setKindOfVehicleCG($kindOfVehicleCG)
    {
        $this->kindOfVehicleCG = $kindOfVehicleCG;
        return $this;
    }

    /**
     * Gets as kprChange
     *
     * @return string
     */
    public function getKprChange()
    {
        return $this->kprChange;
    }

    /**
     * Sets a new kprChange
     *
     * @param string $kprChange
     * @return self
     */
    public function setKprChange($kprChange)
    {
        $this->kprChange = $kprChange;
        return $this;
    }

    /**
     * Gets as kw1
     *
     * @return string
     */
    public function getKw1()
    {
        return $this->kw1;
    }

    /**
     * Sets a new kw1
     *
     * @param string $kw1
     * @return self
     */
    public function setKw1($kw1)
    {
        $this->kw1 = $kw1;
        return $this;
    }

    /**
     * Gets as kw2
     *
     * @return string
     */
    public function getKw2()
    {
        return $this->kw2;
    }

    /**
     * Sets a new kw2
     *
     * @param string $kw2
     * @return self
     */
    public function setKw2($kw2)
    {
        $this->kw2 = $kw2;
        return $this;
    }

    /**
     * Gets as kw3
     *
     * @return string
     */
    public function getKw3()
    {
        return $this->kw3;
    }

    /**
     * Sets a new kw3
     *
     * @param string $kw3
     * @return self
     */
    public function setKw3($kw3)
    {
        $this->kw3 = $kw3;
        return $this;
    }

    /**
     * Gets as lastInspectionDate
     *
     * @return string
     */
    public function getLastInspectionDate()
    {
        return $this->lastInspectionDate;
    }

    /**
     * Sets a new lastInspectionDate
     *
     * @param string $lastInspectionDate
     * @return self
     */
    public function setLastInspectionDate($lastInspectionDate)
    {
        $this->lastInspectionDate = $lastInspectionDate;
        return $this;
    }

    /**
     * Gets as lastPreviousColourCode
     *
     * @return string
     */
    public function getLastPreviousColourCode()
    {
        return $this->lastPreviousColourCode;
    }

    /**
     * Sets a new lastPreviousColourCode
     *
     * @param string $lastPreviousColourCode
     * @return self
     */
    public function setLastPreviousColourCode($lastPreviousColourCode)
    {
        $this->lastPreviousColourCode = $lastPreviousColourCode;
        return $this;
    }

    /**
     * Gets as lastPreviousColourCodeDesc
     *
     * @return string
     */
    public function getLastPreviousColourCodeDesc()
    {
        return $this->lastPreviousColourCodeDesc;
    }

    /**
     * Sets a new lastPreviousColourCodeDesc
     *
     * @param string $lastPreviousColourCodeDesc
     * @return self
     */
    public function setLastPreviousColourCodeDesc($lastPreviousColourCodeDesc)
    {
        $this->lastPreviousColourCodeDesc = $lastPreviousColourCodeDesc;
        return $this;
    }

    /**
     * Gets as lastRegistrationCardDate
     *
     * @return string
     */
    public function getLastRegistrationCardDate()
    {
        return $this->lastRegistrationCardDate;
    }

    /**
     * Sets a new lastRegistrationCardDate
     *
     * @param string $lastRegistrationCardDate
     * @return self
     */
    public function setLastRegistrationCardDate($lastRegistrationCardDate)
    {
        $this->lastRegistrationCardDate = $lastRegistrationCardDate;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param string $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as linkingTargetType
     *
     * @return string
     */
    public function getLinkingTargetType()
    {
        return $this->linkingTargetType;
    }

    /**
     * Sets a new linkingTargetType
     *
     * @param string $linkingTargetType
     * @return self
     */
    public function setLinkingTargetType($linkingTargetType)
    {
        $this->linkingTargetType = $linkingTargetType;
        return $this;
    }

    /**
     * Gets as makeCode
     *
     * @return string
     */
    public function getMakeCode()
    {
        return $this->makeCode;
    }

    /**
     * Sets a new makeCode
     *
     * @param string $makeCode
     * @return self
     */
    public function setMakeCode($makeCode)
    {
        $this->makeCode = $makeCode;
        return $this;
    }

    /**
     * Gets as manuId
     *
     * @return int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Sets a new manuId
     *
     * @param int $manuId
     * @return self
     */
    public function setManuId($manuId)
    {
        $this->manuId = $manuId;
        return $this;
    }

    /**
     * Gets as manufacturerCode
     *
     * @return string
     */
    public function getManufacturerCode()
    {
        return $this->manufacturerCode;
    }

    /**
     * Sets a new manufacturerCode
     *
     * @param string $manufacturerCode
     * @return self
     */
    public function setManufacturerCode($manufacturerCode)
    {
        $this->manufacturerCode = $manufacturerCode;
        return $this;
    }

    /**
     * Gets as manufacturingDate
     *
     * @return string
     */
    public function getManufacturingDate()
    {
        return $this->manufacturingDate;
    }

    /**
     * Sets a new manufacturingDate
     *
     * @param string $manufacturingDate
     * @return self
     */
    public function setManufacturingDate($manufacturingDate)
    {
        $this->manufacturingDate = $manufacturingDate;
        return $this;
    }

    /**
     * Gets as mark
     *
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets a new mark
     *
     * @param string $mark
     * @return self
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
        return $this;
    }

    /**
     * Gets as massInService
     *
     * @return int
     */
    public function getMassInService()
    {
        return $this->massInService;
    }

    /**
     * Sets a new massInService
     *
     * @param int $massInService
     * @return self
     */
    public function setMassInService($massInService)
    {
        $this->massInService = $massInService;
        return $this;
    }

    /**
     * Gets as maxLast
     *
     * @return string
     */
    public function getMaxLast()
    {
        return $this->maxLast;
    }

    /**
     * Sets a new maxLast
     *
     * @param string $maxLast
     * @return self
     */
    public function setMaxLast($maxLast)
    {
        $this->maxLast = $maxLast;
        return $this;
    }

    /**
     * Gets as maxSpeed
     *
     * @return string
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Sets a new maxSpeed
     *
     * @param string $maxSpeed
     * @return self
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    /**
     * Gets as maximumNetPower
     *
     * @return int
     */
    public function getMaximumNetPower()
    {
        return $this->maximumNetPower;
    }

    /**
     * Sets a new maximumNetPower
     *
     * @param int $maximumNetPower
     * @return self
     */
    public function setMaximumNetPower($maximumNetPower)
    {
        $this->maximumNetPower = $maximumNetPower;
        return $this;
    }

    /**
     * Gets as maximumTechnicalMass
     *
     * @return int
     */
    public function getMaximumTechnicalMass()
    {
        return $this->maximumTechnicalMass;
    }

    /**
     * Sets a new maximumTechnicalMass
     *
     * @param int $maximumTechnicalMass
     * @return self
     */
    public function setMaximumTechnicalMass($maximumTechnicalMass)
    {
        $this->maximumTechnicalMass = $maximumTechnicalMass;
        return $this;
    }

    /**
     * Gets as maximumTrailerBraked
     *
     * @return int
     */
    public function getMaximumTrailerBraked()
    {
        return $this->maximumTrailerBraked;
    }

    /**
     * Sets a new maximumTrailerBraked
     *
     * @param int $maximumTrailerBraked
     * @return self
     */
    public function setMaximumTrailerBraked($maximumTrailerBraked)
    {
        $this->maximumTrailerBraked = $maximumTrailerBraked;
        return $this;
    }

    /**
     * Gets as maximumTrailerUnbraked
     *
     * @return int
     */
    public function getMaximumTrailerUnbraked()
    {
        return $this->maximumTrailerUnbraked;
    }

    /**
     * Sets a new maximumTrailerUnbraked
     *
     * @param int $maximumTrailerUnbraked
     * @return self
     */
    public function setMaximumTrailerUnbraked($maximumTrailerUnbraked)
    {
        $this->maximumTrailerUnbraked = $maximumTrailerUnbraked;
        return $this;
    }

    /**
     * Gets as mfrYear
     *
     * @return string
     */
    public function getMfrYear()
    {
        return $this->mfrYear;
    }

    /**
     * Sets a new mfrYear
     *
     * @param string $mfrYear
     * @return self
     */
    public function setMfrYear($mfrYear)
    {
        $this->mfrYear = $mfrYear;
        return $this;
    }

    /**
     * Gets as model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets a new model
     *
     * @param string $model
     * @return self
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Gets as modelCode
     *
     * @return string
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }

    /**
     * Sets a new modelCode
     *
     * @param string $modelCode
     * @return self
     */
    public function setModelCode($modelCode)
    {
        $this->modelCode = $modelCode;
        return $this;
    }

    /**
     * Gets as modelId
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Sets a new modelId
     *
     * @param int $modelId
     * @return self
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
        return $this;
    }

    /**
     * Gets as modelManufacturedFrom
     *
     * @return string
     */
    public function getModelManufacturedFrom()
    {
        return $this->modelManufacturedFrom;
    }

    /**
     * Sets a new modelManufacturedFrom
     *
     * @param string $modelManufacturedFrom
     * @return self
     */
    public function setModelManufacturedFrom($modelManufacturedFrom)
    {
        $this->modelManufacturedFrom = $modelManufacturedFrom;
        return $this;
    }

    /**
     * Gets as modelManufacturedTo
     *
     * @return string
     */
    public function getModelManufacturedTo()
    {
        return $this->modelManufacturedTo;
    }

    /**
     * Sets a new modelManufacturedTo
     *
     * @param string $modelManufacturedTo
     * @return self
     */
    public function setModelManufacturedTo($modelManufacturedTo)
    {
        $this->modelManufacturedTo = $modelManufacturedTo;
        return $this;
    }

    /**
     * Gets as modelYear
     *
     * @return int
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }

    /**
     * Sets a new modelYear
     *
     * @param int $modelYear
     * @return self
     */
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;
        return $this;
    }

    /**
     * Gets as modelYearString
     *
     * @return string
     */
    public function getModelYearString()
    {
        return $this->modelYearString;
    }

    /**
     * Sets a new modelYearString
     *
     * @param string $modelYearString
     * @return self
     */
    public function setModelYearString($modelYearString)
    {
        $this->modelYearString = $modelYearString;
        return $this;
    }

    /**
     * Gets as mvrisModelVariantCode
     *
     * @return string
     */
    public function getMvrisModelVariantCode()
    {
        return $this->mvrisModelVariantCode;
    }

    /**
     * Sets a new mvrisModelVariantCode
     *
     * @param string $mvrisModelVariantCode
     * @return self
     */
    public function setMvrisModelVariantCode($mvrisModelVariantCode)
    {
        $this->mvrisModelVariantCode = $mvrisModelVariantCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as nettoWeight
     *
     * @return int
     */
    public function getNettoWeight()
    {
        return $this->nettoWeight;
    }

    /**
     * Sets a new nettoWeight
     *
     * @param int $nettoWeight
     * @return self
     */
    public function setNettoWeight($nettoWeight)
    {
        $this->nettoWeight = $nettoWeight;
        return $this;
    }

    /**
     * Gets as numberOfCylinders
     *
     * @return int
     */
    public function getNumberOfCylinders()
    {
        return $this->numberOfCylinders;
    }

    /**
     * Sets a new numberOfCylinders
     *
     * @param int $numberOfCylinders
     * @return self
     */
    public function setNumberOfCylinders($numberOfCylinders)
    {
        $this->numberOfCylinders = $numberOfCylinders;
        return $this;
    }

    /**
     * Gets as numberOfEngineValves
     *
     * @return int
     */
    public function getNumberOfEngineValves()
    {
        return $this->numberOfEngineValves;
    }

    /**
     * Sets a new numberOfEngineValves
     *
     * @param int $numberOfEngineValves
     * @return self
     */
    public function setNumberOfEngineValves($numberOfEngineValves)
    {
        $this->numberOfEngineValves = $numberOfEngineValves;
        return $this;
    }

    /**
     * Gets as numberOfGear
     *
     * @return int
     */
    public function getNumberOfGear()
    {
        return $this->numberOfGear;
    }

    /**
     * Sets a new numberOfGear
     *
     * @param int $numberOfGear
     * @return self
     */
    public function setNumberOfGear($numberOfGear)
    {
        $this->numberOfGear = $numberOfGear;
        return $this;
    }

    /**
     * Gets as numberOfPreviousColours
     *
     * @return string
     */
    public function getNumberOfPreviousColours()
    {
        return $this->numberOfPreviousColours;
    }

    /**
     * Sets a new numberOfPreviousColours
     *
     * @param string $numberOfPreviousColours
     * @return self
     */
    public function setNumberOfPreviousColours($numberOfPreviousColours)
    {
        $this->numberOfPreviousColours = $numberOfPreviousColours;
        return $this;
    }

    /**
     * Gets as numberOfSeat
     *
     * @return int
     */
    public function getNumberOfSeat()
    {
        return $this->numberOfSeat;
    }

    /**
     * Sets a new numberOfSeat
     *
     * @param int $numberOfSeat
     * @return self
     */
    public function setNumberOfSeat($numberOfSeat)
    {
        $this->numberOfSeat = $numberOfSeat;
        return $this;
    }

    /**
     * Gets as numberOfVolumes
     *
     * @return int
     */
    public function getNumberOfVolumes()
    {
        return $this->numberOfVolumes;
    }

    /**
     * Sets a new numberOfVolumes
     *
     * @param int $numberOfVolumes
     * @return self
     */
    public function setNumberOfVolumes($numberOfVolumes)
    {
        $this->numberOfVolumes = $numberOfVolumes;
        return $this;
    }

    /**
     * Gets as originalColourCode
     *
     * @return string
     */
    public function getOriginalColourCode()
    {
        return $this->originalColourCode;
    }

    /**
     * Sets a new originalColourCode
     *
     * @param string $originalColourCode
     * @return self
     */
    public function setOriginalColourCode($originalColourCode)
    {
        $this->originalColourCode = $originalColourCode;
        return $this;
    }

    /**
     * Gets as originalColourDesc
     *
     * @return string
     */
    public function getOriginalColourDesc()
    {
        return $this->originalColourDesc;
    }

    /**
     * Sets a new originalColourDesc
     *
     * @param string $originalColourDesc
     * @return self
     */
    public function setOriginalColourDesc($originalColourDesc)
    {
        $this->originalColourDesc = $originalColourDesc;
        return $this;
    }

    /**
     * Gets as placementOfTypePlate
     *
     * @return string
     */
    public function getPlacementOfTypePlate()
    {
        return $this->placementOfTypePlate;
    }

    /**
     * Sets a new placementOfTypePlate
     *
     * @param string $placementOfTypePlate
     * @return self
     */
    public function setPlacementOfTypePlate($placementOfTypePlate)
    {
        $this->placementOfTypePlate = $placementOfTypePlate;
        return $this;
    }

    /**
     * Gets as plant
     *
     * @return string
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * Sets a new plant
     *
     * @param string $plant
     * @return self
     */
    public function setPlant($plant)
    {
        $this->plant = $plant;
        return $this;
    }

    /**
     * Gets as power
     *
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Sets a new power
     *
     * @param int $power
     * @return self
     */
    public function setPower($power)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * Gets as powerSupplyType
     *
     * @return string
     */
    public function getPowerSupplyType()
    {
        return $this->powerSupplyType;
    }

    /**
     * Sets a new powerSupplyType
     *
     * @param string $powerSupplyType
     * @return self
     */
    public function setPowerSupplyType($powerSupplyType)
    {
        $this->powerSupplyType = $powerSupplyType;
        return $this;
    }

    /**
     * Gets as powerUnit
     *
     * @return string
     */
    public function getPowerUnit()
    {
        return $this->powerUnit;
    }

    /**
     * Sets a new powerUnit
     *
     * @param string $powerUnit
     * @return self
     */
    public function setPowerUnit($powerUnit)
    {
        $this->powerUnit = $powerUnit;
        return $this;
    }

    /**
     * Gets as powerWeightRatio
     *
     * @return int
     */
    public function getPowerWeightRatio()
    {
        return $this->powerWeightRatio;
    }

    /**
     * Sets a new powerWeightRatio
     *
     * @param int $powerWeightRatio
     * @return self
     */
    public function setPowerWeightRatio($powerWeightRatio)
    {
        $this->powerWeightRatio = $powerWeightRatio;
        return $this;
    }

    /**
     * Gets as prevColour
     *
     * @return string
     */
    public function getPrevColour()
    {
        return $this->prevColour;
    }

    /**
     * Sets a new prevColour
     *
     * @param string $prevColour
     * @return self
     */
    public function setPrevColour($prevColour)
    {
        $this->prevColour = $prevColour;
        return $this;
    }

    /**
     * Gets as prevColourCode
     *
     * @return string
     */
    public function getPrevColourCode()
    {
        return $this->prevColourCode;
    }

    /**
     * Sets a new prevColourCode
     *
     * @param string $prevColourCode
     * @return self
     */
    public function setPrevColourCode($prevColourCode)
    {
        $this->prevColourCode = $prevColourCode;
        return $this;
    }

    /**
     * Gets as prevColourDate
     *
     * @return string
     */
    public function getPrevColourDate()
    {
        return $this->prevColourDate;
    }

    /**
     * Sets a new prevColourDate
     *
     * @param string $prevColourDate
     * @return self
     */
    public function setPrevColourDate($prevColourDate)
    {
        $this->prevColourDate = $prevColourDate;
        return $this;
    }

    /**
     * Gets as previousKeeperAcquisitionDate
     *
     * @return string
     */
    public function getPreviousKeeperAcquisitionDate()
    {
        return $this->previousKeeperAcquisitionDate;
    }

    /**
     * Sets a new previousKeeperAcquisitionDate
     *
     * @param string $previousKeeperAcquisitionDate
     * @return self
     */
    public function setPreviousKeeperAcquisitionDate($previousKeeperAcquisitionDate)
    {
        $this->previousKeeperAcquisitionDate = $previousKeeperAcquisitionDate;
        return $this;
    }

    /**
     * Gets as previousKeeperDisposalDate
     *
     * @return string
     */
    public function getPreviousKeeperDisposalDate()
    {
        return $this->previousKeeperDisposalDate;
    }

    /**
     * Sets a new previousKeeperDisposalDate
     *
     * @param string $previousKeeperDisposalDate
     * @return self
     */
    public function setPreviousKeeperDisposalDate($previousKeeperDisposalDate)
    {
        $this->previousKeeperDisposalDate = $previousKeeperDisposalDate;
        return $this;
    }

    /**
     * Gets as productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Gets as prt
     *
     * @return int
     */
    public function getPrt()
    {
        return $this->prt;
    }

    /**
     * Sets a new prt
     *
     * @param int $prt
     * @return self
     */
    public function setPrt($prt)
    {
        $this->prt = $prt;
        return $this;
    }

    /**
     * Gets as rearTyre
     *
     * @return string
     */
    public function getRearTyre()
    {
        return $this->rearTyre;
    }

    /**
     * Sets a new rearTyre
     *
     * @param string $rearTyre
     * @return self
     */
    public function setRearTyre($rearTyre)
    {
        $this->rearTyre = $rearTyre;
        return $this;
    }

    /**
     * Gets as rearTyreDimension
     *
     * @return string
     */
    public function getRearTyreDimension()
    {
        return $this->rearTyreDimension;
    }

    /**
     * Sets a new rearTyreDimension
     *
     * @param string $rearTyreDimension
     * @return self
     */
    public function setRearTyreDimension($rearTyreDimension)
    {
        $this->rearTyreDimension = $rearTyreDimension;
        return $this;
    }

    /**
     * Gets as rearWheelSpacing
     *
     * @return int
     */
    public function getRearWheelSpacing()
    {
        return $this->rearWheelSpacing;
    }

    /**
     * Sets a new rearWheelSpacing
     *
     * @param int $rearWheelSpacing
     * @return self
     */
    public function setRearWheelSpacing($rearWheelSpacing)
    {
        $this->rearWheelSpacing = $rearWheelSpacing;
        return $this;
    }

    /**
     * Gets as recordStatus
     *
     * @return string
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
    }

    /**
     * Sets a new recordStatus
     *
     * @param string $recordStatus
     * @return self
     */
    public function setRecordStatus($recordStatus)
    {
        $this->recordStatus = $recordStatus;
        return $this;
    }

    /**
     * Gets as registrationDate
     *
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * @param string $registrationDate
     * @return self
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Gets as registrationDateString
     *
     * @return string
     */
    public function getRegistrationDateString()
    {
        return $this->registrationDateString;
    }

    /**
     * Sets a new registrationDateString
     *
     * @param string $registrationDateString
     * @return self
     */
    public function setRegistrationDateString($registrationDateString)
    {
        $this->registrationDateString = $registrationDateString;
        return $this;
    }

    /**
     * Gets as registrationNumber
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Sets a new registrationNumber
     *
     * @param string $registrationNumber
     * @return self
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
        return $this;
    }

    /**
     * Gets as scrapDate
     *
     * @return string
     */
    public function getScrapDate()
    {
        return $this->scrapDate;
    }

    /**
     * Sets a new scrapDate
     *
     * @param string $scrapDate
     * @return self
     */
    public function setScrapDate($scrapDate)
    {
        $this->scrapDate = $scrapDate;
        return $this;
    }

    /**
     * Gets as seatCapacity
     *
     * @return int
     */
    public function getSeatCapacity()
    {
        return $this->seatCapacity;
    }

    /**
     * Sets a new seatCapacity
     *
     * @param int $seatCapacity
     * @return self
     */
    public function setSeatCapacity($seatCapacity)
    {
        $this->seatCapacity = $seatCapacity;
        return $this;
    }

    /**
     * Gets as smmtDoorPlanCode
     *
     * @return int
     */
    public function getSmmtDoorPlanCode()
    {
        return $this->smmtDoorPlanCode;
    }

    /**
     * Sets a new smmtDoorPlanCode
     *
     * @param int $smmtDoorPlanCode
     * @return self
     */
    public function setSmmtDoorPlanCode($smmtDoorPlanCode)
    {
        $this->smmtDoorPlanCode = $smmtDoorPlanCode;
        return $this;
    }

    /**
     * Gets as smmtDoorPlanDescription
     *
     * @return int
     */
    public function getSmmtDoorPlanDescription()
    {
        return $this->smmtDoorPlanDescription;
    }

    /**
     * Sets a new smmtDoorPlanDescription
     *
     * @param int $smmtDoorPlanDescription
     * @return self
     */
    public function setSmmtDoorPlanDescription($smmtDoorPlanDescription)
    {
        $this->smmtDoorPlanDescription = $smmtDoorPlanDescription;
        return $this;
    }

    /**
     * Gets as smmtMake
     *
     * @return string
     */
    public function getSmmtMake()
    {
        return $this->smmtMake;
    }

    /**
     * Sets a new smmtMake
     *
     * @param string $smmtMake
     * @return self
     */
    public function setSmmtMake($smmtMake)
    {
        $this->smmtMake = $smmtMake;
        return $this;
    }

    /**
     * Gets as smmtMakeDesc
     *
     * @return string
     */
    public function getSmmtMakeDesc()
    {
        return $this->smmtMakeDesc;
    }

    /**
     * Sets a new smmtMakeDesc
     *
     * @param string $smmtMakeDesc
     * @return self
     */
    public function setSmmtMakeDesc($smmtMakeDesc)
    {
        $this->smmtMakeDesc = $smmtMakeDesc;
        return $this;
    }

    /**
     * Gets as smmtMarketSector
     *
     * @return string
     */
    public function getSmmtMarketSector()
    {
        return $this->smmtMarketSector;
    }

    /**
     * Sets a new smmtMarketSector
     *
     * @param string $smmtMarketSector
     * @return self
     */
    public function setSmmtMarketSector($smmtMarketSector)
    {
        $this->smmtMarketSector = $smmtMarketSector;
        return $this;
    }

    /**
     * Gets as smmtModel
     *
     * @return string
     */
    public function getSmmtModel()
    {
        return $this->smmtModel;
    }

    /**
     * Sets a new smmtModel
     *
     * @param string $smmtModel
     * @return self
     */
    public function setSmmtModel($smmtModel)
    {
        $this->smmtModel = $smmtModel;
        return $this;
    }

    /**
     * Gets as smmtModelDesc
     *
     * @return string
     */
    public function getSmmtModelDesc()
    {
        return $this->smmtModelDesc;
    }

    /**
     * Sets a new smmtModelDesc
     *
     * @param string $smmtModelDesc
     * @return self
     */
    public function setSmmtModelDesc($smmtModelDesc)
    {
        $this->smmtModelDesc = $smmtModelDesc;
        return $this;
    }

    /**
     * Gets as smmtTrim
     *
     * @return string
     */
    public function getSmmtTrim()
    {
        return $this->smmtTrim;
    }

    /**
     * Sets a new smmtTrim
     *
     * @param string $smmtTrim
     * @return self
     */
    public function setSmmtTrim($smmtTrim)
    {
        $this->smmtTrim = $smmtTrim;
        return $this;
    }

    /**
     * Gets as soundDriveBy
     *
     * @return int
     */
    public function getSoundDriveBy()
    {
        return $this->soundDriveBy;
    }

    /**
     * Sets a new soundDriveBy
     *
     * @param int $soundDriveBy
     * @return self
     */
    public function setSoundDriveBy($soundDriveBy)
    {
        $this->soundDriveBy = $soundDriveBy;
        return $this;
    }

    /**
     * Gets as soundEngine
     *
     * @return int
     */
    public function getSoundEngine()
    {
        return $this->soundEngine;
    }

    /**
     * Sets a new soundEngine
     *
     * @param int $soundEngine
     * @return self
     */
    public function setSoundEngine($soundEngine)
    {
        $this->soundEngine = $soundEngine;
        return $this;
    }

    /**
     * Gets as soundStationary
     *
     * @return int
     */
    public function getSoundStationary()
    {
        return $this->soundStationary;
    }

    /**
     * Sets a new soundStationary
     *
     * @param int $soundStationary
     * @return self
     */
    public function setSoundStationary($soundStationary)
    {
        $this->soundStationary = $soundStationary;
        return $this;
    }

    /**
     * Gets as sourceOfData
     *
     * @return string
     */
    public function getSourceOfData()
    {
        return $this->sourceOfData;
    }

    /**
     * Sets a new sourceOfData
     *
     * @param string $sourceOfData
     * @return self
     */
    public function setSourceOfData($sourceOfData)
    {
        $this->sourceOfData = $sourceOfData;
        return $this;
    }

    /**
     * Gets as specialScheme
     *
     * @return string
     */
    public function getSpecialScheme()
    {
        return $this->specialScheme;
    }

    /**
     * Sets a new specialScheme
     *
     * @param string $specialScheme
     * @return self
     */
    public function setSpecialScheme($specialScheme)
    {
        $this->specialScheme = $specialScheme;
        return $this;
    }

    /**
     * Gets as subapprovalnumber
     *
     * @return int
     */
    public function getSubapprovalnumber()
    {
        return $this->subapprovalnumber;
    }

    /**
     * Sets a new subapprovalnumber
     *
     * @param int $subapprovalnumber
     * @return self
     */
    public function setSubapprovalnumber($subapprovalnumber)
    {
        $this->subapprovalnumber = $subapprovalnumber;
        return $this;
    }

    /**
     * Gets as summarySession
     *
     * @return string
     */
    public function getSummarySession()
    {
        return $this->summarySession;
    }

    /**
     * Sets a new summarySession
     *
     * @param string $summarySession
     * @return self
     */
    public function setSummarySession($summarySession)
    {
        $this->summarySession = $summarySession;
        return $this;
    }

    /**
     * Gets as summaryVehRegd
     *
     * @return string
     */
    public function getSummaryVehRegd()
    {
        return $this->summaryVehRegd;
    }

    /**
     * Sets a new summaryVehRegd
     *
     * @param string $summaryVehRegd
     * @return self
     */
    public function setSummaryVehRegd($summaryVehRegd)
    {
        $this->summaryVehRegd = $summaryVehRegd;
        return $this;
    }

    /**
     * Gets as surface
     *
     * @return int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Sets a new surface
     *
     * @param int $surface
     * @return self
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;
        return $this;
    }

    /**
     * Gets as taxClass
     *
     * @return string
     */
    public function getTaxClass()
    {
        return $this->taxClass;
    }

    /**
     * Sets a new taxClass
     *
     * @param string $taxClass
     * @return self
     */
    public function setTaxClass($taxClass)
    {
        $this->taxClass = $taxClass;
        return $this;
    }

    /**
     * Gets as tecDocEngineCode
     *
     * @return string
     */
    public function getTecDocEngineCode()
    {
        return $this->tecDocEngineCode;
    }

    /**
     * Sets a new tecDocEngineCode
     *
     * @param string $tecDocEngineCode
     * @return self
     */
    public function setTecDocEngineCode($tecDocEngineCode)
    {
        $this->tecDocEngineCode = $tecDocEngineCode;
        return $this;
    }

    /**
     * Gets as tecDocManufacturerID
     *
     * @return int
     */
    public function getTecDocManufacturerID()
    {
        return $this->tecDocManufacturerID;
    }

    /**
     * Sets a new tecDocManufacturerID
     *
     * @param int $tecDocManufacturerID
     * @return self
     */
    public function setTecDocManufacturerID($tecDocManufacturerID)
    {
        $this->tecDocManufacturerID = $tecDocManufacturerID;
        return $this;
    }

    /**
     * Gets as tecDocModNr
     *
     * @return int
     */
    public function getTecDocModNr()
    {
        return $this->tecDocModNr;
    }

    /**
     * Sets a new tecDocModNr
     *
     * @param int $tecDocModNr
     * @return self
     */
    public function setTecDocModNr($tecDocModNr)
    {
        $this->tecDocModNr = $tecDocModNr;
        return $this;
    }

    /**
     * Gets as tecDocNumber
     *
     * @return string
     */
    public function getTecDocNumber()
    {
        return $this->tecDocNumber;
    }

    /**
     * Sets a new tecDocNumber
     *
     * @param string $tecDocNumber
     * @return self
     */
    public function setTecDocNumber($tecDocNumber)
    {
        $this->tecDocNumber = $tecDocNumber;
        return $this;
    }

    /**
     * Gets as tecDocType
     *
     * @return string
     */
    public function getTecDocType()
    {
        return $this->tecDocType;
    }

    /**
     * Sets a new tecDocType
     *
     * @param string $tecDocType
     * @return self
     */
    public function setTecDocType($tecDocType)
    {
        $this->tecDocType = $tecDocType;
        return $this;
    }

    /**
     * Gets as tjVikt
     *
     * @return string
     */
    public function getTjVikt()
    {
        return $this->tjVikt;
    }

    /**
     * Sets a new tjVikt
     *
     * @param string $tjVikt
     * @return self
     */
    public function setTjVikt($tjVikt)
    {
        $this->tjVikt = $tjVikt;
        return $this;
    }

    /**
     * Gets as totalWeight
     *
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * @param int $totalWeight
     * @return self
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }

    /**
     * Gets as trailerCoupling
     *
     * @return string
     */
    public function getTrailerCoupling()
    {
        return $this->trailerCoupling;
    }

    /**
     * Sets a new trailerCoupling
     *
     * @param string $trailerCoupling
     * @return self
     */
    public function setTrailerCoupling($trailerCoupling)
    {
        $this->trailerCoupling = $trailerCoupling;
        return $this;
    }

    /**
     * Gets as trailerWeight
     *
     * @return string
     */
    public function getTrailerWeight()
    {
        return $this->trailerWeight;
    }

    /**
     * Sets a new trailerWeight
     *
     * @param string $trailerWeight
     * @return self
     */
    public function setTrailerWeight($trailerWeight)
    {
        $this->trailerWeight = $trailerWeight;
        return $this;
    }

    /**
     * Gets as transmissionCode
     *
     * @return int
     */
    public function getTransmissionCode()
    {
        return $this->transmissionCode;
    }

    /**
     * Sets a new transmissionCode
     *
     * @param int $transmissionCode
     * @return self
     */
    public function setTransmissionCode($transmissionCode)
    {
        $this->transmissionCode = $transmissionCode;
        return $this;
    }

    /**
     * Gets as transmissionType
     *
     * @return string
     */
    public function getTransmissionType()
    {
        return $this->transmissionType;
    }

    /**
     * Sets a new transmissionType
     *
     * @param string $transmissionType
     * @return self
     */
    public function setTransmissionType($transmissionType)
    {
        $this->transmissionType = $transmissionType;
        return $this;
    }

    /**
     * Gets as typeCode
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * @param string $typeCode
     * @return self
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Gets as typeOfLinksDescription
     *
     * @return string
     */
    public function getTypeOfLinksDescription()
    {
        return $this->typeOfLinksDescription;
    }

    /**
     * Sets a new typeOfLinksDescription
     *
     * @param string $typeOfLinksDescription
     * @return self
     */
    public function setTypeOfLinksDescription($typeOfLinksDescription)
    {
        $this->typeOfLinksDescription = $typeOfLinksDescription;
        return $this;
    }

    /**
     * Gets as typeOfRegistrationRecord
     *
     * @return string
     */
    public function getTypeOfRegistrationRecord()
    {
        return $this->typeOfRegistrationRecord;
    }

    /**
     * Sets a new typeOfRegistrationRecord
     *
     * @param string $typeOfRegistrationRecord
     * @return self
     */
    public function setTypeOfRegistrationRecord($typeOfRegistrationRecord)
    {
        $this->typeOfRegistrationRecord = $typeOfRegistrationRecord;
        return $this;
    }

    /**
     * Gets as typeOfVehicle
     *
     * @return string
     */
    public function getTypeOfVehicle()
    {
        return $this->typeOfVehicle;
    }

    /**
     * Sets a new typeOfVehicle
     *
     * @param string $typeOfVehicle
     * @return self
     */
    public function setTypeOfVehicle($typeOfVehicle)
    {
        $this->typeOfVehicle = $typeOfVehicle;
        return $this;
    }

    /**
     * Gets as typeVinCG
     *
     * @return string
     */
    public function getTypeVinCG()
    {
        return $this->typeVinCG;
    }

    /**
     * Sets a new typeVinCG
     *
     * @param string $typeVinCG
     * @return self
     */
    public function setTypeVinCG($typeVinCG)
    {
        $this->typeVinCG = $typeVinCG;
        return $this;
    }

    /**
     * Gets as tyres
     *
     * @return string
     */
    public function getTyres()
    {
        return $this->tyres;
    }

    /**
     * Sets a new tyres
     *
     * @param string $tyres
     * @return self
     */
    public function setTyres($tyres)
    {
        $this->tyres = $tyres;
        return $this;
    }

    /**
     * Gets as variant
     *
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Sets a new variant
     *
     * @param string $variant
     * @return self
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
        return $this;
    }

    /**
     * Gets as vehicleDoors
     *
     * @return string
     */
    public function getVehicleDoors()
    {
        return $this->vehicleDoors;
    }

    /**
     * Sets a new vehicleDoors
     *
     * @param string $vehicleDoors
     * @return self
     */
    public function setVehicleDoors($vehicleDoors)
    {
        $this->vehicleDoors = $vehicleDoors;
        return $this;
    }

    /**
     * Gets as vehicleEngineWithTurbo
     *
     * @return string
     */
    public function getVehicleEngineWithTurbo()
    {
        return $this->vehicleEngineWithTurbo;
    }

    /**
     * Sets a new vehicleEngineWithTurbo
     *
     * @param string $vehicleEngineWithTurbo
     * @return self
     */
    public function setVehicleEngineWithTurbo($vehicleEngineWithTurbo)
    {
        $this->vehicleEngineWithTurbo = $vehicleEngineWithTurbo;
        return $this;
    }

    /**
     * Gets as vehicleHeigth
     *
     * @return int
     */
    public function getVehicleHeigth()
    {
        return $this->vehicleHeigth;
    }

    /**
     * Sets a new vehicleHeigth
     *
     * @param int $vehicleHeigth
     * @return self
     */
    public function setVehicleHeigth($vehicleHeigth)
    {
        $this->vehicleHeigth = $vehicleHeigth;
        return $this;
    }

    /**
     * Gets as vehicleLength
     *
     * @return int
     */
    public function getVehicleLength()
    {
        return $this->vehicleLength;
    }

    /**
     * Sets a new vehicleLength
     *
     * @param int $vehicleLength
     * @return self
     */
    public function setVehicleLength($vehicleLength)
    {
        $this->vehicleLength = $vehicleLength;
        return $this;
    }

    /**
     * Gets as vehicleMark
     *
     * @return string
     */
    public function getVehicleMark()
    {
        return $this->vehicleMark;
    }

    /**
     * Sets a new vehicleMark
     *
     * @param string $vehicleMark
     * @return self
     */
    public function setVehicleMark($vehicleMark)
    {
        $this->vehicleMark = $vehicleMark;
        return $this;
    }

    /**
     * Gets as vehicleModelDescription
     *
     * @return string
     */
    public function getVehicleModelDescription()
    {
        return $this->vehicleModelDescription;
    }

    /**
     * Sets a new vehicleModelDescription
     *
     * @param string $vehicleModelDescription
     * @return self
     */
    public function setVehicleModelDescription($vehicleModelDescription)
    {
        $this->vehicleModelDescription = $vehicleModelDescription;
        return $this;
    }

    /**
     * Gets as vehicleName
     *
     * @return string
     */
    public function getVehicleName()
    {
        return $this->vehicleName;
    }

    /**
     * Sets a new vehicleName
     *
     * @param string $vehicleName
     * @return self
     */
    public function setVehicleName($vehicleName)
    {
        $this->vehicleName = $vehicleName;
        return $this;
    }

    /**
     * Gets as vehiclePropulsionType
     *
     * @return string
     */
    public function getVehiclePropulsionType()
    {
        return $this->vehiclePropulsionType;
    }

    /**
     * Sets a new vehiclePropulsionType
     *
     * @param string $vehiclePropulsionType
     * @return self
     */
    public function setVehiclePropulsionType($vehiclePropulsionType)
    {
        $this->vehiclePropulsionType = $vehiclePropulsionType;
        return $this;
    }

    /**
     * Gets as vehicleSerialNumber
     *
     * @return string
     */
    public function getVehicleSerialNumber()
    {
        return $this->vehicleSerialNumber;
    }

    /**
     * Sets a new vehicleSerialNumber
     *
     * @param string $vehicleSerialNumber
     * @return self
     */
    public function setVehicleSerialNumber($vehicleSerialNumber)
    {
        $this->vehicleSerialNumber = $vehicleSerialNumber;
        return $this;
    }

    /**
     * Gets as vehicleType
     *
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Sets a new vehicleType
     *
     * @param string $vehicleType
     * @return self
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    /**
     * Gets as vehicleWidth
     *
     * @return int
     */
    public function getVehicleWidth()
    {
        return $this->vehicleWidth;
    }

    /**
     * Sets a new vehicleWidth
     *
     * @param int $vehicleWidth
     * @return self
     */
    public function setVehicleWidth($vehicleWidth)
    {
        $this->vehicleWidth = $vehicleWidth;
        return $this;
    }

    /**
     * Gets as vehilceBodyMark
     *
     * @return string
     */
    public function getVehilceBodyMark()
    {
        return $this->vehilceBodyMark;
    }

    /**
     * Sets a new vehilceBodyMark
     *
     * @param string $vehilceBodyMark
     * @return self
     */
    public function setVehilceBodyMark($vehilceBodyMark)
    {
        $this->vehilceBodyMark = $vehilceBodyMark;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as vin
     *
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Sets a new vin
     *
     * @param string $vin
     * @return self
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
        return $this;
    }

    /**
     * Gets as vinVrmIndicator
     *
     * @return int
     */
    public function getVinVrmIndicator()
    {
        return $this->vinVrmIndicator;
    }

    /**
     * Sets a new vinVrmIndicator
     *
     * @param int $vinVrmIndicator
     * @return self
     */
    public function setVinVrmIndicator($vinVrmIndicator)
    {
        $this->vinVrmIndicator = $vinVrmIndicator;
        return $this;
    }

    /**
     * Gets as wheelplan
     *
     * @return string
     */
    public function getWheelplan()
    {
        return $this->wheelplan;
    }

    /**
     * Sets a new wheelplan
     *
     * @param string $wheelplan
     * @return self
     */
    public function setWheelplan($wheelplan)
    {
        $this->wheelplan = $wheelplan;
        return $this;
    }

    /**
     * Gets as wheelplanCode
     *
     * @return string
     */
    public function getWheelplanCode()
    {
        return $this->wheelplanCode;
    }

    /**
     * Sets a new wheelplanCode
     *
     * @param string $wheelplanCode
     * @return self
     */
    public function setWheelplanCode($wheelplanCode)
    {
        $this->wheelplanCode = $wheelplanCode;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param string $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * @param string $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Gets as yearFrom
     *
     * @return string
     */
    public function getYearFrom()
    {
        return $this->yearFrom;
    }

    /**
     * Sets a new yearFrom
     *
     * @param string $yearFrom
     * @return self
     */
    public function setYearFrom($yearFrom)
    {
        $this->yearFrom = $yearFrom;
        return $this;
    }


}

