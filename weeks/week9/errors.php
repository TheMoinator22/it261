<?php

if(count($errors) > 0) :?>

    <div class="error">
        <?php foreach($errors as $error) :?>
            <?php echo $error ?>
        <?php endforeach ?>
    </div>
    <!-- end error -->

<?php endif ?>