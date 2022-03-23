<?php

namespace RoRdb;

use RoRdb\JetBrains\PhpStorm\Deprecated;
use RoRdb\JetBrains\PhpStorm\Immutable;
use RoRdb\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use RoRdb\JetBrains\PhpStorm\Internal\TentativeType;
use RoRdb\JetBrains\PhpStorm\Pure;
/**
 * The <b>ReflectionFunction</b> class reports
 * information about a function.
 *
 * @link https://php.net/manual/en/class.reflectionfunction.php
 */
class ReflectionFunction extends \ReflectionFunctionAbstract
{
    /**
     * @var string Function name, same as calling the {@see ReflectionFunction::getName()} method
     */
    #[\JetBrains\PhpStorm\Immutable]
    public $name;
    /**
     * Indicates deprecated functions.
     *
     * @link https://www.php.net/manual/en/class.reflectionfunction.php#reflectionfunction.constants.is-deprecated
     */
    public const IS_DEPRECATED = 2048;
    /**
     * Constructs a ReflectionFunction object
     *
     * @link https://php.net/manual/en/reflectionfunction.construct.php
     * @param string|Closure $function The name of the function to reflect or a closure.
     * @throws ReflectionException if the function does not exist.
     */
    public function __construct(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'Closure|string'], default: '')] $function)
    {
    }
    /**
     * Returns the string representation of the ReflectionFunction object.
     *
     * @link https://php.net/manual/en/reflectionfunction.tostring.php
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function __toString() : string
    {
    }
    /**
     * Exports function
     *
     * @link https://php.net/manual/en/reflectionfunction.export.php
     * @param string $name The reflection to export.
     * @param bool $return Setting to {@see true} will return the
     * export, as opposed to emitting it. Setting to {@see false} (the default)
     * will do the opposite.
     * @return string|null If the $return parameter is set to {@see true}, then
     * the export is returned as a string, otherwise {@see null} is returned.
     * @removed 8.0
     */
    #[\JetBrains\PhpStorm\Deprecated(since: '7.4')]
    public static function export($name, $return = \false)
    {
    }
    /**
     * Checks if function is disabled
     *
     * @link https://php.net/manual/en/reflectionfunction.isdisabled.php
     * @return bool {@see true} if it's disable, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Deprecated(since: '8.0')]
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isDisabled() : bool
    {
    }
    /**
     * Invokes function
     *
     * @link https://www.php.net/manual/en/reflectionfunction.invoke.php
     * @param mixed ...$args [optional] The passed in argument list. It accepts a
     * variable number of arguments which are passed to the function much
     * like {@see call_user_func} is.
     * @return mixed Returns the result of the invoked function call.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function invoke(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] ...$args) : mixed
    {
    }
    /**
     * Invokes function args
     *
     * @link https://php.net/manual/en/reflectionfunction.invokeargs.php
     * @param array $args The passed arguments to the function as an array, much
     * like {@see call_user_func_array} works.
     * @return mixed the result of the invoked function
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function invokeArgs(array $args) : mixed
    {
    }
    /**
     * Returns a dynamically created closure for the function
     *
     * @link https://php.net/manual/en/reflectionfunction.getclosure.php
     * @return Closure Returns {@see Closure} or {@see null} in case of an error.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getClosure() : \Closure
    {
    }
}
