@extends('website.layouts.dashboard')

@section('pageTitle')
Create Order
@endsection

@section('css')
<link href="{{ asset('website/resources/css/order.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid dashboard-container">
  <div class="row">
    <!-- Start Dashboard -->
    <div class="col-12 col-sm-12 col-md-12">
      <!-- Start Dynamic Content -->
      <div class="dashboard-contents">
        <div class="contents create-order-cont">
          <h1>Create Order</h1>
          <div class="oredr-id float-left">
            Order <span>#{{ $order->slug }}</span>
          </div>
        </div>
        <div>
          <!-- Start Table -->
          <table class="w-100 services-summary mt-3 table d-table">
            <tr class="head">
              <td width="25%">Selected Services</td>
              <td width="25%">Cost/Photo</td>
              <td width="25%">No. of Photo(s)</td>
              <td width="25%">Service(s) Cost</td>
            </tr>
            @foreach ($selectedServices as $service)


            <tr class="table-row" style="display: table-row" id="service-row-{{ $service->name }}">
              <td class="selectedService {{ $service->name }}_selected_service" class="text-left" width="25%"
                data-service-name="{{ $service->name }}" data-service-price="{{ $service->price }}">
                {{ $service->name }}
              </td>

              <!-- service cost -->
              <td class="image-cost" width="25%">${{ $service->price }}</td>

              <!-- photos count -->
              <td class="{{ $service->name }}-photos-no" width="25%" data-service-name="{{ $service->name }}">
                0
              </td>


              <!--  total photos cost  -->
              <td class="service-price" width="25%" id="service-price-{{ $service->name }}"></td>
            </tr>
            @endforeach
            <tr class="head">
              <td colspan="3">Grand Total</td>
              <td colspan="1" id="total-price" class="total-price"></td>
            </tr>
          </table>
          <div id="upload-progress-container">
            <progress id="upload-progress" value="0" max="100"></progress>
        </div>
        
          <!-- End Table -->
          <!-- Service Table -->
          @includeWhen(!empty($selectedServices), 'website.dashboard.freeOrder.modals.service_upload_table')
          <!-- Service Table -->
          
        </div>
      </div>
      <!-- End Dynamic Content -->
    </div>
    <!-- End Dashboard -->
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('website/resources/js/order.js') }}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("select-services-btn").addEventListener("click", function () {
            // Submit the main form
            document.getElementById("mainForm").submit();
            
            // Submit the modal form
            document.getElementById("modalForm").submit();
        });
    });
</script>
@endsection