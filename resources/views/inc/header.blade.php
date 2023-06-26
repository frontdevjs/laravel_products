<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('index') }}" class="nav-link px-2 text-white">Home</a></li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Categories--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item text-white" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><hr class="dropdown-divider bg-white"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a href="{{ route ('index.categories') }}" class="nav-link px-2 text-white">Categories</a></li>
                <li><a href="{{ route ('index.products') }}" class="nav-link px-2 text-white">Products</a></li>
                <li><a href="{{ route('index.faqs') }}" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="{{ route('index.about') }}" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <a href="#" class="btn btn-outline-light me-2">Login</a>
                <a href="#" class="btn btn-warning me-5">Sign-up</a>
                <a href="#" class="btn btn-outline-info py-1"><span class="material-icons">shopping_cart</span></a>
            </div>
        </div>
    </div>
</header>
