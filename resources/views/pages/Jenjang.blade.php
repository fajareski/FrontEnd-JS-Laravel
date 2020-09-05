@extends('layouts.dash')

@section('content')
<body>
        <div class="container" style="margin-top: 50px; margin-left: 300px">
            <div class="row">
                <div class="col-lg-6">
                    <form action="">
                        <h4>Jenjang</h4>
                        <select class="browser-default custom-select" name="jenjang" id="jenjang">
                            <option selected> Pilih Jenjang</option>
                            @foreach ($jenjangs as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                       
                        <h4>Kelas</h4>
                        <select class="browser-default custom-select" name="kelas" id="kelas">
                            
                        </select>
                    </form>
                                   
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function () {
              
                $('#Jenjang').on('change',function(e) {
                  
                 var cat_id = e.target.value;
                 $.ajax({
                        
                       url:"{{ route('subcat') }}",
                       type:"POST",
                       data: {
                           cat_id: cat_id
                        },
                       
                       success:function (data) {
                        $('#kelas').empty();
                        $.each(data.kelas[0].kelas,function(index,kelas){
                             
                            $('#kelas').append('<option value="'+kelas.id+'">'+kelas.name+'</option>');
                        })
                       }
                   })
                });
            });
        </script>
    </body>
@endsection