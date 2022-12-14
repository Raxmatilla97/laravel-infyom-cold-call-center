<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('qongiroqQilganlars.index') }}"
       class="nav-link {{ Request::is('qongiroqQilganlars*') ? 'active' : '' }}">
        <p>Qongiroq Qilganlars</p>
    </a>
</li>


