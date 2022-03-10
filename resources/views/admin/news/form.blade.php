<label for="">Статус</label>

<label for="">Назва</label>
<input type="text" class="form-control" name="news_title" placeholder="Заголовок новини" value="{{$new->news_title ?? ""}}" required>

<label for="">Автор</label>
<input type="text" class="form-control" name="news_author" placeholder="Автор новини" value="{{$new->news_author ?? ""}}" required>

<label for="">Дата</label>
<input class="form-control" type="date" name="created_at" placeholder="Автоматична генерація" value="{{$new->created_at ?? ""}}" required>


<label for="">Текст</label>
<textarea class="form-control" name="news_text" rows="10" cols="70" id="editor"></textarea>

<label for="">Фрейм "%frame%"</label>
<input class="form-control" type="text" name="news_frame" placeholder="Для вставки данних з інтернету" value="{{$new->news_frame ?? ""}}" >

<label for="">Фрейм "%frame%1"</label>
<input type="text" class="form-control" name="news_frame1" placeholder="Для вставки данних з інтернету" value="{{$new->news_frame1 ?? ""}}" required>



<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">


