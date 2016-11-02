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
				<a href="/about.php" class="site-menu__link site-menu__link--is-active js-pjax-link">About</a>
			</li>
			<li class="site-menu__item">
				<a href="/enterprise.php" class="site-menu__link js-pjax-link">The Starship Enterprise</a>
			</li>
		</ul>
	</header>
<?php endif; ?>

	<div class="body-area js-body-area">
		<p>Ut et ipsum est. Etiam commodo consectetur neque eu maximus. Integer varius magna mauris, id luctus velit scelerisque at. Nulla interdum id tellus eget varius. Maecenas egestas elit egestas, ultricies est ut, aliquam risus. Sed mauris lorem, efficitur eu lectus vulputate, consequat commodo elit. Sed tempus sem ut aliquam posuere. In efficitur, nulla nec eleifend tincidunt, tellus dolor semper lectus, accumsan egestas ante purus vitae urna. Nulla ornare pretium porttitor. Pellentesque placerat elit ipsum, vitae auctor leo convallis eget. Vestibulum eget fermentum magna. Donec vehicula quam ipsum, non laoreet urna eleifend et. Cras commodo quis nibh eget laoreet. Quisque non leo sed neque tincidunt tincidunt. Duis sed metus enim. Donec vehicula malesuada dapibus.</p>

		<p>Vestibulum gravida, ipsum sed porttitor eleifend, elit enim tincidunt eros, vitae accumsan eros urna et nibh. Nam magna risus, faucibus a magna eget, bibendum varius arcu. Etiam congue tempus interdum. In lobortis quam sed tristique aliquam. Donec iaculis metus sit amet augue luctus tempus. Quisque tristique ultricies purus sed finibus. Aliquam ac metus dictum, imperdiet elit sed, dignissim felis. Nunc eu leo eget lorem condimentum dictum vel eget purus. In faucibus facilisis odio varius pellentesque. In eu ipsum a diam tincidunt varius. Curabitur tristique fermentum libero. Suspendisse sagittis maximus dignissim. Donec congue nec mauris eget dictum.</p>
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