<?php

namespace liyansasongko\Calculator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Skeleton\SkeletonClass
 */
class CalculatorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'calculator';
    }
}
