@extends('dashborad.admin.Layouts.app')
@section('title', 'الرئيسية')
@section('conetnt')
    <main>
        <div class="container-fluid px-4 mt-5">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    بيانات الفوتر
                </div>
                <livewire:footertable />
            </div>
        </div>

        <div class="container-fluid px-4 mt-5">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    بيانات الاتصال
                </div>
                <livewire:contacttable />
            </div>
        </div>

        <div class="container-fluid px-4 mt-5">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    بيانات الهيدر
                </div>
                @include('dashborad.admin.body.Header.table-header')
            </div>
        </div>
        <div class="container-fluid px-4 mt-5">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    بيانات من نحن
                </div>
                <livewire:aboutustable />
            </div>
        </div>
    </main>

@endsection


