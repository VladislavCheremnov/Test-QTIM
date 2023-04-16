<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php //debug($arResult);?>
<?php foreach($arResult['ITEMS'] as $arItem):?>
    <div class="news-sidebar">
           <img class="img-news-sidebar" src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="pikachy">
           <div class="content-sidebar">
               <a href="#"><?=$arItem['PREVIEW_TEXT']?></a>
           </div>
    </div>
<?php endforeach; ?>
       
