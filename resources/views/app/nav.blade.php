<header class="bg-dark d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="{{route('index')}}" class="text-decoration-none h4 link-danger">
        <span class="h4 text-danger pe-2">('app.home')</span>
    </a>

    <ul class="nav nav-pills">

        <li class="nav-item">
            <a class="nav-link link-danger" href="{{ route('product.index') }}">
                <i class="bi-search"></i>('app.search')
            </a>
        </li>

        <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true">('app.categories')</a>
        <ul class="dropdown-menu bg-dark">
            @foreach($categories as $category)
                <li class="dropdown-item ps-0">
                    <a class="nav-link link-danger" href="{{ route('product.index', ['categories' => [$category->id]] ) }}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>

        <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true">('app.brands')</a>
        <ul class="dropdown-menu bg-dark">
            @foreach($brands as $brand)
                <li class="dropdown-item ps-0">
                    <a class="nav-link link-danger" href="{{ route('product.index', ['brands' => [$brand->id]] ) }}">{{$brand->name}}</a>
                </li>
            @endforeach
        </ul>


    </ul>
</header>