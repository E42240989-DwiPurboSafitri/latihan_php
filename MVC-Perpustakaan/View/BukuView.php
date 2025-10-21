<?php
class BukuView {
    public function tampilkan($BukuList) {
        echo "
        <html>
        <head>
            <title>Daftar Buku</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f8f9fa;
                    margin: 40px;
                }
                h2 {
                    color: #333;
                    text-align: center;
                }
                table {
                    border-collapse: collapse;
                    width: 80%;
                    margin: 20px auto;
                    background-color: white;
                    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
                }
                th, td {
                    border: 1px solid #ddd;
                    padding: 10px;
                    text-align: center;
                }
                th {
                    background-color: #012c03ff;
                    color: white;
                }
                tr:nth-child(even) {
                    background-color: #cbfbd9ff;
                }
                tr:hover {
                    background-color: #e9ffe9;
                }
            </style>
        </head>
        <body>
        <h2>Daftar Buku</h2>
        <table>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </tr>";
            
        foreach ($BukuList as $p) {
            echo "<tr>
                    <td>{$p['judul']}</td>
                    <td>{$p['pengarang']}</td>
                    <td>{$p['tahun']}</td>
                  </tr>";
        }
        
        echo "</table></body></html>";
    }
}
?>