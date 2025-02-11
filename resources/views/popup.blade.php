@extends('layouts.layout')

<section class="popup visually-hidden">
    <div class="popup__wrapper">
        <h2 class="popup__title">Редактирование атрибута</h2>
        <form class="form popup__form" action="{{ route('update.attr') }}" method="post">
            @csrf
            @method('patch')
            <input type="hidden" name="src_attr_id_new" id="src_attr_id_new">
            <input type="hidden" name="dwh_attr_id_new" id="dwh_attr_id_new">
            <h3 class="form__caption">Источник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">src_name</td>
                    <td class="table__td" id="src_name"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_name_new" id="src_name_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_type</td>
                    <td class="table__td" id="src_type"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_type_new" id="src_type_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_descr</td>
                    <td class="table__td" id="src_descr"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_descr_new" id="src_descr_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_comments</td>
                    <td class="table__td" id="src_comments"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_comments_new" id="src_comments_new">
                    </td>
                </tr>
            </table>
            <h3 class="form__caption">Приемник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">dwh_name</td>
                    <td class="table__td" id="dwh_name"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_name_new" id="dwh_name_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_type</td>
                    <td class="table__td" id="dwh_type"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_type_new" id="dwh_type_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_descr</td>
                    <td class="table__td" id="dwh_descr"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_descr_new" id="dwh_descr_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_pk</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_pk" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_pk_new" id="dwh_is_pk_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_mandatory</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_mandatory" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_mandatory_new" id="dwh_is_mandatory_new">
                    </td>
                </tr>
            </table>
            <button class="btn form__submit" type="submit">Изменить</button>
        </form>
        <button class="popup__toggle"><span class="visually-hidden">Закрыть форму</span></button>
    </div>
</section>
