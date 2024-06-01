<nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($navHome)) echo $navHome; ?>" href="?p=home" id="navBarHome"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($navSlide)) echo $navSlide; ?>"  href="?p=slide" id="navBarSlide"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($navNext)) echo $navNext; ?>"  href="?p=next" id="navBarNext"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($navAnimate)) echo $navAnimate; ?>"  href="?p=animate" id="navBarAnimate"></a>
                </li>
            </ul>
        </nav>