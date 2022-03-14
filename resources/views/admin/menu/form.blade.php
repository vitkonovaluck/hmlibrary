
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

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$menu->menu_name ?? ""}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.menu.menu', ['menues' => $menues])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
