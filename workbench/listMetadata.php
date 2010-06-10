<?php
require_once ('session.php');
require_once ('shared.php');
require_once('header.php');
print "<p/>";
if(!apiVersionIsAtLeast(10.0)) {
	show_error("Metadata API not supported prior to version 10.0", false, true);
	exit;
}

require_once ('soapclient/SforceMetadataClient.php');
?>
<script type="text/javascript" src="script/simpletreemenu.js">
/***********************************************
* Simple Tree Menu - Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<link rel="stylesheet" type="text/css" href="style/simpletree.css" />
<?php

global $metadataConnection;
try {
	$describeMetadataResult = $metadataConnection->describeMetadata(getApiVersion());
} catch (Exception $e) {
	show_error($e->getMessage(), false, true);
}

$metadataTypesSelectOptions[""] = "";
foreach($describeMetadataResult as $resultsKey => $resultsValue) {
	if($resultsKey == 'metadataObjects'){
		foreach($resultsValue as $metadataResultsKey => $metadataResultsValue) {
			$metadataTypeMap[$metadataResultsValue->xmlName] = $metadataResultsValue;
			$metadataTypesSelectOptions[$metadataResultsValue->xmlName]= $metadataResultsValue->xmlName;
			
			if(isset($metadataResultsValue->childXmlNames)) {
				if(!is_array($metadataResultsValue->childXmlNames)) {
					$metadataResultsValue->childXmlNames = array($metadataResultsValue->childXmlNames);
				}
				
				foreach ($metadataResultsValue->childXmlNames as $childName) {
					$metadataTypesSelectOptions[$childName]= $childName;
					
					$childType = new stdClass();
					$childType->xmlName = $childName;
					$childType->inFolder = false;
					$metadataTypeMap[$childName] = $childType;
				}
			}
		}
	}
}

$metadataTypesSelectOptions = natcaseksort($metadataTypesSelectOptions);

$typeString = isset($_REQUEST['type']) ? $_REQUEST['type'] : (isset($_SESSION['defaultMetadataType']) ? $_SESSION['defaultMetadataType'] : null);

?>
<p class='instructions'>Choose a metadata type to list its components:</p>
<form id="metadataTypeSelectionForm" name="metadataTypeSelectionForm" method="GET" action="<?php print $_SERVER['PHP_SELF'] ?>">
<select id="type" name="type" onChange="document.metadataTypeSelectionForm.submit();">
<?php printSelectOptions($metadataTypesSelectOptions, $typeString); ?>
</select>
</form>
<p/>

<?php
if(isset($typeString)) {	
	if(!isset($metadataTypeMap[$typeString])) {
		if(isset($_REQUEST['type']) && $_REQUEST['type']) {
			show_error("Invalid metadata type type: $typeString", false, true);
		}
		exit;
	}
	$type = $metadataTypeMap[$typeString];
    $_SESSION['defaultMetadataType'] = $typeString;	
	
    $metadataComponents = listMetadata($type);
	
	if(count($metadataComponents) == 0) {
		show_info("This metadata type contains no components.", false, true);
		exit;
	}

	print "<a href=\"javascript:ddtreemenu.flatten('listMetadataTree', 'expand')\">Expand All</a> | " . 
	      "<a href=\"javascript:ddtreemenu.flatten('listMetadataTree', 'collapse')\">Collapse All</a> | " .
		  "<a href=\"describeMetadata.php?type=$type->xmlName\">Describe Type</a>\n" .
	      "<ul id='listMetadataTree' class='treeview'>\n";
	printNode($metadataComponents);
	print "</ul>";
}

require_once('footer.php');
?>
<script type="text/javascript">
ddtreemenu.createTree("listMetadataTree", true);
ddtreemenu.flatten("listMetadataTree", 'collapse');
</script>

<?php
function listMetadata($type) {
	global $metadataConnection;
	global $partnerConnection;
	
	try {
		if(!$type->inFolder) {
			return processListMetadataResult($metadataConnection->listMetadata($type->xmlName, null, getApiVersion()));
		}
		
		$folderQueryResult = $partnerConnection->query("SELECT DeveloperName FROM Folder WHERE Type = '" . $type->xmlName . "' AND DeveloperName != null AND NamespacePrefix = null");
		
		if($folderQueryResult->size == 0) {
			return array();
		}
		
		foreach($folderQueryResult->records as $folderRecord) {
			$folder = new SObject($folderRecord);
			$folderName = $folder->fields->DeveloperName;
			
			$listMetadataResult["$folderName"] = processListMetadataResult($metadataConnection->listMetadata($type->xmlName, $folder->fields->DeveloperName, getApiVersion()));
		}
		
		return $listMetadataResult;
	} catch (Exception $e) {
		show_error($e->getMessage(), false, true);
	}	
}

function processListMetadataResult($response) {
	if(!is_array($response)) {
		$response = array($response);
	}
		
	$processedResponse = array();
	foreach($response as $responseKey => $responseValue) {
		if($responseValue == null) {
			continue;
		}
		
		$name = isset($responseValue->fullName) ? $responseValue->fullName : $responseValue->fileName;
		if (strrchr($name, "/")) {
			$simpleName = substr(strrchr($name, "/"), 1);
			$processedResponse[$simpleName] = $responseValue;
		} else if(strpos($name, ".")) {
			$parentName = substr($name, 0, strpos($name, "."));
			$childName = substr($name, strpos($name, ".") + 1);
			$processedResponse[$parentName][$childName] = $responseValue;
		} else {
			$processedResponse[$name] = $responseValue;
		}
	}
	$processedResponse = natcaseksort($processedResponse);
	
	return $processedResponse;
}
?>