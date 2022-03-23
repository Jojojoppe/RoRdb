<?php

namespace RoRdb;

use RoRdb\JetBrains\PhpStorm\Immutable;
use RoRdb\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use RoRdb\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use RoRdb\JetBrains\PhpStorm\Internal\TentativeType;
use RoRdb\JetBrains\PhpStorm\Pure;
/**
 * A parent class to <b>ReflectionFunction</b>, read its
 * description for details.
 *
 * @link https://php.net/manual/en/class.reflectionfunctionabstract.php
 */
abstract class ReflectionFunctionAbstract implements \Reflector
{
    /**
     * @var string Name of the function, same as calling the {@see ReflectionFunctionAbstract::getName()} method
     */
    #[\JetBrains\PhpStorm\Immutable]
    #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $name;
    /**
     * Clones function
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.clone.php
     * @return void
     */
    private final function __clone() : void
    {
    }
    /**
     * Checks if function in namespace
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.innamespace.php
     * @return bool {@see true} if it's in a namespace, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function inNamespace() : bool
    {
    }
    /**
     * Checks if closure
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.isclosure.php
     * @return bool {@see true} if it's a closure, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isClosure() : bool
    {
    }
    /**
     * Checks if deprecated
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
     * @return bool {@see true} if it's deprecated, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isDeprecated() : bool
    {
    }
    /**
     * Checks if is internal
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.isinternal.php
     * @return bool {@see true} if it's internal, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isInternal() : bool
    {
    }
    /**
     * Checks if user defined
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
     * @return bool {@see true} if it's user-defined, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isUserDefined() : bool
    {
    }
    /**
     * Returns whether this function is a generator
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
     * @return bool {@see true} if the function is generator, otherwise {@see false}
     * @since 5.5
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isGenerator() : bool
    {
    }
    /**
     * Returns whether this function is variadic
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
     * @return bool {@see true} if the function is variadic, otherwise {@see false}
     * @since 5.6
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isVariadic() : bool
    {
    }
    /**
     * Returns this pointer bound to closure
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
     * @return object|null Returns $this pointer or {@see null} in case of an error.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getClosureThis() : ?object
    {
    }
    /**
     * Returns the scope associated to the closure
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
     * @return ReflectionClass|null Returns the class on success or {@see null}
     * on failure.
     * @since 5.4
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getClosureScopeClass() : ?\ReflectionClass
    {
    }
    /**
     * Gets doc comment
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
     * @return string|false The doc comment if it exists, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getDocComment() : string|false
    {
    }
    /**
     * Gets end line number
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getendline.php
     * @return int|false The ending line number of the user defined function,
     * or {@see false} if unknown.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getEndLine() : int|false
    {
    }
    /**
     * Gets extension info
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getextension.php
     * @return ReflectionExtension|null The extension information, as a
     * {@see ReflectionExtension} object or {@see null} instead.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getExtension() : ?\ReflectionExtension
    {
    }
    /**
     * Gets extension name
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
     * @return string|false The extension's name or {@see false} instead.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getExtensionName() : string|false
    {
    }
    /**
     * Gets file name
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getfilename.php
     * @return string|false The file name or {@see false} in case of error.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getFileName() : string|false
    {
    }
    /**
     * Gets function name
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getname.php
     * @return string The name of the function.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getName() : string
    {
    }
    /**
     * Gets namespace name
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
     * @return string The namespace name.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getNamespaceName() : string
    {
    }
    /**
     * Gets number of parameters
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
     * @return int The number of parameters.
     * @since 5.0.3
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getNumberOfParameters() : int
    {
    }
    /**
     * Gets number of required parameters
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
     * @return int The number of required parameters.
     * @since 5.0.3
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getNumberOfRequiredParameters() : int
    {
    }
    /**
     * Gets parameters
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getparameters.php
     * @return ReflectionParameter[] The parameters, as a ReflectionParameter objects.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getParameters() : array
    {
    }
    /**
     * Gets the specified return type of a function
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
     * @return ReflectionType|null Returns a {@see ReflectionType} object if a
     * return type is specified, {@see null} otherwise.
     * @since 7.0
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['7.1' => 'ReflectionNamedType|null', '8.0' => 'ReflectionNamedType|ReflectionUnionType|null', '8.1' => 'ReflectionNamedType|ReflectionUnionType|ReflectionIntersectionType|null'], default: 'ReflectionType|null')]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getReturnType() : ?\ReflectionType
    {
    }
    /**
     * Gets function short name
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getshortname.php
     * @return string The short name of the function.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getShortName() : string
    {
    }
    /**
     * Gets starting line number
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getstartline.php
     * @return int|false The starting line number or {@see false} if unknown.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getStartLine() : int|false
    {
    }
    /**
     * Gets static variables
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
     * @return array An array of static variables.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getStaticVariables() : array
    {
    }
    /**
     * Checks if returns reference
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
     * @return bool {@see true} if it returns a reference, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function returnsReference() : bool
    {
    }
    /**
     * Checks if the function has a specified return type
     *
     * @link https://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
     * @return bool Returns {@see true} if the function is a specified return
     * type, otherwise {@see false}.
     * @since 7.0
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function hasReturnType() : bool
    {
    }
    /**
     * Returns an array of function attributes.
     *
     * @param string|null $name Name of an attribute class
     * @param int $flags Сriteria by which the attribute is searched.
     * @return ReflectionAttribute[]
     * @since 8.0
     */
    #[\JetBrains\PhpStorm\Pure]
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
    #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable('8.1')]
    #[\JetBrains\PhpStorm\Pure]
    public function getClosureUsedVariables() : array
    {
    }
    #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable('8.1')]
    #[\JetBrains\PhpStorm\Pure]
    public function hasTentativeReturnType() : bool
    {
    }
    #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable('8.1')]
    #[\JetBrains\PhpStorm\Pure]
    public function getTentativeReturnType() : ?\ReflectionType
    {
    }
    #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable('8.1')]
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isStatic() : bool
    {
    }
}
