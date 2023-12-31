<?php
namespace Perspective\Theme17DbWareHouse\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'perspective_theme17dbwarehouse_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perspective\Theme17DbWareHouse\Model\Post', 'Perspective\Theme17DbWareHouse\Model\ResourceModel\Post');
    }
}
