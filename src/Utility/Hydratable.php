<?php
/**
 * Interface for objects which require additional processing following instantiation.
 *
 * This interface is similar to OOPS-WP's "Runnable" interface, but the distinction is that
 * the intent of the `run` method of that interface is to signify the start of some kind of process.
 *
 * In contrast, `hydrate` means to simply finish populating an object with its data. For example, imagine
 * an object which accepts a basic set of parameters in its constructor, but which has other properties
 * that require values before that object can be used. Those properties might be populated from an external
 * source, such as a database or an API call. It's less-than-ideal to perform these operations in the
 * constructor, because they can inhibit the ability for the object to be mocked during unit testing.
 *
 * Instead, the `hydrate` method provides us with a mechanism to get the data for that object, without signifying
 * that it's beginning any kind of process other than populating itself with its requirements.
 *
 * @author Jeremy Ward <jeremy@jmichaelward.com>
 * @since 2020-03-30
 *
 * @package JMichaelWard\OopsWPPlus\Utility
 */

namespace JMichaelWard\OopsWPPlus;

/**
 * Interface Hydratable
 *
 * @package JMichaelWard\OopsWPPlus
 */
interface Hydratable {
	/**
	 * Populate the object's required properties with data.
	 */
	public function hydrate();
}
