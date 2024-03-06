<!DOCTYPE html>

<head>
    <title>Input Data Tanpa Reload</title>
    <link rel="stylesheet" href="./style/style.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
    <h1>Membuat Input data ke database tanpa reload dengan Ajax jquery<br />Ronald</h1>

    <div class="wrap">
        <!-- The form is wrapped in a div with the class "wrap" for styling purposes -->
        <form method="post" class="form-user">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a class="tombol-simpan">Simpan</a></td>
                </tr>
            </table>
        </form>

        <div class="tampildata"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".tombol-simpan").click(function() {
                var data = $('.form-user').serialize();
                $.ajax({
                    type: 'POST',
                    url: "aksii.php",
                    data: data,
                    success: function() {
                        $('.tampildata').load("tampil.php");
                    }
                });
            });
        });
    </script>
</body>

</html>