<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBlog admin panel</title>
    <link rel="shortcut icon" href="{{asset('images/small-logo.png')}}" type="image/x-icon">
    @vite(['resources/css/admin/index.css', 'resources/css/admin/style.css', 'resources/js/admin/script.js'])
</head>

<body>
    <!-- header -->
    <section class="header d-flex px-5 align-items-center justify-content-between">
        <section>
            <a href=""><img src="{{asset('images/large-logo.png')}}" class="logo" alt=""></a>
        </section>
        <section>
            <section class="user-dropdown" x-data="adminDropDown()">
                <span @click.away="visible=false" x-on:click="visible = !visible">Admin <small><i
                            x-bind:class="visible == false ? 'fa-chevron-down' : 'fa-chevron-up'"
                            class="fa"></i></small></span>
                <section x-show="visible" style="display:none;" class="user-drop" x-transition:enter.duration.400ms>
                    <form action="">
                        <button class="logout-btn" type="submit">Logout <i class="px-2 fa fa-sign-out"></i></button>
                    </form>
                </section>
            </section>
        </section>
    </section>
    <!-- content -->
   <section class="content container">
        <span class="fs-5 content-title">Over view</span>
        <section class="overview-box w-100">
            <!-- users over view -->
            <section class="overview-card border p-3">
                <!-- over view box title -->
                <section class="ovb-title">
                    <h5><i class="fa fa-user" aria-hidden="true"></i> Users</h5>
                </section>
                <!-- over view box content -->
                <section class="ovb-content">
                    <section class="d-flex mt-3 justify-content-between">
                        <span>Count of user : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Count of admin : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Total : </span>
                        <span>0</span>
                    </section>
                </section>
            </section>
            <!-- Comments over view -->
            <section class="overview-card border p-3">
                <!-- over view box title -->
                <section class="ovb-title">
                    <h5><i class="fa fa-comment" aria-hidden="true"></i> Comments</h5>
                </section>
                <!-- over view box content -->
                <section class="ovb-content">
                    <section class="d-flex mt-3 justify-content-between">
                        <span>Approved : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Hidden : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Total : </span>
                        <span>0</span>
                    </section>
                </section>
            </section>
            <!-- Views over view -->
            <section class="overview-card border p-3">
                <!-- over view box title -->
                <section class="ovb-title">
                    <h5><i class="fa fa-eye" aria-hidden="true"></i> Views</h5>
                </section>
                <!-- over view box content -->
                <section class="ovb-content">
                    <section class="d-flex mt-3 justify-content-between">
                        <span>Today : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>This week : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Total : </span>
                        <span>0</span>
                    </section>
                </section>
            </section>
             <!--Other -->
            <section class="overview-card border p-3">
                <!-- over view box title -->
                <section class="ovb-title">
                    <h5><i class="fa fa-info-circle" aria-hidden="true"></i> Other</h5>
                </section>
                <!-- over view box content -->
                <section class="ovb-content">
                    <section class="d-flex mt-3 justify-content-between">
                        <span>Posts : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Categories : </span>
                        <span>0</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Tags : </span>
                        <span>0</span>
                    </section>
                </section>
            </section>
        </section>
    </section>




    <!-- footer -->

    <section class="footer">
        <section class="footer-menus d-flex justify-content-center">
            <a href="" title="Home"><i class="fa fa-home" aria-hidden="true"></i></a><a href="" title="Websetting"><i class="fa fa-cog" aria-hidden="true"></i></a>
            <a href="" title="Home"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href="" title="Users"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="" title="Posts"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
            <a href="tags/index.html" title="Tags"><i class="fa fa-tags" aria-hidden="true"></i></a>
            <a href="" title="Comments"><i class="fa fa-comment" aria-hidden="true"></i></a>
            <a href="" title="Categories"><i class="fa fa-folder" aria-hidden="true"></i></a>
        </section>
    </section>
</body>

</html>
