<?php if (! isset($_GET['pjax'])): ?>
<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="site-header">
		<ul class="site-menu">
			<li class="site-menu__item">
				<a href="/" class="site-menu__link js-pjax-link">Home</a>
			</li>
			<li class="site-menu__item">
				<a href="/about.php" class="site-menu__link js-pjax-link">About</a>
			</li>
			<li class="site-menu__item">
				<a href="/enterprise.php" class="site-menu__link site-menu__link--is-active js-pjax-link">The Starship Enterprise</a>
			</li>
		</ul>
	</header>
<?php endif; ?>

	<div class="body-area js-body-area">
		<p>
			<img src="images/enterprise-01.jpg" alt="">
		</p>
		<p>
			<img src="images/enterprise-02.jpg" alt="">
		</p>
	</div>

<?php if (! isset($_GET['pjax'])): ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone.js"></script>
	<script src="script_globalState.js"></script>
	<script src="script_menu.js"></script>
	<script src="script_pjax.js"></script>
</body>
</html>
<?php endif; ?>