<?php
/*
 * Regles pour Google
 *
 */
	$homepage = "http://translate.google.com/translate_t";
	$url = "http://translate.google.com/translate_t";
	$outputEncoding = "UTF-8";
	$inputEncoding  = "UTF-8";
	$maxSize  = 5000;      //Limit
	$param['hl']='fr';    // Langue de traduction (cible)
	$param['ie']=$inputEncoding; //Input encoding (UTF-8 par defaut)
	$param['oe']=$outputEncoding; //Output encoding (UTF-8 par defaut)
	//TextArea
	$textarea = "text";
	$param[$textarea]='';
	//Language select
	$select = "langpair";
	$param[$select]='';

	$pairs=array();
	$pairs['en']['de']="en|de";
	$pairs['en']['es']="en|es";
	$pairs['en']['fr']="en|fr";
	$pairs['en']['it']="en|it";
	$pairs['en']['pt']="en|pt";
	$pairs['en']['ja']="en|ja";
	$pairs['en']['ko']="en|ko";
	$pairs['en']['zh']="en|zh-CN";
	$pairs['de']['en']="de|en";
	$pairs['de']['fr']="de|fr";
	$pairs['es']['en']="es|en";
	$pairs['fr']['en']="fr|en";
	$pairs['fr']['en']="fr|de";
	$pairs['it']['en']="it|en";
	$pairs['pt']['en']="pt|en";
	$pairs['ja']['en']="ja|en";
	$pairs['ko']['en']="ko|en";
	$pairs['zh']['en']="zh-CN|en";
	
	$delimiter_pair="|";
	$regex['start']="<textarea name=q rows=5 cols=45 wrap=PHYSICAL>";
	$regex['end']="</textarea>";
?>