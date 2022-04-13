@extends('layouts.app')
@section('title')
    Testimonis 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Testimonis</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('testimonis.create')}}" class="btn btn-primary form-btn">Testimoni <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('testimonis.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

