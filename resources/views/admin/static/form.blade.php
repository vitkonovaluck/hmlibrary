
<div class="row g-3 align-items-center">
    <div class="col-lg-3 col-12">
        <label for="">Назва </label>
    </div>
    <div class="col-lg-9 col-12">
        <input type="text" class="form-control" name="name" placeholder="Назва сторінки" value="{{$statics->name ?? ''}}" required>
    </div>
</div>


<div class="row g-3 align-items-center">
    <label for="">Текст</label>
    <textarea class="form-control" name="text" rows="15" cols="90" id="editor">{{$statics->text ?? ''}}</textarea>
</div>

<div class="row g-3 align-items-center">
    <div class="col-3">
        <label for="">Фрейм "%frame%"</label>
    </div>
    <div class="col-9">
        <input class="form-control" type="text" name="frame" placeholder="Для вставки данних з інтернету" value="{{$statics->frame ?? ''}}" >
    </div>
</div>

<div class="row g-3 align-items-center">
    <div class="col-3">
        <label for="">Фрейм "%frame%1"</label>
    </div>
    <div class="col-9">
        <input type="text" class="form-control" name="frame1" placeholder="Для вставки данних з інтернету" value="{{$statics->frame1 ?? ''}}">
    </div>
</div>


<hr />

<input class="btn btn-primary" type="submit" value="Зберегти">

