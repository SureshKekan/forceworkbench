### [2008-10-21] Workbench 2.1 is Live! Upgrade Today! ###
With the downloads just surpassing 500 for Workbench 2.0, I am proud to announce the all new Workbench 2.1, with support for API 14.0, semi-joins, anti-joins, Apex script execution, and even more enhanced customizations. Many, many bugs were also fixed and security enhancements put in place to make this the most stable and secure Workbench to date. Download v2.1 today!

[Download and Installation Instructions](http://wiki.apexdevnet.com/index.php/Workbench#Installation)

[Upgrade Instructions](http://wiki.apexdevnet.com/index.php/Workbench#Upgrade_Instructions)

[Change Log](http://wiki.apexdevnet.com/index.php/Workbench#Version_History)


### [2008-10-15] Final Release Candidate 2.1.14 Beta 4.14 ###
Announcing Workbench 2.1.14 Beta 4.14, which will hopefully be the final beta version before we finally say goodbye to 2.0.13. Beta 4.14 is now fully configured for API 14.0 and had a few minor bug fixes and a slight enhancement to the debug mode with collapsible sections. I do not anticipate any changes between this beta and the full version, but wanted to give it a few days of tire kicking before cranking up the version number. Let me know asap if you find any bugs in this hopefully short-lived beta.


### [2008-10-06] Big Improvements in 2.1.14 Beta 3.13 - Execute Apex Scripts from the Workbench ###
Just when I thought I had a pretty stable beta release and was done adding features, I had a wave of inspiration and added a whole new component to the Workbench --  you can now execute Apex scripts as anonymous blocks directly in the Workbench! It is like having the System Log window right at your finger tips without having to separately login to Salesforce. Not only can administrators execute Apex code, but standard users can also call code to which they have security access. What's more, the Workbench also allows the Apex API version to be changed on the fly for an easy way to check backward compatibility, which is not available in the System Log.

In addition, enhancements were made to the Settings page to allow the default API version and login instance to be configured so you do not have to go to the Advanced Login page every time if you frequently login to a non-production instance.

Lastly, the Query and Search pages have been enhanced to remember your last choices in the builders even after switching to a different component. This is very helpful for switching back and forth between, say Describe and Query, and not having to re-enter criteria.


### [2008-09-21] Beta Test the New Workbench 2.1.14 ###
Salesforce is rolling out Winter '09 with API 14.0, which means its time for an update to the Workbench! First up, the WSDL has been updated for API 14.0 and the query builder has been updated for the new semi-joins and anti-joins API 14.0 supports. There have also been a few more options for automatic login via URL query parameters added to the application. In addition, there have been a several bugs fixed that had been lingering around since the last release. See the [Version History](http://wiki.apexdevnet.com/index.php/Workbench#Version_History) for details.


[Download Workbench 2.1.14 Beta 1.13 today!](http://code.google.com/p/forceworkbench/downloads/list)

Note, this "1.13" version still has the API 14.0 core upgrades, but has the default endpoint selections rolled back to API 13.0 so that it will still be compatible with Salesforce organizations still on the Summer '08 release. Once all Salesforce instances have been upgraded to Winter '09, a final version of Workbench 2.1.14 will be released.

### [2008-07-01] From Idea to 2.0 ###
About a year ago, I started learning PHP and was just getting my feet wet with the Force.com API, and I soon realized what I would need to do to really learn both --  build a web-based version of Apex Data Loader. I had used the Data Loader to import and extract data, and it did this pretty well, but thinking how cool it would be if this could all be done directly in a web browser like the rest of the Salesforce on-demand applications, I was very excited to start this project. _[Read more...](http://blog.sforce.com/sforce/2008/07/workbench-from.html)_

### [2008-06-16] Workbench 2.0 is Live! ###
Over 250 downloads and 80 bugs and feature requests after the Workbench was first publicly available, I am proud to announce the next generation Workbench 2.0. This new version is packed with new features including:
  * SOSL Search functionality to search for records across objects
  * Smart Lookup to leverage the API's hidden power to lookup Salesforce Ids for you
  * Settings to gain granular control of the Workbench's configuration
  * Caching and other performance improvements
  * New, slick look and color scheme
  * Updated for Summer '08 and API 13.0

To see all the changes in the version, please see the [Version History](http://wiki.apexdevnet.com/index.php/Workbench#Version_History)

**[Download Workbench 2.0 today!](http://code.google.com/p/forceworkbench/downloads/list)**

![http://blog.sforce.com/sforce/images/2008/07/01/wb2_sso.png](http://blog.sforce.com/sforce/images/2008/07/01/wb2_sso.png)

### [2008-05-31] Calling All Version 2.0 Beta Testers ###
The first public beta of Workbench 2.0 is now available for download! There have been over 40 bug fixes and features added to the application, and now I am looking for testers to try to find any more lurking bugs. For some highlights in the new version and more information about beta testing, please see this discussion:
http://groups.google.com/group/forceworkbench/browse_thread/thread/257a71d2cd6a4d22

**Update (6/8):** Beta 2.12 has now been released which introduces SOSL Searching for the first time and closed out all the remaining bugs. Download the new beta today to help find some more before it v2.0 goes GA!

### [2008-04-29] Version 1.3.12 Now Available For Download ###
A minor correction in the Workbench was made to allow for dynamic detection of PHP Magic Quotes to avoid errors with queries in the Export function. To upgrade, simply download the latest Workbench release and replace your entire Workbench directory with the new contents.

### [2008-04-28] Workbench Now Featured on developer.force.com ###
The Workbench is finally coming of age! It has come out from behind the alpha release shadows, and is now featured on both the front page of salesforce.com's [developer.force.com (DFC)](http://wiki.apexdevnet.com/index.php/Workbench) developer community site and in this month's [Force.com Developer News](http://forceworkbench.googlegroups.com/web/forceNewsFull.png?gda=yo1l9UIAAADa6MagW5sHmK0xyFO_pSycph8VyLUVsvfKAJ_yu1vdNWG1qiJ7UbTIup-M2XPURDTwLVcMAwjFo4gPRJ7SZlgtnpAqykqpuiMC6BOFDW9pGA) newsletter. This has helped bring the download count up to over 75 (and counting!) since v1.1.12 was released just a few days ago!

### [2008-04-27] Announcing Discussion Group for the Workbench ###
Have something you want to discuss about the Workbench? Have a great idea for a new feature? Looking for support from the community? Want to find out the latest news about the Workbench? Visit the new [Feedback & Discussion](http://groups.google.com/group/forceworkbench) site today.

### [2008-04-19] Version 1.1.12 Now Available For Download ###
I'm excited to announce the latest version of the Workbench. Even though there were just some minor changes to the application, it was a big move from Sourceforge over to Google Code and putting all the Help documentation at [developer.force.com](http://wiki.apexdevnet.com/index.php/Workbench). In addition, the Workbench now automatically checks to make sure you are running the latest version available -- no annoying pop-ups, just an unobtrusive message on login.

**What's New in v1.1.12**

  * Added auto-update reminder function if cURL is enabled
  * Corrected EMEA login URL Bug
  * Corrected Export Query Builder Bug that did not properly unquote null values
  * Started to move some constants to central shared.php for version control and auto-update reminders
  * Migrated SVN, downloads, and issue tracking to [Google Code](http://code.google.com/p/forceworkbench/)
  * Moved Help documentation to [developer.force.com](http://wiki.apexdevnet.com/index.php/Workbench)