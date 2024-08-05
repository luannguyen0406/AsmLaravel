<div id="topline">
    <p>Tel: 0345219999 | Mail: Baoviet@gmail.com</p>
    <ul>
        @if (Auth::check())
        <li><a href="">hi , {{Auth::user()->name}}</a></li>
        <!-- Hiển thị liên kết đăng xuất khi người dùng đã đăng nhập -->
        <li>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-link">Đăng xuất</button>
            </form>
        </li>
    @else
        <!-- Hiển thị liên kết đăng nhập và đăng ký khi người dùng chưa đăng nhập -->
        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
        <li><a href="{{ route('register') }}">Đăng ký</a></li>
    @endif
    </ul>
    <br class="clear" />
</div>
