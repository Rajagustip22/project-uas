@extends('admin.layout.app')
@section('content')
<section class="vh-100" style="background-color: #c182fc;">
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="{{ asset('admi/img/Raja1.jpg') }}"
            class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3">Raja Gusti Pangesti</h5>
          <p class="text-muted mb-1">Frontend</p>
          <p class="text-muted mb-4">STT Terpadu Nurul Fikri</p>
        </div>
      </div>
    <div class="card mb-4">
        <div class="card-body text-center">
          <img src="{{ asset('admi/img/nia.jpg') }}"
            class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3">Thaniea Luqizahwa</h5>
          <p class="text-muted mb-1">Backend</p>
          <p class="text-muted mb-4">STT Terpadu Nurul Fikri</p>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="{{ asset('admi/img/Restu1.jpg') }}"
            class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3">Restu Pradeva Adiansyah</h5>
          <p class="text-muted mb-1">Login</p>
          <p class="text-muted mb-4">STT Terpadu Nurul Fikri</p>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="{{ asset('admi/img/Rizky.jpg') }}"
            class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3">Muhamad Rizky Fadilah</h5>
          <p class="text-muted mb-1">Role</p>
          <p class="text-muted mb-4">STT Terpadu Nurul Fikri</p>
        </div>
      </div>
  </section>
@endsection