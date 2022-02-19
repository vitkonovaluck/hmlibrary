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

<label for="">Назва</label>
@if (isset($menu->id))
    <input type="text" class="form-control" name="menu_name" placeholder="Назва меню" value="{{$menu->id}}" required>
@else
    <input type="text" class="form-control" name="menu_name" placeholder="Назва меню" value="" required>
@endif

<label for="">Ссилка</label>
@if (isset($menu->id))
    <input class="form-control" type="text" name="menu_slug" placeholder="Автоматична генерація" value="" readonly="">
@else
    <input class="form-control" type="text" name="menu_slug" placeholder="Автоматична генерація" value="" readonly="">
@endif

<label for="">Початкова категорія</label>
<select class="form-control" name="parent_id">
    <option value="0">-- головна категорія --</option>
    @include("admin.menu.partials.menus", ['menu' => $menu])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
