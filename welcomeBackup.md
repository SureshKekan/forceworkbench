![http://wiki.developerforce.com/images/b/b5/Workbench_logo.png](http://wiki.developerforce.com/images/b/b5/Workbench_logo.png)

Workbench is a powerful, web-based suite of tools designed for administrators and developers to interact with Salesforce.com organizations via the Force.com APIs. Workbench includes robust support for the Force.com Partner, Bulk, Rest, Metadata, and Apex APIs that allows users to describe, query, manipulate, and migrate both data and metadata in Salesforce.com organizations directly in their web browser with a simple and intuitive user interface. Workbench also provides many advanced features for testing and troubleshooting the Force.com APIs, such as customizable SOAP headers, debug logs for API traffic, backward compatibility testing with previous API versions, and single sign-on integration within the Salesforce application.

## News ##
<wiki:gadget url="http://www.ourportal.nl/our\_rss\_reader.xml" up\_mfeed="http://groups.google.com/group/forceworkbench/feed/rss\_v2\_0\_msgs.xml" width="500" height="300" border="0"/>

### 2011-08-31 Using Workbench with Database.com ###
If you're attending Dreamforce, you've probably already seen that Workbench is a great tool for accessing Database.com. Check out this great introduction to Workbench on the [Database.com Blog](http://blog.database.com/blog/2011/08/30/short-take-005/):


<a href='http://www.youtube.com/watch?feature=player_embedded&v=ThAxdDy4iMI' target='_blank'><img src='http://img.youtube.com/vi/ThAxdDy4iMI/0.jpg' width='425' height=344 /></a>

### 2011-08-29 Workbench 22.0.1 is Now Available for Download ###
After a lengthy beta period, Workbench 22.0.1 is finally GA and available for download! [Download today!](http://code.google.com/p/forceworkbench/downloads/list)

New features include:
  * Single Record Data Actions
  * Record Detail Page
  * Id Action Hover Menu
  * Security: OAuth Login, CSRF, Org Id Restrictions

For details about the new features, please see [What's New in Workbench 22.0.1](http://wiki.developerforce.com/index.php/Workbench#What.27s_New_in_Workbench_22.0.1).

### 2011-08-23 Workbench is in the Cloud at workbench.developerforce.com ###

[![](http://wiki.developerforce.com/images/0/00/Workbench_developerforce_com.png)](https://workbench.developerforce.com)

I am frequently asked, “If Workbench is a web application, why do I
have to download it and run it on my own web server? Why isn’t it just
available for everyone in the cloud?” Today, I’m very excited to
announce that now you can now access Workbench at https://workbench.developerforce.com.

We are currently in a beta period for this new instance, so please let
me know if there are any problems you see. Please note that this is
the same version of Workbench you can download, but some features are
scaled back or disabled to keep performance in check.

Rest assured, Workbench is still open source and is still available
for download, if you wish to host it yourself. This method is still
recommended for production organizations, heavy performance load, or
to use features that are not exposed in the public instance.


### 2011-08-07 Workbench 22.0.1 Beta 3 Now Available ###
After over 30 downloads of the first beta, Workbench 22.0.1 Beta 3 (Beta 2 was very short lived) is ready with a lot of bugs fixed and greater stability. Issues were mostly around login and session management, as there were a lot of changes to this area in 22.0.1. If you were seeing any issues in these areas, this release should be much more stable, but please continue to test out features and report any issues.

Download:
http://code.google.com/p/forceworkbench/downloads/list

Full Change Log (since Beta 1):
  * Test connection and prime cache after login with enhanced error handling
  * Added and updated new Salesforce service instances
  * Added explicit error handling for missing version in RetrieveRequest
  * Refactored and simplified select.php
  * Allow top-level error handler to only handle default error types
  * Disable session keep-alive on login and logout
  * Only create WorkbenchHandledException from unhandled exceptions
  * Force SoapClient to throw Exceptions instead of Errors
  * Only trace SOAP messages if debugging is enabled
  * Bug Fix: Advanced login Server URL builder not working if oauth not enabled
  * Bug Fix: Cached API connections not being cleared on login
  * Bug Fix: Standard CSV query export not enabled by default
  * Bug Fix: Singleton RecordTypeInfos appearing as top-level describe elements
  * Bug Fix: Request time calculation attempted on cleared request context
  * Bug Fix: Password-based auto logins failing to process request
  * Bug Fix: Complex data type processor failing on configs that do not declare dataType

### 2011-07-28 Calling All Beta Testers!!! Workbench 22.0.1 Beta 1 is Now Available! ###
Only a month after pushing out the last release, the new Workbench 22.0.1 Beta 1 is ready to be download and tested. This is one of the biggest releases of Workbench, and we need all the eyes we can get to find the bugs before it goes GA! There have been major improvements to security with better XSS and CSRF protection, OAuth login support, org id black/whitelisting, and SSL requiredness. This release also includes single record detail pages and DML actions -- no longer do you need to export CSVs to edit just one record or jump to Salesforce to view a detail page. This can now all be done within Workbench, greatly improving your productivity.

Download:
http://code.google.com/p/forceworkbench/downloads/list

Full Change Log:
  * Single record detail pages with id link integration
  * Single record DML actions with detail page and id link integration
  * OAuth 2.0 login support
  * Optional Login CSRF protection
  * CSRF protection for all writable POSTs
  * Organization id blacklist/whitelist
  * Clear cache after a metadata deployment
  * Add buttons to explictly clear Workbench cache
  * Change PHPSESSION to be HTTPOnly
  * Add top-level PHP error handler
  * Request and top-level error/exception logging to syslog
  * Better protection for non-overrideable settings
  * Support parsing of Enterprie API server URLs on login
  * Show login errors on login page with non-secret fields pre-populated
  * Send user to logout page on authentication errors
  * Allow latest version checks to be disabled
  * Added ability to configure terms of service to which users must agree to login
  * Replace expected Exceptions with HandledExceptions
  * Support /id URLs in REST Explorer
  * Add configuration to disable parent relationship queries
  * Add configuration to disable CSV export
  * Add configuration for end-to-end SSL requiredness
  * Disable pilot Streaming API client when connected to Winter '12 instance
  * Bug Fix: Stop describing objects DML actions that do not require objects
  * Bug Fix: Re-allow logins to instances with port numbers
  * Bug Fix: Allow programmic portal id login to work
  * Bug Fix: Reviewed and added XSS protection to various areas of the app
  * Bug Fix: XSS protection for PHP\_SELF and disallow URIs with PATH\_INFO
  * Bug Fix: Allow Streaming API client to work with proxies that add additional headers
  * Bug Fix: Trim cookies in streaming client
  * Bug Fix: Use SSL on non-IIS servers in streaming client
  * Bug Fix: Content-Type Header Not Being Set in PhpReverseProxy if !function\_exists('getallheaders')


### 2011-06-26 Workbench 22.0.0 Now Available for Download ###
In addition to updates for Salesforce Summer '11 and API 22.0, the new Workbench 22.0.0 introduces several new enhancements and bug fixes, including an new interactive tool to [discover the new Streaming API](http://wiki.developerforce.com/index.php/Workbench#Streaming_API_Utility), easier [access to user info](http://wiki.developerforce.com/index.php/Workbench#User_Info_Hover), better [pagination of query results](http://wiki.developerforce.com/index.php/Workbench#Enhanced_Query_Result_Pagination), and proxy support for Bulk and REST API clients.

**Read more about the [new features](http://wiki.developerforce.com/index.php/Workbench#What.27s_New_in_Workbench_22.0.0) and [download Workbench 22.0.0](http://code.google.com/p/forceworkbench/downloads/detail?name=workbench-22.0.0.zip&can=2&q=)**.

![http://wiki.developerforce.com/images/e/e7/Streaming-client-torn.png](http://wiki.developerforce.com/images/e/e7/Streaming-client-torn.png)


### 2011-06-23 Workbench Tools for Firefox 5.0 Now Available ###
<img src='http://wiki.developerforce.com/images/d/de/WorkbenchToolsForFirefoxScreenshot.png' align='right' />
Trying out Firefox 5.0 and have your Workbench add-on disabled? The new Workbench Tools for Firefox now supports all versions of Firefox 5.0!

Download:
https://addons.mozilla.org/firefox/downloads/file/124019/workbench_tools_for_firefox-1.2.4-fx.xpi?src=external-googlecode

### 2011-06-17 Workbench 22.0.0 Beta 1 Now Available for Download ###
Salesforce Summer '11 has been now deployed to everyone, so its time for a new Workbench! Currently in beta, this latest release upgrades everything to the latest API 22.0, including new support for the new Bayeux/CometD-based Streaming API complete with cross-domain reverse proxy support! The Streaming API is currently a PILOT feature in Summer '11 -- for more information about the API and the developer preview, go to:
http://www.developerforce.com/events/streaming_api_webinar/registration.php?d=70130000000G6wx

Download:
http://code.google.com/p/forceworkbench/downloads/list

Full Change Log:
  * Upgraded Partner, Apex, Bulk, REST, and Streaming clients to Force.com API 22.0
  * Added Streaming API (pilot) support. Manage Push Topics, subscriptions, and monitor meta channels. Includes reverse proxy to handle cross-domain traffic
  * Revamped API connection and cache management with new Workbench Context. Additional items will be folded into this in the coming releases to allow for a common way for accessing connections, caching values, and other application-wide coordination.
  * Added proxy support for Bulk and REST API clients and tools
  * Continue incrementing query results rows for paginated results
  * Added support for login startUrl parameters with additional query parameters
  * Show waiting indicator for REST Explorer
  * Added a tool tip with secondary user info
  * Show number of sub-items in more folder trees
  * Warn when memory usage is too high on querying to CSV
  * Bug Fix: Allow deletes, undeletes, and purges to read CSVs with Id column in non-first column
  * Bug Fix: Make best attempt to find older WSDL for Metadata and Apex
  * Bug Fix: Warn when memory usage is too high on querying to CSV

### 2011-03-17 Workbench Tools for Firefox 4.0 Now Available ###
Trying out Firefox 4.0 and have your Workbench add-on disabled? The new Workbench Tools for Firefox now supports all versions of Firefox 4.0!

Download:
https://addons.mozilla.org/firefox/downloads/file/114348/workbench_tools_for_firefox-1.2.3-fx.xpi?src=external-googlecode

### 2011-03-15 Workbench 21.0.1 Now Available for Download ###
This latest update focuses on making Workbench and the Bulk API Client perform better with large data sets and additional minor features and bug fixes:

  * Stream Bulk API results and REST Explorer binary downloads directly to end user without loading into Workbench memory.
  * Allow Bulk API Client to take any Salesforce SOAP API endpoint, instead of just Partner API. Pre-constructed Bulk API are also allowed now.
  * Allow Bulk API Client to export results to local files.
  * Check memory usage on CSV uploads and recommend using Bulk API if memory is almost exhausted.
  * Only recommend Bulk API for DML is cURL extension is installed.
  * Remove dependency on PECL library for hashing footer scripts.
  * Ping Salesforce on page loads after five minutes of inactivity to check if session is still alive.
  * Bug Fix: Use object in FROM clause for Bulk Queries instead of object specified in query form.
  * Bug Fix: Download ZIP-based Bulk API requests as ZIP files.
  * Bug Fix: Allow REST Explorer to download binaries from Chatter feeds.
  * Bug Fix: Auto-execute REST-based queryMore requests in REST Explorer.

Download:
http://code.google.com/p/forceworkbench/downloads/list

### 2011-02-23 Workbench 21.0.0 with REST Explorer & Bulk API Query Support Now Available for Download ###
After a successful run in beta, Workbench 21.0.0 is now available for general download!

New features include:
  * Full support for API 21.0
  * REST Explorer to discover to the new Force.com REST API with JSON viewer and ability to customize headers and view raw responses
  * Bulk API Queries, with ability to asynchronously export to CSV or XML formats
  * Default large data operations to use load asynchronously via the Bulk API
  * Improved links from Workbench to Salesforce UI, with options to customize login behavior.

Bug Fixes include:
  * CSV formats now recognized on upload
  * Metadata Deploy with Perform Retrieve option allows ZIP to be downloaded
  * Localization of dates works correctly even if timezone is unset

Download:
http://code.google.com/p/forceworkbench/downloads/list

...and if you haven't done it already, make sure you [download Workbench Tools for Firefox](https://addons.mozilla.org/en-US/firefox/addon/workbench-tools-for-firefox/?src=external-googlecode) to make login to Workbench a breeze!


### 2010-10-03 Workbench Tools for Firefox - NEW! ###
Introducing [Workbench Tools for Firefox](https://addons.mozilla.org/en-US/firefox/addon/235866/?src=external-googlecode), a new Firefox browser add-on that adds a toolbar button to your browser for one-click login to Workbench from Salesforce.com!

After you have Workbench up and running, install Workbench Tools for Firefox to get a new toolbar button in Firefox for automatically logging into Workbench from an active Salesforce.com session. If you are not logged into Salesforce.com, the button will simply direct you to the standard Workbench login screen.

Note, the first time you use this plug-in, you will be prompted to provide your Workbench base URL. For example, if the login page for your Workbench instance is at http://localhost/workbench/login.php, just enter http://localhost/workbench. If you need to access the Options menu in the future, right-click on the toolbar button.

**[Download Workbench Tools for Firefox](https://addons.mozilla.org/en-US/firefox/addon/235866/?src=external-googlecode)**

## News Archive ##
  * [2010 (v2.5 - 20.0)](NewsArchive2010.md)
  * [2009 (v2.2 - v2.4)](NewsArchive2009.md)
  * [2008 (v1.1.12 - 2.1)](NewsArchive2008.md)

## Statistics ##
&lt;wiki:gadget url="http://www.ohloh.net/p/19596/widgets/project\_partner\_badge.xml" height="60" border=0 /&gt;
&lt;wiki:gadget url="http://www.ohloh.net/p/19596/widgets/project\_cocomo.xml" height="240"  border="0" /&gt;
&lt;wiki:gadget url="http://www.ohloh.net/p/19596/widgets/project\_languages.xml" height="225" width="350" border=0 /&gt;