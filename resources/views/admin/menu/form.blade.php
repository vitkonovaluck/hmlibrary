<div class="row">
    <div class="col-12 col-lg-6">

        <div class="row">
           <div class="col-12 col-lg-6">
                <label for="">Статус</label>
                <select class="form-control" name="published">
                    @if (isset($menu->id))
                        <option value="0" @if ($menu->published == 0) selected="" @endif>Не опубликовано</option>
                        <option value="1" @if ($menu->published == 1) selected="" @endif>Опубликовано</option>
                    @else
                        <option value="0">Не опубликовано</option>
                        <option value="1">Опубликовано</option>
                    @endif
                </select>
            </div>
            <div class="col-12 col-lg-6">
                <label for="">Порядковий номер</label>
                <input type="number" class="form-control" name="sort" placeholder="Порядковий номер" value="{{$menu->sort ?? ""}}" required>
            </div>

        </div>

        <label for="">Назва меню</label>
        <input type="text" class="form-control" name="name" placeholder="Назва пункту меню" value="{{$menu->name ?? ""}}" required>

        <div class="row">
            <div class="col-12 col-lg-6">
                <label for="">Функція</label>
                <select class="form-control" name="page" id="page" onchange="javascript:reloadLink(this,{{$menu->id}})">
                    <option value="">-- Без функції --</option>
                    @include('admin.menu.function', ['function' => $function])
                </select>
            </div>
            <div class="col-12 col-lg-6">
                <label for="">Значення  </label>
                <select class="form-control" name="link" id="link">
                    <option value="">-- Без значення --</option>
                    @include('admin.menu.link', ['links' => $links])
                </select>
            </div>

        </div>

        <label for="">Родительская категория</label>
        <select class="form-control" name="parent_id">
            <option value="0">-- без родительской категории --</option>
            @include('admin.menu.menu', ['menues' => $menues])
        </select>

        <label for="">Маршрут</label>
        <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$menu->slug}}" readonly="">

    </div>
    <div class="col-12 col-lg-6">
        <label class="form-label" for="inputImage">Зображення</label>

        <img id="menu-image" src="
            @if(LenStr($menu->image)>4)
            {{asset('images/menu/'.$menu->image)}}
            @else
               http://127.0.0.1:8000/img/nophoto.jpg
            @endif

        " width="193" height="134">
        <input id="image" type="hidden" name="image" value="{{$menu->image}}">
            <div class="mb-3">

                <input type="file" name="imagefile"id="inputImage"class="form-control">

            </div>
    </div>
    <div class="col-12">
       <hr />

        <input class="btn btn-primary" type="submit" value="Сохранить">
    </div>
</div>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#inputImage').change(function(){
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#menu-image').attr('src', e.target.result);

        }

        reader.readAsDataURL(this.files[0]);

    });

    $('#image-upload').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#image-input-error').text('');

        $.ajax({
            type:'POST',
            url: "{{ route('image.store') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    $('#image').attr('value',response);
                    this.reset();
                    alert('Малюнок загружено');
                }
            },
            error: function(response){
                $('#image-input-error').text(response.responseJSON.message);
            }
        });
    });

</script>
