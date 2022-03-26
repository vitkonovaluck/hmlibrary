
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

<label for="">Назва меню</label>
<input type="text" class="form-control" name="menu_name" placeholder="Назва пункту меню" value="{{$menu->menu_name ?? ""}}" required>

<label for="">Функція</label>
<select class="form-control" name="menu_page" id="menu_page" onchange="javascript:reloadLink(this);" onload="javascript:reloadLink(this);">
    <option value="">-- Без функції --</option>
    @include('admin.menu.function', ['function' => $function])
</select>

<label for="">Значення</label>
<select class="form-control" name="menu_link" id="menu_link">
    <option value="">-- Без значення --</option>
    @include('admin.menu.link', ['link' => $link])
</select>

<label for="">Порядковий номер</label>
<input type="text" class="form-control" name="menu_sort" placeholder="Заголовок категории" value="{{$menu->menu_sort ?? ""}}" required>

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.menu.menu', ['menues' => $menues])
</select>

<label for="">Маршрут</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{""}}" readonly="">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
