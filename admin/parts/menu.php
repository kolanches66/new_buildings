<?php 
function construct_menu() {
    $page = $_SERVER['PHP_SELF']; ?>
    <div id="navigation">
            <nav>
                <a
                class="link nav_link" href="/new_buildings/admin/">главная</a>::<a
				class="link nav_link" href="/new_buildings/">сообщения</a>::<a
				class="link nav_link" href="/new_buildings/admin/users.php">пользователи</a>::<a
				class="link nav_link" href="/new_buildings/admin/lists/">списки</a>::<a
                class="link nav_link" href="/new_buildings/">посмотреть сайт</a>::<a
                class="link nav_link" href="login.php?action=logout">выход</a>
            </nav>
    </div>
    <?php
}
?>