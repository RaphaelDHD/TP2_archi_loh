<aside>
    <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <?=
                $this->Html->link(
                    '<img src="img/users/' . ($_SESSION['user']['id'] ?? 1) . '.jpg" class="img-circle" width="80">',
                    '#',
                    ['escapeTitle' => false]
                )

                ?>
            </p>
            <h5 class="centered">
                <?= $_SESSION['user']['name'] ?? "" ?>
            </h5>
            <li class="mt">

                <?= $this->Html->link(
                    '<i class="fa fa-dashboard"></i>
                        <span>Tableau de bord</span>',
                    '/',
                    ['escapeTitle' => false]
                );
                ?>
            </li>
            <li class="mt">
                <?= $this->Html->link(
                    '<i class="fa fa-list"></i>
                            <span>Les tickets</span>',
                    '/todo-list',
                    ['escapeTitle' => false]
                );
                ?>
            </li>
        </ul>
    </div>
</aside>