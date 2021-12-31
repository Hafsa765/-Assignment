<?php
if(isset($_SESSION['_user'])) {
    $user = $_SESSION['_user'];
    $login_menu_item = "Hello " . $user["user_full_name"] . ' (<a href="logout.php">Logout</a>)';

}

?>
<header>
    <nav>
        <ul style="column-count: 3; list-style: none">
            <li><a href="home.php">HOME</a></li><br>
            <li><a href="about.php">ABOUT</a></li><br>
            <li><a href="registration.php">REGISTER</a></li><br>
            <li><a href="todo.php">TODO</a></li><br>
            <?php if(isset($login_menu_item)):?>
                <li><?=$login_menu_item?></li>
            <?php endif;?>
        </ul>
    </nav>
</header>
