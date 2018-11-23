<?php

require_once __DIR__.'/Vinaigrette.php';

/**
 * Повар
 */
class Cheef {
    
    /**
     * Готовить винегрет
     * 
     * ToDo Повар должен порезать овощи, смешать, и заправить майонезом
     * На выходе мы получаем винегрет только с составом(картофель..., майонез)
     * 
     * @param type $products
     * @return \Vinaigrette
     */
    public function cook($products) : Vinaigrette {
        $washedProducts = $this->wash($products);
        $freshProducts = $this->filterFresh($washedProducts);
        $cleanedProducts = $this->cleanOut($freshProducts);
        
        /**
         * .... Повар должен порезать, добавить майонез и смешать
         */
        
        
        
        return new Vinaigrette(); 
    }
    
    /**
     * Резать
     */
    protected function cut($products) {
        
    }
    
    /**
     * Смешивание ингредиентов
     * @see http://php.net/manual/ru/function.rand.php - случайное число
     * @see http://php.net/manual/ru/function.sort.php - сортировка
     * 
     * @return [];
     */
    protected function mix($products) : array {
        
        return $products;
    }
    
    /**
     * Мойка овощей
     * @param type $products
     * @return array
     */
    protected function wash($products) : array {
        
        foreach($products as $vegetable) {
            $vegetable->isClean = true;
        }

        return $products;
    }
    
    /**
     * Отсеивание гнилых овощей
     * @param type $products
     * @return array
     */
    protected function filterFresh($products) : array {
        //$freshVegetables = array_filter(
        //        $vegitableCollection,
        //        function(Vegetable $vegetable) {
        //            return $vegetable->isFresh;
        //        }
        //    );

        $freshVegetables = [];
        foreach($products as $vegetable) {
           if($vegetable->isFresh) {
               $freshVegetables[] = $vegetable;
           }
        }
        
        return $freshVegetables;
    }
    
    /**
     * Чистка овощей
     * @param type $products
     * @return array
     */
    protected function cleanOut($products) : array {
        //array_walk($freshVegetables, function(Vegetable $vegetable) {
        //    $vegetable->isCleanOut = true;
        //});

        foreach($products as $vegetable) {
            $vegetable->isCleanOut = true;
        }
        
        return $products;
    }
    
}