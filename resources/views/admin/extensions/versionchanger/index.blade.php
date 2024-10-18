@extends('layouts.admin')
<?php 
    // Define extension information.
    $EXTENSION_ID = "versionchanger";
    $EXTENSION_NAME = "Minecraft Version Changer";
    $EXTENSION_VERSION = "1.1.1";
    $EXTENSION_DESCRIPTION = "Minecraft Version Changer allows you to adjust your minecraft servers version instantly.";
    $EXTENSION_ICON = "/assets/extensions/versionchanger/icon.jpg";
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
    @yield('extension.description')<?php
  $id = 5;

  $response = cache()->remember('product-' . $id, 30 * 60, function () use ($id) {
    return @file_get_contents("https://products.rjns.dev/api/products/{$id}", false, stream_context_create([
      'http' => [
        'timeout' => 1
      ]
    ]));
  });

  if ($response === FALSE) {
    $version = 'Unknown';
    $providers = [];
  } else {
    $data = json_decode($response, true);

    $version = $data['product']['version'];
    $providers = array_values($data['providers']);
  }

  $nonceIdentifier = '6d5e9c281c51605c5048785633476044';
  $nonceIdentifierWithoutReplacement = '%%__NONCE' . '__%%';
?>

<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="box {{ $version !== 'Unknown' ? $version !== "1.1.1" ? 'box-danger' : 'box-primary' : 'box-primary' }}">
      <div class="box-header with-border">
        <h3 class="box-title"><i class='bx bx-git-repo-forked' ></i> Information</h3>
      </div>
      <div class="box-body">
        <p>
          Thank you for purchasing <b>Minecraft Version Changer</b>! You are currently using version <code>1.1.1</code> (latest version is <code>{{ $version }}</code>).
          If you have any questions or need help, please visit our <a href="https://rjansen.dev/discord" target="_blank">Discord</a>.
          <b>{{ $nonceIdentifier === $nonceIdentifierWithoutReplacement ? "This is an indev version of the product!" : "" }}</b>
        </p>

        <div class="row" style="margin-top: 10px;">
          @foreach ($providers as $provider)
            <div class="col-md-6">
              <a href="{{ $provider['link'] }}" target="_blank" class="btn btn-primary btn-block"><i class='bx bx-store'></i> {{ $provider['name'] }}</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class='bx bxs-info-square'></i> Banner</h3>
      </div>
      <div class="box-body">
        <img src="/extensions/versionchanger/versionchanger_banner.jpg" class="img-rounded img-responsive" alt="Banner" style="max-width: 600px; margin: 0 auto;">
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class='bx bx-cog'></i> Configuration</h3>
      </div>
      <div class="box-body">
        <form method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="mcvapi_url">MCVAPI URL</label>
            <input type="text" placeholder="https://versions.mcjars.app" name="mcvapi_url" id="mcvapi_url" class="form-control" value="{{ $blueprint->dbGet('versionchanger', 'mcvapi_url') ?: 'https://versions.mcjars.app' }}">
    
            <label for="mcvapi_key" style="margin-top: 10px">MCVAPI API Key</label>
            <input type="text" placeholder="Can be left empty" name="mcvapi_key" id="mcvapi_key" class="form-control" value="{{ $blueprint->dbGet('versionchanger', 'mcvapi_key') ?: '' }}">

            <label for="mcvapi_types" style="margin-top: 10px">MCVAPI Types (Reorderable)</label>
            <textarea name="mcvapi_types" id="mcvapi_types" class="form-control" rows="4" style="resize: none">{{ $used }}</textarea>

            <label for="mcvapi_types_available" style="margin-top: 10px">Available MCVAPI Types</label>
            <textarea name="mcvapi_types_available" id="mcvapi_types_available" class="form-control" rows="4" disabled style="resize: none">{{ $types }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
