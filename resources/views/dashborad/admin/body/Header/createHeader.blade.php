@extends('dashborad.admin.Layouts.app')
@section('title', ' العنوان')
@section('conetnt')
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    العنوان
                </div>
                @include('dashborad.admin.body.Header.table-header')
            </div>
        </div>
    </main>
@endsection
