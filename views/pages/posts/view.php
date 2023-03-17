<?php require('views/partials/header.php')?>
<?php require('views/partials/nav.php')?>

<?php require('views/partials/banner.php')?>
<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<a class="text-blue-500 hover:underline" href="/posts"><-- Back to posts</a>
	</div>

	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<article class="ml-10">
			<h2 class="text-4xl"><?= $post['title'] ?></h2>

			<section class="mt-10">
				<?= $post['text'] ?>
			</section>
		</article>
	</div>
</main>
<?php require('views/partials/footer.php')?>
