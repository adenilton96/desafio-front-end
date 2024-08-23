<!-- componente do menu lateral  -->
<div class=" sidebar amimacao-sidebar" style="margin-left: inherit;">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
            <a href="/home" class="nav-link  py-3 border-bottom" aria-current="page" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Home">
                <img src="img/ball.png" alt="ball">
            </a>
        </li>
        <li class="nav-item">
            <a href="/cadastro" class="nav-link  py-3 border-bottom" aria-current="page" title=""
                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                <img class=" img-sidebar" src="img/profile_round.png" alt="profile_round">
            </a>
        </li>
        <li>
            <a href="/construcao" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Dashboard">
                <img class=" img-sidebar" src="img/script.png" alt="script">
            </a>
        </li>
        <li>
            <a href="/construcao" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Orders">
                <img class=" img-sidebar" src="img/notification_bell.png" alt="notification_bell">
            </a>
        </li>
        <li>
            <a href="/construcao" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Products">
                <img class=" img-sidebar" src="img/message_three_points.png" alt="message_three_points">
            </a>
        </li>
        <li>
            <a href="/construcao" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Customers">
                <img class=" img-sidebar" src="img/money.png" alt="money">
            </a>
        </li>
        <li>
            <a href="/construcao" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                data-bs-placement="right" data-bs-original-title="Customers">
                <img class="img-sidebar" src="img/umbrella_round.png" alt="umbrella_round">
            </a>
        </li>
    </ul>
</div>

<style scoped>
    .img-sidebar{
        opacity: 0;
    }

    .amimacao-sidebar {
        width: 35%;
        transition: width 2s ease-out;
    }

    .sidebar {
        background-color: #f8f9fa;
        padding: 25px;
        height: 100vh;
        display: block;
        text-align: center;
        border-right: 3px solid #92919159;
    }

    .sidebar .nav-link {
        color: #6c757d;
        padding: 15px;
    }

    .sidebar .nav-link:hover {
        color: #000;
    }

    .nav-pills {
        --bs-border-color: none;
    }
</style>
