<?php
/*
+-------------------------------------------------------------------+
| ./plugins/CMSI/config/config.inc.php                              |
|                                                                   |
| This file is part of the CMSI Package                             |
| Copyright (C) 2010-2011, Studio 182 Dev. - United States          |
|                                                                   |
| Licensed under the GNU GPL                                        |
|                                                                   |
| PURPOSE:                                                          |
|   The main configuration file for CMSI                            |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Seb Jachec <seb@studio182.net>                                    |
+-------------------------------------------------------------------+
*/

$cmsi_conf = array();

// Enter your CMSI driver name here, We currently support "cpanel" by default.
// If you downloaded a 3rd Party driver please refer to their install documents
// for configuration parameters.

$cmsi_conf['driver'] = "cpanel";


// If you enabed the cPanel driver please uncomment this next section and fill in
// the configuration parameters with your information

// The URL to your cPanel Installation (usually ending in port 2082 or 2083)
$cmsi_conf['cpanel']['host'] = "cpanel-host:2082/";
$cmsi_conf['cpanel']['user'] = "username";
$cmsi_conf['cpanel']['pass'] = "password";


// Include Temp Config (ignored by git) so I don't accedentially give out my cPanel info
include('config/temp.config.php');


?>