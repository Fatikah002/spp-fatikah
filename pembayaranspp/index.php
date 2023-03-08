<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Login Admin / Petugas - Aplikasi Pembayaran SPP</title>
</head>
<body>
    <section>
        <div class="form-box">
           <div class="form-value">
            <form action="proses-login-siswa.php" method="post">
                <h2>LOGIN SISWA</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="nisn" required>
                    <label for="">NISN</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="text" name="nis"  required>
                    <label for="">NIS</label>
                </div>
                <div class="form-group mb-2">
                    <button type="submit" class=""> LOGIN </button>
                </div>
                <a href="index2.php"> Login Sebagai Administrator / Petugas </a>
                </div>
            </form>
           </div> 
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>