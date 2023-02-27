<!--main content start-->

<body>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> To-Do List</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h5><i class="fa fa-tasks"></i> Liste des tâches a faire / faites</h5>
                            </div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">
                                <ul class="task-list">
                                    <?php
                                    foreach ($tickets as $ticket) :
                                    ?>
                                        <li class="tooltips" title="<?= $ticket->description?>">
                                            <div class="task-title">
                                                <span class="task-title-sp"><?= $ticket->title ?></span>
                                                <span class="badge <?= ($ticket->level <= 4 ? 'bg-theme' : 'bg-warning') ?>"><?= $ticket->level ?></span>
                                                <div class="pull-right hidden-phone">
                                                <?php
                                                    if ($ticket->done) :
                                                    ?>
                                                        <?= $this->Html->link(
                                                            '',
                                                            ['action' => 'changeDo', $ticket->id],
                                                            ['class' => 'btn btn-success btn-xs fa fa-check']
                                                        ) ?>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <?= $this->Html->link(
                                                            '',
                                                            ['action' => 'changeDo', $ticket->id],
                                                            ['class' => 'btn btn-warning btn-xs fa fa-close']
                                                        ) ?>
                                                    <?php
                                                    endif;
                                                    ?>
                                                    <?= $this->Html->link(
                                                        '',
                                                        ['action' => 'edit', $ticket->id],
                                                        ['class' => 'btn btn-primary btn-xs fa fa-pencil', 'escapeTitle' => false]
                                                    ) ?>
                                                    <?= $this->Form->postLink(
                                                        '',
                                                        ['action' => 'delete', $ticket->id],
                                                        ['class' => 'btn btn-danger btn-xs fa fa-trash-o', 'escapeTitle' => false, 'confirm' => 'Etes vous sur ?']
                                                    ) ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                            <div class=" add-task-row">
                                <?=
                                $this->Html->link(
                                    'Ajouter un nouveau ticket',
                                    ['controller' => 'Tickets', 'action' => 'add'],
                                    ['class' => 'btn btn-success btn-sm pull-left']
                                );
                                ?>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /col-md-12-->
            </div>
        </section>
        <!-- /wrapper -->
    </section>
</body>