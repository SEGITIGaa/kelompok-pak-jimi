<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>isi data</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>

        <div class="form-container">
            <form action="action.php" method="post">
                <table >
                    <tr>
                        <td>
                            <h3>Biodata</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="nama" id="" placeholder="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="usia" id="" placeholder="usia">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="alamat" id="" placeholder="alamat">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <select name="agama" id="agama">
                                <option value="" disabled="disabled" selected="selected">agama</option>
                                <option value="islam"> islam</option>
                                <option value="khatolik">khatolik</option>
                                <option value="protestan">protestan</option>
                                <option value="budha">budha</option>
                                <option value="hindu">hindu</option>
                                <option value="konghucu">konghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <select name="gender" id="gender">
                                <option value="" disabled="disabled" selected="selected">jenis kelamin</option>
                                <option value="pria">pria</option>
                                <option value="wanita">wanita</option>
                            </select>
                        </td>
                    </tr>
                   <tr>
                    <td>
                    <h3>Pendidikan & Prestasi</h3>
                    </td>
                   </tr>
                    <tr>
                        <td>
                            <select name="pendidikan" id="pendidikan">
                                <option value="" disabled="disabled" selected="selected">pendidikan akhir</option>
                                <option value="sma">sma</option>
                                <option value="smp">smp</option>
                                <option value="sd">sd</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="text" name="presrasi" id="" placeholder="prestasi">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit"> submit </button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>

    </body>
</html>
