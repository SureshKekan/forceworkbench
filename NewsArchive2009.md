### 2009-11-07 PHP Bulk API Client 17.0 Now Available ###

Workbench 2.4.17 introduced support for the new Force.com Bulk API, but now you can use the same REST-based Bulk API client used in Workbench in your own PHP-based applications. All dependencies on Workbench have been removed and is now available as a standalone download with sample code and instructions.

**Download http://code.google.com/p/forceworkbench/downloads/detail?name=PHP-BulkApiClient17.0_2009-11-09.zip**


### 2009-10-10 Workbench 2.4.17 Now Available ###

**Upgraded Partner and Apex clients to Force.com API 17.0**
Added support for new API 17.0 Describe results format and maintain backward compatibility to older API versions. In addition, when logged in with API 17.0 and higher, Workbench only displays the objects that are supported for a particular operation.

**Asynchronous Bulk API Data Loading**
With the new Bulk API introduced by Salesforce in Winter '10 (API 17.0), Workbench now fully supports asynchronous Insert, Update, and Upsert data loading operations over a new REST-based API client. This has been seamlessly integrated with the existing synchronous operations to support CSV field mapping, Smart Lookup, and asynchronous results monitoring.

**Enhanced Configuration Overrides**
In previous versions of Workbench, admin-controlled configurations had to be applied directly in the config.php file, which could change from version to version; however, these customizations can now be added to the new configOverrides.php file which will automatically override any default settings in config.php and not be affected by changes made during Workbench upgrades. Administrators can still give allow end users override any configurations on the Settings menu and their preference will be remember from session to session.

See [Version History](http://wiki.developerforce.com/index.php/Workbench#Version_History) for more details.

**Download: http://forceworkbench.googlecode.com/files/workbench2.4.17_2009-10-10.zip**


### 2009-10-04 Workbench 2.4.17 Beta 2 Now Available ###
Thank you to everyone who downloaded Beta 1. Over the past couple
weeks, I have been making tweaks based on feedback and completed a
good amount of internal refactoring. Most of these changes should not
be too obvious to end users, but there is always the chance that new
bugs crept in with the changes, so the more people who download and
try out Beta 2, the better shape we'll be in for the GA release next
week. Changes from Beta 1 to Beta 2 include:

  * Removed extraneous option for Bulk API operations for Delete, Undelete, Purge (should only work for data loading operations)
  * Added created and updated times for Bulk API operations
  * Increased default max file sizes
  * Jump to login page after logout (2 sec delay)
  * Correctly reference Bulk API (instead of deprecated 'Async API' naming)
  * Change default endpoint to login.salesforce.com to reflect post 17.0 changes
  * Corrected minor formatting issues in IE
  * Added configOverrides.php file to keep the original config.php file clean for upgrades
  * Added a setting to optionally disable SSL connections to Salesforce
  * Enhanced SSL checker to detect unsecure connections to Salesforce in addition to local machine to Workbench connections
  * Added a default client id for Workbench. End users can still override, if needed.
  * Added sticky option for Advanced login screen if frequently used. (still defaults to Standard login)
  * Spelling corrections
  * Refactoring and centralization of: page names, menu building, Apex API versions, version number, endpoint construction, error handling

**Download: http://forceworkbench.googlecode.com/files/workbench2.4.17_Beta2_2009-10-05.zip**

### 2009-09-21 Test Drive Workbench 2.4.17 Beta 1 ###
Hot off the presses and ready to be tested, I'm proud to announce the first beta release for Workbench 2.4.17 on the heals of the Salesforce Winter '10 being released to Sandbox!

The big new feature is full support for the new [Force.com Bulk API 17.0](http://www.salesforce.com/us/developer/docs/api_asynch/index.htm) that allows for asynchronous data loading when performing inserts, updates, and upserts. In addition, support has been added to work with new describe data in API 17.0 to properly filter object names for the operation being performed (i.e. only see queryable objects when querying), while still allowing for backward compatibility of older API versions. Stricter adherence to the WSDLs for each API version has also been introduced.

With a few weeks to go until the scheduled release,
**[download Workbench 2.4.17 Beta 1](http://forceworkbench.googlecode.com/files/workbench2.4.17_Beta1_2009-09-21.zip)** today and provide feedback. Please remember that you must use this version with Salesforce organizations already upgraded to Winter '10 to take advantage of the new features.

### 2009-06-21 Download Workbench 2.3.16 for Summer '09 Today ###
With Salesforce.com completing its Summer '09 roll out to production last week, it's time for Workbench to introduce its own set of exciting enhancements! [Download Workbench 2.3.16](http://code.google.com/p/forceworkbench/downloads/detail?name=workbench2.3.16_2009-06-21.zip) today to try out all these new features:

  * Upgraded Partner and Apex clients to Force.com **API 16.0**

  * Added support for **parent-to-child SOQL relationship queries** to display nested sObjects. For example, `[SELECT Id, Name, (SELECT Id, LastName, FirstName FROM Contacts) FROM Account]` will display Accounts with their child Contacts.

> Now that relationship queries are available in both directions (parent-child and child-parent), you can leverage the combination of relationship and semi-joins to run queries such as `[SELECT Name,(SELECT Contact.Name FROM OpportunityContactRoles) FROM Opportunity WHERE Id IN (SELECT OpportunityId FROM OpportunityContactRole)]` to reach down to the Opportunity Contact Roles on all Opportunities that have Contacts associated to them and then display the Contact's names -- all without having to deal with Salesforce Ids!

  * Added the ability to **download full results history** from file-based API operations. Similar to the success and error files produced by the Data Loader, but in one convenient file that can be downloaded on demand.

  * Introduced optional **Describe Results Highlighting** for custom fields, system fields, and boolean values.

  * Extended **Link Ids to Record Detail** feature across the entire application. Now, if a Salesforce Id appears anywhere from a query result to a Apex debug log to an upsert, it is automatically hyperlinked to the record detail in the Salesforce user interface. This feature can optionally be disabled.

  * Added advanced login support for new Salesforce instances, including AP1 and CS5.

  * Added additional set of buttons at top of Setting page for easier access.

  * Corrected error if more than one Document or Attachment body is queried.

  * Made Search results consistent with the rest of the application to start incrementing results at 1.

  * Minor bug fixes to CSV preview.

**[Download Workbench 2.3.16](http://code.google.com/p/forceworkbench/downloads/detail?name=workbench2.3.16_2009-06-21.zip)**

### [2009-02-15] Workbench 2.2.15 for Spring '09 is Live and Available for Download ###

With Spring '09 finally delivered to the last remaining Salesforce instances this weekend, the all new Workbench 2.2.15 has been released and is available for download. See below for all the new features.

**[Download Workbench 2.2.15 today!](http://code.google.com/p/forceworkbench/downloads/list)**


**What's New in 2.2.15:**

**Full Support for Spring 09 and API 15.0**

With the new Force.com Web Services API 15.0 for Spring '09, the Allow Field Truncation SOAP header and new standard objects have been introduced. The Workbench supports all of these new features with a Setting to optionally disable Field Truncation or dynamically change your API version. In addition, support for the Login Scope Header for use with Customer Portal, Partner Portal, and Self-Service Portal has been implemented under Settings and for use with auto-login.

**Parent Relationship Queries**

Ever wanted to query all your Contacts with their parent Account names, but could only get a list of cumbersome Account Ids or nested cross-object results? Now with the new Workbench, you can easily query parent records using the familiar dot notation and have the query results displayed in one, simple table for browser viewing or CSV export. For example, to get your Contact’s Account Name, First Name, Last Name, and Owner’s Name without having to mess with Salesforce Ids, simply write your SOQL query like this:

`SELECT Account.Name, LastName, FirstName, Owner.Name FROM Contact`

Just remember to use the relationship names (“Account” and “Owner” in this case) to traverse the hierarchy up to five levels.

**Jump Directly to Record Details from Query Results**

Wish you could drill into query results the same way you do in Salesforce Reports? Now you can with a new feature that automatically turns every Salesforce Id in your query results into a hyperlink to the original record in the Salesforce user interface. Just click on any Id and the detail is instantly shown in a new window or tab. If you would rather not have these links in your query results, simply disable this feature under Settings.

**Enhanced Auto-Login Interface**

Single Sign-On into the Workbench is now easier than ever with the new enhanced auto-login interface. Any advanced login options that can be done through the Workbench user interface, can now be done through the URL query parameters. You can integrate this into your organization’s existing SSO solution or simply create a Web Tab to quickly jump from the Salesforce user interface into the Workbench. See Login FAQs below for details.

**Server URL Fuzzy Lookup**

Tired of having to choose the Server URL when logging on with a Session Id? Now the Workbench will use its fuzzy logic to guess the Server URL for you. Note, this feature will not work correctly for orgs that were migrated from one instance to another, so those users may wish to disable this feature under Settings.

_For all new features, please see the [Version History](http://wiki.apexdevnet.com/index.php/Workbench#Version_History)_

**[Download Workbench 2.2.15 today!](http://code.google.com/p/forceworkbench/downloads/list)**


### [2009-02-12] Third Time's the Charm: Beta 3 is Available for Download ###
I thought Beta 2 was going to be the last Beta version before the next release this weekend, but I found a significant bug today with auto-login, which is now fixed in Beta 3, and I also added a couple little convenience features:

  * Fixed bug in auto-login with client id pass through in query parameter. Login was occurring with client id, but subsequent actions were failing.
  * Added startUrl auto-login query parameter to specify the starting page after login. Defaults to select.php.
  * Added caps lock warning feature if user has caps lock on when typing password on either standard or advanced login.


### [2009-02-09] Beta 2 Available for Download ###
In the last week I have added a few more bells and whistles, particularly around automation of login to the Workbench and back into the Salesforce UI. See below for the latest release notes of the beta program:

  * Ids in query results are hyperlinked to their corresponding record in the Salesforce user interface, with setting to disable if desired.
  * Added Server URL Fuzzy Lookup to guess the instance from the session id on advanced logins, with setting to disable if desired
  * Exposed new auto-login query parameters: inst, api, clientId, orgId, portalId
  * Improved logout behavior when a bad sessions is detected
  * Data table row numbering no longer starts at 2, and numbers continue for queryMore results
  * Implemented Login Scope Header both in Settings and for orgId and portalId auto-login parameters for login into Customer and Partner Portals
  * Removed proxy configurations from Settings overrides by default. Admins can still make changes in config.php


### [2009-02-01] Beta Test the New Workbench 2.2.15 ###
I'm proud to announce the first public beta of Workbench 2.2.15 for Salesforce Summer '09! New features include:
  * Upgraded Partner and Apex clients to Force.com API 15.0
  * Added support for child-to-parent SOQL relationship queries to unwrap nested sObjects and display inline in the browser and for CSV exports. For example, SELECT Id, Opportunity.Account.Name, ContactId FROM OpportunityContactRole will unwrap the Opportunity.Account.Name value and display inline with Id and Contact. Parent-to-child relationship queries are not yet supported, and a error message will be displayed as such.
  * Added support for AllowFieldTruncation SOAP header and accessible under Settings | Data Management.
  * Fixed bug to allow Client Id to be set before login for access to PE and GE organizations
  * Shows new version notifications on select.php if auto-login is used
  * Query results incremented with continuously across queryMore() batches

[Download Workbench 2.2.15 Beta today!](http://code.google.com/p/forceworkbench/downloads/list?can=2&q=label%3Abeta)

Note, if you wish to use this beta version with orgs still on Salesforce Spring '09, you must connect at API 14.0. You can change this by either using Advanced login or changing the default API version under Settings.