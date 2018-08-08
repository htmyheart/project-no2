<?php
namespace MW\Ddate\Model\System\Config;

class Formatdate implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'mdY', 'label' => __('mm-dd-yyyy')],
            ['value' => 'dmY', 'label' => __('dd-mm-yyyy')],
            ['value' => 'Ymd', 'label' => __('yyyy-mm-dd')]
        ];
    }
}

