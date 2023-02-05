<h3>Наша компания предлагает несколько вариантов отгрузки:</h3>

<div class="row">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="col-md-5 ibc-deliveri-item <?=$arItem['PROPERTY_CLASS_CSS_VALUE']?>">
        <div class="ibc-delivery-item-img">
            <img src="<?=$arItem['SRC_IMG']?>">
        </div>
        <div class="ibc-delivery-item-txt">
            <?=$arItem['NAME']?>

        </div>

    </div>

    <?endforeach;?>
</div>


