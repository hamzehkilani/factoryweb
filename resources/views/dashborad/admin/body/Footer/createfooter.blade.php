@extends('dashborad.admin.Layouts.app')
@section('title',' بيانات الفوتر')
     @section('conetnt')
     <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    بيانات الفوتر
                </div>
                <livewire:footertable />
            </div>
        </div>
    </main>
 @endsection
   
       