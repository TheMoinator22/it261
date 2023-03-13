<?php

if(count($errors) > 0) :?>

    <div class="error">
        <?php foreach($errors as $error) :?>
            <p><?php $error ?></p>
        <?php endforeach ?>
    </div>
    <!-- end error -->

<?php endif ?>