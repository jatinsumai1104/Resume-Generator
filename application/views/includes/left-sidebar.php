<div class="sidebar" data-color="purple" data-background-color="white" data-image="../../assets/img/sidebar-2.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Resume <i class="material-icons">favorite</i>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?php if(!strcmp("update", $current_page))
				echo 'active'; ?>">
                <a class="nav-link" href="../../USER_DETAILS/fetchDetails/">
                    <i class="material-icons">dashboard</i>
                    <p>Update Your Details</p>
                </a>
            </li>
            <li class="nav-item <?php if(!strcmp("resume", $current_page))
				echo 'active'; ?>">
                <a class="nav-link" href="../../USER_DETAILS/fetchDetailsForResume/">
                    <i class="material-icons">person</i>
                    <p>Your Resume</p>
                </a>
            </li>
            <li class="nav-item <?php if(!strcmp("theme", $current_page))
				echo 'active'; ?>">
                <a class="nav-link" href="../../USERS/ThemeSelector/" name="theme">
                    <i class="fa fa-briefcase"></i>
                    <p>Change Or Select Theme</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../LOGIN/logout">
                    <i class="fa fa-sign-out-alt"></i>
                    <p>Log-Out</p>
                </a>
            </li>
        </ul>
    </div>
</div>
