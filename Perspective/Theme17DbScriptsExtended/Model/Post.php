<?php

namespace Perspective\Theme17DbScriptsExtended\Model;

class Post extends \Perspective\Theme17DbScripts\Model\Post
{
    /**
     * We receive the product from Magento Store.
     */
    private function _getProductById()
	{
		return $this->productRepository->getById($this->getIdProd()-1);
	}

    /**
     * We are expanding the \Perspective\Theme17DbScriptsExtended\Model\Post file
     * to add the function getProdsPrice().
     */
    public function prefName()
    {
        return "prefName: " . "magento2_" . $this->getName();
    }

    public function shortUrl()
    {
        $shortUrl = (strlen($this->getUrlKey()) > 30) ? 
        substr($this->getUrlKey(),0,30) . substr($this->getUrlKey(),45,6) : $this->getUrlKey();
        return "shortUrl: " . $shortUrl;
    }
}
