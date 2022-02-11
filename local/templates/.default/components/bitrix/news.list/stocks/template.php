<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="sb_action">
    <a href=""><?if(is_array($arItem["PREVIEW_PICTURE"])):?>
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" />
        <?endif;?></a>
    <h4><?=GetMessage('STOCK')?></h4>
    <h5><a href=""><?echo $arItem["NAME"]?></a></h5>
    <h5><?=GetMessage('DESCRIPTION')?> <?echo $arItem["PREVIEW_TEXT"];?></h5>
    <h5><?=GetMessage('PRICE')?> <?echo $arItem["PROPERTIES"]['price']['VALUE'];?> rub</h5>
    <a href="<?echo $arItem["DETAIL_PAGE_URL"];?>" class="sb_action_more"><?=GetMessage('MORE_DETAILLED')?></a>
</div>
<?endforeach;?>

