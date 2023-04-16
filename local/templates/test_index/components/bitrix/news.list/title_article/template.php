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
<?php foreach($arResult['ITEMS'] as $arItem):?>
     <div class="main-news">
		<div id="img-main-news">
			<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="title-img">
		</div>
		<div>
			<h3 id="title-main-news"><a href="#" style="color: #eaeaea"><?=$arItem['NAME']?></a></h3>
			<span><a href="#" style="color: #eaeaea"><?=$arItem['PREVIEW_TEXT']?></a></span>
			<time class="time-publication"><?=$arItem['ACTIVE_FROM']?></time>    
		</div>
	</div>
<?php endforeach; ?>