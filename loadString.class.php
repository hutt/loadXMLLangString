<?php
/*
 * @package loadXMLLangString
 * @author Jannis Hutt
*/

class loadLangString{

	public function loadString($lang, $id){
	
		$xml_source = str_replace(array("&amp;", "&"), array("&", "&amp;"), file_get_contents("src/strings.xml"));
		$string = simplexml_load_string($xml_source);
		
		switch($lang){
			case 'de': //German
				$load = $string->xpath('/xml/strings[@lang="de"]/string[@id="'.$id.'"]');
				return ($load[0] ? $load[0] : 'String not found.');
				break;
			default:  //Default; load English on default
				$load = $string->xpath('/xml/strings[@lang="en"]/string[@id="'.$id.'"]');
				return ($load[0] ? $load[0] : 'String not found.');
				break;
		}
	}
	
	public function autoLoadString($id){
	
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		
		$xml_source = str_replace(array("&amp;", "&"), array("&", "&amp;"), file_get_contents("src/strings.xml"));
		$string = simplexml_load_string($xml_source);
		
		switch($lang){
			case 'de': //German
				$load = $string->xpath('/xml/strings[@lang="de"]/string[@id="'.$id.'"]');
				return ($load[0] ? $load[0] : 'String not found.');
				break;
			default:  //Default; load English on default
				$load = $string->xpath('/xml/strings[@lang="en"]/string[@id="'.$id.'"]');
				return ($load[0] ? $load[0] : 'String not found.');
				break;
		}
	}
}
?>
