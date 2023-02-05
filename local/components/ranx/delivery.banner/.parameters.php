<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = Array(
	"GROUPS" => array(
		"VARIABLE_ALIASES" => array(
			"NAME" => GetMessage("B_VARIABLE_ALIASES"),
		),
	),
	"PARAMETERS" => Array(
		"TITLE" => Array(
            "NAME" => 'Тескт заголовка',
            "TYPE" => "STRING",
            "DEFAULT" => 10,
            "COLS" => 5,
            "PARENT" => "VISUAL",
        ),
		"DESCRIPTION" => Array(
            "NAME" => 'Текст описания',
            "TYPE" => "STRING",
            "DEFAULT" => 10,
            "COLS" => 5,
            "PARENT" => "VISUAL",
        ),

	)
);
?>