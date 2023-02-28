<?php
include('./includes/header.php');

$character['Hello_Kitty'] = 'kitty_kitty-plush_Hello Kitty was born in the suburbs of London. She lives with her parents and her twin sister Mimmy who is her best friend. Her hobbies include baking cookies and making new friends. As she always says, "you can never have too many friends!"';
$character['My_Melody'] = 'melod_melod-plush_My Melody was born in the forest of Mariland. Her favorite hobby is baking cookies with her mother, and her favorite food is almond pound cake. She enjoys eating cake with her best friend, a mouse named Flat.';
$character['Pochacco'] = 'pocha_pocha-plush_Pochacco is a curious little guy who loves going for walks and eating banana ice cream. This sports-minded pup is a great basketball player and a not too shabby soccer goalie too!';
$character['Cinnamoroll'] = 'cinna_cinna-plush_Cinnamoroll is Cafe Cinnamon\'s official mascot. He is quite shy, but very friendly, and sometimes takes a nap on customers\' laps. He can fly through the air by flapping his huge ears.';
$character['Kuromi'] = 'kurom_kurom-plush_Kuromi is a tomboy, but behind her tough appearance, she is actually very girly. She enjoys writing in her diary and reading romance novels.';

?>

<h2>Sanrio Characters and their plushes</h2>

<table>
    <?php foreach($character as $name => $image): ?>
        <tr>
            <td><image src="images/<?php echo substr($image, 0, 5) ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
            <td><?php echo str_replace('_', ' ', $name); ?></td>
            <td><?php echo substr($image, 18) ?></td>
            <td><image src="images/<?php echo substr($image, 6, 11) ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?> plush"></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
include('./includes/footer.php');
?>