<?php

namespace GraphAware\Neo4j\OGM\Annotations;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Relationship
{
    /**
     * @var string
     */
    protected $targetEntity;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $direction;

    /**
     * @var string
     */
    protected $mappedBy;

    /**
     * @var bool
     */
    protected $collection = false;

    public function __construct(array $values)
    {
        $this->targetEntity = $values['targetEntity'];
        $this->type = $values['type'];
        $this->direction = $values['direction'];
        if (isset($values['collection']) && true === $values['collection']) {
            $this->collection = true;
        }
        if (isset($values['mappedBy'])) {
            $this->mappedBy = $values['mappedBy'];
        }
    }

    /**
     * @return string
     */
    public function getTargetEntity()
    {
        return $this->targetEntity;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @return bool
     */
    public function hasMappedBy()
    {
        return null !== $this->mappedBy;
    }

    /**
     * @return string
     */
    public function getMappedBy()
    {
        return $this->mappedBy;
    }
}