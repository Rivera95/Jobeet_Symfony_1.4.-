<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <?php use_stylesheet('jobs.css') ?>

    <title>Jobeet (<?php echo $category ?>)</title>


    <?php include_partial('sfJobeetJob/list', array('jobs' => $pager->getResults())) ?>

    <?php if ($pager->haveToPaginate()): ?>
        <div class="pagination">
            <a href="<?php echo url_for('category', $category) ?>?page=1">
                <img src="/legacy/images/first.png" alt="First page" title="First page" />
            </a>

            <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getPreviousPage() ?>">
                <img src="/legacy/images/previous.png" alt="Previous page" title="Previous page" />
            </a>

            <?php foreach ($pager->getLinks() as $page): ?>
                <?php if ($page == $pager->getPage()): ?>
                    <?php echo $page ?>
                <?php else: ?>
                    <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
                <?php endif; ?>
            <?php endforeach; ?>

            <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getNextPage() ?>">
                <img src="/legacy/images/next.png" alt="Next page" title="Next page" />
            </a>

            <a href="<?php echo url_for('category', $category) ?>?page=<?php echo $pager->getLastPage() ?>">
                <img src="/legacy/images/last.png" alt="Last page" title="Last page" />
            </a>
        </div>
    <?php endif; ?>

    <div class="pagination_desc">
        <strong><?php echo format_number_choice(
                '[0]No job in this category|[1]One job in this category|(1,+Inf]%count% jobs in this category',
                array('%count%' => '<strong>'.count($pager).'</strong>'),
                count($pager)
            )
            ?></strong> jobs in this category

        <?php if ($pager->haveToPaginate()): ?>
            - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
        <?php endif; ?>
    </div>
</feed>