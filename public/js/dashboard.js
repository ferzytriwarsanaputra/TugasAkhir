const togglerBtn = document.querySelector(".toggler-btn");
const toggleSidebarBtn = document.getElementById("toggleSidebar");
const wrapper = document.getElementById("wrapper");
const sidebar = document.getElementById("sidebar");

// Fungsi toggle sidebar
function toggleSidebar() {
  wrapper.classList.toggle("collapsed");
  sidebar.classList.toggle("collapsed");
}

// Event listener tombol toggle
if (togglerBtn) {
  togglerBtn.addEventListener("click", toggleSidebar);
}
if (toggleSidebarBtn) {
  toggleSidebarBtn.addEventListener("click", toggleSidebar);
}

// Atur margin-left khusus untuk halaman tertentu
document.addEventListener("DOMContentLoaded", function () {
  const main = document.querySelector('.main');
  const currentUrl = window.location.pathname;

  const halamanTanpaSidebar = [
    '/kuis/',
    '/petunjuk/',
    '/dashboard-siswa/nilai',
    '/petunjuk-evaluasi/',
    '/evaluasi/mulai/'
  ];

  const harusTanpaSidebar = halamanTanpaSidebar.some(url => currentUrl.includes(url));

  if (harusTanpaSidebar && main) {
    wrapper.classList.add("collapsed");
    sidebar.classList.add("collapsed");
    main.style.marginLeft = '0';
  }
});