<?php

namespace Perspective\Theme17DbScripts\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Perspective\Theme17DbScripts\Model\PostFactory;

class Post implements ArgumentInterface
{
    protected $postFactory;
    public function __construct(PostFactory $postFactory){
        $this->postFactory = $postFactory;
    }

    public function getPostCollection(){
        return $this->postFactory->create()->getCollection();
    }

}
