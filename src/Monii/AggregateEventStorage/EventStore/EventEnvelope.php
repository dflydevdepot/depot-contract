<?php

namespace Monii\AggregateEventStorage\EventStore;

use Monii\AggregateEventStorage\Contract\Contract;

class EventEnvelope
{
    /**
     * @var Contract
     */
    private $eventType;

    /**
     * @var string
     */
    private $eventId;

    /**
     * @var object
     */
    private $event;

    /**
     * @var Contract
     */
    private $metadataType;

    /**
     * @var object
     */
    private $metadata;

    public function __construct(
        Contract $eventType,
        $eventId,
        $event,
        $metadataType = null,
        $metadata = null
    ) {
        $this->eventType = $eventType;
        $this->eventId = $eventId;
        $this->event = $event;
        $this->metadataType = $metadataType;
        $this->metadata = $metadata;
    }

    /**
     * @return Contract
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @return object
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return Contract|null
     */
    public function getMetadataType()
    {
        return $this->metadataType;
    }

    /**
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
