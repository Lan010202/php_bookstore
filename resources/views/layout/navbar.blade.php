<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#best-seller">Sách bán chạy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">Sách mới cập nhật</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Danh mục
                    </a>
                    <ul class="dropdown-menu">

                        @foreach ($cates as $cate)
                            <li><a class="dropdown-item" href="#{{ $cate->slug }}">{{ $cate->title }}</a></li>
                        @endforeach()
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
