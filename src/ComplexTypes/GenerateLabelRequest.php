<?php namespace DivideBV\Postnl\ComplexTypes;

class GenerateLabelRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var Shipment $Shipment
     */
    protected $Shipment = null;

    /**
     * @param Message $Message
     * @param Customer $Customer
     * @param Shipment $Shipment
     */
    public function __construct(Message $Message, Customer $Customer, Shipment $Shipment)
    {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setShipment($Shipment);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return GenerateLabelRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param Customer $Customer
     * @return GenerateLabelRequest
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param Shipment $Shipment
     * @return GenerateLabelRequest
     */
    public function setShipment($Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
