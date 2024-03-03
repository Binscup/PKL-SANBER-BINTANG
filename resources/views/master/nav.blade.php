<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-white" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        {{ Auth()->user()->name }}
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
               

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
                <a href="#" class="btn bg-gradient-primary mt-3 w-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">
                    Log Out
                </a>
                
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
