# sy/google-tag-manager

A web component for adding Google Tag Manager on your website

## Installation

Install the latest version with Composer:

```bash
composer require sy/google-tag-manager
```

## Basic Usage

```php
<?php
use Sy\Component\Html\Page;
use Sy\Component\Web\GoogleTagManager;

$page = new Page();
$page->addBody(new GoogleTagManager('GTM-XXXXX'));
echo $page;
```

Output:
```html
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script type="text/javascript">
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-XXXXX');
</script>
</head>
<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
</body>
</html>
```