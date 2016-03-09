<?php

namespace Application\Hydrator\Device\Fieldset;

use Zend\Hydrator\ClassMethods;

/**
 * Class Sensor
 * @package Application\Hydrator\Device\Fieldset
 */
class Bank extends ClassMethods
{
    /**
     * Extract values from an object with class methods
     *
     * Extracts the getter/setter of the given $object.
     *
     * @param  object $object
     * @return array
     * @throws Exception\BadMethodCallException for a non-object $object
     */
    public function extract($object)
    {
        $data = parent::extract($object); // TODO: Change the autogenerated stub

        return $data;
    }

}