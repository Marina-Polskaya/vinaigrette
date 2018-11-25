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
        $vegitables = array_filter(
                $this->vinaigrette->composition,
                function($compositionItem) {
                    return is_a($compositionItem, 'Vegetable'); 
                });
        $isTasty = array_reduce(
            $vegitables,
            function($isTasty, $product) {
                return $isTasty &= $product->isClean
                        && $product->isFresh
                        && $product->isCleanOut
                        && $product->isCuted;
            }, true);
        
        echo $isTasty ? "Вкусно" : "Не вкусно";
    }
    
}
?>