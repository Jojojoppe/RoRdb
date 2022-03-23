<?php

namespace RoRdb;

// Start of password v.
/**
 * <p>
 * <b>PASSWORD_BCRYPT</b> is used to create new password
 * hashes using the <b>CRYPT_BLOWFISH</b> algorithm.
 * </p>
 * <p>
 * This will always result in a hash using the "$2y$" crypt format,
 * which is always 60 characters wide.
 * </p>
 * <p>
 * Supported Options:
 * </p>
 * <ul>
 * <li>
 * <p>
 * <em>salt</em> - to manually provide a salt to use when hashing the password.
 * Note that this will override and prevent a salt from being automatically generated.
 * </p>
 * <p>
 * If omitted, a random salt will be generated by {@link "https://secure.php.net/manual/en/function.password-hash.php" password_hash()} for
 * each password hashed. This is the intended mode of operation.
 * </p>
 * </li>
 * <li>
 * <p>
 * <em>cost</em> - which denotes the algorithmic cost that should be used.
 * Examples of these values can be found on the {@link "https://secure.php.net/manual/en/function.crypt.php crypt()"} page.
 * </p>
 * <p>
 * If omitted, a default value of <em>10</em> will be used. This is a good
 * baseline cost, but you may want to consider increasing it depending on your hardware.
 * </p>
 * </li>
 * </ul>
 * @link https://secure.php.net/manual/en/password.constants.php
 */
use RoRdb\JetBrains\PhpStorm\ArrayShape;
use RoRdb\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
\define("PASSWORD_DEFAULT", "2y");
/**
 * <p>
 * The default cost used for the BCRYPT hashing algorithm.
 * </p>
 * <p>
 * Values for this constant:
 * </p>
 * <ul>
 * <li>
 * PHP 5.6.0 - <b>PASSWORD_BCRYPT_DEFAULT_COST</b>
 * </li>
 * </ul>
 */
\define("PASSWORD_BCRYPT_DEFAULT_COST", 10);
/**
 * <p>
 * The default algorithm to use for hashing if no algorithm is provided.
 * This may change in newer PHP releases when newer, stronger hashing
 * algorithms are supported.
 * </p>
 * <p>
 * It is worth noting that over time this constant can (and likely will)
 * change. Therefore you should be aware that the length of the resulting
 * hash can change. Therefore, if you use <b>PASSWORD_DEFAULT</b>
 * you should store the resulting hash in a way that can store more than 60
 * characters (255 is the recommended width).
 * </p>
 * <p>
 * Values for this constant:
 * </p>
 * <ul>
 * <li>
 * PHP 5.5.0 - <b>PASSWORD_BCRYPT</b>
 * </li>
 * </ul>
 */
\define("PASSWORD_BCRYPT", '2y');
/**
 * PASSWORD_ARGON2I is used to create new password hashes using the Argon2i algorithm.
 *
 * Supported Options:
 * <ul>
 * <li>memory_cost (integer) - Maximum memory (in bytes) that may be used to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_MEMORY_COST.</li>
 *
 * <li>time_cost (integer) - Maximum amount of time it may take to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_TIME_COST.</li>
 *
 * <li>threads (integer) - Number of threads to use for computing the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_THREADS.</li>
 * </ul>
 * Available as of PHP 7.2.0.
 * @since 7.2
 */
\define('PASSWORD_ARGON2I', 'argon2i');
/**
 * PASSWORD_ARGON2ID is used to create new password hashes using the Argon2id algorithm.
 *
 * Supported Options:
 * <ul>
 * <li>memory_cost (integer) - Maximum memory (in bytes) that may be used to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_MEMORY_COST.</li>
 *
 * <li>time_cost (integer) - Maximum amount of time it may take to compute the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_TIME_COST.</li>
 *
 * <li>threads (integer) - Number of threads to use for computing the Argon2 hash. Defaults to PASSWORD_ARGON2_DEFAULT_THREADS.</li>
 * </ul>
 * Available as of PHP 7.3.0.
 * @since 7.3
 */
\define('PASSWORD_ARGON2ID', 'argon2id');
/**
 * Default amount of memory in bytes that Argon2lib will use while trying to compute a hash.
 * Available as of PHP 7.2.0.
 * @since 7.2
 */
\define('PASSWORD_ARGON2_DEFAULT_MEMORY_COST', 65536);
/**
 * Default amount of time that Argon2lib will spend trying to compute a hash.
 * Available as of PHP 7.2.0.
 * @since 7.2
 */
\define('PASSWORD_ARGON2_DEFAULT_TIME_COST', 4);
/**
 * Default number of threads that Argon2lib will use.
 * Available as of PHP 7.2.0.
 * @since 7.2
 */
\define('PASSWORD_ARGON2_DEFAULT_THREADS', 1);
/**
 * @since 7.4
 */
\define('PASSWORD_ARGON2_PROVIDER', 'standard');
/**
 * Returns information about the given hash
 * @link https://secure.php.net/manual/en/function.password-get-info.php
 * @param string $hash A hash created by password_hash().
 * @return array|null Returns an associative array with three elements:
 * <ul>
 * <li>
 * <em>algo</em>, which will match a
 * {@link https://secure.php.net/manual/en/password.constants.php password algorithm constant}
 * </li>
 * <li>
 * <em>algoName</em>, which has the human readable name of the algorithm
 * </li>
 * <li>
 * <em>options</em>, which includes the options
 * provided when calling  @link https://secure.php.net/manual/en/function.password-hash.php" password_hash()
 * </li>
 * </ul>
 * @since 5.5
 */
#[\JetBrains\PhpStorm\ArrayShape(["algo" => "int", "algoName" => "string", "options" => "array"])]
#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'array'], default: '?array')]
function password_get_info(string $hash)
{
}
/**
 * (PHP 5 &gt;= 5.5.0, PHP 5)<br/>
 *
 * Creates a password hash.
 * @link https://secure.php.net/manual/en/function.password-hash.php
 * @param string $password The user's password.
 * @param string|int|null $algo A <a href="https://secure.php.net/manual/en/password.constants.php" class="link">password algorithm constant</a>  denoting the algorithm to use when hashing the password.
 * @param array $options [optional] <p> An associative array containing options. See the <a href="https://secure.php.net/manual/en/password.constants.php" class="link">password algorithm constants</a> for documentation on the supported options for each algorithm.</p>
 * If omitted, a random salt will be created and the default cost will be used.
 * <b>Warning<b>
 * <p>
 * The salt option has been deprecated as of PHP 7.0.0. It is now
 * preferred to simply use the salt that is generated by default.
 * </p>
 * @return string|false|null Returns the hashed password, or FALSE on failure, or null if the algorithm is invalid
 * @since 5.5
 */
#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "string"], default: "string|false|null")]
function password_hash(string $password, string|int|null $algo, array $options = [])
{
}
/**
 * Checks if the given hash matches the given options.
 * @link https://secure.php.net/manual/en/function.password-needs-rehash.php
 * @param string $hash A hash created by password_hash().
 * @param string|int|null $algo A <a href="https://secure.php.net/manual/en/password.constants.php" class="link">password algorithm constant</a> denoting the algorithm to use when hashing the password.
 * @param array $options [optional] <p> An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.</p>
 * @return bool Returns TRUE if the hash should be rehashed to match the given algo and options, or FALSE otherwise.
 * @since 5.5
 */
function password_needs_rehash(string $hash, string|int|null $algo, array $options = []) : bool
{
}
/**
 * Checks if the given hash matches the given options.
 * @link https://secure.php.net/manual/en/function.password-verify.php
 * @param string $password The user's password.
 * @param string $hash A hash created by password_hash().
 * @return bool Returns TRUE if the password and hash match, or FALSE otherwise.
 * @since 5.5
 */
function password_verify(string $password, string $hash) : bool
{
}
/**
 * Return a complete list of all registered password hashing algorithms.
 * @return string[]
 * @since 7.4
 */
function password_algos() : array
{
}
// End of password v.
