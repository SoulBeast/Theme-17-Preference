<?php

namespace Perspective\Theme17DbWareHouseExtended\Model;

class Post extends \Perspective\Theme17DbWareHouse\Model\Post
{
    /**
     * We receive the product from Magento Store.
     */
    private function _getProductById()
	{
		return $this->productRepository->getById($this->getIdProd()-1);
	}

    /**
     * We are expanding the \Perspective\Theme17DbWareHouse\Model\Post file
     * to add the function getProdsPrice().
     */
    public function getProdsPrice()
    {
        return $this->getKolProd() * $this->_getProductById()->getPrice();
    }
}
