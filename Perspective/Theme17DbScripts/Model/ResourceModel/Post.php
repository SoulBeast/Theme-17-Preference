<?php

namespace Perspective\Theme17DbScripts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'perspective_theme17bdscript_post_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('perspective_theme17bdscript_post', 'post_id');
        $this->_useIsObjectNew = true;
    }
}
