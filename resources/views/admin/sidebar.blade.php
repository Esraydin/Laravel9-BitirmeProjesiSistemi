
<div class="container-fluid page-body-wrapper">

<!-- partial:/admin/partials/_sidebar.html -->

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('assets')}}/admin/assets/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/admin/evaluation">
                <span class="menu-title">Evaluation</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="/admin/category">
                <span class="menu-title">Categories</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/project">
                <span class="menu-title">Project</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/comment">
                <span class="menu-title">Comment</span>
                <i class="mdi mdi-comment-outline menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.faq.index')}}">
                <span class="menu-title">FAQ</span>
                <i class="mdi mdi-message menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.message.index')}}">
                <span class="menu-title">Messages</span>
                <i class="mdi mdi-message menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/admin/user">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">

                  <div class="border-bottom">
                    <p class="text-secondary">Labels</p>
                  </div>
        <li class="nav-item">
            <a class="nav-link" href="/admin/setting">
                <span class="menu-title">Settings</span>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
        </li>

    </ul>

    </span>
    </li>
    </ul>
</nav>

