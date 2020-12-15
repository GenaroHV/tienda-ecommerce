<div class="row">
    <div class="col-3">
      <div class="nav flex-column nav-pills danger" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">SERVICIOS</a>
        {{-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">GALERIA</a> --}}
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">OFERTAS</a>
        {{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">VENTAS</a> --}}
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        @include('dashboard.servicios')
        {{-- @include('dashboard.galeria') --}}
        @include('dashboard.ofertas')
        {{-- @include('dashboard.ventas') --}}
      </div>
    </div>
  </div>
@push('css')
<style>
    .nav-pills>a.active,
    .nav-pills>a.active:focus,
    .nav-pills>a.active:hover {
        color: #fff;
        background-color: #e3342f !important;
    }
    .nav-pills>a.nav-link{
        color: rgba(255, 255, 255, 0.5);
    }
</style>
@endpush
