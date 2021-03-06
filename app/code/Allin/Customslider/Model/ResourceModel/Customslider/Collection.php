<?php

namespace Allin\Customslider\Model\ResourceModel\Customslider;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Allin\Customslider\Model\Customslider', 'Allin\Customslider\Model\ResourceModel\Customslider');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>