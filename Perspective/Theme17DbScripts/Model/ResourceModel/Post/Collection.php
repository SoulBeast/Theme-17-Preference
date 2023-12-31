<?php

namespace Perspective\Theme17DbScripts\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Perspective\Theme17DbScripts\Model\Post as Model;
use Perspective\Theme17DbScripts\Model\ResourceModel\Post as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'perspective_theme17bdscript_post_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
