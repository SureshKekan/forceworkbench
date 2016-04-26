### 2010-10-03 Workbench 20.0.0 Beta 3 Now Available ###
After the first round of beta testing, a few minor issues were found and a final new feature was put in place:

  * Localization formatting of date times -- thanks to contribution from @drakored!
  * Fix labels for Package Version settings
  * Fix issues with menus not appearing at times and/or acting flaky. If you still see this behavior, please report it asap.
  * Add help text to Deploy page'

**Downloads: http://code.google.com/p/forceworkbench/downloads/list**


### 2010-09-27 Workbench 20.0.0 Ready for Beta Testing ###
Workbench 20.0.0 for the Salesforce Winter '10 Release is now ready for beta testing. In addition to updates for API 20.0, the new version also includes new SOQL Matrix View, Bulk API binary file support, localization enhancements, new SOAP headers, and a handful of performance enhancements. There was also a good amount of backend refactoring to make the code more maintainable going forward, but that also means more chances for new bugs that crept in, so please participate in this beta testing and report any strange behavior asap!

**Downloads: http://code.google.com/p/forceworkbench/downloads/list**

**Change Log**

  * Upgraded Partner, Apex, and Bulk clients to Force.com API 20.0
  * SOQL Matrix View to view SOQL query results on a matrix grid with arbitrary columns and rows
  * Support for binary file DML operations with new Bulk API ZIP\_CSV and ZIP\_XML content types
  * Timezone conversion for date times
  * All-Or-None transactional DML processing
  * Auto-refresh on async status pages
  * Display object and fields labels in any language
  * Support for AllOrNoneHeader, DisableFeedTrackingHeader, LocaleOptions, PackageVersionHeader SOAP headers
  * Keyboard shortcut (Crtl+=) for adding filter/object rows in SOQL/SOSL builders
  * Show warning for unsupported settings for current API version or Bulk API operation
  * Removed Jump To menu by default. Can be re-added with new setting.
  * Added escaping for package names in Metadata Retrieve
  * Allow Bulk API to be used down to API 16.0
  * Read-only Mode for kiosk support
  * Performance: New .htaccess files for enabling caching of static content and GZIP compression if Workbench is installed on a Apache Web Server
  * Performance: Delayed loading of some UI elements during download and rendering
  * Performance: Limited cookie traffic to only overridden configs
  * Performance: Moved all JavaScript to footer
  * Performance: Achieved YSlow A rating
  * Bug Fix: string-based configs not clearing to defaults
  * Bug Fix: invalid Async Ids in Metadata API operations
  * Bug Fix: Bulk API operations with polymorphic foreign key lookups
  * Bug Fix: Session Info not displaying for users without Metadata API access


### 2010-06-17 Workbench 3.0.19 Now Available ###
**[Download Workbench 3.0.19](http://forceworkbench.googlecode.com/files/workbench-3.0.19.zip)**

**Metadata API Support**

Rounding out support for all of the Force.com APIs, Workbench 3.0 now provides robust support for the Metadata API. Users can now describe, list, deploy, and retrieve metadata components and monitor asynchronous metadata operations via a simple yet powerful interface.

**Fresh New Look and Menus**

Workbench 3.0 now offers users a fresh new look and feel with a smaller header and navigation bar. This improves the user experience while giving back valuable screen real estate and providing a more extensible menu system for future growth.

**Switch API Versions On The Fly**

Testing and troubleshooting operations on multiple API versions no longer means tediously logging out and back in again. With Workbench 3.0, the API version of the Workbench session can be changed on the fly. In addition, a new page with the current session info has been added for quickly accessing vital information about the connection, user, and organization.

**Bulk API: Hard Delete and Processing Time Reporting**

Force.com Bulk API 19.0 introduced the ability to hard delete records without first going to the Recycle Bin. Workbench 3.0 fully supports this new Hard Delete operation along side the standard Delete functionality.

**Persistent Named Queries & Searches**

Workbench 2.5.8 introduced the ability to name and save queries and searches, but they only lasted as long as the user's session. Now with Workbench 3.0, these named queries and searches are persisted from session to session and can even be retrieved (optionality) across users and organizations.

**[Download Workbench 3.0.19](http://forceworkbench.googlecode.com/files/workbench-3.0.19.zip)**

See [Version History](http://wiki.developerforce.com/index.php/Workbench#Version_History) for more details and bug fixes.


### 2010-06-17 PHP Bulk API Client 19.0 Now Available ###
In parallel with the Workbench 3.0.19 release, the PHP Bulk API Client 19.0 is also available as a standalone download. The new version includes full support for the Force.com Bulk API 19.0, including support for the new hardDelete() operation and additional processing time and failure statistic fields on the info objects.

**[Download PHP Bulk API Client 19.0](http://forceworkbench.googlecode.com/files/PHP_BulkApiClient-19.0.zip)**


### 2010-06-11 Test Drive Workbench 3.0.19 Beta 1 ###
**[Download Workbench 3.0.19 Beta 1](http://forceworkbench.googlecode.com/files/workbench-3.0.19-Beta_1.zip)**

Hot off the presses, the next generation 3.0.19 Beta 1 is now available for download and testing. This new version sports the following new enhancements:
  * Metadata API support (Describe & List Metadata, Deploy, Retrieve, Async Process Monitoring)
  * Fresh new user interface with drop-down navigation and a smaller footprint.
  * Bulk API hardDelete(), request downloading, and processing time support
  * Ability to change API versions on the fly without logging out
  * Saved queries and searches now persist across sessions

See [Version History](http://wiki.developerforce.com/index.php/Workbench#Version_History) for more details and bug fixes.

Please [log a bug](http://code.google.com/p/forceworkbench/issues/entry) for any issues (including feature requests) you might find.



### 2010-03-07 Workbench 2.5.18 Now Available ###
**[Download Workbench 2.5.18](http://forceworkbench.googlecode.com/files/workbench-2.5.18.zip)**

**Upgraded Partner, Apex, and Bulk API clients to Force.com API 18.0**

Added support for new API 18.0 features, including aggregate SOQL queries with aggregate functions, date functions, and GROUP BY, HAVING, and WITH (DATA CATEGORY) keywords, and bulk delete operations via the Bulk API.


**Named Queries & Searches**

Now with 2.5.18, Workbench supports the ability to give names to your queries and searches to retrieve them at a later time during your Workbench session. This allows you to store any query or search directly in Workbench so you can easily re-run it at anytime.


**Unlimited Query & Search Filters**

Previously, the number of query and search filters in the SOQL/SOSL builders were limited to a fixed number, but now you can expand the number of filters to as many as you need. Workbench will continue to dynamically build your query/search for you as you expand the filters and this feature is fully compatible with the Named Queries & Searches feature above so you can retrieve easily all your filters.


**Client-Side Sortable Query & Search Results (Beta)**

SOQL/SOSL have always allowed the use of the ORDER BY keyword to make Salesforce sort the results, but sometime you want to do a quick sort in the browser. Now with 2.5.18, there is a custom setting (Settings | Query & Search Options | Sortable Results) to sort any column just by clicking on its header.

See [Version History](http://wiki.developerforce.com/index.php/Workbench#Version_History) for more details and bug fixes.

### 2010-02-21 Test Drive Workbench 2.5.18 Beta 1 ###
A little delayed this time around, but I'm proud to announce Workbench 2.5.18 Beta 1 for Salesforce Spring '10 is ready to be downloaded and taken for a spin! Development on this release primarily focused on the Query and Search functions to make them even more powerful and easier to use. Features and bug fixes include:

  * Upgraded Partner, Apex, and Bulk clients to Force.com API 18.0.
  * Add ability to save named queries and searches and recall them at a later time during the Workbench session.
  * Enhanced query and search builders to support an unlimited number of filters (SOQL) and object selections (SOSL).
  * Allow SOQL query results using constructs introduced in API 18.0, such as aggregate function, date functions, GROUP BY, HAVING, and WITH (DATA CATEGORY) keywords. Note, the SOQL query builder in Workbench does not yet support assist with building these queries, but will now display their results.
  * Added support for bulk Delete operations with Bulk API 18.0.
  * Client-side sorting of data tables, including query and search results.
  * Display of stateInfo in batches and jobs for Bulk API and allow failed results to be downloaded.
  * Pretty printing of SOAP messages in debug mode.
  * Added support for Mac-style CSVs.
  * Various minor bug fixes, including: corrected display issues with queries of history entities, added missing attributes in describe results, fixed minor Java Script events for better keyboard support.


**[Download Workbench 2.5.18 Beta 1](http://code.google.com/p/forceworkbench/downloads/detail?name=workbench2.5.18_Beta1_2010-02-21.zip) today and please provide early feedback!**

Please remember that this version (by default) must be used with Salesforce organizations already upgraded to Spring '10. To use with organizations still on Winter '10, use the Advanced Login feature to change the API version to 17.0.