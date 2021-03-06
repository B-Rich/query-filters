<?php

namespace Cerbero\QueryFilters;

/**
 * Dummy class to test query filters.
 *
 * @author    Andrea Marco Sartori
 */
class TestFilters extends QueryFilters
{
    /**
     * List of called filters, for testing purposes.
     *
     * @author  Andrea Marco Sartori
     * @var     array
     */
    public $filters = [];

    /**
     * Dummy filter requiring a value.
     *
     * @author    Andrea Marco Sartori
     * @param    mixed    $value
     * @return    void
     */
    public function foo($value)
    {
        $this->filters['foo'] = $value;
    }

    /**
     * Dummy filter requiring a falsy value.
     *
     * @author    Andrea Marco Sartori
     * @param    integer    $value
     * @return    void
     */
    public function bar($value)
    {
        $this->filters['bar'] = $value;
    }

    /**
     * Dummy filter requiring no values.
     *
     * @author    Andrea Marco Sartori
     * @return    void
     */
    public function baz()
    {
        $this->filters['baz'] = '';
    }

    /**
     * Dummy filter to test query strings with dashes and underscores.
     *
     * @author    Andrea Marco Sartori
     * @return    void
     */
    public function fooBarBaz()
    {
        $this->filters['foo-bar_baz'] = '';
    }
}
