<?php

defined('_JEXEC') or die;

class PlgContentAgay extends JPlugin {

    public function onBeforeRender() {
	$doc = JFactory::getDocument();
	
	// Hide visual changes 
	$doc->addStyleSheet(JURI::root() . '/media/plg_content_agay/hatemile-for-javascript-3.0/css/hide_changes.css');
	
	// Configuration
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/_locales/en_US/js/configurations.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile-skippers.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile-symbols.js');
	 
	
	// Dependencies
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/eventlistener.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/CommonFunctions.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/Configure.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/IDGenerator.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/html/vanilla/VanillaHTMLDOMParser.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/html/vanilla/VanillaHTMLDOMElement.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/html/vanilla/VanillaHTMLDOMTextNode.js');
	//$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/cssParser.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/css/jscssp/JSCSSPParser.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/css/jscssp/JSCSSPRule.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/util/css/jscssp/JSCSSPDeclaration.js');

	// Solutions
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleCSSImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleEventImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleFormImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleDisplayScreenReaderImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleNavigationImplementation.js');
	$doc->addScript(JURI::root() . 'media/plg_content_agay/hatemile-for-javascript-3.0/js/hatemile/implementation/AccessibleAssociationImplementation.js');

	$doc->addScript(JURI::root() . 'media/plg_content_agay/a11y.js');

	return true;
    }

}
