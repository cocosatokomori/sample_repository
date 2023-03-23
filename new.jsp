<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<jsp:useBean class="user.UserBean" id="user" scope="session" />
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>顧客管理</title>
<link rel="stylesheet"
    href="${pageContext.request.contextPath}/style.css">
</head>
<body>
    <h1>顧客管理</h1>
    <div class="main">
        <!-- 作成者:森 -->
        <h2>新規登録</h2>
        <form name="form1" action="CustomerServlet" method="post" onsubmit="return funcConfirm()">
            <table border="1">
                <tr>
                    <td class="title">氏名</td>
                    <td><input type="text" name="customer_name" maxlength="20"></td>
                </tr>
                <tr>
                    <td class="title">郵便番号</td>
                    <td><input type="text" name="zip" maxlength="20"></td>
                </tr>
                <tr>
                    <td class="title">住所1</td>
                    <td><input type="text" name="address1" maxlength="100"></td>
                </tr>
                <tr>
                    <td class="title">住所2</td>
                    <td><input type="text" name="address2" maxlength="100"></td>
                </tr>
                <tr>
                    <td class="title">TEL</td>
                    <td><input type="text" name="tel" maxlength="20"></td>
                </tr>
                <tr>
                    <td class="title">FAX</td>
                    <td><input type="text" name="fax" maxlength="20"></td>
                </tr>
                <tr>
                    <td class="title">E-mail</td>
                    <td><input type="text" name="email" maxlength="100"></td>
                </tr>
             </table>
                <p>
                    <button name="state" value="new_confirm">送信</button>
                    <input type="button" value="戻る" onclick="history.back()">
                </p>
        </form>
    </div>
</body>
<script type="text/javascript">
    function funcConfirm() {
        // TODO バリデーションチェック･alertダイアログ処理
        // 空白じゃないかの判断をｉｆ文でチェック
        if (document.form1.customer_name.value == "") {
            alert("氏名は入力必須項目です");
            return false;
        }else if(!document.form1.customer_name.value.match(/^[^\d\s]+$/)){
            alert("氏名に数字、スペースは入力しないでください");
            return false;
        }
        if (document.form1.zip.value == "") {
            alert("郵便番号は入力必須項目です");
            return false;
        }else if(!document.form1.zip.value.match(/^[0-9]{3}-[0-9]{4}$/)){
            alert("郵便番号は-(ハイフン)を含め半角数字3桁と4桁で入力してください");
            return false;
        }
        if (document.form1.address1.value == "") {
            alert("住所1は入力必須項目です");
            return false;
        }else if(!document.form1.address1.value.match(/\S+/)){
            alert("住所1を正しく入力してください");
            return false;
        }
        if(!document.form1.address2.value.match(/\S*/)){
            alert("住所2を正しく入力してください");
            return false;
        }
        if (document.form1.tel.value == "") {
            alert("電話番号は入力必須項目です");
            return false;
        }else if(!document.form1.tel.value.match(/^0[-\d]{8,18}[\d]$/)){
            alert("電話番号は半角数字と-(ハイフン)のみで入力してください");
            return false;
        }
        if(document.form1.fax.value == ""){
            return true;
        }else if(!document.form1.fax.value.match(/^0[-\d]{8,18}[\d]$/)){
            alert("FAX番号は半角数字と-(ハイフン)のみで入力してください");
            return false;
        }
        if (document.form1.email.value == "") {
            alert("E-mailは入力必須項目です");
            return false;
        }else if(!document.form1.email.value.match(/^[\w\.+-]+@[\w\.-]+$/)){
            alert("E-mailは@(アットマーク)を含め半角英数字と記号で入力してください");
            return false;
        }
    }
</script>
</html>
