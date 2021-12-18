<script>
    function themGioHang(maSP, soLuong){
        $.ajax({
            type: "POST",
            url: "{{URL::to('/them-gio-hang')}}",
            data: {idSP: maSP, soLuong: soLuong,_token:"{{ csrf_token() }}"},
            dataType: "dataType",
            success: function (response) {
                let soTrongGio = parseInt($("#soLuongGio").text())
                $("#soLuongGio").text(soTrongGio + soLuong)
            }
        });
    }
</script>
