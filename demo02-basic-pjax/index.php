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
				<a href="/" class="site-menu__link site-menu__link--is-active js-pjax-link">Home</a>
			</li>
			<li class="site-menu__item">
				<a href="/about.php" class="site-menu__link js-pjax-link">About</a>
			</li>
			<li class="site-menu__item">
				<a href="/enterprise.php" class="site-menu__link js-pjax-link">The Starship Enterprise</a>
			</li>
		</ul>
	</header>
<?php endif; ?>

	<div class="body-area js-body-area">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dignissim laoreet turpis eu laoreet. Nunc arcu magna, consequat eget risus a, vestibulum pulvinar est. Etiam in risus a nunc dapibus mattis eu varius augue. Maecenas id elit in nunc euismod hendrerit vel vitae ligula. Pellentesque tincidunt mauris eu nisi convallis, id tempor enim finibus. Cras vel orci ut nunc ultrices convallis sed id neque. Proin ultricies sapien eu arcu varius, at ullamcorper lorem tempus. Donec semper ante non justo ornare, eget iaculis dolor mattis.</p>

		<p>Cras facilisis elit sit amet purus viverra malesuada. Praesent fringilla odio vitae eros dapibus interdum. Maecenas lobortis mattis leo, sit amet laoreet leo elementum non. Integer viverra quam ut mi ultrices, quis consectetur enim varius. Donec est lorem, convallis id laoreet at, faucibus in dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent tortor nibh, egestas id leo a, faucibus auctor purus. Ut porttitor ante et arcu blandit, sed faucibus enim finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc faucibus, metus sagittis vestibulum aliquet, augue lacus ultricies sapien, sit amet cursus eros arcu eu ipsum.</p>

		<p>Curabitur aliquam, massa fringilla cursus dictum, ex purus viverra nisi, sit amet ultrices lorem metus a quam. In non turpis nec tellus bibendum hendrerit. Mauris sed mi ex. Integer convallis ullamcorper posuere. Vestibulum non sollicitudin ex. Suspendisse potenti. Aenean id nunc sit amet magna bibendum auctor. Pellentesque in risus vel risus placerat lacinia. Donec suscipit viverra lacus, at scelerisque erat vestibulum et. Donec quis interdum eros, et maximus massa. Praesent lacinia lectus in diam posuere, nec vestibulum metus tincidunt. Mauris tincidunt elementum dictum. Aenean sagittis consequat nisi sed imperdiet. Nam sed tempus urna. In imperdiet nunc et dapibus porta. Nunc id gravida nisi.</p>
	</div>

<?php if (! isset($_GET['pjax'])): ?>
	<script src="jquery.min.js"></script>
	<script src="underscore.js"></script>
	<script src="backbone.js"></script>
	<script src="script_globalState.js"></script>
	<script src="script_menu.js"></script>
	<script src="script_pjax.js"></script>
</body>
</html>
<?php endif; ?>