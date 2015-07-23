<?php

namespace Monii\AggregateEventStorage\EventStore\Persistence\Adapter\InMemory;

use Monii\AggregateEventStorage\Contract\Contract;
use Monii\AggregateEventStorage\EventStore\StreamIdentity\StreamId;
use Monii\AggregateEventStorage\EventStore\Transaction\CommitId;

class InMemoryPersistenceRecord
{
    /**
     * @var CommitId
     */
    public $commitId;

    /**
     * @var \DateTimeImmutable
     */
    public $utcComittedTime;

    /**
     * @var StreamId
     */
    public $streamId;

    /**
     * @var Contract
     */
    public $aggregateType;

    /**
     * @var string
     */
    public $aggregateId;

    /**
     * @var int
     */
    public $aggregateVersion;

    /**
     * @var Contract
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var object
     */
    public $event;

    /**
     * @var Contract|null
     */
    public $metadataType;

    /**
     * @var object|null
     */
    public $metadata;
}
