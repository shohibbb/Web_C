function validateForm() {
  const namaInput = document.getElementById("nama");
  const emailInput = document.getElementById("email");
  const alamatInput = document.getElementById("alamat");

  if (
    namaInput.value === "" ||
    emailInput.value === "" ||
    alamatInput.value === ""
  ) {
    alert("anda harus mengisi data dengan lengkap");
    return false; // Menghentikan pengiriman formulir
  }
  return true; // Lanjutkan pengiriman formulir jika semua input diisi
}
