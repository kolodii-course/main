<?php require(base_path('views/partials/header.php')) ?>
<?php require(base_path('views/partials/nav.php')) ?>

<?php require(base_path('views/partials/banner.php')) ?>
<main>
	<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<ul>

		<?php foreach ($posts as $post) : ?>
		<li class="mb-5 hover:underline text-blue-500 text-lg"><a href="/posts?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></li>
		<?php endforeach; ?>

		</ul>

		<div>
			<a href="/posts/create" class="hover:underline bg-blue-500 text-white p-1">Create new post</a>
		</div>
	</div>
</main>
<?php require(base_path('views/partials/footer.php')) ?>
