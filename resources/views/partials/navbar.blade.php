<nav>
    <div class="sidebar-top">
        <span class="shrink-btn">
            <i class='bx bx-chevron-left'></i>
        </span>
        <img src="{{ '/' }}img/iqislogo.png" class="logo" alt="">
        <h3 class="hide">ALUMNI SMKIT IQIS</h3>
    </div>

    <div class="search">
        <i class='bx bx-search'></i>
        <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
        <ul>
            <li class="tooltip-element" id="Tab">
                <a href="/">
                    <div class="icon">
                        <i class='bx bx-tachometer'></i>
                        <i class='bx bxs-tachometer'></i>
                    </div>
                    <span class="link hide">Dashboard</span>
                </a>
            </li>
            <li class="tooltip-element" id="siswaTab">
                <a href="/siswa">
                    <div class="icon">
                        <i class='bx bx-folder'></i>
                        <i class='bx bxs-folder'></i>
                    </div>
                    <span class="link hide">Data Alumni Siswa</span>
                </a>
            </li>
            <li class="tooltip-element" id="guruTab">
                <a href="{{ route('guru.index') }}">
                    <div class="icon">
                        <i class='bx bx-message-square-detail'></i>
                        <i class='bx bxs-message-square-detail'></i>
                    </div>
                    <span class="link hide">Guru</span>
                </a>
            </li>
            <li class="tooltip-element" id="tentangsekolahTab">
                <a href="/tentangsekolah">
                    <div class="icon">
                        <i class='bx bx-bar-chart-square'></i>
                        <i class='bx bxs-bar-chart-square'></i>
                    </div>
                    <span class="link hide">Tentang Sekolah</span>
                </a>
            </li>
            <div class="tooltip">
                <span class="show">Dashboard</span>
                <span>Data Alumni Siswa</span>
                <span>Guru</span>
                <span>Tentang Sekolah</span>
            </div>
        </ul>

        <h4 class="hide">Shortcuts</h4>

    </div>

    <div class="sidebar-footer">
        <a href="#" class="account tooltip-element" data-tooltip="0">
            <i class='bx bx-user'></i>
        </a>
        <div class="admin-user tooltip-element" data-tooltip="1">
            <div class="admin-profile hide">
                <img src="{{ '/' }}img/face-1.png" alt="">
                <div class="admin-info">
                    <h3>Agung</h3>
                    <h5>Founder</h5>
                </div>
            </div>
            <a href="/login" class="log-out">
                <i class='bx bx-log-out'></i>
            </a>
        </div>
        <div class="tooltip">
            <span class="show">Agung</span>
            <span>Logout</span>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentPath = window.location.pathname;

        currentPath = currentPath.replace(/^\//, '');

        var activeTab = document.getElementById(currentPath + 'Tab');

        if (activeTab) {
            activeTab.classList.add('active-tab');
        }
    });
</script>
