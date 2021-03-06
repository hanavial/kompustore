@extends('layouts.app')

@section('title','Kompustore Penjualan')
@section('content')
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
          <div class="page-header">
            <h4 class="page-title">Penjualan</h4>
            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
              <ul class="quick-links">
                <li><a href="#">ICE Market data</a></li>
              </ul>
              <ul class="quick-links ml-auto">
                <li><a href="#">Settings</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Watchlist</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12">
            <div class="page-header-toolbar">
              <div class="sort-wrapper">
                <button type="button" class="btn btn-primary toolbar-item">New</button>
              </div>
            </div>
        </div>
      </div>
@endsection
