<nav class="nav flex-column  bg-special-black" style="min-height: 900px;"
  id="sidebar-dashboard">
  <img src="{{ asset('assets/img/surveyasia.png') }}" alt="" width="166px"
    height="30px" class="mx-auto mt-3 mb-5">
  <a href="{{ route('admin') }}" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-dashboard.svg') }}" alt=""
        width="16px" height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">Dashboard</span>
    </div>
  </a>
  <a href="#" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-transaksi.svg') }}" alt=""
        width="16px" height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">Transaksi</span>
    </div>
  </a>
  <a href="#" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-question-bank.svg') }}" alt=""
        width="16px" height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">Question Bank</span>
    </div>
  </a>
  <a href="#" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-template.svg') }}" alt=""
        width="16px" height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">Template</span>
    </div>
  </a>
  <a href="{{ route('admin.users.index') }}" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-user.svg') }}" alt="" width="16px"
        height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">User</span>
    </div>
  </a>
  <a href="{{ route('admin.news.index') }}" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-blog.svg') }}" alt="" width="16px"
        height="16px">
      <span class="ms-3 text-sidebar" aria-current="page" href="#">News</span>
    </div>
  </a>

  <hr style="color: #DFE0EB;">

  <a href="#" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-settings.svg') }}" alt=""
        width="16px" height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">Settings</span>
    </div>
  </a>
  <a href="#" class="text-decoration-none">
    <div class="d-flex align-items-center px-4 py-3">
      <img src="{{ asset('assets/img/vec-subscription.svg') }}" alt=""
        width="16px" height="16px">
      <span class="ms-3 text-sidebar" aria-current="page">Subscription</span>
    </div>
  </a>
</nav>

</nav>
