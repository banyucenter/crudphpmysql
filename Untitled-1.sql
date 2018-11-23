SELECT 
produk.nama_produk, 
penjualan.jumlah_penjualan, 
(penjualan.jumlah_penjualan* produk.harga) as jumlah_belanja 
FROM penjualan /*nama tabel pertama */
inner join produk /*nama tabel kedua*/
where 
penjualan.id_produk = produk.id_produk