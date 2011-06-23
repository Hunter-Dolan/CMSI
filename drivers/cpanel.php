<?php
/*
+-------------------------------------------------------------------+
| ./plugins/CMSI/driver/cpanel.php                                  |
|                                                                   |
| This file is part of the CMSI Package                             |
| Copyright (C) 2010-2011, Studio 182 Dev. - United States          |
|                                                                   |
| Licensed under the GNU GPL                                        |
|                                                                   |
| PURPOSE:                                                          |
|   CMSI Driver for cPanel				                            |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Seb Jachec <seb@studio182.net>                                    |
+-------------------------------------------------------------------+
*/



function do_it($params)
{

	global $cmsi_conf;

	$url = 'http://'.$cmsi_conf['cpanel']['user'].':'.$cmsi_conf['cpanel']['pass'].'@'.$cmsi_conf['cpanel']['host'].'/json-api/cpanel?cpanel_jsonapi_module=';

	$url = $url.$params;

	$handle = fopen($url, "rb");

	$data = stream_get_contents($handle);

	fclose($handle);

	return $data;

}


function add_email($email, $pass, $domain, $limit)
{

	$return = json_decode(do_it('Email&cpanel_jsonapi_func=addpop&domain='.$domain.'&email='.$email.'&password='.$pass.'&quota='.$limit));

	$result = $return->cpanelresult->data['0'];

	if (!$result->result) {

		return array('error' => 'true', 'human-error'=>$result->reason);

	} else {

		return array('error'=> 'false');

	}

}


?>