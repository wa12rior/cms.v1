<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <?php if (empty($pages)): ?>
        <p>Przepraszamy, nie ma stron do wyświetlenia. </p>
        
    <?php else: ?>
        <ul>
            <?php foreach ($pages as $page): ?>
                <li><a class="wrapper__slugs" href="page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label'];?></a></li>
            <?php endforeach; ?>
        </ul>
        
    <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
