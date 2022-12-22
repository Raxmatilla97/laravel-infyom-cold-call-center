
<li class="nav-item">
    <a href="{{ route('qongiroqQilganlars.index') }}"
       class="nav-link {{ Request::is('qongiroqQilganlars*') ? 'active' : '' }}">
        <p>Qo'ng'iroq qilganlarning umumiy ro'yxati</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>O'quv yo'nalishlari</p>
    </a>
</li>


