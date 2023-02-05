<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Условия доставки при покупке в «Стронг Инструмент» город #REGION_NAME#");
$APPLICATION->SetPageProperty("keywords", "инструмент оптом #REGION_NAME#, купить ручной инструмент оптом, инструмент цена, расходные материалы #REGION_NAME#;");
$APPLICATION->SetPageProperty("description", "Условия доставки. «Стронг Инструмент» город #REGION_NAME# – крупнейшее производственное предприятие, специализирующееся на изготовлении и оптовой реализации алмазного, ручного и расходного инструмента. Используемые расходные материалы и техника отличаются безупречным качеством, так как мы используем профессиональные европейские оборудования. Это дает возможность изготавливать и продавать действительно надежную продукцию, которая отвечает не только высоким техническим характеристикам, но и удовлетворяет текущие запросы потребителей.");
$APPLICATION->SetTitle("Условия доставки");
?>

<? //ibc_template_list
$APPLICATION->IncludeComponent(
    "ranx:delivery.list",
    "sectionlist",
    Array(
    ),
    false
);?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/delivery/index.php",
        "EDIT_TEMPLATE" => ""
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>