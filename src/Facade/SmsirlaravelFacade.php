<?php

namespace Cryptommer\Smsirlaravel\Fcade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cryptommer\Smsirlaravel\Skeleton\SkeletonClass
 */
class SmsirlaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'smsirlaravel';
    }
}
