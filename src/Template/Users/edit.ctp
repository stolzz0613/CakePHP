<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar usuario</h2>
        </div>

        <?php echo  $this->Form->create($user) ?>
        <fieldset>
            <?= $this->element("users/fields") ?>
        </fieldset>


        <?= $this->Form->button('Editar') ?>
        <?= $this->Form->end() ?>
    </div>
</div>