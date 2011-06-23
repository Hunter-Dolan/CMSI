<?php

/*
 +-------------------------------------------------------------------------+
 | (C)rystal (M)ail (S)erver (I)ntegration                                 |
 | Version 0.1-Beta                                                        |
 |                                                                         |
 | Copyright (C) 2011, Studio 182 Dev. - Worldwide                         |
 |                                                                         |
 | This program is free software; you can redistribute it and/or modify    |
 | it under the terms of the GNU General Public License version 3          |
 | as published by the Free Software Foundation.                           |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 |                                                                         |
 | You should have received a copy of the GNU General Public License along |
 | with this program; if not, write to the Free Software Foundation, Inc., |
 | 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.             |
 |                                                                         |
 +------------------------ Studio182 Dev. Team ----------------------------+
 |	Hunter Dolan <hunter@studio182.net> (Lead Coder)					   |
 |  Seb Jachec <seb@studio128.net> (UI Designer)						   |
 +-------------------------------------------------------------------------+
 
*/

// Get the config file
include('config/config.inc.php'); 

// Include the driver
include('drivers/'.$cmsi_conf['driver'].'.php');


// Include the testing scripts (ignored by git) so I don't accedentally give some sensitive data up
include('temp-test.php');

?>