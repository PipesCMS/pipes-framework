<?php

namespace Pipes\Tests\Spies\Stream;

use Pipes\Stream\Contracts\StreamContainerContract;
use Pipes\Tests\Spies\Spy;
use Pipes\Stream\Action;

class StreamContainerSpy implements StreamContainerContract
{
    use Spy;

    /**
     * Push hook method mock
     * 
     * @param string $hook
     * @return void
     */
    public function pushHook(string $hook): void
    {
        $this->addCall('pushHook', [$hook]);
    }

    /**
     * getBeforeHooks method mock
     * 
     * @param Action $action
     * @return void
     */
    public function getBeforeHooks(Action $action): array
    {
        $this->addCall('pushHook', [$action]);

        return [];
    }

    /**
     * getAfterHooks method mock
     * 
     * @param Action $action
     * @return void
     */
    public function getAfterHooks(Action $action): array
    {
        $this->addCall('getAfterHooks', [$action]);

        return [];
    }

    /**
     * getHooks method mock
     * 
     * @param Action $action
     * @return void
     */
    public function getHooks(Action $action): array
    {
        $this->addCall('getBeforeHooks', [$action]);

        return [];
    }
}