<?php

// Configuration settings

define("CONFIG_DEBUG", false);	// Make true for debugging output to show.

// Constants

// Basic
define("NAME", "Site Name");
define("SEP", " - ");
define("MOTTO", "Description");
define("TITLE", NAME.SEP.MOTTO);

// Versions
define("VER", "0");
define("VER_JQ", "1.10.2");
define("VER_JQUI", "1.10.3");

// DB
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PW", "root");
define("DB_NAME", "dbname");

// FB
define("FB_APP_ID", "Application ID goes here");
define("FB_APP_SECRET", "Application secret goes here");
define("FB_APP_ADMINS", "Application admin profile IDs goes here separated by commas");

// URLs
define("URL_BASE", "Base URL for this site");

// Directories
define("DIR_ASSETS", "assets");
define("DIR_CSS", DIR_ASSETS."/css");
define("DIR_CLS", DIR_ASSETS."/cls");
define("DIR_DATA", DIR_ASSETS."/data");
define("DIR_IMG", DIR_ASSETS."/img");
define("DIR_MODULES", DIR_IMG."/apple");
define("DIR_MODS", DIR_MODULES);			// A simple alias.
define("DIR_MODS", DIR_MIN);				// Minification utility.
define("DIR_SMARTY", DIR_MODS."/smarty");	// Templating engine directory.

define("DIR_APPLE", DIR_IMG."/apple");
define("DIR_APPLE_ICONS", DIR_APPLE."/icons");
define("DIR_APPLE_SPLASH", DIR_APPLE."/splash");
define("DIR_INC", DIR_ASSETS."/inc");
define("DIR_JS", DIR_ASSETS."/js");
define("DIR_CON", DIR_JS."/Console");
define("DIR_JQUI", DIR_JS."/jquery-ui");

// Files
define("FILE_EXAMPLE", "file.txt");			// Example