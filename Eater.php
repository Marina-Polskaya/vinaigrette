<?php

require_once __DIR__.'/Vinaigrette.php';

/**
 * Едок
 */
class Eater {
    
    /**
     * Потребляемый винегрет
     * @var type 
     */
    protected $vinaigrette;

    /**
     * Скушать
     * @param Vinaigrette $vinaigrette
     */
    public function eat(Vinaigrette $vinaigrette) {
        $this->vinaigrette = $vinaigrette;
    }
    
    /**
     * Вкусно ли
     */
    public function isTasty() {
        $isTasty = array_reduce($this->vinaigrette->composition, function($isTasty, $product) {
            return $isTasty &= $product->isClean && $product->isFresh && $product->isCleanOut && $product->isCuted;
        });
        
        echo $isTasty ? "Вкусно" : "Не вкусно";
    }
    
}
