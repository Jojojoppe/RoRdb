<?php

namespace RoRdb;

use RoRdb\JetBrains\PhpStorm\Deprecated;
use RoRdb\JetBrains\PhpStorm\Immutable;
use RoRdb\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use RoRdb\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use RoRdb\JetBrains\PhpStorm\Internal\TentativeType;
use RoRdb\JetBrains\PhpStorm\Pure;
/**
 * The <b>ReflectionProperty</b> class reports information about a classes
 * properties.
 *
 * @link https://php.net/manual/en/class.reflectionproperty.php
 */
class ReflectionProperty implements \Reflector
{
    /**
     * @var string Name of the property, same as calling the {@see ReflectionProperty::getName()} method
     */
    #[\JetBrains\PhpStorm\Immutable]
    #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $name;
    /**
     * @var string Fully qualified class name where this property was defined
     */
    #[\JetBrains\PhpStorm\Immutable]
    #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $class;
    /**
     * @var bool
     * @since 8.1
     */
    #[\JetBrains\PhpStorm\Immutable]
    public bool $isReadonly;
    /**
     * Indicates that the property is static.
     *
     * @link https://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants.is-static
     */
    public const IS_STATIC = 16;
    /**
     * Indicates that the property is public.
     *
     * @link https://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants.is-public
     */
    public const IS_PUBLIC = 1;
    /**
     * Indicates that the property is protected.
     *
     * @link https://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants.is-protected
     */
    public const IS_PROTECTED = 2;
    /**
     * Indicates that the property is private.
     *
     * @link https://www.php.net/manual/en/class.reflectionproperty.php#reflectionproperty.constants.is-private
     */
    public const IS_PRIVATE = 4;
    /**
     * @since 8.1
     */
    public const IS_READONLY = 5;
    /**
     * Construct a ReflectionProperty object
     *
     * @link https://php.net/manual/en/reflectionproperty.construct.php
     * @param string|object $class The class name, that contains the property.
     * @param string $property The name of the property being reflected.
     * @throws ReflectionException if the class or property does not exist.
     */
    public function __construct(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'object|string'], default: '')] $class, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $property)
    {
    }
    /**
     * Export
     *
     * @link https://php.net/manual/en/reflectionproperty.export.php
     * @param mixed $class The reflection to export.
     * @param string $name The property name.
     * @param bool $return Setting to {@see true} will return the export, as
     * opposed to emitting it. Setting to {@see false} (the default) will do the
     * opposite.
     * @return string|null
     * @removed 8.0
     */
    #[\JetBrains\PhpStorm\Deprecated(since: '7.4')]
    public static function export($class, $name, $return = \false)
    {
    }
    /**
     * To string
     *
     * @link https://php.net/manual/en/reflectionproperty.tostring.php
     * @return string
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function __toString() : string
    {
    }
    /**
     * Gets property name
     *
     * @link https://php.net/manual/en/reflectionproperty.getname.php
     * @return string The name of the reflected property.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getName() : string
    {
    }
    /**
     * Gets value
     *
     * @link https://php.net/manual/en/reflectionproperty.getvalue.php
     * @param object|null $object If the property is non-static an object must be
     * provided to fetch the property from. If you want to fetch the default
     * property without providing an object use {@see ReflectionClass::getDefaultProperties}
     * instead.
     * @return mixed The current value of the property.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getValue(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'object|null'], default: '')] $object = null) : mixed
    {
    }
    /**
     * Set property value
     *
     * @link https://php.net/manual/en/reflectionproperty.setvalue.php
     * @param mixed $objectOrValue If the property is non-static an object must
     * be provided to change the property on. If the property is static this
     * parameter is left out and only $value needs to be provided.
     * @param mixed $value The new value.
     * @return void No value is returned.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function setValue(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $objectOrValue, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'mixed'], default: '')] $value = null) : void
    {
    }
    /**
     * Checks if property is public
     *
     * @link https://php.net/manual/en/reflectionproperty.ispublic.php
     * @return bool Return {@see true} if the property is public, {@see false} otherwise.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isPublic() : bool
    {
    }
    /**
     * Checks if property is private
     *
     * @link https://php.net/manual/en/reflectionproperty.isprivate.php
     * @return bool Return {@see true} if the property is private, {@see false} otherwise.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isPrivate() : bool
    {
    }
    /**
     * Checks if property is protected
     *
     * @link https://php.net/manual/en/reflectionproperty.isprotected.php
     * @return bool Returns {@see true} if the property is protected, {@see false} otherwise.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isProtected() : bool
    {
    }
    /**
     * Checks if property is static
     *
     * @link https://php.net/manual/en/reflectionproperty.isstatic.php
     * @return bool Retruns {@see true} if the property is static, {@see false} otherwise.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isStatic() : bool
    {
    }
    /**
     * Checks if default value
     *
     * @link https://php.net/manual/en/reflectionproperty.isdefault.php
     * @return bool Returns {@see true} if the property was declared at
     * compile-time, or {@see false} if it was created at run-time.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isDefault() : bool
    {
    }
    /**
     * Gets modifiers
     *
     * @link https://php.net/manual/en/reflectionproperty.getmodifiers.php
     * @return int A numeric representation of the modifiers.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getModifiers() : int
    {
    }
    /**
     * Gets declaring class
     *
     * @link https://php.net/manual/en/reflectionproperty.getdeclaringclass.php
     * @return ReflectionClass A {@see ReflectionClass} object.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getDeclaringClass() : \ReflectionClass
    {
    }
    /**
     * Gets doc comment
     *
     * @link https://php.net/manual/en/reflectionproperty.getdoccomment.php
     * @return string|false The doc comment if it exists, otherwise {@see false}
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getDocComment() : string|false
    {
    }
    /**
     * Set property accessibility
     *
     * @link https://php.net/manual/en/reflectionproperty.setaccessible.php
     * @param bool $accessible A boolean {@see true} to allow accessibility, or {@see false}
     * @return void No value is returned.
     */
    #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable(to: "8.0")]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function setAccessible(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $accessible) : void
    {
    }
    /**
     * Set property accessibility
     * This method is no-op starting from PHP 8.1
     *
     * @link https://php.net/manual/en/reflectionproperty.setaccessible.php
     * @param bool $accessible A boolean {@see true} to allow accessibility, or {@see false}
     * @return void No value is returned.
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable(from: "8.1")]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function setAccessible(bool $accessible) : void
    {
    }
    /**
     * Gets property type
     *
     * @link https://php.net/manual/en/reflectionproperty.gettype.php
     * @return ReflectionNamedType|ReflectionUnionType|null Returns a {@see ReflectionType} if the
     * property has a type, and {@see null} otherwise.
     * @since 7.4
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'ReflectionNamedType|ReflectionUnionType|null', '8.1' => 'ReflectionNamedType|ReflectionUnionType|ReflectionIntersectionType|null'], default: 'ReflectionNamedType|null')]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getType() : ?\ReflectionType
    {
    }
    /**
     * Checks if property has type
     *
     * @link https://php.net/manual/en/reflectionproperty.hastype.php
     * @return bool Returns {@see true} if a type is specified, {@see false} otherwise.
     * @since 7.4
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function hasType() : bool
    {
    }
    /**
     * Checks if property is initialized
     *
     * @link https://php.net/manual/en/reflectionproperty.isinitialized.php
     * @param object|null $object If the property is non-static an object must be provided to fetch the property from.
     * @return bool Returns {@see false} for typed properties prior to initialization, and for properties that have
     * been explicitly {@see unset()}. For all other properties {@see true} will be returned.
     * @since 7.4
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function isInitialized(?object $object = null) : bool
    {
    }
    /**
     * Returns information about whether the property was promoted.
     *
     * @return bool Returns {@see true} if the property was promoted or {@see false} instead.
     * @since 8.0
     */
    #[\JetBrains\PhpStorm\Pure]
    public function isPromoted() : bool
    {
    }
    /**
     * Clone
     *
     * @link https://php.net/manual/en/reflectionproperty.clone.php
     * @return void
     */
    private final function __clone() : void
    {
    }
    /**
     * @return bool
     * @since 8.0
     */
    public function hasDefaultValue() : bool
    {
    }
    /**
     * @return mixed
     * @since 8.0
     */
    #[\JetBrains\PhpStorm\Pure]
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function getDefaultValue() : mixed
    {
    }
    /**
     * @param null|string $name
     * @param int $flags
     * @return ReflectionAttribute[]
     * @since 8.0
     */
    #[\JetBrains\PhpStorm\Pure]
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
    /**
     * @return bool
     * @since 8.1
     */
    public function isReadOnly() : bool
    {
    }
}
