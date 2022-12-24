
<li class="nav-item">
    <a href="{{ route('qongiroqQilganlars.index') }}"
       class="nav-link {{ Request::is('qongiroqQilganlars*') ? 'active' : '' }}">
        <p>Umumiy Clientlar ro'yxati</p>
    </a>
</li>


<li class="nav-item">
   <a href="{{ route('kelganlar') }}"
      class="nav-link {{ Request::is('kelganlar*') ? 'active' : '' }}">
      <p>Kelgan Clientlar</p>
   </a>
</li>

<li class="nav-item">
   <a href="{{ route('kelmaganlar') }}"
      class="nav-link {{ Request::is('kelmaganlar*') ? 'active' : '' }}">
       <p>Kelmagan Clientlar</p>
   </a>
</li>



<li class="nav-item">
    <a href="{{ route('telefon_qilinganlar') }}"
       class="nav-link {{ Request::is('telefon_qilinganlar*') ? 'active' : '' }}">
        <p>Qayta telefron qilingan Clientlar</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('telefon_qilinmaganlar') }}"
       class="nav-link {{ Request::is('telefon_qilinmaganlar*') ? 'active' : '' }}">
        <p>Qayta telefon qilinmagan Clientlar</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>O'quv yo'nalishlari</p>
    </a>
</li>


