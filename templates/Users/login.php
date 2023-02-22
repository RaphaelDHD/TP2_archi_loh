<body>
    <div id="login-page">
        <div class="container">
            <?php
            echo $this->Form->create(null , ['class' => 'form-login']);
            ?>
            <h2 class="form-login-heading">Connexion</h2>
            <div class="login-wrap">
                <?php
                echo $this->Form->control('email', [
                    'type' => 'email',
                    'class' => 'form-control',
                    'id' => 'nameInput',
                    'placeholder' => "",
                    'label' => [
                        'text' => 'Email'
                    ]
                ]);


                echo $this->Form->control('password', [
                    'type' => 'password',
                    'class' => 'form-control',
                    'id' => 'passwordInput',
                    'placeholder' => "Mot de passe",
                    'label' => [
                        'text' => 'Password'
                    ]
                ]);

                echo '<i class="fa fa-lock"></i>';
                echo $this->Form->button('Connexion',['class' => 'btn btn-theme btn-block','type' => 'submit']);


                // echo $form->button('<i class="fa fa-lock"></i> Connexion', ['class' => 'btn btn-theme btn-block', 'type' => 'submit']);
                ?>

            </div>
            <?php
            echo $this->Form->end()
            ?>
        </div>
    </div>
</body>