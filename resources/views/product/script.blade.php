@push('script')
<script>
    function addToCart(id) {
        console.log("Add to cart");
        console.log(id);

        // $.ajax({
        //     type: "POST",
        //     dataType: 'json',
        //     url: route('addItem'),
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     data: { id: id },
        //     contentType: false,
        //     cache: false,
        //     processData:false,
        //     success: function(callback) {
        //         console.log("data");
        //     }
        // });
    }
</script>
@endpush
