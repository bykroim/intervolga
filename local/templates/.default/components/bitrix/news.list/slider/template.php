<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<!--- // end header area --->

<script type="text/javascript" >
    $().ready(function(){
        $(function(){
            $('#slides').slides({
                preload: true,
                generateNextPrev: false,
                autoHeight: true,
                play: 4000,
                effect: 'fade'
            });
        });
    });
</script>

<div class="sl_slider" id="slides">
    <div class="slides_container">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div>
                <div>
                    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" />
                    <?endif;?>
                    <h2><a href=""><?echo $arItem["NAME"];?></a></h2>
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                    <a href="<?echo $arItem["PROPERTIES"]['LINK']['VALUE'];?>" class="sl_more">Подробнее &rarr;</a>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>
