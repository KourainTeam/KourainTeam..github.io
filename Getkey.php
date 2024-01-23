 <?php
echo '
<div id="registration-form">
    <div class=\'fieldset\'>
        <form id="myForm" action="https://kourainteam.000webhostapp.com/painel2.php" method="post" data-validate="parsley">
            <div class=\'row\'>
                <input type="text" placeholder="Key" name=\'firstname\' id=\'firstname\' value="" style="display: none;" readonly>
            </div>
            <div class=\'row\'>
                <input type="datetime-local" name=\'email\' value="" style="display: none;" readonly>
            </div>
            <input type="submit" value="Register" name="register" id="Register" style="display: none;">
        </form>
    </div>
</div>

<script>
    // Tạo chuỗi ngẫu nhiên dài 10 kí tự
    function generateRandomString(length) {
        let result = \'\';
        const characters = \'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\';
        const charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    // Lấy ngày hiện tại + 1
    function getNextDay() {
        const today = new Date();
        const nextDay = new Date(today);
        nextDay.setDate(today.getDate() + 1);
        return nextDay.toISOString().slice(0, 16);
    }

    // Gán giá trị cho các trường Key và Expiration Time
    document.getElementById(\'firstname\').value = generateRandomString(10);
    document.getElementsByName(\'email\')[0].value = getNextDay();

    // Tìm nút "Register" bằng id
    const registerButton = document.getElementById(\'Register\');

    // Tự động nhấn nút "Register"
    function autoRegister() {
      registerButton.click();
    }

    // Gọi hàm tự động khi trang được tải
    window.onload = function() {
      autoRegister();
    }
</script>
';
?>