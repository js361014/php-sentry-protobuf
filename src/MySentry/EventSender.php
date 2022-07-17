<?php

namespace PhpSentryProtobuf\MySentry;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Sentry\Event;
use Sentry\HttpClient\HttpClientFactory;
use Sentry\Options;
use Sentry\Transport\DefaultTransportFactory;
use Sentry\Transport\TransportInterface;

class EventSender
{
    private $sdkIdentifier;

    /**
     * @var LoggerInterface The PSR-3 logger
     */
    private $logger;

    /**
     * @var string The SDK version of the Client
     */
    private $sdkVersion;

    /**
     * @var TransportInterface The transport
     */
    private $transport;


    public function __construct(Options $options, $sdkVersion, $sdkIdentifier)
    {
        $this->sdkVersion = $sdkVersion;
        $this->sdkIdentifier = $sdkIdentifier;
        $this->logger = new NullLogger();
        $transportFactory = $this->createDefaultTransportFactory();
        $this->transport = $transportFactory->create($options);
    }



    /**
     * Creates a new instance of the {@see DefaultTransportFactory} factory.
     */
    private function createDefaultTransportFactory(): DefaultTransportFactory
    {
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $httpClientFactory = new HttpClientFactory(
            Psr17FactoryDiscovery::findUriFactory(),
            Psr17FactoryDiscovery::findResponseFactory(),
            $streamFactory,
            null,
            $this->sdkIdentifier,
            $this->sdkVersion
        );

        return new DefaultTransportFactory(
            $streamFactory,
            Psr17FactoryDiscovery::findRequestFactory(),
            $httpClientFactory,
            $this->logger
        );
    }


    function sendEvent(Event $event)
    {
        $this->transport->send($event)->wait();
    }

}
