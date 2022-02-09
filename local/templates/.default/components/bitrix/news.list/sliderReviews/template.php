<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<script type="text/javascript" >
    $(document).ready(function(){

        $("#foo").carouFredSel({
            items:2,
            prev:'#rwprev',
            next:'#rwnext',
            scroll:{
                items:1,
                duration:2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>
        <ul id="foo">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <li>
                <div class="rw_message">
                    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt="" />
                    <?endif;?>
                    <span class="rw_name"><?echo $arItem["NAME"];?></span>
                    <span class="rw_job"><?echo $arItem["PROPERTIES"]['postUser']['VALUE'].' '.$arItem["PROPERTIES"]['postUser']['nameCompany']?></span>
                    <p><?echo $arItem["PROPERTIES"]['review']['VALUE']?></p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <?endforeach;?>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="" class="rw_allreviewed">Все отзывы</a>
    </div>
</div>
