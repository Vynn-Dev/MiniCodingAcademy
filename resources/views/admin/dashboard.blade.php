@extends('admin.layout')

@section('page_title', 'Dashboard')

@section('content')
<div class="space-y-8">
    <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-slate-500">Total Services</p>
                    <p class="mt-4 text-3xl font-semibold text-slate-900">{{ $services_count ?? 6 }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-cyan-50 text-cyan-600 text-xl">
                    🛠️
                </div>
            </div>
            <p class="mt-4 text-sm text-slate-500">Active services currently available in the catalog.</p>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-slate-500">Total Products</p>
                    <p class="mt-4 text-3xl font-semibold text-slate-900">{{ $products_count ?? 3 }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-emerald-50 text-emerald-600 text-xl">
                    📦
                </div>
            </div>
            <p class="mt-4 text-sm text-slate-500">Products available for visitors and customers.</p>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-slate-500">Current Admin</p>
                    <p class="mt-4 text-3xl font-semibold text-slate-900">{{ session('admin_name') ?? 'Admin' }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-slate-100 text-slate-700 text-xl">
                    👤
                </div>
            </div>
            <p class="mt-4 text-sm text-slate-500">Administrator currently signed in to manage content.</p>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-slate-500">Quick Actions</p>
                    <p class="mt-4 text-3xl font-semibold text-slate-900">Ready</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-amber-50 text-amber-600 text-xl">
                    ⚡
                </div>
            </div>
            <a href="{{ route('admin.services.index') }}" class="mt-4 inline-flex text-sm font-semibold text-cyan-600 hover:text-cyan-700">Manage services →</a>
            <a href="{{ route('admin.products.index') }}" class="mt-2 inline-flex text-sm font-semibold text-cyan-600 hover:text-cyan-700">Manage products →</a>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-3">
        <section class="lg:col-span-2 rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-sm font-medium text-slate-500">Welcome back,</p>
                    <h2 class="mt-2 text-2xl font-semibold text-slate-900">Your admin dashboard is ready.</h2>
                </div>
                <span class="inline-flex rounded-3xl bg-cyan-100 px-4 py-2 text-sm font-semibold text-cyan-700">Live overview</span>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-50 p-5">
                    <p class="text-sm text-slate-500">Recent updates</p>
                    <p class="mt-3 text-xl font-semibold text-slate-900">9 content updates</p>
                </div>
                <div class="rounded-3xl bg-slate-50 p-5">
                    <p class="text-sm text-slate-500">Pending review</p>
                    <p class="mt-3 text-xl font-semibold text-slate-900">2 items</p>
                </div>
            </div>

            <div class="mt-8 overflow-hidden rounded-3xl bg-slate-50 p-5">
                <p class="text-sm font-medium text-slate-500">Activity summary</p>
                <div class="mt-4 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-3xl bg-white p-4 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.16em] text-slate-500">Updates</p>
                        <p class="mt-3 text-2xl font-semibold text-slate-900">7</p>
                    </div>
                    <div class="rounded-3xl bg-white p-4 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.16em] text-slate-500">Feedback</p>
                        <p class="mt-3 text-2xl font-semibold text-slate-900">4</p>
                    </div>
                    <div class="rounded-3xl bg-white p-4 shadow-sm">
                        <p class="text-xs uppercase tracking-[0.16em] text-slate-500">New visitors</p>
                        <p class="mt-3 text-2xl font-semibold text-slate-900">122</p>
                    </div>
                </div>
            </div>
        </section>

        <aside class="space-y-6">
            <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Latest items</p>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs text-slate-600">Updated</span>
                </div>
                <ul class="mt-5 space-y-4 text-sm text-slate-700">
                    <li class="rounded-3xl bg-slate-50 p-4">New product added to the course list.</li>
                    <li class="rounded-3xl bg-slate-50 p-4">Product inventory refreshed.</li>
                    <li class="rounded-3xl bg-slate-50 p-4">Admin profile updated.</li>
                </ul>
            </div>

            <div class="rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200/70">
                <h3 class="text-sm font-medium text-slate-500">Actions</h3>
                <div class="mt-4 space-y-3">
                    <a href="{{ route('admin.services.index') }}" class="block rounded-2xl bg-cyan-600 px-4 py-3 text-sm font-semibold text-white hover:bg-cyan-700">View services</a>
                    <a href="{{ route('admin.products.index') }}" class="block rounded-2xl bg-slate-100 px-4 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-200">View products</a>
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
