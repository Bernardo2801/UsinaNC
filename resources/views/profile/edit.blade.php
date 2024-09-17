@extends('layouts.main')

@section('title', 'Usina Novacap')

@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @can('access')
                <div class="p-4 sm:p-8 bg-slate-50 dark:bg-slate-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            @endcan

            <div class="p-4 sm:p-8 bg-slate-50 dark:bg-slate-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            @can('access')
                <div class="p-4 sm:p-8 bg-slate-50 dark:bg-slate-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            @endcan
        </div>
    </div>

@endsection
