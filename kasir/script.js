function calculateTotal() {
  // Ambil nilai dari input
  var quantity = document.getElementById("quantity").value;
  var price = document.getElementById("price").value;

  // Hitung total
  var total = quantity * price;

  // Tampilkan hasil pada elemen dengan id "result"
  document.getElementById("result").innerHTML =
    "Total Pembelian: Rp" + total.toFixed(2);
}
