<script>
    $(document).ready(function () {
        $("#tinhThanh").change(function(){
            let maTinh = $(this).val()
            $.get("{{URL::to('/lay-quan-huyen')}}/"+maTinh,function (data) {						
                let html = ""
                data.quanHuyen.forEach((e)=>{
                        html += `<option value="${e.maqh}">${e.name}</option>`
                    })
                    $("#quanHuyen").html(html)
                }
            );
        })
        $("#quanHuyen").change(function(){
            let maQuan = $(this).val()
            $.get("{{URL::to('/lay-phuong-xa')}}/"+maQuan,function(data){
                let html = ""
                data.phuongXa.forEach((e)=>{
                        html += `<option value="${e.xaid}">${e.name}</option>`
                    })
                $("#phuongXa").html(html)
                
            })
        })
    });
</script>