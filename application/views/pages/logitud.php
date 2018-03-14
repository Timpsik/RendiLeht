<h1>Said sisse</h1>

<?php foreach ($person as $person_data): ?>

        <h3><?php echo $person_data['Nimi']; ?></h3>
        <div class="main">
                <?php echo $person_data['Elukoht']; ?>
        </div>

<?php endforeach; ?>