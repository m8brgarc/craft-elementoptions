<?php
/**
 * @author    Tim Kelty
 * @copyright Copyright (c) 2016 Tim Kelty
 * @link      http://fusionary.com/
 * @package   ElementOptions
 * @since     1.0.0
 */

namespace Craft;

include_once 'ElementOptions_BaseOptionsFieldType.php';

class ElementOptions_AssetOptionsFieldType extends ElementOptions_BaseOptionsFieldType
{
	// Properties
	// =========================================================================
	protected $allowLargeThumbsView = true;
	protected $elementType = 'Asset';
	protected $inputJsClass = 'Craft.AssetSelectInput';

	// Public Methods
	// =========================================================================

	/**
	 * @inheritDoc IComponentType::getName()
	 *
	 * @return string
	 */
	public function getName()
	{
		return Craft::t('Element Options: Assets');
	}
}
