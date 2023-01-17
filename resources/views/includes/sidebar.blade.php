<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="fi fi-bs-user me-2 pt-1"></i>
        <span class="fs-4">{{ auth()->user()->name }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard')?'active':'text-white' }}">
                <i class="fi fi-rr-trophy me-2 align-middle"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="/quiz" class="nav-link {{ Request::is('quiz')?'active':'text-white' }}">
                <i class="fi fi-rr-bolt me-2 align-middle"></i>
                測驗
            </a>
        </li>
    </ul>
</div>

<style>
    main {
        display: flex;
        flex-wrap: nowrap;
        height: 85vh;
        max-height: 100vh;
        overflow-x: auto;
        overflow-y: hidden;
    }

</style>
