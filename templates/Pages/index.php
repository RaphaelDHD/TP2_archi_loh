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
                                            <span class="task-title-sp"></span>
                                            <span class="badge"></span>
                                            <div class="pull-right hidden-phone">
                                                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                            </div>
                                        </div>
                                    </li>
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