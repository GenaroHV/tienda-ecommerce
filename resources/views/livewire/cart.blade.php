<div class="d-flex align-items-center">
    <a href="{{ route('checkout') }}" class="nav-link">
        <i class="fa fa-shopping-cart fa-lg"></i>
        <span class="badge badge-danger">{{ $cart->amount() }}</span>
    </a>
</div>
