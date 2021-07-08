<script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup',function () {
            var _keyword =$(this).val();
                $.ajax({
                    url : "{{ route('words.search') }}",
                    data: {
                        keyword : _keyword
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $(".search-result").html('<li class="list-group-item">Loading ...</li>');
                    },
                    success: function(res) {
                        var _html = '';
                        $.each(res.result.data,function(index,data) {
                            _html += '<li class="list-group-item"><a href="'+res.href+'/'+data.id+'">'+data.vocabulary+'</a></li>'
                        });
                        $(".search-result").html(_html);
                        if (res.success) {
                            $(".pagination").hide();
                            if (res.result.data.length == 0) {
                                $(".search-result").html('<li class="list-group-item">Not Found !!!</li>');
                            }
                        } else {
                            $(".pagination").show();
                        }
                    }
                })
        })
    });
</script>
