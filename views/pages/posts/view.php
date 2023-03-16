<?php require('views/partials/header.php')?>
<?php require('views/partials/nav.php')?>

<?php require('views/partials/banner.php')?>
<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<a class="text-blue-500 underline" href="/posts">Back to posts...</a>
	</div>

	<div>
		<article class="ml-10">
			<h2><?= $post['title'] ?></h2>

			<section>
				<?= $post['text'] ?>
			</section>
		</article>
	</div>
</main>
<?php require('views/partials/footer.php')?>
