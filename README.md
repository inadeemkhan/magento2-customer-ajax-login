# Magento2 Customer Signup/Signin via Ajax
Free Magento2 extension to login & signup using ajax | Nadeem Khan
<!-- 
<img src="https://i.ibb.co/MpFR77S/Magento2-linneo-member-discount.png" alt="Magento2-linneo-member-discount" border="0">
 -->
## Features:
1. Admin can enable/disable the Extension from backend.
2. Customer can Sign IN / Sign UP Using Ajax Popup.
3. Works Like a Magento Core Functionality.

# Installation Instruction

## Main Functionalities
Free Magento2 extension to login & signup using ajax

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Nadeem`
 - Enable the module by running `php bin/magento module:enable Nadeem_AjaxLogin`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require nadeem/module-ajaxlogin`
 - enable the module by running `php bin/magento module:enable Nadeem_AjaxLogin`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


# Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

# Screenshots & Support

If you encounter any problems or bugs, please <a href="https://github.com/inadeemkhan/magento2-weather-report/issues">open an issue</a> on GitHub.

<b>Admin Configuration</b>

<img src="https://i.ibb.co/YXSFHpP/Admin-Api-Info.png" alt="Admin-Api-Info" border="0">

<b>Get Report Section</b>

<img src="https://i.ibb.co/8M1TJ9q/Get-Report.png" alt="Get-Report" border="0">

<b>Search History Section</b>

<img src="https://i.ibb.co/RS3zcsS/Show-Historic-Report.png" alt="Show-Historic-Report" border="0">

<b>PDF Report Section</b>

<img src="https://i.ibb.co/d0NQJGd/Pdf-Report.png" alt="Pdf-Report" border="0">

## Prerequisites

### Use the following table to verify you have the correct prerequisites to install this Extension.
<table>
	<tbody>
		<tr>
			<th>Prerequisite</th>
			<th>How to check</th>
			<th>For more information</th>
		</tr>
	<tr>
		<td>Apache 2.2 or 2.4</td>
		<td>Ubuntu: <code>apache2 -v</code><br>
		CentOS: <code>httpd -v</code></td>
		<td><a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/apache.html">Apache</a></td>
	</tr>
	<tr>
		<td>PHP 7.*.*</td>
		<td><code>php -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.2/install-gde/prereq/php-ubuntu.html">PHP Ubuntu</a><br><a href="http://devdocs.magento.com/guides/v2.2/install-gde/prereq/php-centos.html">PHP CentOS</a></td>
	</tr>
	<tr><td>MySQL 5.6.x</td>
	<td><code>mysql -u [root user name] -p</code></td>
	<td><a href="http://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql.html">MySQL</a></td>
	</tr>
</tbody>
</table>

### Feedback and Support 

<a href="mailto:khannadeem243@gmail.com">khannadeem243@gmail.com</a>
