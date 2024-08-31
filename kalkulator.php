<?php
    class Kalkulator {
        public function menuAwal() {
            echo "\n==================================================\n";
            echo "KALKULATOR PHP                            @rhann7_\n";
            echo "==================================================\n";
            echo "Pilih Opsi:                                       \n";
            echo "[1]: Pertambahan    [3]: Perkalian    [5]: Pangkat\n";
            echo "[2]: Pengurangan    [4]: Pembagian    [6]: Modulus\n";
            echo "--------------------------------------------------\n";
            echo "[7]: Keluar                                       \n";
            echo "--------------------------------------------------\n";
            echo "Pilihan   :   ";
        }

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
        
        public function input() {
            $errorCount = 0;

            do {
                if ($errorCount >= 2) {
                    echo "\nTerlalu banyak kesalahan. Kamu dikeluarkan!!\n";
                    break;
                }

                $this->menuAwal();
                $pilihan = trim(fgets(STDIN));

                if (!is_numeric($pilihan) || $pilihan < 1 || $pilihan > 7) {
                    echo "\n!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
                    echo "Input invalid, pilih opsi antara 1 sampai 7.\n";
                    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n";
                    $errorCount++;
                    continue;
                }
                
                if ($pilihan == 7) {
                    echo "Kamu keluar.\n";
                    break;
                }
                
                echo "Angka 1   :   ";
                $angka1 = trim(fgets(STDIN));
                if (!is_numeric($angka1)) {
                    echo "Input invalid, masukkan angka.\n";
                    $errorCount++;
                    continue;
                }
    
                echo "Angka 2   :   ";
                $angka2 = trim(fgets(STDIN));
                if (!is_numeric($angka2)) {
                    echo "Input Invalid, masukkan angka.\n";
                    $errorCount++;
                    continue;
                }
    
                $hasil = $this->hitung($pilihan, $angka1, $angka2);
                echo "Hasil     :   " . $hasil . "\n";
                $errorCount = 0;
    
            } while (true);
        }
    }

    $kalkulator = new Kalkulator();
    $kalkulator->input();