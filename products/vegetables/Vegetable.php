<?php

require_once __DIR__.'/../Product.php';

/**
 * Овощ
 */
abstract class Vegetable implements Product {
    
    /**
     * Свежий
     * @var bool 
     */
    public $isFresh;
    
    /**
     * Чистый
     * @var bool 
     */
    public $isClean;
    
    /**
     * Очищенный
     * @var bool 
     */
    public $isCleanOut;
    
    /**
     * Порезанный
     * @var bool
     */
    public $isCuted = false;
    
    /**
     * проинициализировать состояние овоща
     * @param type $isFresh
     * @param type $isClean
     * @param type $isCleanOut
     */
    public function __construct($isFresh, $isClean, $isCleanOut) {
        $this->isClean = $isClean;
        $this->isFresh = $isFresh;
        $this->isCleanOut = $isCleanOut;
        

    }
    
}
