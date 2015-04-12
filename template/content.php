<ul>
    <?php foreach($links as $link): ?>
        <li>
            <?php echo "<a href='".$link['href']."' target='".
                    $link['target']."' >".$link["display"]."</a>"; ?>
        </li>
    <?php endforeach; ?>
</ul>
<div>
    <?php echo $body; ?>
</div>