<?php

namespace App\ApiBundle\Controller;

use App\ApiBundle\Entity\Example;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ExampleController extends AbstractFOSRestController
{
    /**
     * This method is a simple parsing output example
     *
     * @Rest\View(serializerGroups={"getExample"})
     */
    public function getFirstAction()
    {
        $example = new Example();
        $example->setName('Example 1')
            ->setAge(5)
            ->setDate(new \DateTime())
            ->setLoveCamelCase(true);
        return $example;

    }

    /**
     * This example show you how to serialize and autobind an entity from a json in request body
     *
     * @param Example $example
     * @return Example
     *
     * @Rest\View(serializerGroups={"getExample"})
     * @ParamConverter(
     *     "example",
     *     class="App\ApiBundle\Entity\Example",
     *     converter="fos_rest.request_body",
     *     options={
     *     "deserializationContext"={
     *          "groups"={"postExample"}
     *          }
     *     })
     */
    public function postExampleAction(Example $example)
    {
        return $example;
    }

    /**
     * This example show you how to find an element from database
     *
     * @param Example $example
     * @return Example
     *
     * @Rest\View(serializerGroups={"getExample"})
     */
    public function getExampleAction(Example $example)
    {
        return $example;
    }
}
