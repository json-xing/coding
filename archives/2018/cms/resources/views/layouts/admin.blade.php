<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('org/Dashkit-1.1.2')}}/css/theme.min.css">
    <title>Dashkit</title>
</head>
<body>

<!-- MODALS
================================================== -->
<!-- Modal: Members -->
<div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Title -->
                            <h4 class="card-header-title" id="exampleModalCenterTitle">
                                Add a member
                            </h4>

                        </div>
                        <div class="col-auto">

                            <!-- Close -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-header">

                    <!-- Form -->
                    <form>
                        <div class="input-group input-group-flush input-group-merge">
                            <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fe fe-search"></span>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-body">

                    <!-- List group -->
                    <ul class="list-group list-group-flush list my--3">
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Miyah Myles</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Ryu Duke</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Glen Rouse</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-warning">●</span> Busy
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Grace Gross</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Search -->
<div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-body" data-toggle="lists" data-lists-values='["name"]'>

                <!-- Form -->
                <form class="mb-4">
                    <div class="input-group input-group-merge">
                        <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- List group -->
                <div class="my--3">
                    <div class="list-group list-group-flush list">
                        <a href="team-overview.html" class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Airbnb
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a href="team-overview.html" class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Medium Corporation
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Homepage Redesign
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Travels & Time
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Safari Exploration
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="profile-posts.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Dianna Smiley
                                    </h4>

                                    <!-- Status -->
                                    <p class="text-body small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="profile-posts.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Ab Hadley
                                    </h4>

                                    <!-- Status -->
                                    <p class="text-body small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal: Activity -->
<div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Title -->
                <h4 class="modal-title">
                    Notifications
                </h4>

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
                </button>

            </div>
            <div class="modal-body">

                <!-- List group -->
                <div class="list-group list-group-flush my--3">
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Grace Gross</strong> subscribed to you.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- SIDEBAR
================================================== -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo.png')}}" class="navbar-brand-img mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{asset('org/Dashkit-1.1.2')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

     @include('layouts.admin_menu')

    </div> <!-- / .container-fluid -->
</nav>

<div class="main-content">
    <div class="container-fluid">
     @yield('content')
    </div> <!-- / .container-fluid -->
</div> <!-- / .main-content -->

<!-- JAVASCRIPT
================================================== -->

<!-- Libs JS -->
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/jquery/dist/jquery.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/chart.js/dist/Chart.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/chart.js/Chart.extension.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/highlight/highlight.pack.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/flatpickr/dist/flatpickr.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/list.js/dist/list.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/quill/dist/quill.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/dropzone/dist/min/dropzone.min.js"></script>--}}
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/libs/select2/dist/js/select2.min.js"></script>--}}

<!-- Theme JS -->
{{--<script src="{{asset('org/Dashkit-1.1.2')}}/js/theme.min.js"></script>--}}
@include('layouts._hdjs')
<script>
    require(['jquery','bootstrap'])
</script>
</body>
</html>
