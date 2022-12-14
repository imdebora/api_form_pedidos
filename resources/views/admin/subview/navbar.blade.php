<aside id="sidebar" class="sidebar bg-dark">
    <ul class="sidebar-nav " id="sidebar-nav">

        <li class="nav-item"><a class="nav-link " href="/">
                <img src="{{asset('img/icone/dashboard.png')}}" class="mt-4" width="30px" alt="retornar"><span class="dropdown-menu-space">Voltar ao Dashboard</span></a>
        </li>

        <li class="nav-item  bg-light">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
                <img src="{{asset('img/icone/produtos.png')}}" class="mt-4" width="30px" alt="users">
                <span class="dropdown-menu-space">Produtos</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li><a href="{{route('newproduct')}}"><i class="bi bi-circle"></i><span>Inserir Novo Produto</span></a></li>
                <li><a href="{{route('productlist')}}"><i class="bi bi-circle"></i><span>Listar Produtos</span></a></li>
            </ul>
        </li>
        <li class="nav-item  bg-light">
            <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
                <img src="{{asset('img/icone/aperto-de-mao.png')}}" class="mt-4" width="30px" alt="nota-fiscal">
                <span class="dropdown-menu-space">Clientes</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="orders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('clientlist')}}"><i class="bi bi-circle"></i><span>Listar Clientes</span></a></li>
                <li> <a href="{{route('newclient')}}"><i class="bi bi-circle"></i><span>Adicionar Cliente</span></a></li>

            </ul>
        </li>

        <li class="nav-item bg-light ">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <img src="{{asset('img/icone/pedido.png')}}" class="mt-4" width="30px" alt="produtos">
                <span class="dropdown-menu-space">Pedidos</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('purchaselist')}}"> <i class="bi bi-circle"></i><span>Listar Pedidos</span> </a></li>
                <li> <a href="{{route('newpurchase')}}"> <i class="bi bi-circle"></i><span>Adicionar Pedido</span> </a></li>
            </ul>
        </li>

        <li class="nav-item bg-light">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <img src="{{asset('img/icone/under-construction.png')}}" class="mt-4" width="30px" alt="em-contrucao">
                <span class="dropdown-menu-space">Em Constru????o</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="#"> <i class="bi bi-circle"></i><span>Em Breve....</span> </a></li>
                <li> <a href="#"> <i class="bi bi-circle"></i><span>Em Breve....</span> </a></li>
            </ul>
        </li>
  ????</ul>
</aside>