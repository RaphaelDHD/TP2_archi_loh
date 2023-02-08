<aside>
    <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <?=
                $this->Html->link(
                    '<img src="img/users/ '. ($_SESSION['user']['id'] ?? 1) . '.jpg" class="img-circle" width="80">',
                    ['controller' => 'Pages', 'action' => '/'],
                    ['escapeTitle' => false]
                )

                ?>
            </p>
            <h5 class="centered">
                <?= $_SESSION['user']['name'] ?? "" ?>
            </h5>
            <li class="mt">
                <a href="/">
                    <i class="fa fa-dashboard"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class="mt">
                <a href="/todo-list">
                    <i class="fa fa-list"></i>
                    <span>Les tickets</span>
                </a>
            </li>
        </ul>
    </div>
</aside>