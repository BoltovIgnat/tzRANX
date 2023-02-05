<?php
use Bitrix\Main\Application;
use Bitrix\Main\Loader;


class DeliiveryList extends \CBitrixComponent {

	public function executeComponent()
	{
		CJSCore::Init(["jquery3"]);
        Loader::includeModule("iblock");
        $arFilter = array('IBLOCK_ID' => 63);
        $arSelect = array('ID', 'NAME', "DETAIL_PICTURE", 'DETAIL_TEXT', 'PREVIEW_TEXT', "PROPERTY_CLASS_CSS" );

        $rsSections = \CIBlockElement::GetList(array('LEFT_MARGIN' => 'ASC'), $arFilter,  false, array(), $arSelect);
		while ($arSection = $rsSections->Fetch())
		{

			$this->arResult['ITEMS'][$arSection['ID']] = $arSection;
			$this->arResult['ITEMS'][$arSection['ID']]['SRC_IMG'] = CFile::GetPath($arSection["DETAIL_PICTURE"]);
		}

		$this->includeComponentTemplate();
		
	}

}