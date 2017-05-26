<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <?php if(!$page): ?>
        <p> Przepraszamy, nie ma stron do wyświetlenia. </p>
    <?php else: ?>
        <h2><?php echo '<header class="wrapper__header">' . e($page['title']) . '</header>'; ?></h2>

        <?php echo '<div class="wrapper__post">' . e($page['body']) . '</div>'; ?>

        <p class="faded">
            Created on <?php echo $page['created']->format('jS M Y') ?>
            <?php if($page['updated']):?>
                Last updated <?php echo $page['updated']->format('jS M Y h:i a'); ?>
            <?php endif; ?>
        </p>
    <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
