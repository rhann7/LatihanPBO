<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Kalkulator</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .calculator {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            form {
                display: flex;
                flex-direction: column;
            }
            input, select {
                margin-bottom: 10px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            button {
                padding: 10px;
                border: none;
                border-radius: 5px;
                background-color: #007bff;
                color: #fff;
                font-size: 16px;
            }
            button:hover {
                background-color: #0056b3;
            }
            .result {
                margin-top: 20px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #fafafa;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="calculator">
            <h1>PHP Kalkulator</h1>
            <form method="post">
                <input type="number" name="angka1" placeholder="Angka 1" required>
                <input type="number" name="angka2" placeholder="Angka 2" required>
                <select name="operasi" required>
                    <option value="1">Pertambahan</option>
                    <option value="2">Pengurangan</option>
                    <option value="3">Perkalian</option>
                    <option value="4">Pembagian</option>
                    <option value="5">Pangkat</option>
                    <option value="6">Modulus</option>
                </select>
                <button type="submit" name="submit">Hitung</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                class Kalkulator {
                    public function hitung($pilihan, $angka1, $angka2) {
                        switch ($pilihan) {
                            case 1:
                                return $angka1 + $angka2;
                            case 2:
                                return $angka1 - $angka2;
                            case 3:
                                return $angka1 * $angka2;
                            case 4:
                                if ($angka2 == 0) {
                                    return "Tidak bisa membagi dengan nol.";
                                }
                                return $angka1 / $angka2;
                            case 5:
                                return $angka1 ** $angka2;
                            case 6:
                                return $angka1 % $angka2;
                            default:
                                return "Invalid";
                        }
                    }
                }

                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];
                $pilihan = $_POST['operasi'];

                $kalkulator = new Kalkulator();
                $hasil = $kalkulator->hitung($pilihan, $angka1, $angka2);

                echo "<div class='result'>Hasil: " . $hasil . "</div>";
            }
            ?>
        </div>
    </body>
</html>