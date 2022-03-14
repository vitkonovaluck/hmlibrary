
<div class="row g-3 align-items-center">
<div class="col-3">
    <label for="">Назва</label>
</div>
<div class="col-9">
    <input type="text" class="form-control" name="news_title" placeholder="Заголовок новини" value="{{$news->title}}" required>
</div>
</div>

<div class="row g-3 align-items-center">
<div class="col-3">
<label for="">Автор</label>
</div>
<div class="col-9">
    <input type="text" class="form-control" name="news_author" placeholder="Автор новини" value="" required>
</div>
</div>

<div class="row g-3 align-items-center">
<div class="col-3">
    <label for="">Дата</label>
    <input class="form-control" type="hidden" name="posted_at" id="dttm" placeholder="Автоматична генерація" value="" required>
</div>
<div class="col-5">
    <input class="form-control" type="date" name="created_date" id="dt" placeholder="Автоматична генерація" value="" required>
</div>
<div class="col-4">
    <input class="form-control" type="time" name="created_time" id="tm" placeholder="Автоматична генерація" value="" required>
</div>
</div>

<div class="row g-3 align-items-center">
<label for="">Текст</label>
<textarea class="form-control" name="news_text" rows="15" cols="90" id="editor"></textarea>
</div>

<div class="row g-3 align-items-center">
<div class="col-3">
    <label for="">Фрейм "%frame%"</label>
</div>
<div class="col-9">
    <input class="form-control" type="text" name="news_frame" placeholder="Для вставки данних з інтернету" value="" >
</div>
</div>

<div class="row g-3 align-items-center">
<div class="col-3">
    <label for="">Фрейм "%frame%1"</label>
</div>
<div class="col-9">
    <input type="text" class="form-control" name="news_frame1" placeholder="Для вставки данних з інтернету" value="" required>
</div>
</div>


<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">


</div>
