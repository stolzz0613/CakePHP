<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear usuario</h2>
        </div>

        <?php echo  $this->Form->create($user) ?>
        <fieldset>
            <?php echo $this->Form->control('first_name', ['label' => "Nombre"]); ?>
            <?php echo $this->Form->control('last_name', ['label' => "Apellidos"]); ?>
            <?php echo $this->Form->control('email', ['label' => "Correo electrónico"]); ?>
            <?php echo $this->Form->control('password', ['label' => "Contraseña"]); ?>
            <?php echo $this->Form->control('role', ["options" => ["admin" => "Administrator", "user" => 'User'], 'label' =>
            "Rol"]); ?>
            <?php echo $this->Form->control('active', ['label' => "Activo"]); ?>
        </fieldset>


        <?= $this->Form->button('Crear') ?>
        <?= $this->Form->end() ?>
    </div>
</div>