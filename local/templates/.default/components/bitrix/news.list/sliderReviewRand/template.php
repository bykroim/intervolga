<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="sb_reviewed">
    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt="" />
    <?endif;?>
    <span class="sb_rw_name"><?echo $arItem["NAME"];?></span>
    <span class="sb_rw_job"><?echo $arItem["PROPERTIES"]['postUser']['VALUE'].' '.$arItem["PROPERTIES"]['postUser']['nameCompany']?></span>
    <p><?echo $arItem["PROPERTIES"]['review']['VALUE']?></p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
<?php endforeach; ?>