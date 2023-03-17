<?php require('views/partials/header.php')?>
<?php require('views/partials/nav.php')?>

<?php require('views/partials/banner.php')?>
<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<ul>

		<?php foreach ($posts as $post) : ?>
		<li class="mb-5 hover:underline text-blue-500 text-lg"><a href="/posts?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></li>
		<?php endforeach; ?>

		</ul>
	</div>
</main>
<?php require('views/partials/footer.php')?>
