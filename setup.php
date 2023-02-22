<?php
# --------------------------------------------------------------------------------------------
#   ____      _ _           _   _              _                         
#  / ___|___ | | | ___  ___| |_(_)_   _____   / \   ___ ___ ___  ___ ___ 
# | |   / _ \| | |/ _ \/ __| __| \ \ / / _ \ / _ \ / __/ __/ _ \/ __/ __|
# | |__| (_) | | |  __/ (__| |_| |\ V /  __// ___ \ (_| (_|  __/\__ \__ \
#  \____\___/|_|_|\___|\___|\__|_| \_/ \___/_/   \_\___\___\___||___/___/
#
#				Providence: Cataloguing system for CollectiveAccess
#               Open-source collections management software
#               Version 1.7.13
#				
# -------------------------------------------------------------------------------------------
# 
# This file defines the basic settings required for the CollectiveAccess Providence 
# cataloguing module. This is the first file you should modify when configuring the application.
#
# Need help? Visit https://www.collectiveaccess.org/support/
#
# --------------------------------------------------------------------------------------------
# THE VALUES BELOW MUST BE CHANGED TO SUIT YOUR ENVIRONMENT
# --------------------------------------------------------------------------------------------

#
# The following settings allow CollectiveAccess to connect to its database. These settings 
# should have been provided to you by your system administrator or hosting provider.
#

# __CA_DB_HOST__ = Database server host name (often 'localhost')
#
if (!defined("__CA_DB_HOST__")) {
	define("__CA_DB_HOST__", 'localhost');
}

# __CA_DB_USER__ = Database login user name
#
if (!defined("__CA_DB_USER__")) {
	define("__CA_DB_USER__", 'root');
}

# __CA_DB_PASSWORD__ = Database login password
#
if (!defined("__CA_DB_PASSWORD__")) {
	define("__CA_DB_PASSWORD__", 'root');
}

# __CA_DB_DATABASE__ = The name of your CollectiveAccess database
#
if (!defined("__CA_DB_DATABASE__")) {
	define("__CA_DB_DATABASE__", 'collectiveaccess');
}

# __CA_APP_DISPLAY_NAME__ = the name of your system, for display purposes
#
# This value will be used on emails, on the login screen, in window titles, etc.
#
if (!defined("__CA_APP_DISPLAY_NAME__")) {
	define("__CA_APP_DISPLAY_NAME__", "My First CollectiveAccess System");
}


# __CA_ADMIN_EMAIL__ = the email address from which to send administrative messages
#
if (!defined("__CA_ADMIN_EMAIL__")) {
	define("__CA_ADMIN_EMAIL__", 'info@put-your-domain-here.com');
}


# Outgoing email
#
# For CollectiveAccess to be able to send email notifications __CA_SMTP_SERVER__ and 
# __CA_SMTP_PORT__ must be set. If your outgoing (SMTP) mail server requires you to 
# authenticate, configure your login and connection details in  __CA_SMTP_AUTH__, 
# __CA_SMTP_USER__, __CA_SMTP_PASSWORD__ and __CA_SMTP_SSL__
#
# __CA_SMTP_AUTH__ = authentication method for outgoing mail connection (set to PLAIN, LOGIN or CRAM-MD5; leave blank if no authentication is used.)
# __CA_SMTP_SSL__ = SSL method to use for outgoing mail connection (set to SSL or TLS; leave blank if not authentication is used.)


# Set your preferred time zone here. The default is to use US Eastern Standard Time. 
# A list of valid time zone settings is available at http://us3.php.net/manual/en/timezones.php
#
date_default_timezone_set('America/New_York');


# --------------------------------------------------------------------------------------------
# The following are extra options that often required changing. If you're not sure
# what they should be set to you can safely leave them set to their defaults.
# --------------------------------------------------------------------------------------------

# __CA_QUEUE_ENABLED__ = enable background processing using the task queue
#
# The task queue allows users to push potentially long running processes, such as 
# processing of large video and image files into the background and continue working.
# 
# Set this to a non-zero value if you want to use the task queue. Be sure to configure the task 
# queue processing script to run (usually via CRON) if you set this option. Set up details are 
# available at http://docs.collectiveaccess.org
#
if (!defined("__CA_QUEUE_ENABLED__")) {
	define("__CA_QUEUE_ENABLED__", 0);
}


# __CA_DEFAULT_LOCALE__ = The locale to use when no user-preferred locale has been set
#
# The locale set here is used in situations where no locale is specifically set by the user: 
# prior to login or prior to setting your preferred locale in user preferences for the first time.
#
# You should set this to the locale in which your users generally work.
#
# Note that whatever locale you set here *MUST* be present in your system locale list.
# The default value is US/English, which exists in most configurations.
# 
if (!defined("__CA_DEFAULT_LOCALE__")) {
	define("__CA_DEFAULT_LOCALE__", "en_US");
}


# __CA_USE_CLEAN_URLS__ = Determines if clean urls should be generated
#
# If the Apache mod_rewrite module is available on your server you may set this 
# to have Providence use "clean" urls – urls with the index.php handler omitted.
#
# Only set this if your web server includes mod_rewrite and it is enabled using
# the provided .htaccess file
# 
define("__CA_USE_CLEAN_URLS__", 0);


# __CA_APP_NAME__ = a short name alphanumeric-only (no spaces or punctuation) identifier for this CollectiveAccess installation
#
# If you are running more than one instance of CollectiveAccess on the same server make 
# sure each instance has its own unique __CA_APP_NAME__ setting.  __CA_APP_NAME__ must 
# include letters, numbers and underscores only - no spaces or punctuation!
#
# If you don't know what to set this to then leave it as is. 
#
if (!defined("__CA_APP_NAME__")) {
	define("__CA_APP_NAME__", "collectiveaccess");
}


# __CA_GOOGLE_MAPS_KEY__ = A Google Maps key to use for mapping and geocoding featured (optional)
#
if (!defined("__CA_GOOGLE_MAPS_KEY__")) {
	define("__CA_GOOGLE_MAPS_KEY__", "");
}


# *** 
# __   __          _                _                  
# \ \ / /__  _   _( )_ __ ___    __| | ___  _ __   ___ 
#  \ V / _ \| | | |/| '__/ _ \  / _` |/ _ \| '_ \ / _ \
#   | | (_) | |_| | | | |  __/ | (_| | (_) | | | |  __/
#   |_|\___/ \__,_| |_|  \___|  \__,_|\___/|_| |_|\___|
#                                                     
# That's it! The settings here should be enough to get you up and running...
# If they're not you can find help at http://support.collectiveaccess.org
#
# ***

# --------------------------------------------------------------------------------------------
# A few more settings that might need changing are below. Additional settings that are 
# unlikely to require modification are in app/helpers/post-setup.php
# --------------------------------------------------------------------------------------------


# __CA_CACHE_BACKEND__ = caching method to use
# 
# The default file-based caching should work acceptably in many setups.
# Alternate schema may be used, including redis, sqlite, memcached or php APC. All require
# additional software be present on your server, and in general all will provide 
# better performance than file-based caching.

# Options are: 'file', 'memcached', 'redis', 'apc' and 'sqlite'
# memcached, redis and apc require PHP extensions that are not
# part of the standard CollectiveAccess configuration check. If you do
# configure them here and your PHP installation doesn't have the required extension you
# may see critical errors. sqlite requires the PHP PDO extension and a working install
# of sqlite. This is not guaranteed to be present on your server, but often is.
if (!defined('__CA_CACHE_BACKEND__')) { 
	define('__CA_CACHE_BACKEND__', 'file');
}

# Options for the caching back-ends you may wish to set include:
# __CA_CACHE_FILEPATH__ = Path to on on disk location for storage of cached data 
# __CA_CACHE_TTL__ = Cached data time-to-live (in seconds)
# __CA_MEMCACHED_HOST__ = Hostname of memcached server
# __CA_MEMCACHED_PORT__ = Port of memcached server
# __CA_REDIS_HOST__ = Hostname of redis server
# __CA_REDIS_PORT__ = Port of redis server
# __CA_REDIS_DB__ = redis database index (typically a number between 0 and 15) 

# --------------------------------------------------------------------------------------------

# __CA_ALLOW_INSTALLER_TO_OVERWRITE_EXISTING_INSTALLS__
#
# Set this to allow the installer to overwrite an existing installation.
# Only set this if you're debugging code or an installation profile.
# Leaving it set is a major security hole - it will allow *ANYONE* with access to the  
# installer to overwrite your database!
#
# Note that in overwriting your database you will destroy *all* data in the database 
# including any non-CollectiveAccess tables. Use this option at your own risk!
if (!defined('__CA_ALLOW_INSTALLER_TO_OVERWRITE_EXISTING_INSTALLS__')) {
	define('__CA_ALLOW_INSTALLER_TO_OVERWRITE_EXISTING_INSTALLS__', false);
}

# __CA_STACKTRACE_ON_EXCEPTION__
#
# Set to display detailed error information on-screen whenever an application 
# exception occurs. This can be helpful for developers in situtations where detailed 
# exception messages are useful but full debugging output is not required. 
# For production use you should set this to false. Note that exceptions are always
# logged to the application log in app/log, regardless of what is set here.
if (!defined('__CA_STACKTRACE_ON_EXCEPTION__')) {
	define('__CA_STACKTRACE_ON_EXCEPTION__', false);
}

require(__DIR__."/app/helpers/post-setup.php");

/* ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2008-2020 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
