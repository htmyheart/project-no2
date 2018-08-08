<?php
namespace MW\Ddate\Model\System\Config;

class CalendarDisplay implements \Magento\Framework\Option\ArrayInterface
{
    const CALENDER = 0;
    const DT_PICKER = 1;

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return[
            ['value' => self::CALENDER, 'label' => __('Calender')],
            ['value' => self::DT_PICKER, 'label' => __('Datetime Picker')]
        ];
    }
}
