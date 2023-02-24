<!--main content start-->

<body>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h5><i class="fa fa-tasks"></i> Liste des tickets</h5>
                            </div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">
                                <ul class="task-list">

                                    <li class="tooltips" title="">
                                        <div class="task-title">
                                            <?php
                                            foreach ($tickets as $ticket) :
                                            ?>
                                                <span class="task-title-sp"><?= $this->Html->link($ticket->title, ['action' => 'view', $ticket->slug]) ?></span>
                                                <span class="badge"><?= $this->Html->link($ticket->level, ['action' => 'view', $ticket->slug]) ?></span>
                                                <div class="pull-right hidden-phone">
                                                    <?php
                                                    if ($ticket['done']) :
                                                    ?>
                                                        <a href="#" class="btn btn-warning btn-xs"><i class=" fa fa-close"></i></a>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <a href="#" class="btn btn-success btn-xs"><i class=" fa fa-check"></i></a>
                                                    <?php
                                                    endif;
                                                    ?>
                                                    <?= $this->Html->link('',
                                                    ['action' => 'edit'],
                                                    ['class' => 'btn btn-primary btn-xs fa fa-pencil', 'escapeTitle' => false]
                                                    ) ?>
                                                    <?= $this->Form->postLink('',
                                                    ['action' => 'delete', $ticket->id],
                                                    ['class' => 'btn btn-danger btn-xs fa fa-trash-o' , 'escapeTitle' => false, 'confirm' => 'Etes vous sur ?']) ?>
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
                                <a class="btn btn-default btn-sm pull-right" href="/todo-list">Voir tous les tickets</a>
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