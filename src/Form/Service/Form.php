<?php
namespace Concrete\Package\OverrideExample\Src\Form\Service;

/**
 * @inheritdoc
 */
class Form extends \Concrete\Core\Form\Service\Form
{
    /**
     * @inheritdoc
     */
    public function submit($key, $value, $miscFields = array(), $additionalClasses = '')
    {
        return '<button type="submit"' . $this->parseMiscFields('btn ccm-input-submit ' . $additionalClasses,
            $miscFields) . ' id="' . $key . '" name="' . $key . '">' . $value . '</button>';
    }

    /**
     * @inheritdoc
     */
    public function button($key, $value, $miscFields = array(), $additionalClasses = '')
    {
        return '<button type="button"' . $this->parseMiscFields('btn ccm-input-button ' . $additionalClasses,
            $miscFields) . ' id="' . $key . '" name="' . $key . '">' . $value . '</button>';
    }
}
