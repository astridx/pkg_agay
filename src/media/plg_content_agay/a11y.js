document.addEventListener("DOMContentLoaded", function(){

console.log('sdfdsfsd');

//Configure
var configuration = new hatemile.util.Configure(hatemile_configuration);
console.log(configuration);
//Parsers
var htmlParser = new hatemile.util.html.vanilla.VanillaHTMLDOMParser(document);
console.log(htmlParser);
var cssParser = new hatemile.util.css.jscssp.JSCSSPParser(document, location.href);
console.log(cssParser);
//Execute
var accessibleCSS = new hatemile.implementation.AccessibleCSSImplementation(htmlParser, cssParser, hatemile_configuration_symbols);
accessibleCSS.provideAllSpeakProperties();

var accessibleEvent = new hatemile.implementation.AccessibleEventImplementation(htmlParser);
accessibleEvent.makeAccessibleAllDragandDropEvents();
accessibleEvent.makeAccessibleAllHoverEvents();
accessibleEvent.makeAccessibleAllClickEvents();

var accessibleForm = new hatemile.implementation.AccessibleFormImplementation(htmlParser, configuration);
accessibleForm.markAllRequiredFields()
accessibleForm.markAllRangeFields();
accessibleForm.markAllAutoCompleteFields();
accessibleForm.markAllInvalidFields();

var accessibleNavigation = new hatemile.implementation.AccessibleNavigationImplementation(htmlParser, configuration, hatemile_configuration_skippers);
accessibleNavigation.provideNavigationByAllHeadings();
accessibleNavigation.provideNavigationByAllSkippers();
accessibleNavigation.provideNavigationToAllLongDescriptions();

var accessibleAssociation = new hatemile.implementation.AccessibleAssociationImplementation(htmlParser, configuration);
accessibleAssociation.associateAllDataCellsWithHeaderCells();
accessibleAssociation.associateAllLabelsWithFields();

var accessibleScreenReader = new hatemile.implementation.AccessibleDisplayScreenReaderImplementation(htmlParser, configuration, navigator.userAgent);
accessibleScreenReader.displayAllRoles();
accessibleScreenReader.displayAllCellHeaders();
accessibleScreenReader.displayAllShortcuts();
accessibleScreenReader.displayAllWAIARIAStates();
accessibleScreenReader.displayAllLinksAttributes();
accessibleScreenReader.displayAllTitles();
accessibleScreenReader.displayAllDragsAndDrops();
accessibleScreenReader.displayAllLanguages();
});
