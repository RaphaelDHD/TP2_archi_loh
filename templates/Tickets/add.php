<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
        <div class="row mt">
            <div class="col-md-12">
                <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5><i class="fa fa-tasks"></i> Ajouter un ticket</h5>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="task-content">
                            <?php
                            echo $this->Form->create($ticket, ['class' => 'form-horizontal style-form']);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <?php
                                    echo $this->Form->control('title', [
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'id' => 'inputTitle',
                                        'name' => 'title',
                                        'label' => [
                                            'class' => 'col-sm-2 col-sm-2 control-label',
                                            'text' => 'Titre du ticket'
                                        ]
                                    ])
                                    //  echo $form->input("title", ['type' => 'text', 'class' => 'form-control', 'id' => 'inputTitle', 'name' => 'title', 'label' => false]);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <?php
                                    echo $this->Form->control(
                                        'description',
                                        [
                                            'type' => 'textarea',
                                            'class' => 'form-control',
                                            'label' => [
                                                'class' => 'col-sm-2 col-sm-2 control-label',
                                                'text' => 'Description complète du ticket'
                                            ]
                                        ]
                                    );
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                echo $this->Form->label('urgenceLevel', 'Niveau d\'urgence', ['class' => 'col-sm-2 col-sm-2 control-label']);
                                // echo $form->label("Niveau d'urgence", ['for' => 'inputSelect', 'class' => 'col-sm-2 col-sm-2 control-label']);
                                ?>
                                <div class="col-sm-10">
                                    <?php
                                    echo $this->Form->select(
                                        'level',
                                        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                                        ['class' => "form-control"]
                                    )
                                    ?>

                                </div>
                            </div>
                            <div class="pull-right">
                                <?php
                                // echo $form->input("", ['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Enregistrer']);
                                ?>
                            </div>
                            <?php
                            // $form->end();
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </section>
</section>