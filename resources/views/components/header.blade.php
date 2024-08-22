<style scoped>
    .nav-item-header {
        margin-top: auto;
        margin-left: 80px;
    }

    .text-nav-item-header {
        color: #00acc1 !important;
    }

    .arrow_right {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
</style>
<header>
    <div class="row menuTop esconder">
        <div class="col-7 nav-item-header">
            <ul class="nav nav-underline">
                <li class="nav-item ">
                    <a class="nav-link active text-nav-item-header" aria-current="page">{{$title}}</a>
                </li>
            </ul>
        </div>
        <div class="col-2 arrow_right">
        <a href="logout">
                <img class="" src="img/arrow_right_in.png" alt="arrow_right_in">
            </a>

        </div>
    </div>
</header>
