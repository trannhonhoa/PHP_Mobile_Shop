</div>
</main>
</body>
<script src="<?php echo BASE_URL ?>/public/admin/js/jquery-3.5.1.js"></script>
<script src="<?php echo BASE_URL ?>/public/admin/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/admin/js/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo BASE_URL ?>/public/admin/js/script.js"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    CKEDITOR.replace('desc');
</script>
<script>
    $(document).ready(function() {
        thongke();
        var char = new Morris.Area({
            element: 'chart',

            xkey: 'date',
            ykeys: ['order', 'sales', 'quantity'],
            labels: ['Đơn hàng', 'Doanh thu', 'Số lượng ']
        });
        var charD = new Morris.Bar({
            element: 'chartD',

            xkey: 'date',
            ykeys: ['order', 'sales', 'quantity'],
            labels: ['Đơn hàng', 'Doanh thu', 'Số lượng ']
        });
        $('.select-date').change(function() {
            var time = $(this).val();
            console.log(time);
            $.ajax({
                url: "<?php echo BASE_URL ?>/thongke/",
                method: "POST",
                data: {
                    time
                },
                success: function(data) {
                    char.setData(JSON.parse(data));
                    
                }
            })
        });
        function thongke() {
            var text = "365 ngày qua";
            $("#text-date").text(text)
            $.ajax({
                url: "<?php echo BASE_URL ?>/thongke",
                method: "POST",
                dateType: "JSON",
                success: function(data) {
                    char.setData(JSON.parse(data));
                    charD.setData(JSON.parse(data));
                }
            })
        }
    })
</script>

</html>