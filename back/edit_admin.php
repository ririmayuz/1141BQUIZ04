<!-- 標題：修改管理員權限 -->
<h2 class="ct">修改管理員權限</h2>

<!-- 表單開始，送到 ./api/edit_admin.php 處理，使用 POST 方法 -->
<form action="./api/edit_admin.php" method="post">

    <!-- 表格用來排版輸入欄位 -->
    <table class="all">

        <!-- 管理員帳號 -->
        <tr>
            <td class="tt ct">帳號</td>
            <!-- 輸入文字欄位，name="acc" 會傳送到後端 -->
            <td class="pp"><input type="text" name="acc" id="acc"></td>
        </tr>

        <!-- 管理員密碼 -->
        <tr>
            <td class="tt ct">密碼</td>
            <!-- type="password" 會隱藏輸入內容 -->
            <td class="pp"><input type="password" name="pw" id="pw"></td>
        </tr>

        <!-- 權限選項 -->
        <tr>
            <td class="tt ct">權限</td>
            <td class="pp">
                <!-- 多選 checkbox，name="pr[]" 代表後端會接收到陣列 -->
                <input type="checkbox" name="pr[]" value="1">商品分類與管理<br>
                <input type="checkbox" name="pr[]" value="2">訂單管理<br>
                <input type="checkbox" name="pr[]" value="3">會員管理<br>
                <input type="checkbox" name="pr[]" value="4">頁尾版權區管理<br>
                <input type="checkbox" name="pr[]" value="5">最新消息管理<br>
            </td>
        </tr>
    </table>

    <!-- 表單下方的按鈕區 -->
    <div class="ct">
        <!-- 隱藏欄位，用來存管理員的 id，後端用來辨識要修改哪一筆 -->
        <input type="hidden" name="id" value="">
        <!-- 送出表單 -->
        <input type="submit" value="修改">
        <!-- 重置表單內容 -->
        <input type="reset" value="重置">
    </div>

</form>
