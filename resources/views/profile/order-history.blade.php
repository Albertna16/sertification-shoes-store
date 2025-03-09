@extends('layouts.main')

@section('main')
<main>
    <section class="pt-sm-7">
        <div class="container pt-3 pt-xl-5">
            <div class="row">
                @include('profile.partials.sidebar')

                <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                    <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                        <h1 class="h3 mb-0">Histori order</h1>

                        <button class="btn btn-primary d-lg-none flex-shrink-0 ms-2" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar"
                            aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i> Menu
                        </button>
                    </div>

                    <div class="card bg-transparent p-0">
                        <div class="card-header bg-transparent border-bottom p-0 pb-3 mb-3">
                            <h6 class="mb-0">Order yang belum dibayar</h6>
                        </div>

                        @if ($orders->isEmpty())
                            <div class="d-flex justify-content-center w-100 mt-5">
                                <img src="{{ asset('images/empty.png') }}" alt="empty" class="image-empty ">
                            </div>
                        @else
                        @foreach ($orders as $item)
                        <div class="card-body px-0 py-0">
                            <div class="row align-items-xl-center">
                                <div class="col-12">
                                    <div class="mb-3 d-flex align-items-center justify-content-between gap-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <p class="mb-0 text-dark fw-semibold">ORDER ID {{ $item->id }}</p>
                                            <div class="badge
                              @if ($item->status == 'paid') text-bg-success
                              @elseif($item->status == 'processed') text-bg-secondary
                              @elseif($item->status == 'shipped') text-bg-info
                              @elseif($item->status == 'delivered') text-bg-primary
                              @elseif($item->status == 'canceled') text-bg-danger @endif
                              text-capitalize">
                                                {{ $item->status }}
                                            </div>
                                        </div>
                                        @if ($item->status != 'delivered')
                                            <button class="btn btn-primary" @if ($item->status != 'shipped') disabled @endif
                                                onclick="acceptDelivered({{ $item->id }})">
                                                Pesanan Diterima
                                            </button>
                                        @endif

                                    </div>

                                    <h5 class="mb-1">{{ 'Rp ' . number_format($item->total_price, 0, ',', '.') }}</h5>
                                    <p class="mb-3 text-dark" style="font-size: 0.875rem">Produk yang dibeli:</p>
                                    @foreach ($item->orderItems as $orderItem)
                                    <div class="row align-items-xl-center mb-2">
                                        <div class="col-5 col-md-2">
                                            <div class="bg-light p-2 rounded-2">
                                                <img src="{{ asset('storage/image-filepond/' . $orderItem->product->images->first()->image_url) }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="col-7 col-md-10">
                                            <div class="row g-3 g-sm-4 d-flex align-items-center">
                                                <div class="col-xl-8">
                                                    <h6 class="mb-1 text-primary">
                                                        {{ $orderItem->product->name }}
                                                    </h6>
                                                    <ul class="nav nav-divider small align-items-center mt-1">
                                                        <li class="nav-item">Ukuran: {{ $orderItem->stock->size->name }}
                                                        </li>
                                                        <li class="nav-item">Jumlah: {{ $orderItem->quantity }} pcs</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 d-flex align-items-center justify-content-between gap-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <p class="mb-0 text-dark fw-semibold">ORDER ID {{ $item->id }}</p>
                                                <div class="badge
            @if ($item->status == 'paid') text-bg-success
            @elseif($item->status == 'processed') text-bg-secondary
            @elseif($item->status == 'shipped') text-bg-info
            @elseif($item->status == 'delivered') text-bg-primary
            @elseif($item->status == 'canceled') text-bg-danger @endif
            text-capitalize">
                                                    {{ $item->status }}
                                                </div>
                                            </div>
                                            <div>
                                                @if ($item->status != 'delivered')

                                                                            {{-- <button class="btn btn-primary" @if ($item->status != 'shipped') disabled
                                                                                    @endif onclick="acceptDelivered({{ $item->id }})">
                                                                                    Pesanan Diterima
                                                                                </button> --}}
                                                                            @endif
                                                                            <!-- Tombol Download PDF -->
                                                                            <a href="{{ route('order.download-pdf', $item->id) }}"
                                                                                class="btn btn-success">
                                                                                <i class="fas fa-download"></i> Download PDF
                                                                            </a>

                                                                            @if($item->status == 'delivered')
                                                                                <button class="btn btn-success" data-bs-toggle="modal"
                                                                                    data-bs-target="#rating-{{ $orderItem->product->id }}"
                                                                                    @if(!$orderItem->product->feedback->isEmpty()  )
                                                                                        onclick="onStar({{ @$orderItem->product->feedback[0]->rating / 20 }}, {{ $orderItem->product->id }})"
                                                                                    @endif
                                                                                    >

                                                                                        {{ !$orderItem->product->feedback->isEmpty()  ? 'Lihat' : 'Beri' }} Feedback
                                                                                </button>

                                                                            @endif

                                                                            <div class="modal fade" id="rating-{{ $orderItem->product->id }}" data-bs-backdrop="static"
                                                                                data-bs-keyboard="false" tabindex="-1"
                                                                                aria-labelledby="ratingLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h1 class="modal-title fs-5" id="ratingLabel">
                                                                                                Beri Feedback  </h1>
                                                                                            <button type="button" class="btn-close"
                                                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>

                                                                                        <div class="modal-body">

                                                                                            <form id="formFeedback">
                                                                                                <div class="mb-3">
                                                                                                    <i onclick="onStar(1,{{ $orderItem->product->id }},{{ !$orderItem->product->feedback->isEmpty()}})" id="star1-{{ $orderItem->product->id }}" class="bi bi-star-fill feedback-star-{{ $orderItem->product->id }} fs-5"></i>
                                                                                                    <i onclick="onStar(2,{{ $orderItem->product->id }},{{ !$orderItem->product->feedback->isEmpty()}})" id="star2-{{ $orderItem->product->id }}" class="bi bi-star-fill feedback-star-{{ $orderItem->product->id }} fs-5"></i>
                                                                                                    <i onclick="onStar(3,{{ $orderItem->product->id }},{{ !$orderItem->product->feedback->isEmpty()}})" id="star3-{{ $orderItem->product->id }}" class="bi bi-star-fill feedback-star-{{ $orderItem->product->id }} fs-5"></i>
                                                                                                    <i onclick="onStar(4,{{ $orderItem->product->id }},{{ !$orderItem->product->feedback->isEmpty()}})" id="star4-{{ $orderItem->product->id }}" class="bi bi-star-fill feedback-star-{{ $orderItem->product->id }} fs-5"></i>
                                                                                                    <i onclick="onStar(5,{{ $orderItem->product->id }},{{ !$orderItem->product->feedback->isEmpty()}})" id="star5-{{ $orderItem->product->id }}" class="bi bi-star-fill feedback-star-{{ $orderItem->product->id }} fs-5"></i>
                                                                                                </div>
                                                                                                {{-- @dd(isset($orderItem->product->feedback) ,$orderItem->product->feedback) --}}
                                                                                                <input type="hidden" name="rating" id="rating-{{ $orderItem->product->id }}" >
                                                                                                <div class="mb-3">
                                                                                                    <textarea name="ulasan" id="ulasan-{{ $orderItem->product->id }}" class="form-control" rows="3" placeholder="Beri Ulasan"
                                                                                                        @if(!$orderItem->product->feedback->isEmpty()) disabled @endif>{{ @$orderItem->product->feedback[0]->ulasan ?? '' }}</textarea>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Close</button>
                                                                                            @if(@$orderItem->product->feedback->isEmpty())
                                                                                                <button onclick="onSubmitFeedback({{ $orderItem->product->id }},{{$item->id}})" type="button"
                                                                                                class="btn btn-primary">Konfirmasi</button>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach

                                                            </div>
                                                        </div>

                                                        <hr>
                                                    </div>
                                                    @endforeach
                                                @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
    <script>
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        function acceptDelivered(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Apakah Anda yakin telah menerima pesanan ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, terima!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/order/accept-delivered/" + id,
                        type: 'POST',
                        data: {
                            _token: CSRF_TOKEN
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: response.message,
                                    icon: 'success',
                                    timer: 3000,
                                    timerProgressBar: true,
                                }).then((result) => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: response.message,
                                    icon: 'error',
                                    timer: 3000,
                                    timerProgressBar: true,
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            Swal.fire({
                                title: 'Gagal!',
                                text: xhr.responseText,
                                icon: 'error',
                                timer: 3000,
                                timerProgressBar: true,
                            });
                        }
                    });
                }
            });
        }



        const onStar = (row,id,mode = null) => {
            console.log(row,id,mode)
            if(mode){
                return;
            }
            console.log(mode)
            document.querySelectorAll(`.feedback-star-${id}`).forEach(ele => {
                ele.classList.remove('text-warning')
            });
            for (let index = 0; index < row; index++) {
                document.getElementById(`star${index + 1}-${id}`).classList.add('text-warning')
            }

            document.getElementById(`rating-${id}`).value = parseFloat(row) || 0
        }

        const onSubmitFeedback = (id,order_id) => {
            const data = {
                _token: CSRF_TOKEN,
                order_id:order_id,
                id : id,
                rating : document.getElementById(`rating-${id}`).value,
                ulasan : document.getElementById(`ulasan-${id}`).value
            }

            const url = '/feedback'
            $.ajax({
                type:'POST',
                url:url,
                data,
                success:function(response)
                {
                    if(response.success){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.message,
                            icon: 'success',
                            timer: 3000,
                            timerProgressBar: true,
                        }).then((result) => {
                            location.reload();
                        });
                    }else{
                        Swal.fire({
                            title: 'Gagal!',
                            text: response.message,
                            icon: 'error',
                            timer: 3000,
                            timerProgressBar: true,
                        });
                    }
                },
                error:function(err)
                {
                    console.log(err)
                }
            })
        }


    </script>
@endpush
