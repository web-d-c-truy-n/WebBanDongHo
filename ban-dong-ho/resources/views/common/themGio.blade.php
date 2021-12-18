<script>
    function themGioHang(maSP, soLuong) {
        $.ajax({
            type: "POST",
            url: "{{ URL::to('/them-gio-hang') }}",
            data: {
                idSP: maSP,
                soLuong: soLuong,
                _token: "{{ csrf_token() }}"
            },
            dataType: "dataType",
            xhrFields: {
                withCredentials: true
            },
            success: function(rs) {                                
                $("#soLuongGio").text(rs.count)
            },
            error: function(rs){                                
                let js = JSON.parse(rs.responseText)
                $("#soLuongGio").text(js.count)
            }
        });
    }
</script>
