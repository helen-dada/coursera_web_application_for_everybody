<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Application;
use Bitrix\Sale;

$request = Application::getInstance()->getContext()->getRequest(); 
$text = $request->get("text");

$userId = Sale\Fuser::getId();
   $basket = Sale\Basket::loadItemsForFUser($userId , SITE_ID);
   $basketItems = $basket->getBasketItems();
   foreach ($basketItems as $item) {
       $products[] = [
           'name' => $item->getField('NAME'),
           'id' =>  $item->getField('PRODUCT_ID'),
           'price' => $item->getPrice(),
           'brand'=> 'Tamaris',
           'quantity' => $item->getQuantity(),
       ];
   }

echo json_encode($products);