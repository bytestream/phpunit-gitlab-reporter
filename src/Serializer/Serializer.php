<?php declare(strict_types=1);

namespace SupportPal\PHPUnitGitLabReporter\Serializer;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer as JMSSerializer;
use JMS\Serializer\SerializerBuilder;
use SupportPal\PHPUnitGitLabReporter\Schema\Testsuites;

class Serializer
{
    /**
     * Namespace used by goetas-webservices/xsd2php, also specified in config.yml
     *
     * @var string
     */
    private $namespace = 'SupportPal\PHPUnitGitLabReporter\Schema';

    public function toXml(Testsuites $suites): string
    {
        return $this->instance()->serialize($suites, 'xml');
    }

    protected function instance(): JMSSerializer
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__.'/../../resources/metadata', $this->namespace);
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler); // XMLSchema date handling
        });

        return $serializerBuilder->build();
    }
}
