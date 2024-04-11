<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>WordPress.org Hosting Directory JSON Generator</title>
</head>
<body>
<div class="container mt-3 mb-5">
	<h1>WordPress.org Hosting Directory JSON Generator</h1>
	<form action="./" method="post">
		<nav>
			<ul class="nav nav-tabs" id="options" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="company-tab" data-bs-toggle="tab" data-bs-target="#company-tab-pane" type="button" role="tab" aria-controls="company-tab-pane" aria-selected="true">Company</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="shared-tab" data-bs-toggle="tab" data-bs-target="#shared-tab-pane" type="button" role="tab" aria-controls="shared-tab-pane" aria-selected="false">Shared</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="vps-tab" data-bs-toggle="tab" data-bs-target="#vps-tab-pane" type="button" role="tab" aria-controls="vps-tab-pane" aria-selected="false">VPS</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="cloud-tab" data-bs-toggle="tab" data-bs-target="#cloud-tab-pane" type="button" role="tab" aria-controls="cloud-tab-pane" aria-selected="false">Cloud</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="dedicated-tab" data-bs-toggle="tab" data-bs-target="#dedicated-tab-pane" type="button" role="tab" aria-controls="dedicated-tab-pane" aria-selected="false">Dedicated</button>
				</li>
			</ul>
		</nav>
		<main class="tab-content" id="optionsContent">
			<div class="tab-pane fade show active" id="company-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
				<div class="mt-2">
					<p>Welcome to the JSON file creation tool for the WordPress Hosting Directory.</p>
					<p>This is a test tool, with certain limitations, intended to help you create a first basic version of the configuration file.</p>
					<p>Remember that the file must comply with the <a href="#">JSON Schema</a> standard.</p>
					<hr>
				</div>
				<h2 class="mt-2">Company</h2>
				<h3 class="mt-2">General information</h3>
				<div class="mt-2">
					<label for="company_name" class="form-label">Company name</label>
					<input type="text" class="form-control" id="company_name" name="company_name" min="1" max="256" aria-describedby="company_name_help" required aria-required="true">
					<div id="company_name_help" class="form-text"><em>[required]</em> The official name of the hosting provider company.</div>
				</div>
				<div class="mt-2">
					<label for="company_urlhomepage" class="form-label">Home page URL</label>
					<input type="url" class="form-control" id="company_urlhomepage" name="company_urlhomepage" min="1" max="1024" aria-describedby="company_urlhomepage_help" required aria-required="true">
					<div id="company_urlhomepage_help" class="form-text"><em>[required]</em> The URL to the company's homepage, providing an overview of their services and offerings.</div>
				</div>
				<div class="mt-2">
					<label for="company_urltermsconditions" class="form-label">Terms and conditions URL</label>
					<input type="url" class="form-control" id="company_urltermsconditions" name="company_urltermsconditions" min="1" max="1024" aria-describedby="company_urltermsconditions_help" required aria-required="true">
					<div id="company_urltermsconditions_help" class="form-text"><em>[required]</em> The URL to the terms and conditions page, outlining the legal agreements between the company and its customers.</div>
				</div>
				<div class="mt-2">
					<label for="company_urlprivacypolicy" class="form-label">Privacy policy URL</label>
					<input type="url" class="form-control" id="company_urlprivacypolicy" name="company_urlprivacypolicy" min="1" max="1024" aria-describedby="company_urlprivacypolicy_help" required aria-required="true">
					<div id="company_urlprivacypolicy_help" class="form-text"><em>[required]</em> The URL to the company's privacy policy page, detailing how customer data is handled and protected.</div>
				</div>
				<div class="mt-2">
					<label for="company_urlcontentpolicy" class="form-label">Content policy URL</label>
					<input type="url" class="form-control" id="company_urlcontentpolicy" name="company_urlcontentpolicy" min="1" max="1024" aria-describedby="company_urlcontentpolicy_help">
					<div id="company_urlcontentpolicy_help" class="form-text">The URL to the content policy page, describing what content is allowed or prohibited on hosted sites.</div>
				</div>
				<div class="mt-2">
					<label for="company_urlopensourceprojects" class="form-label">Open-Source projects URL</label>
					<input type="url" class="form-control" id="company_urlopensourceprojects" name="company_urlopensourceprojects" min="1" max="1024" aria-describedby="company_urlopensourceprojects_help">
					<div id="company_urlopensourceprojects_help" class="form-text">The URL to the company's open source projects page, showcasing any contributions to open source initiatives.</div>
				</div>
				<div class="mt-2">
					<label for="company_paymentoptions" class="form-label">Payment options</label>
					<select class="form-select" multiple size="5" id="company_paymentoptions" name="company_paymentoptions" aria-describedby="company_paymentoptions_help" required aria-required="true">
						<option value="bank-transfer">Bank transfer</option>
						<option value="credit-card">Credit card</option>
						<option value="crypto">Cryptocurrency</option>
						<option value="debit-card">Debit card</option>
						<option value="direct-debit">Direct debit</option>
						<option value="ewallet">eWallet</option>
						<option value="gift-card">Gift card</option>
						<option value="invoice">Invoice</option>
						<option value="mobile">Mobile</option>
						<option value="paypal">Paypal</option>
						<option value="prepaid-card">Prepaid card</option>
						<option value="qr">QR</option>
						<option value="trial">Trial</option>
						<option value="other">Other</option>
					</select>
					<div id="company_paymentoptions_help" class="form-text"><em>[required]</em> A list of the payment methods accepted by the company, such as credit cards, PayPal, and cryptocurrencies.</div>
				</div>
				<h3 class="mt-2">Contribution information</h3>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="company_wordpresscontributor" name="company_wordpresscontributor" aria-describedby="company_wordpresscontributor_help" required aria-required="true">
						<label class="form-check-label" for="company_wordpresscontributor">Contributor to the WordPress project</label>
					</div>
					<div id="company_wordpresscontributor_help" class="form-text"><em>[required]</em> A boolean value indicating whether the company actively contributes to the WordPress project.</div>
				</div>
				<div class="mt-2">
					<label for="company_urlwordpressfiveforthefuture" class="form-label">Five for the Future URL</label>
					<input type="url" class="form-control" id="company_urlwordpressfiveforthefuture" name="company_urlwordpressfiveforthefuture" min="1" max="1024" aria-describedby="company_urlwordpressfiveforthefuture_help" pattern="^https:\/\/wordpress\.org\/five-for-the-future\/pledge\/.*">
					<div id="company_urlwordpressfiveforthefuture_help" class="form-text">The URL to the company's Five for the Future pledge page, showing their commitment to contributing to WordPress.</div>
				</div>
				<h4 class="mt-2">Contributor information</h4>
				<div class="mt-2">
					<label for="company_users_wordpressorgusername" class="form-label">Company WordPress.org username</label>
					<input type="text" class="form-control" id="company_users_wordpressorgusername" name="company_users_wordpressorgusername" min="1" max="256" aria-describedby="company_users_wordpressorgusername_help">
					<div id="company_urlopensourceprojects_help" class="form-text">Your WordPress.org username associated with the company. <em>If there is more than one user, separated by comma.</em></div>
				</div>
				<div class="mt-2">
					<label for="company_users_hostingtestbotname" class="form-label">Hosting test bot WordPress.org username</label>
					<input type="text" class="form-control" id="company_users_hostingtestbotname" name="company_users_hostingtestbotname" min="1" max="256" aria-describedby="company_users_hostingtestbotname_help">
					<div id="company_users_hostingtestbotname_help" class="form-text">The name of the bot used by the WordPress.org Hosting Test Tool. <em>If there is more than one user, separated by comma.</em></div>
				</div>
				<div class="mt-2">
					<label for="company_users_companyemployees" class="form-label">Company employee WordPress.org username</label>
					<input type="text" class="form-control" id="company_users_companyemployees" name="company_users_companyemployees" min="1" max="4096" aria-describedby="company_users_companyemployees_help">
					<div id="company_users_companyemployees_help" class="form-text">WordPress.org employee username associated with the company. <em>If there is more than one user, separated by comma.</em></div>
				</div>
			</div>
			<div class="tab-pane fade" id="shared-tab-pane" role="tabpanel" aria-labelledby="shared-tab" tabindex="1">
				<h2 class="mt-2">Product: shared hosting</h2>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_control" name="shared_control" aria-describedby="shared_control_help">
						<label class="form-check-label" for="shared_control">The company offers shared hosting for WordPress</label>
					</div>
					<div id="shared_control_help" class="form-text">Does your company offer shared hosting as a product or service?</div>
				</div>
				<h3 class="mt-2">Control Panel</h3>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_controlpanel_enabled" name="shared_controlpanel_enabled" aria-describedby="shared_controlpanel_enabled_help">
						<label class="form-check-label" for="shared_controlpanel_enabled">Control panel for shared hosting</label>
					</div>
					<div id="shared_controlpanel_enabled_help" class="form-text"><em>[required]</em> A boolean value indicating whether the shared hosting has a control panel.</div>
				</div>
				<script>
					document.addEventListener('DOMContentLoaded', function() {
						var checkbox = document.getElementById('shared_controlpanel_enabled');
						var selectInput = document.getElementById('shared_controlpanel_panel');
						function updateRequiredState() {
							if (checkbox.checked) {
								selectInput.required = true;
								selectInput.setAttribute('aria-required', 'true');
							} else {
								selectInput.required = false;
								selectInput.setAttribute('aria-required', 'false');
							}
						}
						checkbox.addEventListener('change', updateRequiredState);
						updateRequiredState();
				});
				</script>
				<div class="mt-2">
					<label for="shared_controlpanel_panel" class="form-label">Payment options</label>
					<select class="form-select" multiple size="5" id="shared_controlpanel_panel" name="shared_controlpanel_panel" aria-describedby="shared_controlpanel_panel_help">
						<option value="aapanel">aaPanel</option>
						<option value="ajenti">Ajenti</option>
						<option value="centos">CentOS Web Panel</option>
						<option value="cloudpanel">CloudPanel</option>
						<option value="cpanel">cPanel</option>
						<option value="directadmin">DirectAdmin</option>
						<option value="froxlor">froxlor</option>
						<option value="hestia">Hestia</option>
						<option value="interworx">InterWorx</option>
						<option value="ispconfig">ISPConfig</option>
						<option value="own-panel">Own Panel</option>
						<option value="plesk">Plesk</option>
						<option value="sentora">Sentora</option>
						<option value="vesta">Vesta</option>
						<option value="virtualmin">Virtualmin</option>
						<option value="other">Other</option>
					</select>
					<div id="shared_controlpanel_panel_help" class="form-text"><em>[required]</em> The control panel provided with the hosting plan, for site management purposes.</div>
				</div>
				<h3 class="mt-2">Environment</h3>


				<h4 class="mt-2">PHP</h4>
				<h5 class="mt-2">PHP versions</h4>
				<div class="mt-2">
					<label for="shared_environment_phpversions" class="form-label">PHP versions</label>
					<select class="form-select" multiple size="5" id="shared_environment_phpversions" name="shared_environment_phpversions" aria-describedby="shared_environment_phpversions_help" required aria-required="true">
						<option value="84">PHP 8.4</option>
						<option value="83">PHP 8.3</option>
						<option value="82">PHP 8.2</option>
						<option value="81">PHP 8.1</option>
						<option value="80">PHP 8.0</option>
						<option value="74">PHP 7.4</option>
						<option value="73">PHP 7.3</option>
						<option value="72">PHP 7.2</option>
						<option value="71">PHP 7.1</option>
						<option value="70">PHP 7.0</option>
						<option value="56">PHP 5.6</option>
						<option value="55">PHP 5.5</option>
						<option value="54">PHP 5.4</option>
						<option value="53">PHP 5.3</option>
						<option value="52">PHP 5.2</option>
						<option value="51">PHP 5.1</option>
						<option value="50">PHP 5.0</option>
					</select>
					<div id="shared_environment_phpversions_help" class="form-text"><em>[required]</em> Lists the PHP versions supported by the hosting service. PHP is a widely-used open-source scripting language that is especially suited for web development.</div>
				</div>

				<h5 class="mt-2">PHP extensions</h4>
				<div class="mt-2">
					<label for="shared_environment_phpextensions" class="form-label">PHP extensions</label>
					<select class="form-select" multiple size="5" id="shared_environment_phpextensions" name="shared_environment_phpextensions" aria-describedby="shared_environment_phpextensions_help" required aria-required="true">
						<option value="apcu">apcu - APC User Cache</option>
						<option value="bc">bc - BCMath Arbitrary Precision Mathematics</option>
						<option value="curl">curl - Client URL Library</option>
						<option value="dom">dom - Document Object Model</option>
						<option value="exif">exif - Exchangeable image information</option>
						<option value="fileinfo">fileinfo - File Information</option>
						<option value="filter">filter - Data Filtering</option>
						<option value="ftp">ftp - FTP</option>
						<option value="gd">gd - Image Processing and GD</option>
						<option value="hash">hash - HASH Message Digest Framework</option>
						<option value="iconv">iconv - iconv</option>
						<option value="igbinary">igbinary - Igbinary</option>
						<option value="imagick">imagick - Image Processing (ImageMagick)</option>
						<option value="intl">intl - Internationalization</option>
						<option value="json">json - JavaScript Object Notation</option>
						<option value="mbstring">mbstring - Multibyte String</option>
						<option value="memcached">memcached - Memcached </option>
						<option value="mysqli">mysqli - MySQL Improved Extension</option>
						<option value="mysqlnd">mysqlnd - MySQL Native Driver</option>
						<option value="opcache">opcache - OPcache</option>
						<option value="openssl">openssl - OpenSSL</option>
						<option value="pcre">pcre - Regular Expressions (Perl-Compatible)</option>
						<option value="redis">redis - Redis</option>
						<option value="shmop">shmop - Shared Memory</option>
						<option value="simplexml">simplexml - SimpleXML</option>
						<option value="sockets">sockets - Sockets</option>
						<option value="sodium">sodium - Sodium</option>
						<option value="ssh2">ssh2 - Secure Shell2</option>
						<option value="xml">xml - XML Parser</option>
						<option value="xmlreader">xmlreader - XMLReader</option>
						<option value="zip">zip - Zip</option>
						<option value="zlib">zlib - Zlib Compression</option>
					</select>
					<div id="shared_environment_phpextensions_help" class="form-text"><em>[required]</em> Enumerates the PHP extensions available with the hosting plan. PHP extensions extend the functionality of PHP for more comprehensive web development capabilities.</div>
				</div>

				<h4 class="mt-2">Performance Server Side</h4>
				<div class="mt-2">
					<label for="shared_environment_objectcacheoptions_httpversions" class="form-label">HTTP versions</label>
					<select class="form-select" multiple size="4" id="shared_environment_objectcacheoptions_httpversions" name="shared_environment_objectcacheoptions_httpversions" aria-describedby="shared_environment_objectcacheoptions_httpversions_help" required aria-required="true">
						<option value="10">1.0</option>
						<option value="11">1.1</option>
						<option value="20">2.0</option>
						<option value="30">3.0</option>
					</select>
					<div id="shared_environment_objectcacheoptions_httpversions_help" class="form-text"><em>[required]</em> Lists the HTTP protocol versions supported by the hosting server, impacting the speed and security of data transfer between the server and clients.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_performanceserverside_gzip" name="shared_environment_performanceserverside_gzip" aria-describedby="shared_environment_performanceserverside_gzip_help">
						<label class="form-check-label" for="shared_environment_performanceserverside_gzip">Gzip</label>
					</div>
					<div id="shared_environment_performanceserverside_gzip_help" class="form-text"><em>[required]</em> Specifies if GZIP compression is available, a method for reducing the size of the files sent from your server to increase the speed to which they are transferred to the browser.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_performanceserverside_brotli" name="shared_environment_performanceserverside_brotli" aria-describedby="shared_environment_performanceserverside_brotli_help">
						<label class="form-check-label" for="shared_environment_performanceserverside_brotli">Brotli</label>
					</div>
					<div id="shared_environment_performanceserverside_brotli_help" class="form-text"><em>[required]</em> A boolean indicating whether Brotli compression is supported. Brotli is a newer compression algorithm that can provide better compression ratios than GZIP.</div>
				</div>

				<h4 class="mt-2">Object Cache</h4>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_objectcacheoptions_enabled" name="shared_environment_objectcacheoptions_enabled" aria-describedby="shared_environment_objectcacheoptions_enabled_help">
						<label class="form-check-label" for="shared_environment_objectcacheoptions_enabled">Object Cache technology</label>
					</div>
					<div id="shared_environment_objectcacheoptions_enabled_help" class="form-text"><em>[required]</em> A boolean value indicating whether the shared hosting has an object cache.</div>
				</div>
				<script>
					document.addEventListener('DOMContentLoaded', function() {
						var checkbox = document.getElementById('shared_environment_objectcacheoptions_enabled');
						var selectInput = document.getElementById('shared_environment_objectcacheoptions_cache');
						function updateRequiredState() {
							if (checkbox.checked) {
								selectInput.required = true;
								selectInput.setAttribute('aria-required', 'true');
							} else {
								selectInput.required = false;
								selectInput.setAttribute('aria-required', 'false');
							}
						}
						checkbox.addEventListener('change', updateRequiredState);
						updateRequiredState();
				});
				</script>
				<div class="mt-2">
					<label for="shared_environment_objectcacheoptions_cache" class="form-label">Cache server</label>
					<select class="form-select" multiple size="4" id="shared_environment_objectcacheoptions_cache" name="shared_environment_objectcacheoptions_cache" aria-describedby="shared_environment_objectcacheoptions_cache_help">
						<option value="memcached">memcached</option>
						<option value="own">Own</option>
						<option value="redis">Redis</option>
						<option value="other">Other</option>
					</select>
					<div id="shared_environment_objectcacheoptions_cache_help" class="form-text"><em>[required]</em> Lists the object caching options available, which can include in-memory data storage systems like Redis and Memcached. Object caching helps improve WordPress performance by storing data in memory for faster retrieval.</div>
				</div>


				<h4 class="mt-2">IP address</h4>
				<div class="mt-2">
					<div class="form-check">-
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_ipaddress_ipv4" name="shared_environment_ipaddress_ipv4" aria-describedby="shared_environment_ipaddress_ipv4_help">
						<label class="form-check-label" for="shared_environment_ipaddress_ipv4">IP v4</label>
					</div>
					<div id="shared_environment_ipaddress_ipv4_help" class="form-text"><em>[required]</em> A boolean indicating if an IPv4 address is provided with the hosting service.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_ipaddress_additionalipv4" name="shared_environment_ipaddress_additionalipv4" aria-describedby="shared_environment_ipaddress_additionalipv4_help">
						<label class="form-check-label" for="shared_environment_ipaddress_additionalipv4">Additional IP v4</label>
					</div>
					<div id="shared_environment_ipaddress_additionalipv4_help" class="form-text"><em>[required]</em> Specifies if additional IPv4 addresses are available upon request or included in the plan.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_ipaddress_ipv6" name="shared_environment_ipaddress_ipv6" aria-describedby="shared_environment_ipaddress_ipv6_help">
						<label class="form-check-label" for="shared_environment_ipaddress_ipv6">IP v6</label>
					</div>
					<div id="shared_environment_ipaddress_ipv6_help" class="form-text"><em>[required]</em> States whether IPv6 support is available, which is essential for future-proofing services and enhancing connectivity.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_ipaddress_additionalipv6" name="shared_environment_ipaddress_additionalipv6" aria-describedby="shared_environment_ipaddress_additionalipv6_help">
						<label class="form-check-label" for="shared_environment_ipaddress_additionalipv6">Additional IP v6</label>
					</div>
					<div id="shared_environment_ipaddress_additionalipv6_help" class="form-text"><em>[required]</em> Indicates if extra IPv6 addresses can be allocated to your hosting account, useful for large-scale deployments.</div>
				</div>
				<h4 class="mt-2">Datacenter</h4>
				<h5 class="mt-2">Country</h5>
				<div class="mt-2">
					<label for="shared_environment_datacenter_countries" class="form-label">Where is your datacenter?</label>
					<select class="form-select" multiple size="5" id="shared_environment_datacenter_countries" name="shared_environment_datacenter_countries" aria-describedby="shared_environment_datacenter_countries_help" required aria-required="true">
						<option value="AD">AD - Andorra</option>
						<option value="AF">AF - Afghanistan</option>
						<option value="AG">AG - Antigua and Barbuda</option>
						<option value="AI">AI - Anguilla</option>
						<option value="AL">AL - Albania</option>
						<option value="AM">AM - Armenia</option>
						<option value="AO">AO - Angola</option>
						<option value="AQ">AQ - Antarctica</option>
						<option value="AR">AR - Argentina</option>
						<option value="AS">AS - American Samoa</option>
						<option value="AT">AT - Austria</option>
						<option value="AU">AU - Australia</option>
						<option value="AW">AW - Aruba</option>
						<option value="AX">AX - Aland Islands</option>
						<option value="AZ">AZ - Azerbaijan</option>
						<option value="BA">BA - Bosnia and Herzegovina</option>
						<option value="BB">BB - Barbados</option>
						<option value="BD">BD - Bangladesh</option>
						<option value="BE">BE - Belgium</option>
						<option value="BF">BF - Burkina Faso</option>
						<option value="BG">BG - Bulgaria</option>
						<option value="BH">BH - Bahrain</option>
						<option value="BI">BI - Burundi</option>
						<option value="BJ">BJ - Benin</option>
						<option value="BM">BM - Bermuda</option>
						<option value="BN">BN - Brunei Darussalam</option>
						<option value="BO">BO - Bolivia</option>
						<option value="BQ">BQ - Bonaire, Sint Eustatius, and Saba</option>
						<option value="BR">BR - Brazil</option>
						<option value="BS">BS - Bahamas</option>
						<option value="BT">BT - Bhutan</option>
						<option value="BV">BV - Bouvet Island</option>
						<option value="BW">BW - Botswana</option>
						<option value="BY">BY - Belarus</option>
						<option value="BZ">BZ - Belize</option>
						<option value="CA">CA - Canada</option>
						<option value="CF">CF - Central African Republic</option>
						<option value="CL">CL - Chile</option>
						<option value="CM">CM - Cameroon</option>
						<option value="CV">CV - Cape Verde</option>
						<option value="DZ">DZ - Algeria</option>
						<option value="KH">KH - Cambodia</option>
						<option value="KY">KY - Cayman Islands</option>
						<option value="IO">IO - British Indian Ocean Territory</option>
						<option value="TD">TD - Chad</option>
						<option value="CN">CN - China</option>
						<option value="CX">CX - Christmas Island</option>
						<option value="CC">CC - Cocos (Keeling) Islands</option>
						<option value="CO">CO - Colombia</option>
						<option value="KM">KM - Comoros</option>
						<option value="CG">CG - Congo</option>
						<option value="CD">CD - Democratic Republic of the Congo</option>
						<option value="CK">CK - Cook Islands</option>
						<option value="CR">CR - Costa Rica</option>
						<option value="CI">CI - Cote D'Ivoire</option>
						<option value="HR">HR - Croatia</option>
						<option value="CU">CU - Cuba</option>
						<option value="CW">CW - Curacao</option>
						<option value="CY">CY - Cyprus</option>
						<option value="CZ">CZ - Czech Republic</option>
						<option value="DK">DK - Denmark</option>
						<option value="DJ">DJ - Djibouti</option>
						<option value="DM">DM - Dominica</option>
						<option value="DO">DO - Dominican Republic</option>
						<option value="EC">EC - Ecuador</option>
						<option value="EG">EG - Egypt</option>
						<option value="SV">SV - El Salvador</option>
						<option value="GQ">GQ - Equatorial Guinea</option>
						<option value="ER">ER - Eritrea</option>
						<option value="EE">EE - Estonia</option>
						<option value="ET">ET - Ethiopia</option>
						<option value="FK">FK - Falkland Islands (Malvinas)</option>
						<option value="FO">FO - Faroe Islands</option>
						<option value="FJ">FJ - Fiji</option>
						<option value="FI">FI - Finland</option>
						<option value="FR">FR - France</option>
						<option value="GF">GF - French Guiana</option>
						<option value="PF">PF - French Polynesia</option>
						<option value="TF">TF - French Southern Territories</option>
						<option value="GA">GA - Gabon</option>
						<option value="GM">GM - Gambia</option>
						<option value="GE">GE - Georgia</option>
						<option value="DE">DE - Germany</option>
						<option value="GH">GH - Ghana</option>
						<option value="GI">GI - Gibraltar</option>
						<option value="GR">GR - Greece</option>
						<option value="GL">GL - Greenland</option>
						<option value="GD">GD - Grenada</option>
						<option value="GP">GP - Guadeloupe</option>
						<option value="GU">GU - Guam</option>
						<option value="GT">GT - Guatemala</option>
						<option value="GG">GG - Guernsey</option>
						<option value="GN">GN - Guinea</option>
						<option value="GW">GW - Guinea-Bissau</option>
						<option value="GY">GY - Guyana</option>
						<option value="HT">HT - Haiti</option>
						<option value="HM">HM - Heard Island and Mcdonald Islands</option>
						<option value="VA">VA - Vatican City State</option>
						<option value="HN">HN - Honduras</option>
						<option value="HK">HK - Hong Kong</option>
						<option value="HU">HU - Hungary</option>
						<option value="IS">IS - Iceland</option>
						<option value="IN">IN - India</option>
						<option value="ID">ID - Indonesia</option>
						<option value="IR">IR - Iran</option>
						<option value="IQ">IQ - Iraq</option>
						<option value="IE">IE - Ireland</option>
						<option value="IM">IM - Isle of Man</option>
						<option value="IL">IL - Israel</option>
						<option value="IT">IT - Italy</option>
						<option value="JM">JM - Jamaica</option>
						<option value="JP">JP - Japan</option>
						<option value="JE">JE - Jersey</option>
						<option value="JO">JO - Jordan</option>
						<option value="KZ">KZ - Kazakhstan</option>
						<option value="KE">KE - Kenya</option>
						<option value="KI">KI - Kiribati</option>
						<option value="KP">KP - Democratic People's Republic of Korea</option>
						<option value="KR">KR - Republic of Korea</option>
						<option value="XK">XK - Kosovo</option>
						<option value="KW">KW - Kuwait</option>
						<option value="KG">KG - Kyrgyzstan</option>
						<option value="LA">LA - Lao</option>
						<option value="LV">LV - Latvia</option>
						<option value="LB">LB - Lebanon</option>
						<option value="LS">LS - Lesotho</option>
						<option value="LR">LR - Liberia</option>
						<option value="LY">LY - Libyan Arab Jamahiriya</option>
						<option value="LI">LI - Liechtenstein</option>
						<option value="LT">LT - Lithuania</option>
						<option value="LU">LU - Luxembourg</option>
						<option value="MO">MO - Macao</option>
						<option value="MK">MK - Macedonia</option>
						<option value="MG">MG - Madagascar</option>
						<option value="MW">MW - Malawi</option>
						<option value="MY">MY - Malaysia</option>
						<option value="MV">MV - Maldives</option>
						<option value="ML">ML - Mali</option>
						<option value="MT">MT - Malta</option>
						<option value="MH">MH - Marshall Islands</option>
						<option value="MQ">MQ - Martinique</option>
						<option value="MR">MR - Mauritania</option>
						<option value="MU">MU - Mauritius</option>
						<option value="YT">YT - Mayotte</option>
						<option value="MX">MX - Mexico</option>
						<option value="FM">FM - Micronesia</option>
						<option value="MD">MD - Moldova</option>
						<option value="MC">MC - Monaco</option>
						<option value="MN">MN - Mongolia</option>
						<option value="ME">ME - Montenegro</option>
						<option value="MS">MS - Montserrat</option>
						<option value="MA">MA - Morocco</option>
						<option value="MZ">MZ - Mozambique</option>
						<option value="MM">MM - Myanmar</option>
						<option value="NA">NA - Namibia</option>
						<option value="NR">NR - Nauru</option>
						<option value="NR">NR - Nepal</option>
						<option value="NL">NL - Netherlands</option>
						<option value="AN">AN - Netherlands Antilles</option>
						<option value="NC">NC - New Caledonia</option>
						<option value="NZ">NZ - New Zealand</option>
						<option value="NI">NI - Nicaragua</option>
						<option value="NE">NE - Niger</option>
						<option value="NG">NG - Nigeria</option>
						<option value="NU">NU - Niue</option>
						<option value="NF">NF - Norfolk Island</option>
						<option value="MP">MP - Northern Mariana Islands</option>
						<option value="NO">NO - Norway</option>
						<option value="OM">OM - Oman</option>
						<option value="PK">PK - Pakistan</option>
						<option value="PW">PW - Palau</option>
						<option value="PS">PS - Palestinian Territory</option>
						<option value="PA">PA - Panama</option>
						<option value="PG">PG - Papua New Guinea</option>
						<option value="PY">PY - Paraguay</option>
						<option value="PE">PE - Peru</option>
						<option value="PH">PH - Philippines</option>
						<option value="PN">PN - Pitcairn</option>
						<option value="PL">PL - Poland</option>
						<option value="PT">PT - Portugal</option>
						<option value="PR">PR - Puerto Rico</option>
						<option value="QA">QA - Qatar</option>
						<option value="RE">RE - Reunion</option>
						<option value="RO">RO - Romania</option>
						<option value="RU">RU - Russian Federation</option>
						<option value="RW">RW- Rwanda</option>
						<option value="BL">BL - Saint Barthelemy</option>
						<option value="SH">SH - Saint Helena</option>
						<option value="KN">KN - Saint Kitts and Nevis</option>
						<option value="LC">LC - Saint Lucia</option>
						<option value="MF">MF - Saint Martin</option>
						<option value="PM">PM - Saint Pierre and Miquelon</option>
						<option value="VC">VC - Saint Vincent and the Grenadines</option>
						<option value="WS">WS - Samoa</option>
						<option value="SM">SM - San Marino</option>
						<option value="ST">ST - Sao Tome and Principe</option>
						<option value="SA">SA - Saudi Arabia</option>
						<option value="SN">SN - Senegal</option>
						<option value="RS">RS - Serbia</option>
						<option value="CS">CS - Serbia and Montenegro</option>
						<option value="SC">SC - Seychelles</option>
						<option value="SL">SL - Sierra Leone</option>
						<option value="SG">SG - Singapore</option>
						<option value="SX">SX - Sint Maarten</option>
						<option value="SK">SK - Slovakia</option>
						<option value="SI">SI - Slovenia</option>
						<option value="SB">SB - Solomon Islands</option>
						<option value="SO">SO - Somalia</option>
						<option value="ZA">ZA - South Africa</option>
						<option value="GS">GS - South Georgia and the South Sandwich Islands</option>
						<option value="SS">SS - South Sudan</option>
						<option value="ES">ES - Spain</option>
						<option value="LK">LK - Sri Lanka</option>
						<option value="SD">SD - Sudan</option>
						<option value="SR">SR - Suriname</option>
						<option value="SJ">SJ - Svalbard and Jan Mayen</option>
						<option value="SZ">SZ - Swaziland</option>
						<option value="SE">SE - Sweden</option>
						<option value="CH">CH - Switzerland</option>
						<option value="SY">SY - Syrian Arab Republic</option>
						<option value="TW">TW - Taiwan</option>
						<option value="TJ">TJ - Tajikistan</option>
						<option value="TZ">TZ - Tanzania</option>
						<option value="TH">TH - Thailand</option>
						<option value="TL">TL - Timor-Leste</option>
						<option value="TG">TG - Togo</option>
						<option value="TK">TK - Tokelau</option>
						<option value="TO">TO - Tonga</option>
						<option value="TT">TT - Trinidad and Tobago</option>
						<option value="TN">TN - Tunisia</option>
						<option value="TR">TR - Turkey</option>
						<option value="TM">TM - Turkmenistan</option>
						<option value="TC">TC - Turks and Caicos Islands</option>
						<option value="TV">TV - Tuvalu</option>
						<option value="UG">UG - Uganda</option>
						<option value="UA">UA - Ukraine</option>
						<option value="AE">AE - United Arab Emirates</option>
						<option value="GB">GB - United Kingdom</option>
						<option value="US">US - United States</option>
						<option value="UM">UM - United States Minor Outlying Islands</option>
						<option value="UY">UY - Uruguay</option>
						<option value="UZ">UZ - Uzbekistan</option>
						<option value="VU">VU - Vanuatu</option>
						<option value="VE">VE - Venezuela</option>
						<option value="VN">VN - Viet Nam</option>
						<option value="VG">VG - British Virgin Islands</option>
						<option value="VI">VI - U.S. Virgin Islands</option>
						<option value="WF">WF - Wallis and Futuna</option>
						<option value="EH">EH - Western Sahara</option>
						<option value="YE">YE - Yemen</option>
						<option value="ZM">ZM - Zambia</option>
						<option value="ZW">ZW - Zimbabwe</option>
					</select>
					<div id="shared_environment_datacenter_countries_help" class="form-text"><em>[required]</em> Lists the countries where the hosting provider's data centers are located. This information is crucial for understanding the geographical distribution of the provider's infrastructure and can affect website latency and compliance with regional regulations.</div>
				</div>
				<h5 class="mt-2">Data stored</h5>
				<div class="mt-2">
					<label for="shared_environment_datacenter_datastored" class="form-label">Where is the user data stored?</label>
					<select class="form-select" multiple size="5" id="shared_environment_datacenter_datastored" name="shared_environment_datacenter_datastored" aria-describedby="shared_environment_datacenter_datastored_help" required aria-required="true">
						<option value="AD">AD - Andorra</option>
						<option value="AF">AF - Afghanistan</option>
						<option value="AG">AG - Antigua and Barbuda</option>
						<option value="AI">AI - Anguilla</option>
						<option value="AL">AL - Albania</option>
						<option value="AM">AM - Armenia</option>
						<option value="AO">AO - Angola</option>
						<option value="AQ">AQ - Antarctica</option>
						<option value="AR">AR - Argentina</option>
						<option value="AS">AS - American Samoa</option>
						<option value="AT">AT - Austria</option>
						<option value="AU">AU - Australia</option>
						<option value="AW">AW - Aruba</option>
						<option value="AX">AX - Aland Islands</option>
						<option value="AZ">AZ - Azerbaijan</option>
						<option value="BA">BA - Bosnia and Herzegovina</option>
						<option value="BB">BB - Barbados</option>
						<option value="BD">BD - Bangladesh</option>
						<option value="BE">BE - Belgium</option>
						<option value="BF">BF - Burkina Faso</option>
						<option value="BG">BG - Bulgaria</option>
						<option value="BH">BH - Bahrain</option>
						<option value="BI">BI - Burundi</option>
						<option value="BJ">BJ - Benin</option>
						<option value="BM">BM - Bermuda</option>
						<option value="BN">BN - Brunei Darussalam</option>
						<option value="BO">BO - Bolivia</option>
						<option value="BQ">BQ - Bonaire, Sint Eustatius, and Saba</option>
						<option value="BR">BR - Brazil</option>
						<option value="BS">BS - Bahamas</option>
						<option value="BT">BT - Bhutan</option>
						<option value="BV">BV - Bouvet Island</option>
						<option value="BW">BW - Botswana</option>
						<option value="BY">BY - Belarus</option>
						<option value="BZ">BZ - Belize</option>
						<option value="CA">CA - Canada</option>
						<option value="CF">CF - Central African Republic</option>
						<option value="CL">CL - Chile</option>
						<option value="CM">CM - Cameroon</option>
						<option value="CV">CV - Cape Verde</option>
						<option value="DZ">DZ - Algeria</option>
						<option value="KH">KH - Cambodia</option>
						<option value="KY">KY - Cayman Islands</option>
						<option value="IO">IO - British Indian Ocean Territory</option>
						<option value="TD">TD - Chad</option>
						<option value="CN">CN - China</option>
						<option value="CX">CX - Christmas Island</option>
						<option value="CC">CC - Cocos (Keeling) Islands</option>
						<option value="CO">CO - Colombia</option>
						<option value="KM">KM - Comoros</option>
						<option value="CG">CG - Congo</option>
						<option value="CD">CD - Democratic Republic of the Congo</option>
						<option value="CK">CK - Cook Islands</option>
						<option value="CR">CR - Costa Rica</option>
						<option value="CI">CI - Cote D'Ivoire</option>
						<option value="HR">HR - Croatia</option>
						<option value="CU">CU - Cuba</option>
						<option value="CW">CW - Curacao</option>
						<option value="CY">CY - Cyprus</option>
						<option value="CZ">CZ - Czech Republic</option>
						<option value="DK">DK - Denmark</option>
						<option value="DJ">DJ - Djibouti</option>
						<option value="DM">DM - Dominica</option>
						<option value="DO">DO - Dominican Republic</option>
						<option value="EC">EC - Ecuador</option>
						<option value="EG">EG - Egypt</option>
						<option value="SV">SV - El Salvador</option>
						<option value="GQ">GQ - Equatorial Guinea</option>
						<option value="ER">ER - Eritrea</option>
						<option value="EE">EE - Estonia</option>
						<option value="ET">ET - Ethiopia</option>
						<option value="FK">FK - Falkland Islands (Malvinas)</option>
						<option value="FO">FO - Faroe Islands</option>
						<option value="FJ">FJ - Fiji</option>
						<option value="FI">FI - Finland</option>
						<option value="FR">FR - France</option>
						<option value="GF">GF - French Guiana</option>
						<option value="PF">PF - French Polynesia</option>
						<option value="TF">TF - French Southern Territories</option>
						<option value="GA">GA - Gabon</option>
						<option value="GM">GM - Gambia</option>
						<option value="GE">GE - Georgia</option>
						<option value="DE">DE - Germany</option>
						<option value="GH">GH - Ghana</option>
						<option value="GI">GI - Gibraltar</option>
						<option value="GR">GR - Greece</option>
						<option value="GL">GL - Greenland</option>
						<option value="GD">GD - Grenada</option>
						<option value="GP">GP - Guadeloupe</option>
						<option value="GU">GU - Guam</option>
						<option value="GT">GT - Guatemala</option>
						<option value="GG">GG - Guernsey</option>
						<option value="GN">GN - Guinea</option>
						<option value="GW">GW - Guinea-Bissau</option>
						<option value="GY">GY - Guyana</option>
						<option value="HT">HT - Haiti</option>
						<option value="HM">HM - Heard Island and Mcdonald Islands</option>
						<option value="VA">VA - Vatican City State</option>
						<option value="HN">HN - Honduras</option>
						<option value="HK">HK - Hong Kong</option>
						<option value="HU">HU - Hungary</option>
						<option value="IS">IS - Iceland</option>
						<option value="IN">IN - India</option>
						<option value="ID">ID - Indonesia</option>
						<option value="IR">IR - Iran</option>
						<option value="IQ">IQ - Iraq</option>
						<option value="IE">IE - Ireland</option>
						<option value="IM">IM - Isle of Man</option>
						<option value="IL">IL - Israel</option>
						<option value="IT">IT - Italy</option>
						<option value="JM">JM - Jamaica</option>
						<option value="JP">JP - Japan</option>
						<option value="JE">JE - Jersey</option>
						<option value="JO">JO - Jordan</option>
						<option value="KZ">KZ - Kazakhstan</option>
						<option value="KE">KE - Kenya</option>
						<option value="KI">KI - Kiribati</option>
						<option value="KP">KP - Democratic People's Republic of Korea</option>
						<option value="KR">KR - Republic of Korea</option>
						<option value="XK">XK - Kosovo</option>
						<option value="KW">KW - Kuwait</option>
						<option value="KG">KG - Kyrgyzstan</option>
						<option value="LA">LA - Lao</option>
						<option value="LV">LV - Latvia</option>
						<option value="LB">LB - Lebanon</option>
						<option value="LS">LS - Lesotho</option>
						<option value="LR">LR - Liberia</option>
						<option value="LY">LY - Libyan Arab Jamahiriya</option>
						<option value="LI">LI - Liechtenstein</option>
						<option value="LT">LT - Lithuania</option>
						<option value="LU">LU - Luxembourg</option>
						<option value="MO">MO - Macao</option>
						<option value="MK">MK - Macedonia</option>
						<option value="MG">MG - Madagascar</option>
						<option value="MW">MW - Malawi</option>
						<option value="MY">MY - Malaysia</option>
						<option value="MV">MV - Maldives</option>
						<option value="ML">ML - Mali</option>
						<option value="MT">MT - Malta</option>
						<option value="MH">MH - Marshall Islands</option>
						<option value="MQ">MQ - Martinique</option>
						<option value="MR">MR - Mauritania</option>
						<option value="MU">MU - Mauritius</option>
						<option value="YT">YT - Mayotte</option>
						<option value="MX">MX - Mexico</option>
						<option value="FM">FM - Micronesia</option>
						<option value="MD">MD - Moldova</option>
						<option value="MC">MC - Monaco</option>
						<option value="MN">MN - Mongolia</option>
						<option value="ME">ME - Montenegro</option>
						<option value="MS">MS - Montserrat</option>
						<option value="MA">MA - Morocco</option>
						<option value="MZ">MZ - Mozambique</option>
						<option value="MM">MM - Myanmar</option>
						<option value="NA">NA - Namibia</option>
						<option value="NR">NR - Nauru</option>
						<option value="NR">NR - Nepal</option>
						<option value="NL">NL - Netherlands</option>
						<option value="AN">AN - Netherlands Antilles</option>
						<option value="NC">NC - New Caledonia</option>
						<option value="NZ">NZ - New Zealand</option>
						<option value="NI">NI - Nicaragua</option>
						<option value="NE">NE - Niger</option>
						<option value="NG">NG - Nigeria</option>
						<option value="NU">NU - Niue</option>
						<option value="NF">NF - Norfolk Island</option>
						<option value="MP">MP - Northern Mariana Islands</option>
						<option value="NO">NO - Norway</option>
						<option value="OM">OM - Oman</option>
						<option value="PK">PK - Pakistan</option>
						<option value="PW">PW - Palau</option>
						<option value="PS">PS - Palestinian Territory</option>
						<option value="PA">PA - Panama</option>
						<option value="PG">PG - Papua New Guinea</option>
						<option value="PY">PY - Paraguay</option>
						<option value="PE">PE - Peru</option>
						<option value="PH">PH - Philippines</option>
						<option value="PN">PN - Pitcairn</option>
						<option value="PL">PL - Poland</option>
						<option value="PT">PT - Portugal</option>
						<option value="PR">PR - Puerto Rico</option>
						<option value="QA">QA - Qatar</option>
						<option value="RE">RE - Reunion</option>
						<option value="RO">RO - Romania</option>
						<option value="RU">RU - Russian Federation</option>
						<option value="RW">RW- Rwanda</option>
						<option value="BL">BL - Saint Barthelemy</option>
						<option value="SH">SH - Saint Helena</option>
						<option value="KN">KN - Saint Kitts and Nevis</option>
						<option value="LC">LC - Saint Lucia</option>
						<option value="MF">MF - Saint Martin</option>
						<option value="PM">PM - Saint Pierre and Miquelon</option>
						<option value="VC">VC - Saint Vincent and the Grenadines</option>
						<option value="WS">WS - Samoa</option>
						<option value="SM">SM - San Marino</option>
						<option value="ST">ST - Sao Tome and Principe</option>
						<option value="SA">SA - Saudi Arabia</option>
						<option value="SN">SN - Senegal</option>
						<option value="RS">RS - Serbia</option>
						<option value="CS">CS - Serbia and Montenegro</option>
						<option value="SC">SC - Seychelles</option>
						<option value="SL">SL - Sierra Leone</option>
						<option value="SG">SG - Singapore</option>
						<option value="SX">SX - Sint Maarten</option>
						<option value="SK">SK - Slovakia</option>
						<option value="SI">SI - Slovenia</option>
						<option value="SB">SB - Solomon Islands</option>
						<option value="SO">SO - Somalia</option>
						<option value="ZA">ZA - South Africa</option>
						<option value="GS">GS - South Georgia and the South Sandwich Islands</option>
						<option value="SS">SS - South Sudan</option>
						<option value="ES">ES - Spain</option>
						<option value="LK">LK - Sri Lanka</option>
						<option value="SD">SD - Sudan</option>
						<option value="SR">SR - Suriname</option>
						<option value="SJ">SJ - Svalbard and Jan Mayen</option>
						<option value="SZ">SZ - Swaziland</option>
						<option value="SE">SE - Sweden</option>
						<option value="CH">CH - Switzerland</option>
						<option value="SY">SY - Syrian Arab Republic</option>
						<option value="TW">TW - Taiwan</option>
						<option value="TJ">TJ - Tajikistan</option>
						<option value="TZ">TZ - Tanzania</option>
						<option value="TH">TH - Thailand</option>
						<option value="TL">TL - Timor-Leste</option>
						<option value="TG">TG - Togo</option>
						<option value="TK">TK - Tokelau</option>
						<option value="TO">TO - Tonga</option>
						<option value="TT">TT - Trinidad and Tobago</option>
						<option value="TN">TN - Tunisia</option>
						<option value="TR">TR - Turkey</option>
						<option value="TM">TM - Turkmenistan</option>
						<option value="TC">TC - Turks and Caicos Islands</option>
						<option value="TV">TV - Tuvalu</option>
						<option value="UG">UG - Uganda</option>
						<option value="UA">UA - Ukraine</option>
						<option value="AE">AE - United Arab Emirates</option>
						<option value="GB">GB - United Kingdom</option>
						<option value="US">US - United States</option>
						<option value="UM">UM - United States Minor Outlying Islands</option>
						<option value="UY">UY - Uruguay</option>
						<option value="UZ">UZ - Uzbekistan</option>
						<option value="VU">VU - Vanuatu</option>
						<option value="VE">VE - Venezuela</option>
						<option value="VN">VN - Viet Nam</option>
						<option value="VG">VG - British Virgin Islands</option>
						<option value="VI">VI - U.S. Virgin Islands</option>
						<option value="WF">WF - Wallis and Futuna</option>
						<option value="EH">EH - Western Sahara</option>
						<option value="YE">YE - Yemen</option>
						<option value="ZM">ZM - Zambia</option>
						<option value="ZW">ZW - Zimbabwe</option>
					</select>
					<div id="shared_environment_datacenter_datastored_help" class="form-text"><em>[required]</em> Enumerates the countries where the hosting provider stores its clients' data. This detail is important for clients concerned with data sovereignty and compliance with local data protection laws.</div>
				</div>
				<h5 class="mt-2">Privacy compliance</h5>
				<div class="mt-2">
					<label for="shared_environment_datacenter_privacycompliance" class="form-label">Specify the privacy and data protection regulations</label>
					<select class="form-select" multiple size="5" id="shared_environment_datacenter_privacycompliance" name="shared_environment_datacenter_privacycompliance" aria-describedby="shared_environment_datacenter_privacycompliance_help" required aria-required="true">
						<option value="none">None</option>
						<option value="ccpa">CCPA - California Consumer Privacy Act</option>
						<option value="coppa">COPPA - United States' Children's Online Privacy Protection Rule</option>
						<option value="gdpr">GDPR - Europe's General Data Protection Regulation</option>
						<option value="lgpd">LGPD - Brazilian General Data Protection Law</option>
						<option value="pdpa">PDPA - Thailand's Personal Data Protection Act</option>
						<option value="pipl">PIPL - China's Personal Information Protection Law</option>
						<option value="popia">POPIA - South Africa's Protection of Personal Information</option>
						<option value="other">Other</option>
					</select>
					<div id="shared_environment_datacenter_privacycompliance_help" class="form-text"><em>[required]</em> Specifies the privacy and data protection regulations with which the hosting provider complies. Examples include GDPR for data protection in the European Union, CCPA for privacy in California, USA, and others. Compliance with these regulations ensures that the provider adheres to legal standards for data privacy and protection.</div>
				</div>
				<h4 class="mt-2">CDN</h4>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_cdn_owncdn" name="shared_environment_cdn_owncdn" aria-describedby="shared_environment_cdn_owncdn_help">
						<label class="form-check-label" for="shared_environment_cdn_owncdn">Own CDN</label>
					</div>
					<div id="shared_environment_cdn_owncdn_help" class="form-text"><em>[required]</em> Indicates if the hosting provider offers its own CDN (Content Delivery Network) solution, which can greatly improve website load times for visitors from different geographical locations.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_cdn_cloudflareintegration" name="shared_environment_cdn_cloudflareintegration" aria-describedby="shared_environment_cdn_cloudflareintegration_help">
						<label class="form-check-label" for="shared_environment_cdn_cloudflareintegration">Integration with other CDN</label>
					</div>
					<div id="shared_environment_cdn_cloudflareintegration_help" class="form-text"><em>[required]</em> Specifies whether there is direct integration support for Cloudflare's services, including its CDN, security, and DNS services.</div>
				</div>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_environment_cdn_integrationwithothers" name="shared_environment_cdn_integrationwithothers" aria-describedby="shared_environment_cdn_integrationwithothers_help">
						<label class="form-check-label" for="shared_environment_cdn_integrationwithothers">Integration with other CDN</label>
					</div>
					<div id="shared_environment_cdn_integrationwithothers_help" class="form-text"><em>[required]</em> A boolean that shows if the hosting service integrates with other CDN providers, offering flexibility in choosing CDN services.</div>
				</div>












<!--


phpversions
phpextensions

performanceserverside
objectcacheoptions

IP address
Datacenter
CDN



        "items":
            {
            "properties":
                {
                "environment":
                    {
                    "properties":
                        {
                        "serverupdates":
                            {
                            "properties":
                                {
                                "automaticdatabasebupdates":
                                    {
                                    "description": "Reveals if database software updates are automatically handled, maintaining performance and security without manual intervention.",
                                    "type": "boolean"
                                    },
                                "automatickernelupdates":
                                    {
                                    "description": "Indicates whether the hosting service automatically updates the server kernel. Kernel updates are crucial for security and stability.",
                                    "type": "boolean"
                                    },
                                "automaticphpupdates":
                                    {
                                    "description": " Specifies if the hosting plan includes automatic updates for PHP, ensuring the latest features and security patches are applied.",
                                    "type": "boolean"
                                    }
                                },
                            "required":
                                [
                                "automaticdatabasebupdates",
                                "automatickernelupdates",
                                "automaticphpupdates"
                                ],
                            "type": "object"
                            },
                        "sqloptions":
                            {
                            "description": "Details the SQL database versions supported (or compatible) by the hosting environment. This includes different versions of MySQL and MariaDB, allowing for a wide range of database management options.",
                            "items":
                                {
                                "enum":
                                    [
                                    "mysql-5.5",
                                    "mysql-5.6",
                                    "mysql-5.7",
                                    "mysql-8.0",
                                    "mysql-8.1",
                                    "mysql-8.2",
                                    "mysql-8.3",
                                    "mariadb-5.5",
                                    "mariadb-10.0",
                                    "mariadb-10.1",
                                    "mariadb-10.2",
                                    "mariadb-10.3",
                                    "mariadb-10.4",
                                    "mariadb-10.5",
                                    "mariadb-10.6",
                                    "mariadb-10.7",
                                    "mariadb-10.8",
                                    "mariadb-10.9",
                                    "mariadb-10.10",
                                    "mariadb-10.11",
                                    "mariadb-11.0",
                                    "mariadb-11.1",
                                    "mariadb-11.2",
                                    "mariadb-11.3",
                                    "other"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            },
                        "systempackages":
                            {
                            "items":
                                {
                                "description": "Specifies the system packages installed by default with the hosting service. These packages can include essential tools and libraries necessary for web development and site management.",
                                "enum":
                                    [
                                    "curl",
                                    "ghostscript",
                                    "imagemagick",
                                    "openssl"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            }
                        },
                    "required":
                        [
                        "cdn",
                        "datacenter",
                        "ipaddress",
                        "objectcacheoptions",
                        "performanceserverside",
                        "phpextensions",
                        "phpversions",
                        "serverupdates",
                        "sqloptions"
                        ],
                    "type": "object"
                    },
                "management":
                    {
                    "items":
                        {
                        "description": "Indicates whether the hosting plan is managed or unmanaged, affecting the level of support and services provided.",
                        "enum":
                            [
                            "managed",
                            "unmanaged",
                            "root-access"
                            ],
                        "type": "string"
                        }
                    },
                "name":
                    {
                    "description": "The name of the hosting product or plan.",
                    "type": "string"
                    },
                "performance":
                    {
                    "properties":
                        {
                        "averageUptime":
                            {
                            "description": "(percent) Represents the average percentage of time the hosting service is operational and accessible online. Uptime is a critical measure of reliability, with 99.9% being the industry standard for most services.",
                            "type": "number"
                            },
                        "pageLoadSpeed":
                            {
                            "description": "(seconds) Indicates the average time it takes for pages hosted on the provider's servers to load. Faster page load speeds improve user experience and are beneficial for search engine optimization.",
                            "type": "number"
                            }
                        },
                    "type": "object"
                    },
                "price":
                    {
                    "description": "A general price range for the hosting plan, represented by one to five dollar signs ($ to $$$$$) indicating increasing cost. Definition: $ -> less than 120.00 USD / year; $$ -> between 120.00 and 240.00 USD / year; $$$ -> between 240.00 and 600.00 USD / year; $$$$ -> between 600.00 and 1,200.00 USD / year; $$$$$ -> more than 1,200.00 USD / year. Pricing can't include promotions or offers.",
                    "enum":
                        [
                        "$",
                        "$$",
                        "$$$",
                        "$$$$",
                        "$$$$$"
                        ],
                    "type": "string"
                    },
                "security":
                    {
                    "properties":
                        {
                        "certificateprovider":
                            {
                            "provider":
                                {
                                "description": "The type of security certificate provided, such as Let's Encrypt or other.",
                                "enum":
                                    [
                                    "aws",
                                    "cloudflare",
                                    "digicert",
                                    "entrust",
                                    "geotrust",
                                    "globalsign",
                                    "godaddy",
                                    "letsencrypt",
                                    "rapidssl",
                                    "sectigo",
                                    "symantec",
                                    "thawte",
                                    "other"
                                    ],
                                "type": "string"
                                }
                            },
                        "detectiontools":
                            {
                            "properties":
                                {
                                "enabled":
                                    {
                                    "type": "boolean"
                                    },
                                "tool":
                                    {
                                    "items":
                                        {
                                        "description": "A list of security tools used for detecting vulnerabilities.",
                                        "enum":
                                            [
                                            "patchstack",
                                            "wordfence",
                                            "wpscan",
                                            "wpvulnerability",
                                            "others"
                                            ],
                                        "type": "string"
                                        }
                                    }
                                },
                            "type": "object"
                            },
                        "firewalloptions":
                            {
                            "properties":
                                {
                                "enabled":
                                    {
                                    "type": "boolean"
                                    },
                                "firewall":
                                    {
                                    "items":
                                        {
                                        "description": "A list of the firewall options or technologies used.",
                                        "enum":
                                            [
                                            "none",
                                            "ufw",
                                            "iptables",
                                            "firewalld",
                                            "nftables",
                                            "cisco-asa",
                                            "palo-alto",
                                            "other"
                                            ],
                                        "type": "string"
                                        }
                                    }
                                },
                            "type": "object"
                            },
                        "hsts":
                            {
                            "description": "A boolean indicating whether HTTP Strict Transport Security is enforced.",
                            "type": "boolean"
                            },
                        "intrusiondetectionsystem":
                            {
                            "properties":
                                {
                                "enabled":
                                    {
                                    "type": "boolean"
                                    },
                                "system":
                                    {
                                    "items":
                                        {
                                        "description": "Details about the intrusion detection system, including whether it's enabled and what type is used.",
                                        "enum":
                                            [
                                            "none",
                                            "snort",
                                            "suricata",
                                            "ossec",
                                            "other"
                                            ],
                                        "type": "string"
                                        }
                                    }
                                },
                            "type": "object"
                            },
                        "malwarescanning":
                            {
                            "description": "A boolean value indicating whether malware scanning is provided.",
                            "type": "boolean"
                            },
                        "securitycertificate":
                            {
                            "description": "A boolean value indicating whether a security certificate is included with the hosting plan.",
                            "type": "boolean"
                            },
                        "tlsversions":
                            {
                            "description": "A list of supported TLS versions, ensuring secure connections.",
                            "items":
                                {
                                "enum":
                                    [
                                    "1.0",
                                    "1.1",
                                    "1.2",
                                    "1.3"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            }
                        },
                    "required":
                        [
                        "certificatetype",
                        "detectiontools",
                        "firewalloptions",
                        "hsts",
                        "intrusiondetectionsystem",
                        "malwarescanning",
                        "securitycertificate",
                        "tlsversions"
                        ],
                    "type": "object"
                    },
                "support":
                    {
                    "properties":
                        {
                        "availability":
                            {
                            "items":
                                {
                                "description": "Details the availability schedule of the support team, which can vary from 24/7 support to business hours or specific days of the week. This information helps customers know when they can expect to receive help for their inquiries or issues.",
                                "enum":
                                    [
                                    "24-7",
                                    "business-days",
                                    "every-day"
                                    ],
                                "type": "string"
                                }
                            },
                        "channels":
                            {
                            "items":
                                {
                                "description": "Lists the various support channels through which customers can contact the hosting provider. These can include online forms, live chat, instant messaging, toll-free phone support, paid phone support, social media platforms, and community forums. This diversity allows customers to choose their preferred method of communication for support issues.",
                                "enum":
                                    [
                                    "chat",
                                    "email",
                                    "form",
                                    "forum",
                                    "instant-messaging",
                                    "phone-free",
                                    "phone-paid",
                                    "social",
                                    "ticket"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            },
                        "community":
                            {
                            "description": "The URL to the community forum or platform where users can engage with each other, ask questions, share solutions, and discuss topics related to the hosting services. Community forums are a valuable resource for peer-to-peer support and building a sense of belonging among the provider's customers.",
                            "format": "uri",
                            "type": "string"
                            },
                        "knowledgebase":
                            {
                            "description": "Provides the URL to the hosting provider's knowledgebase. This online repository contains articles, guides, and FAQs to help customers troubleshoot issues on their own and learn more about using the hosting services effectively.",
                            "format": "uri",
                            "type": "string"
                            },
                        "languages":
                            {
                            "description": "Specifies the languages in which support is available, ensuring that customers can receive assistance in their preferred language. This is crucial for a hosting provider with a global customer base, as it enhances the support experience and accessibility.",
                            "items":
                                {
                                "enum":
                                    [
                                    "AF",
                                    "AR",
                                    "AZ",
                                    "BE",
                                    "BG",
                                    "BS",
                                    "CS",
                                    "CY",
                                    "DA",
                                    "DE",
                                    "EL",
                                    "EN",
                                    "ES",
                                    "ET",
                                    "EU",
                                    "FI",
                                    "FJ",
                                    "FR",
                                    "GA",
                                    "GD",
                                    "GV",
                                    "HE",
                                    "HI",
                                    "HR",
                                    "HU",
                                    "ID",
                                    "IS",
                                    "IT",
                                    "JA",
                                    "KA",
                                    "KG",
                                    "KL",
                                    "KO",
                                    "LO",
                                    "LT",
                                    "LV",
                                    "MG",
                                    "MI",
                                    "MK",
                                    "MS",
                                    "MT",
                                    "NL",
                                    "NO",
                                    "PL",
                                    "PT",
                                    "RO",
                                    "RU",
                                    "RW",
                                    "SG",
                                    "SK",
                                    "SL",
                                    "SM",
                                    "SQ",
                                    "SR",
                                    "ST",
                                    "SV",
                                    "SW",
                                    "TH",
                                    "TN",
                                    "TO",
                                    "TR",
                                    "TS",
                                    "UK",
                                    "VI",
                                    "WO",
                                    "YO",
                                    "ZH"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            }
                        },
                    "type": "object"
                    },
                "sustainability":
                    {
                    "properties":
                        {
                        "carbonneutrality":
                            {
                            "description": "Indicates whether the hosting provider operates on a carbon-neutral basis, either through reducing emissions or purchasing carbon offsets. This reflects the company's commitment to minimizing its environmental impact.",
                            "type": "boolean"
                            },
                        "energysource":
                            {
                            "items":
                                {
                                "description": "Describes the primary source of energy used by the hosting provider's data centers. This could include renewable sources like solar or wind, traditional sources like coal or natural gas, or a mix. This information is important for customers looking for environmentally friendly hosting options.",
                                "enum":
                                    [
                                    "biomass",
                                    "diesel",
                                    "fuel-cell",
                                    "hydro",
                                    "nuclear",
                                    "gas",
                                    "geothermal",
                                    "grid",
                                    "solar",
                                    "wind",
                                    "other"
                                    ],
                                "type": "string"
                                }
                            }
                        },
                    "required":
                        [
                        "carbonneutrality",
                        "energysource"
                        ],
                    "type": "object"
                    },
                "urlproduct":
                    {
                    "description": "The URL to the specific product or plan's webpage.",
                    "format": "uri",
                    "type": "string"
                    },
                "wordpressdevelopment":
                    {
                    "properties":
                        {
                        "dnsmanagement":
                            {
                            "properties":
                                {
                                "enabled":
                                    {
                                    "type": "boolean"
                                    },
                                "items":
                                    {
                                    "management":
                                        {
                                        "description": "Details whether the hosting provider offers DNS (Domain Name System) management capabilities, allowing customers to manage domain records directly or if they must use external services. DNS management is crucial for directing traffic to your website and configuring subdomains and email services.",
                                        "enum":
                                            [
                                            "manageable",
                                            "external"
                                            ],
                                        "type": "string"
                                        }
                                    }
                                },
                            "type": "object"
                            },
                        "environments":
                            {
                            "properties":
                                {
                                "enabled":
                                    {
                                    "type": "boolean"
                                    },
                                "environment":
                                    {
                                    "items":
                                        {
                                        "description": "Lists the supported environments for WordPress development, such as staging (for testing), production (live environment), and local (development on a local machine).",
                                        "enum":
                                            [
                                            "staging",
                                            "production",
                                            "local"
                                            ],
                                        "type": "string"
                                        }
                                    }
                                },
                            "type": "object"
                            },
                        "serveraccess":
                            {
                            "access":
                                {
                                "description": "Enumerates the types of server access provided, such as SSH (Secure Shell) for secure command-line access, SFTP (Secure File Transfer Protocol) for file transfers, WP-CLI (WordPress Command Line Interface) for managing WordPress sites, and phpMyAdmin for database management. These tools give developers flexibility in managing and deploying WordPress sites.",
                                "items":
                                    {
                                    "enum":
                                        [
                                        "adminer",
                                        "control-panel",
                                        "ftp",
                                        "git",
                                        "phpmyadmin",
                                        "sftp",
                                        "ssh",
                                        "wp-cli"
                                        ],
                                    "type": "string"
                                    },
                                "type": "array"
                                }
                            },
                        "wordpressinstallation":
                            {
                            "properties":
                                {
                                "enabled":
                                    {
                                    "type": "boolean"
                                    },
                                "installation":
                                    {
                                    "items":
                                        {
                                        "description": "Specifies the types of WordPress installation processes supported by the hosting provider, including manual installation by the user, automatic installation by the provider, or a hybrid approach that involves both.",
                                        "enum":
                                            [
                                            "manual",
                                            "automatic",
                                            "hybrid"
                                            ],
                                        "type": "string"
                                        }
                                    }
                                },
                            "type": "object"
                            }
                        },
                    "required":
                        [
                        "dnsmanagement",
                        "environment",
                        "serveraccess",
                        "wordpressinstallation"
                        ],
                    "type": "object"
                    }
                },
            "required":
                [
                "category",
                "controlpanel",
                "environment",
                "management",
                "name",
                "price",
                "security",
                "sustainability",
                "urlproduct",
                "wordpressdevelopment"
                ],
            "type": "object"
            },
        "type": "array"
        }
    },		
		
-->

			</div>
			<div class="tab-pane fade" id="vps-tab-pane" role="tabpanel" aria-labelledby="vps-tab" tabindex="2">
		
		
			</div>
			<div class="tab-pane fade" id="cloud-tab-pane" role="tabpanel" aria-labelledby="cloud-tab" tabindex="3">
		
		
			</div>
			<div class="tab-pane fade" id="dedicated-tab-pane" role="tabpanel" aria-labelledby="dedicated-tab" tabindex="4">
		
		
			</div>
		</main>

		<aside class="mt-5">
			<button type="submit" class="btn btn-primary">Generate JSON</button>
		</aside>

	</form>
	<hr>
	<div>
		<p>This tools has been made by the <a href="https://make.wordpress.org/hosting/" target="_blank">WordPress.org Hosting Team</a>.</p>
	</div>
</div>
<script src="./js//jquery-3.3.1.slim.min.js" defer></script>
<script src="./js/bootstrap.min.js" defer></script>
</body>
</html>
