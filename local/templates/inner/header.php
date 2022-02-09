<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?echo LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/template_styles.css");
    $APPLICATION->AddHeadScript("/local/templates/.default/js/jquery-1.8.2.min.js");
    $APPLICATION->AddHeadScript("/local/templates/.default/js/slides.min.jquery.js");
    $APPLICATION->AddHeadScript("/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js");
    $APPLICATION->AddHeadScript("/local/templates/.default/js/functions.js");?>

    <link rel="shortcut icon" type="image/x-ico" href="/local/templates/.default/favicon.ico"/>
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?include_once($_SERVER['DOCUMENT_ROOT']."/local/templates/.default/include/header.php");?>
    </div>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "nav",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>

    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title">Заголовок страницы</p>
                    </div>
                    <!-- workarea -->