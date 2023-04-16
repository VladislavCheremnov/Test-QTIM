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
				<div class="title-next-news">
                    <div class="img-title-next-news">
                        <img src="<?=$arResult['ITEMS']['2']['PREVIEW_PICTURE']['SRC'] ?>" alt="img-title-next-news">
                    </div>
                    <div class="description-next-news">
                        <h3><a href="#" style="color: #726d6d;"><?=$arResult['ITEMS']['2']['NAME'] ?></a></h3>
                        <span><a href="#" style="color: #726d6d;"><?=$arResult['ITEMS']['2']['PREVIEW_TEXT'] ?></a></span>
                        <time class="time-publication"><?=$arResult['ITEMS']['2']['ACTIVE_FROM'] ?></time>
                    </div>
                </div>
                <div class="secondary-next-news">
                    <div id="top-div">
                        <span class="secondary-next-news-span"><a href="#" style="color: #726d6d;"><?=$arResult['ITEMS']['1']['PREVIEW_TEXT'] ?></a></span>
                        <time class="time-publication"><?=$arResult['ITEMS']['1']['ACTIVE_FROM'] ?></time>
                    </div>
                    <div>
                        <span class="secondary-next-news-span"><a href="#" style="color: #726d6d";><?=$arResult['ITEMS']['0']['PREVIEW_TEXT'] ?></a></span>
                        <time class="time-publication"><?=$arResult['ITEMS']['0']['ACTIVE_FROM'] ?></time>
                    </div>
                </div>
