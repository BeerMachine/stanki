<style>              
    .list-header {
        width: 100%;
        position: fixed;
    }
    .search-content span{
        width: 100px;
    }
    .list-header-placeholder {
        height: 220px;
    }
    .list-content {
        margin-top: 10px;
    }
</style>

<div class="list-header">
    <div class="container search-content">
        <div class="row">
            <div class="span6">
                <label>Поиск по модели</label>
                <input type="text" placeholder="модель">
            </div>
            <div class="span6">
                <label>Поиск по параметрам</label>
                <span>группа</span>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <br>
                <span>подгруппа</span>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <br>
                <span>модель</span>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="list-header-placeholder"></div>

<div class="container list-content">
    <table border="1" style="width:100%;">
        <?php for ($i=0; $i<count($stanki); $i++): ?>
            <tr>
                <td><?php print $stanki[$i]['group']; ?></td>
                <td><?php print $stanki[$i]['type']; ?></td>
                <td><?php print $stanki[$i]['year']; ?></td>
                <td><?php print $stanki[$i]['photo']; ?></td>
                <td><?php print $stanki[$i]['price']; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</div>