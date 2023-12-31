<?php

namespace Perspective\Theme17DbScripts\Model;

use Magento\Framework\Model\AbstractModel;
use Perspective\Theme17DbScripts\Model\ResourceModel\Post as ResourceModel;

class Post extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'perspective_theme17bdscript_post_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
