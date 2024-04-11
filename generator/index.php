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
				<h2 class="mt-2">Product: Shared hosting</h2>
				<div class="mt-2">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" id="shared_control" name="shared_control" aria-describedby="shared_control_help">
						<label class="form-check-label" for="shared_control">The company offers Shared hosting</label>
					</div>
					<div id="shared_control_help" class="form-text">Do you offer have Shared hosting as a product or service?</div>
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





<!--
        "items":
            {
            "properties":
                {
                "environment":
                    {
                    "properties":
                        {
                        "cdn":
                            {
                            "properties":
                                {
                                "cloudflareintegration":
                                    {
                                    "description": "Specifies whether there is direct integration support for Cloudflare's services, including its CDN, security, and DNS services.",
                                    "type": "boolean"
                                    },
                                "integrationwithothers":
                                    {
                                    "description": "A boolean that shows if the hosting service integrates with other CDN providers, offering flexibility in choosing CDN services.",
                                    "type": "boolean"
                                    },
                                "owncdn":
                                    {
                                    "description": "Indicates if the hosting provider offers its own CDN (Content Delivery Network) solution, which can greatly improve website load times for visitors from different geographical locations.",
                                    "type": "boolean"
                                    }
                                },
                            "type": "object"
                            },
                        "datacenter":
                            {
                            "properties":
                                {
                                "countries":
                                    {
                                    "description": "Lists the countries where the hosting provider's data centers are located. This information is crucial for understanding the geographical distribution of the provider's infrastructure and can affect website latency and compliance with regional regulations.",
                                    "items":
                                        {
                                        "enum":
                                            [
                                            "AD",
                                            "AE",
                                            "AF",
                                            "AG",
                                            "AI",
                                            "AL",
                                            "AM",
                                            "AO",
                                            "AQ",
                                            "AR",
                                            "AS",
                                            "AT",
                                            "AU",
                                            "AW",
                                            "AX",
                                            "AZ",
                                            "BA",
                                            "BB",
                                            "BD",
                                            "BE",
                                            "BF",
                                            "BG",
                                            "BH",
                                            "BI",
                                            "BJ",
                                            "BL",
                                            "BM",
                                            "BN",
                                            "BO",
                                            "BQ",
                                            "BR",
                                            "BS",
                                            "BT",
                                            "BV",
                                            "BW",
                                            "BY",
                                            "BZ",
                                            "CA",
                                            "CC",
                                            "CD",
                                            "CF",
                                            "CG",
                                            "CH",
                                            "CI",
                                            "CK",
                                            "CL",
                                            "CM",
                                            "CN",
                                            "CO",
                                            "CR",
                                            "CU",
                                            "CV",
                                            "CW",
                                            "CX",
                                            "CY",
                                            "CZ",
                                            "DE",
                                            "DJ",
                                            "DK",
                                            "DM",
                                            "DO",
                                            "DZ",
                                            "EC",
                                            "EE",
                                            "EG",
                                            "EH",
                                            "ER",
                                            "ES",
                                            "ET",
                                            "FI",
                                            "FJ",
                                            "FK",
                                            "FM",
                                            "FO",
                                            "FR",
                                            "GA",
                                            "GB",
                                            "GD",
                                            "GE",
                                            "GF",
                                            "GG",
                                            "GH",
                                            "GI",
                                            "GL",
                                            "GM",
                                            "GN",
                                            "GP",
                                            "GQ",
                                            "GR",
                                            "GS",
                                            "GT",
                                            "GU",
                                            "GW",
                                            "GY",
                                            "HK",
                                            "HM",
                                            "HN",
                                            "HR",
                                            "HT",
                                            "HU",
                                            "ID",
                                            "IE",
                                            "IL",
                                            "IM",
                                            "IN",
                                            "IO",
                                            "IQ",
                                            "IR",
                                            "IS",
                                            "IT",
                                            "JE",
                                            "JM",
                                            "JO",
                                            "JP",
                                            "KE",
                                            "KG",
                                            "KH",
                                            "KI",
                                            "KM",
                                            "KN",
                                            "KP",
                                            "KR",
                                            "KW",
                                            "KY",
                                            "KZ",
                                            "LA",
                                            "LB",
                                            "LC",
                                            "LI",
                                            "LK",
                                            "LR",
                                            "LS",
                                            "LT",
                                            "LU",
                                            "LV",
                                            "LY",
                                            "MA",
                                            "MC",
                                            "MD",
                                            "ME",
                                            "MF",
                                            "MG",
                                            "MH",
                                            "MK",
                                            "ML",
                                            "MM",
                                            "MN",
                                            "MO",
                                            "MP",
                                            "MQ",
                                            "MR",
                                            "MS",
                                            "MT",
                                            "MU",
                                            "MV",
                                            "MW",
                                            "MX",
                                            "MY",
                                            "MZ",
                                            "NA",
                                            "NC",
                                            "NE",
                                            "NF",
                                            "NG",
                                            "NI",
                                            "NL",
                                            "NO",
                                            "NP",
                                            "NR",
                                            "NU",
                                            "NZ",
                                            "OM",
                                            "PA",
                                            "PE",
                                            "PF",
                                            "PG",
                                            "PH",
                                            "PK",
                                            "PL",
                                            "PM",
                                            "PN",
                                            "PR",
                                            "PS",
                                            "PT",
                                            "PW",
                                            "PY",
                                            "QA",
                                            "RE",
                                            "RO",
                                            "RS",
                                            "RU",
                                            "RW",
                                            "SA",
                                            "SB",
                                            "SC",
                                            "SD",
                                            "SE",
                                            "SG",
                                            "SH",
                                            "SI",
                                            "SJ",
                                            "SK",
                                            "SL",
                                            "SM",
                                            "SN",
                                            "SO",
                                            "SR",
                                            "SS",
                                            "ST",
                                            "SV",
                                            "SX",
                                            "SY",
                                            "SZ",
                                            "TC",
                                            "TD",
                                            "TF",
                                            "TG",
                                            "TH",
                                            "TJ",
                                            "TK",
                                            "TL",
                                            "TM",
                                            "TN",
                                            "TO",
                                            "TR",
                                            "TT",
                                            "TV",
                                            "TW",
                                            "TZ",
                                            "UA",
                                            "UG",
                                            "UM",
                                            "US",
                                            "UY",
                                            "UZ",
                                            "VA",
                                            "VC",
                                            "VE",
                                            "VG",
                                            "VI",
                                            "VN",
                                            "VU",
                                            "WF",
                                            "WS",
                                            "YE",
                                            "YT",
                                            "ZA",
                                            "ZM",
                                            "ZW"
                                            ],
                                        "type": "string"
                                        },
                                    "type": "array"
                                    },
                                "datastored":
                                    {
                                    "description": "Enumerates the countries where the hosting provider stores its clients' data. This detail is important for clients concerned with data sovereignty and compliance with local data protection laws.",
                                    "items":
                                        {
                                        "enum":
                                            [
                                            "AD",
                                            "AE",
                                            "AF",
                                            "AG",
                                            "AI",
                                            "AL",
                                            "AM",
                                            "AO",
                                            "AQ",
                                            "AR",
                                            "AS",
                                            "AT",
                                            "AU",
                                            "AW",
                                            "AX",
                                            "AZ",
                                            "BA",
                                            "BB",
                                            "BD",
                                            "BE",
                                            "BF",
                                            "BG",
                                            "BH",
                                            "BI",
                                            "BJ",
                                            "BL",
                                            "BM",
                                            "BN",
                                            "BO",
                                            "BQ",
                                            "BR",
                                            "BS",
                                            "BT",
                                            "BV",
                                            "BW",
                                            "BY",
                                            "BZ",
                                            "CA",
                                            "CC",
                                            "CD",
                                            "CF",
                                            "CG",
                                            "CH",
                                            "CI",
                                            "CK",
                                            "CL",
                                            "CM",
                                            "CN",
                                            "CO",
                                            "CR",
                                            "CU",
                                            "CV",
                                            "CW",
                                            "CX",
                                            "CY",
                                            "CZ",
                                            "DE",
                                            "DJ",
                                            "DK",
                                            "DM",
                                            "DO",
                                            "DZ",
                                            "EC",
                                            "EE",
                                            "EG",
                                            "EH",
                                            "ER",
                                            "ES",
                                            "ET",
                                            "FI",
                                            "FJ",
                                            "FK",
                                            "FM",
                                            "FO",
                                            "FR",
                                            "GA",
                                            "GB",
                                            "GD",
                                            "GE",
                                            "GF",
                                            "GG",
                                            "GH",
                                            "GI",
                                            "GL",
                                            "GM",
                                            "GN",
                                            "GP",
                                            "GQ",
                                            "GR",
                                            "GS",
                                            "GT",
                                            "GU",
                                            "GW",
                                            "GY",
                                            "HK",
                                            "HM",
                                            "HN",
                                            "HR",
                                            "HT",
                                            "HU",
                                            "ID",
                                            "IE",
                                            "IL",
                                            "IM",
                                            "IN",
                                            "IO",
                                            "IQ",
                                            "IR",
                                            "IS",
                                            "IT",
                                            "JE",
                                            "JM",
                                            "JO",
                                            "JP",
                                            "KE",
                                            "KG",
                                            "KH",
                                            "KI",
                                            "KM",
                                            "KN",
                                            "KP",
                                            "KR",
                                            "KW",
                                            "KY",
                                            "KZ",
                                            "LA",
                                            "LB",
                                            "LC",
                                            "LI",
                                            "LK",
                                            "LR",
                                            "LS",
                                            "LT",
                                            "LU",
                                            "LV",
                                            "LY",
                                            "MA",
                                            "MC",
                                            "MD",
                                            "ME",
                                            "MF",
                                            "MG",
                                            "MH",
                                            "MK",
                                            "ML",
                                            "MM",
                                            "MN",
                                            "MO",
                                            "MP",
                                            "MQ",
                                            "MR",
                                            "MS",
                                            "MT",
                                            "MU",
                                            "MV",
                                            "MW",
                                            "MX",
                                            "MY",
                                            "MZ",
                                            "NA",
                                            "NC",
                                            "NE",
                                            "NF",
                                            "NG",
                                            "NI",
                                            "NL",
                                            "NO",
                                            "NP",
                                            "NR",
                                            "NU",
                                            "NZ",
                                            "OM",
                                            "PA",
                                            "PE",
                                            "PF",
                                            "PG",
                                            "PH",
                                            "PK",
                                            "PL",
                                            "PM",
                                            "PN",
                                            "PR",
                                            "PS",
                                            "PT",
                                            "PW",
                                            "PY",
                                            "QA",
                                            "RE",
                                            "RO",
                                            "RS",
                                            "RU",
                                            "RW",
                                            "SA",
                                            "SB",
                                            "SC",
                                            "SD",
                                            "SE",
                                            "SG",
                                            "SH",
                                            "SI",
                                            "SJ",
                                            "SK",
                                            "SL",
                                            "SM",
                                            "SN",
                                            "SO",
                                            "SR",
                                            "SS",
                                            "ST",
                                            "SV",
                                            "SX",
                                            "SY",
                                            "SZ",
                                            "TC",
                                            "TD",
                                            "TF",
                                            "TG",
                                            "TH",
                                            "TJ",
                                            "TK",
                                            "TL",
                                            "TM",
                                            "TN",
                                            "TO",
                                            "TR",
                                            "TT",
                                            "TV",
                                            "TW",
                                            "TZ",
                                            "UA",
                                            "UG",
                                            "UM",
                                            "US",
                                            "UY",
                                            "UZ",
                                            "VA",
                                            "VC",
                                            "VE",
                                            "VG",
                                            "VI",
                                            "VN",
                                            "VU",
                                            "WF",
                                            "WS",
                                            "YE",
                                            "YT",
                                            "ZA",
                                            "ZM",
                                            "ZW"
                                            ],
                                        "type": "string"
                                        },
                                    "type": "array"
                                    },
                                "privacycompliance":
                                    {
                                    "description": "Specifies the privacy and data protection regulations with which the hosting provider complies. Examples include GDPR for data protection in the European Union, CCPA for privacy in California, USA, and others. Compliance with these regulations ensures that the provider adheres to legal standards for data privacy and protection.",
                                    "items":
                                        {
                                        "enum":
                                            [
                                            "ccpa",
                                            "coppa",
                                            "gdpr",
                                            "lgpd",
                                            "pdpa",
                                            "pipl",
                                            "popia",
                                            "other"
                                            ],
                                        "type": "string"
                                        },
                                    "type": "array"
                                    }
                                },
                            "required":
                                [
                                "countries",
                                "datastored",
                                "privacycompliance"
                                ],
                            "type": "object"
                            },
                        "ipaddress":
                            {
                            "properties":
                                {
                                "additionalipv4":
                                    {
                                    "description": "Specifies if additional IPv4 addresses are available upon request or included in the plan.",
                                    "type": "boolean"
                                    },
                                "additionalipv6":
                                    {
                                    "description": " Indicates if extra IPv6 addresses can be allocated to your hosting account, useful for large-scale deployments.",
                                    "type": "boolean"
                                    },
                                "ipv4":
                                    {
                                    "description": "A boolean indicating if an IPv4 address is provided with the hosting service.",
                                    "type": "boolean"
                                    },
                                "ipv6":
                                    {
                                    "description": "States whether IPv6 support is available, which is essential for future-proofing services and enhancing connectivity.",
                                    "type": "boolean"
                                    }
                                },
                            "required":
                                [
                                "additionalipv4",
                                "additionalipv6",
                                "ipv4",
                                "ipv6"
                                ],
                            "type": "object"
                            },
                        "objectcacheoptions":
                            {
                            "properties":
                                {
                                "cache":
                                    {
                                    "description": "Lists the object caching options available, which can include in-memory data storage systems like Redis and Memcached. Object caching helps improve WordPress performance by storing data in memory for faster retrieval.",
                                    "items":
                                        {
                                        "enum":
                                            [
                                            "redis",
                                            "memcached",
                                            "own",
                                            "others"
                                            ],
                                        "type": "string"
                                        }
                                    },
                                "enabled":
                                    {
                                    "type": "boolean"
                                    }
                                },
                            "type": "object"
                            },
                        "performanceserverside":
                            {
                            "properties":
                                {
                                "brotli":
                                    {
                                    "description": "A boolean indicating whether Brotli compression is supported. Brotli is a newer compression algorithm that can provide better compression ratios than GZIP.",
                                    "type": "boolean"
                                    },
                                "gzip":
                                    {
                                    "description": "Specifies if GZIP compression is available, a method for reducing the size of the files sent from your server to increase the speed to which they are transferred to the browser.",
                                    "type": "boolean"
                                    },
                                "httpversions":
                                    {
                                    "description": " Lists the HTTP protocol versions supported by the hosting server, impacting the speed and security of data transfer between the server and clients.",
                                    "items":
                                        {
                                        "enum":
                                            [
                                            "1.0",
                                            "1.1",
                                            "2.0",
                                            "3.0"
                                            ],
                                        "type": "string"
                                        },
                                    "type": "array"
                                    }
                                },
                            "required":
                                [
                                "brotli",
                                "gzip",
                                "httpversions"
                                ],
                            "type": "object"
                            },
                        "phpextensions":
                            {
                            "items":
                                {
                                "description": "Enumerates the PHP extensions available with the hosting plan. PHP extensions extend the functionality of PHP for more comprehensive web development capabilities.",
                                "enum":
                                    [
                                    "json",
                                    "mysqli",
                                    "mysqlnd",
                                    "curl",
                                    "dom",
                                    "exif",
                                    "fileinfo",
                                    "hash",
                                    "igbinary",
                                    "imagick",
                                    "intl",
                                    "mbstring",
                                    "openssl",
                                    "pcre",
                                    "xml",
                                    "zip",
                                    "apcu",
                                    "memcached",
                                    "opcache",
                                    "redis",
                                    "bc",
                                    "filter",
                                    "image",
                                    "iconv",
                                    "shmop",
                                    "simplexml",
                                    "sodium",
                                    "xmlreader",
                                    "zlib",
                                    "ssh2",
                                    "ftp",
                                    "sockets"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            },
                        "phpversions":
                            {
                            "description": "Lists the PHP versions supported by the hosting service. PHP is a widely-used open-source scripting language that is especially suited for web development.",
                            "items":
                                {
                                "enum":
                                    [
                                    "5.0",
                                    "5.1",
                                    "5.2",
                                    "5.3",
                                    "5.4",
                                    "5.5",
                                    "5.6",
                                    "7.0",
                                    "7.1",
                                    "7.2",
                                    "7.3",
                                    "7.4",
                                    "8.0",
                                    "8.1",
                                    "8.2",
                                    "8.3",
                                    "8.4"
                                    ],
                                "type": "string"
                                },
                            "type": "array"
                            },
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
