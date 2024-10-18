@extends('layouts.admin')
<?php 
    // Define extension information.
    $EXTENSION_ID = "slate";
    $EXTENSION_NAME = "Slate";
    $EXTENSION_VERSION = "1.0";
    $EXTENSION_DESCRIPTION = "Admin theming, done right.";
    $EXTENSION_ICON = "/assets/extensions/slate/icon.jpg";
    $EXTENSION_WEBSITE = "[website]";
    $EXTENSION_WEBICON = "[webicon]";
?>
@include('blueprint.admin.template')

@section('title')
    {{ $EXTENSION_NAME }}
@endsection

@section('content-header')
    @yield('extension.header')
@endsection

@section('content')
    @yield('extension.config')
    @yield('extension.description')<div class="row">

  <!-- Color preview -->
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="box">
      <div class="box-body">
        <div class="col-xs-6 cbox ov-h bg"><u class="c-bg">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-fg"><u class="c">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-0"><u class="c-0">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-1"><u class="c-1">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-2"><u class="c-2">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-3"><u class="c-3">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-4"><u class="c-4">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-5"><u class="c-5">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-6"><u class="c-6">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-7"><u class="c-7">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-8"><u class="c-8">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-9"><u class="c-9">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-10"><u class="c-10">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-11"><u class="c-11">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-12"><u class="c-12">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-13"><u class="c-13">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-14"><u class="c-14">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-15"><u class="c-15">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-16"><u class="c-16">Hello, world!</u></div>
        <div class="col-xs-6 cbox ov-h bg-17"><u class="c-17">Hello, world!</u></div>
      </div>
    </div>
  </div>

  <!-- Button box -->
  <div class="col-xs-12 col-md-6 col-lg-4">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-xs-6 col-md-6 col-lg-4 text-center">
            <button class="btn btn-gray" style="width:100%; margin-bottom: 10px">Button</button>
          </div>
          <div class="col-xs-6 col-md-6 col-lg-4 text-center">
            <button class="btn btn-primary" style="width:100%; margin-bottom: 10px">Primary</button>
          </div>
          <div class="col-xs-6 col-md-6 col-lg-4 text-center">
            <button class="btn btn-warning" style="width:100%; margin-bottom: 10px">Warning</button>
          </div>
          <div class="col-xs-6 col-md-6 col-lg-4 text-center">
            <button class="btn btn-danger" style="width:100%; margin-bottom: 10px">Danger</button>
          </div>
          <div class="col-xs-6 col-md-6 col-lg-4 text-center">
            <button class="btn btn-success" style="width:100%; margin-bottom: 10px">Success</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
