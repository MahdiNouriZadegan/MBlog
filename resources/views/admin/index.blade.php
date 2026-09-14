@extends('admin.layouts.app')

@section('title')
    MBlog admin home
@endsection

@section('content')
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
                        <span>{{ $users->where('permission', 'user')->count() }}</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Count of admin : </span>
                        <span>{{ $users->where('permission', 'admin')->count() }}</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Total : </span>
                        <span>{{ $users->count() }}</span>
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
                        <span>{{$comments->where('status', 'approved')->count()}}</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Hidden : </span>
                        <span>{{$comments->where('status', 'hidden')->count()}}</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Total : </span>
                        <span>{{$comments->count()}}</span>
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
                        <span>{{$views}}</span>
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
                        <span>{{$posts}}</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Categories : </span>
                        <span>{{$categories}}</span>
                    </section>
                    <hr class="my-2">
                    <section class="d-flex justify-content-between">
                        <span>Tags : </span>
                        <span>{{$tags}}</span>
                    </section>
                </section>
            </section>
        </section>
    </section>
@endsection
