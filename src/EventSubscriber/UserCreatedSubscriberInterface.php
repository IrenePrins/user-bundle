<?php

declare(strict_types=1);

/*
 * This file is part of the user bundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\UserBundle\EventSubscriber;

use ConnectHolland\UserBundle\Event\UserCreatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

interface UserCreatedSubscriberInterface extends EventSubscriberInterface
{
    public function onUserCreated(UserCreatedEvent $event): void;
}
