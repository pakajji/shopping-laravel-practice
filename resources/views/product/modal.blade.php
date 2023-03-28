<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ตะกร้าสินค้า</h5>
          <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
        </div>
        <div class="modal-body">
            @foreach ($product as $item)
            <div class="card">
                <div class="card-body">
                    {{-- {{$item->product_name}} --}}
                    ผักกาด
                </div>
            </div>
            @endforeach
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" data-bs-dismiss="modal">กลับ</a>
          <a class="btn btn-primary">ชำระเงิน</a>
        </div>
      </div>
    </div>
</div>
