<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post" action="">
        <input type="number" name="num1" step="any" required> 
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" step="any" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil input dari formulir
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Validasi input
        if (is_numeric($num1) && is_numeric($num2)) {
            // Proses perhitungan
            switch ($operation) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    // Menangani pembagian dengan nol
                    if ($num2 == 0) {
                        $result = 'Error: Pembagian dengan nol!';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = 'Operasi tidak valid!';
                    break;
            }
            echo "<h2>Hasil: $result</h2>";
        } else {
            echo "<h2>Error: Input tidak valid!</h2>";
        }
    }
    ?>
</body>
</html>
